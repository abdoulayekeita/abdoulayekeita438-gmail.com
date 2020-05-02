<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostStoreRequest extends FormRequest
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
            'item_images' => 'required',
            'price' => 'required',
            'isPriceNegotiate' => 'boolean',
            'isPossibleToChange' => 'boolean',
            'description' => 'required|string',
            'sub_category_id' => 'required|integer|exists:sub_categorys,id',
        ];
    }
}
