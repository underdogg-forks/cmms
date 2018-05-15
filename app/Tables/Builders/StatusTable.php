<?php

namespace App\Tables\Builders;

use App\Status;
use LaravelEnso\VueDatatable\app\Classes\Table;

class StatusTable extends Table
{
    protected $templatePath = __DIR__.'/../Templates/statuses.json';

    public function query()
    {
        return Status::select(\DB::raw(
            'statuses.id as "dtRowId", statuses.name, statuses.color'));
    }
}
