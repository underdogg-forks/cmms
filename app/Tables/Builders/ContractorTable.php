<?php

namespace App\Tables\Builders;

use App\Contractor;
use LaravelEnso\VueDatatable\app\Classes\Table;

class ContractorTable extends Table
{
    protected $templatePath = __DIR__.'/../Templates/contractors.json';

    public function query()
    {
        return Contractor::select(\DB::raw(
            'contractors.id as "dtRowId", contractors.name as "name", contractors.phone,
                contractors.email, contractors.is_active'));
    }
}
