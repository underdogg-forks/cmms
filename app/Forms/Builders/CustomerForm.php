<?php

namespace App\Forms\Builders;

use App\Customer;
use LaravelEnso\FormBuilder\app\Classes\Form;

class CustomerForm
{
    private const TemplatePath = __DIR__.'/../Templates/customer.json';

    private $form;

    public function __construct()
    {
        $this->form = new Form(self::TemplatePath);
    }

    public function create()
    {
        return $this->form->create();
    }

    public function edit(Customer $customer)
    {

        return $this->form->edit($customer);
    }
}