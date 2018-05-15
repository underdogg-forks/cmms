<?php

namespace App\Http\Controllers\Customer;

use App\Customer;
use App\Forms\Builders\CustomerForm;
use App\Http\Controllers\Controller;
use App\Http\Requests\ValidateCustomerRequest;
use LaravelEnso\Core\app\Classes\ProfileBuilder;

class CustomerController extends Controller
{

    public function create(CustomerForm $form)
    {
        return ['form' => $form->create()];
    }

    public function store(ValidateCustomerRequest $request)
    {
        $customer = Customer::create($request->all());

        return [
            'message' => __('The customer was created!'),
            'redirect' => 'customers.edit',
            'id' => $customer->id,
        ];
    }

    public function show(Customer $customer)
    {
        (new ProfileBuilder($customer))->set();

        return ['customer' => $customer];
    }

    public function edit(Customer $customer, CustomerForm $form)
    {
        return ['form' => $form->edit($customer)];
    }

    public function update(ValidateCustomerRequest $request, Customer $customer)
    {
        $customer->update($request->all());

        return ['message' => __(config('enso.labels.savedChanges'))];
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();

        return [
            'message' => __(config('enso.labels.successfulOperation')),
            'redirect' => 'customers.index',
        ];
    }
}
