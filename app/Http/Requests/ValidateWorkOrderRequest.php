<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class ValidateWorkOrderRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $workorder = $this->route('workorders');

        return [
            'is_active' => 'boolean',
            'subject' => 'required|max:50',
	    'description' => 'required|max:10000',
            'customer_id' => 'required|exists:customers,id',
            'contractor_id' => 'required|exists:contractors,id',
            'status_id' => 'required|exists:statuses,id',
            'priority_id' => 'required|exists:priorities,id',
        ];
    }
}
