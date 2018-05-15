<?php

namespace App\Http\Controllers\WorkOrder;

use App\Tables\Builders\WorkOrderTable;
use App\Http\Controllers\Controller;
use LaravelEnso\VueDatatable\app\Traits\Excel;
use LaravelEnso\VueDatatable\app\Traits\Datatable;

class WorkOrderTableController extends Controller
{
    use Datatable, Excel;

    protected $tableClass = WorkOrderTable::class;
}
