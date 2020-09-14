<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddUserRequest extends FormRequest
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
            //kiem tra trung email
            'email'=>'unique:tbl_users,email',
            'email' => 'required|max:255',
            'password' => 'required|min:5'
        ];
    }

    public function messages(){
        return[
            'email.unique'=>'Tên email đã được đăng ký!',
            'email.max'=>'Email quá dài!',
            'password.min' => 'Password quá ngắn, tối thiểu 5 ký tự!',
        ];
    }
}
