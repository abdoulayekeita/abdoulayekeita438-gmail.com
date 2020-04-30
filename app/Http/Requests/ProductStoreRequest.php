<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductStoreRequest extends FormRequest
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
            'name' => 'required|string',
            'price ' => 'required',
            'isPriceNegotiate' => 'required',
            'isPossibleToChange' => 'required',
            'description' => 'required|string',
            'subCategoryProduct_id' => 'required|integer|exists:subCategoryProducts,id',
        ];
    }
}
