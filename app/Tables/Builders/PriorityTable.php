<?php

namespace App\Tables\Builders;

use App\Priority;
use LaravelEnso\VueDatatable\app\Classes\Table;

class PriorityTable extends Table
{
    protected $templatePath = __DIR__.'/../Templates/priorities.json';

    public function query()
    {
        return Priority::select(\DB::raw(
            'priorities.id as "dtRowId", priorities.name, priorities.color'));
    }
}
