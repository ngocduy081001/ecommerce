<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
        alert()->success('Thành công', config('message.post_success'));
        return [
            'name' => 'required|unique:App\Models\Category,name',
            'slug' => 'required|unique:App\Models\Category,slug',
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
