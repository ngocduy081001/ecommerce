<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name' => ['required', 'unique:App\Models\Product,name,' . $this->id],
            'slug' => ['required', 'unique:App\Models\Product,slug,' . $this->id],          
            'description' => ['required'],
            'detail' => ['required'],
            'price_default' => ['required', 'numeric'],
            'price.*' => ['required', 'numeric'],
            'price_sale' => ['numeric', 'gt:price'],
            'stock.*' => ['required','alpha_num'],
            'stock_default' => ['required','alpha_num'],
            'image.*' => ['required'],
            'category_id' => ['required', 'exists:App\Models\Category,id'],
        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute là bắt buộc',
            'unique' => ':attribute đã tồn tại',
            'exists' => ':attribute không tồn tại',
            'image' => ':attribute không phải là ảnh',
            'alpha_num' => ':attribute không phải là số',
            'mimes' => ':attributes phải là kiểu png , jpg'
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'Tên danh mục',
            'slug' => 'Đường dẫn',
            'alt'  => 'Mô tả ảnh',
            'description' => 'Mô tả sản phẩm',
            'detail' => 'Chi tiết sản phẩm',
            'price' => 'Giá sản phẩm',
            'price_sale' => 'Giá giảm sản phẩm',
            'stock' => 'Số lượng kho',
            'thumb' => 'Ảnh thumb',
            'image' => 'Ảnh đại diện',
            'category_id' => 'Danh mục sản phẩm'
        ];
    }
}
