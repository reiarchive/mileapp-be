<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PackageRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        if ($this->isMethod('put') || $this->isMethod('post')) {
            return [
                'transaction_id' => 'required|string',
                'customer_name' => 'required|string',
                'customer_code' => 'required|string',
                'transaction_amount' => 'required|numeric',
                'transaction_discount' => 'required|numeric',
                'transaction_additional_field' => 'nullable|string',
                'transaction_payment_type' => 'required|string',
                'transaction_state' => 'required|string',
                'transaction_code' => 'required|string',
                'transaction_order' => 'required|integer',
                'location_id' => 'required|string',
                'organization_id' => 'required|integer',
                'created_at' => 'required|date',
                'updated_at' => 'required|date',
                'transaction_payment_type_name' => 'required|string',
                'transaction_cash_amount' => 'required|numeric',
                'transaction_cash_change' => 'required|numeric',
                'customer_attribute' => 'required|array',
                'connote' => 'required|array',
                'connote_id' => 'required|string',
                'origin_data' => 'required|array',
                'destination_data' => 'required|array',
                'koli_data' => 'required|array',
                'custom_field' => 'required|array',
                'currentLocation' => 'required|array',
            ];
        }

        return [
            'transaction_id' => 'sometimes|string',
            'customer_name' => 'sometimes|string',
            'customer_code' => 'sometimes|string',
            'transaction_amount' => 'sometimes|numeric',
            'transaction_discount' => 'sometimes|numeric',
            'transaction_additional_field' => 'nullable|string',
            'transaction_payment_type' => 'sometimes|string',
            'transaction_state' => 'sometimes|string',
            'transaction_code' => 'sometimes|string',
            'transaction_order' => 'sometimes|integer',
            'location_id' => 'sometimes|string',
            'organization_id' => 'sometimes|integer',
            'created_at' => 'sometimes|date',
            'updated_at' => 'sometimes|date',
            'transaction_payment_type_name' => 'sometimes|string',
            'transaction_cash_amount' => 'sometimes|numeric',
            'transaction_cash_change' => 'sometimes|numeric',
            'customer_attribute' => 'sometimes|array',
            'connote' => 'sometimes|array',
            'connote_id' => 'sometimes|string',
            'origin_data' => 'sometimes|array',
            'destination_data' => 'sometimes|array',
            'koli_data' => 'sometimes|array',
            'custom_field' => 'sometimes|array',
            'currentLocation' => 'sometimes|array',
        ];

    }
}