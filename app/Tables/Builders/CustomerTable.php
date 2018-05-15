<?php

namespace App\Tables\Builders;

use App\Customer;
use LaravelEnso\VueDatatable\app\Classes\Table;

class CustomerTable extends Table
{
    protected $templatePath = __DIR__.'/../Templates/customers.json';

    public function query()
    {
        return Customer::select(\DB::raw(
            'customers.id as "dtRowId", customers.name, customers.phone,
                customers.email, customers.is_active'));
    }
}
