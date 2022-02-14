<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
        return [
            'id' => 'required|integer|min:1',
            'name' => 'required|string|min:1',
            'description' => 'required|string|min:1',
            'price' => 'required|integer|min:1',
            'amount' => 'required|double|gt:0',
            'unit' => 'required|string|min:1',
            'categoryId' => 'required|integer|min:1',
        ];
    }
}
