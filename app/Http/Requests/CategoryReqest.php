<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CategoryReqest extends FormRequest
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
            'name' => ['required', 'unique:App\Models\Category,name,' . $this->id],
            'slug' => ['required', 'unique:App\Models\Category,slug,' . $this->id],
            'parent' => ['required', request('parent') == '0' ? '' : 'exists:App\Models\Category,id']
        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute là bắt buộc',
            'unique' => ':attribute đã tồn tại',
            'exists' => ':attribute không tồn tại'
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'Tên danh mục',
            'slug' => 'Đường dẫn',
            'parent' => 'Thứ tự'
        ];
    }
}
