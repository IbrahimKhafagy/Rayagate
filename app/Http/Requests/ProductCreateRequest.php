<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductCreateRequest extends FormRequest
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
            'name' => 'required|unique:products',
            'price' => 'required|numeric|regex:/^\d+(\.\d{1,2})?$/|min:0',
            'quantity' => 'required|integer|min:0',
            'description' => 'nullable|string',
            'categories' => 'array'
        ];

    }
    public function messages()
    {
        return [
            'name.required' => 'The product name is required.',
            'name.unique' => 'The product name must be unique.',
            'price.required' => 'The price is required.',
            'price.numeric' => 'The price must be a valid number.',
            'price.regex' => 'The price must be a valid decimal with up to two decimal places.',
            'price.min' => 'The price must be at least 0.',
            'quantity.required' => 'The quantity is required.',
            'quantity.integer' => 'The quantity must be a valid integer.',
            'quantity.min' => 'The quantity must be at least 0.',
        ];
    }
}
