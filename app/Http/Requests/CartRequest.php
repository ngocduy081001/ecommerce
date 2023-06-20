<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CartRequest extends FormRequest
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
            'product' => 'required|exists:product,id',
            'color' => 'required|exists:color,id',
            'size' => 'required|exists:size,id',
        ];
    }
    public function messages()
    {
        return [
            'required' => ':attribute là bất buộc',
            'exists' => ':attribute không tồi tại'
        ];
    }

    public function attributes()
    {
        return [
            'product' => 'Sản phẩm',
            'color' => 'Màu sắc',
            'size' => 'Kích thước',
        ]; 
    }
}
