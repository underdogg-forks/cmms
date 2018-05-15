<?php

namespace App\Http\Controllers\Customer;

use App\Customer;
use App\Http\Controllers\Controller;
use LaravelEnso\Select\app\Traits\OptionsBuilder;

class CustomerSelectController extends Controller
{
    use OptionsBuilder;

    protected $model = Customer::class;

    protected $queryAttributes = ['name', 'email', 'phone'];
}
