<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class ValidateCustomerRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $user = $this->route('customers');
        $emailUnique = Rule::unique('customers', 'email');
        $emailUnique = (request()->getMethod() === 'PATCH')
            ? $emailUnique->ignore($user->id)
            : $emailUnique;

        return [
            'name' => 'required|max:50',
            'description' => 'required|max:50',
            'is_active' => 'boolean',
            'phone' => 'max:30',
            'email' => [
                'email',
                'required',
                $emailUnique,
            ],
        ];
    }
}
