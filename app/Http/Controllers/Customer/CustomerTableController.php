<?php

namespace App\Http\Controllers\Customer;

use App\Tables\Builders\CustomerTable;
use App\Http\Controllers\Controller;
use LaravelEnso\VueDatatable\app\Traits\Excel;
use LaravelEnso\VueDatatable\app\Traits\Datatable;

class CustomerTableController extends Controller
{
    use Datatable, Excel;

    protected $tableClass = CustomerTable::class;
}
