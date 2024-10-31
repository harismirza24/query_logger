<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
			'customer_name' => 'required|string',
			'business_partner_name' => 'required|string',
			'product_name' => 'required|string',
			'product_number' => 'required|string',
			'total_amount' => 'required|string',
			'status' => 'required|string',
        ];
    }
}
