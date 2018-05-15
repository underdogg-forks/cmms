<?php

namespace App\Http\Controllers\Status;

use App\Tables\Builders\StatusTable;
use App\Http\Controllers\Controller;
use LaravelEnso\VueDatatable\app\Traits\Excel;
use LaravelEnso\VueDatatable\app\Traits\Datatable;

class StatusTableController extends Controller
{
    use Datatable, Excel;

    protected $tableClass = StatusTable::class;
}
