<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'email' => 'required|email|unique:App\Models\User,email,'. $this->id,
            'name' => 'required|string',
            'password' => 'required|min:8|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[@!$#%]).*$/',
            'password_cf' => 'required|same:password',
            'avatar' => 'image'
        ];
    }

    public function attributes()
    {
        return [
            'email' => 'Địa chỉ email ',
            'name' => 'Tên người dùng',
            'password' => 'Mật khẩu',
            'password_cf' => 'Mật khẩu',
            'avatar' => 'Ảnh đại diện'
        ];
    }

    public function messages()
    {
        return[
            'required' => ':attribute là trường bắt buộc',
            'email'    => ':attribute không đúng định đạng email',
            'unique'  => ':attribute đã tồn tại',
            'string' =>  ':attribute không là một chuõi',
            'min' => ':attribute có độ dài tối thiểu :min',
            'regex' => ':attribute phải có chữ thường, chữ hoa, số và ký tự đặc biệt',
            'same' => ' không trùng khớp',
            'image' => ':attibute không phải là ảnh'
        ];
    }
}
