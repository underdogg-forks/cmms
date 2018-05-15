<?php

namespace App\Http\Controllers\Contractor;

use App\Tables\Builders\ContractorTable;
use App\Http\Controllers\Controller;
use LaravelEnso\VueDatatable\app\Traits\Excel;
use LaravelEnso\VueDatatable\app\Traits\Datatable;

class ContractorTableController extends Controller
{
    use Datatable, Excel;

    protected $tableClass = ContractorTable::class;
}
