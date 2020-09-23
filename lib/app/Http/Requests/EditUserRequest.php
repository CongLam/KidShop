<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditUserRequest extends FormRequest
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
            ///xử lý loại trừ id hiện tại khi set trùng tên, để có thể không thay đổi tên mà ấn submit luôn
            //$this->segment(4): vị trí thứ 4 trong url tính từ admin-> (id)     ShopDienThoai/admin/category/edit/9
            'email'=>'unique:tbl_users,email,'.$this->segment(4).',id',
            'password'=>'required|min:6',
            'repassword'=>'required|same:password',
            'email'=>'required',
            'level'=>'required',
        ];
    }

    public function messages(){
        return[
            'email.unique'=>'Tên Email đã tồn tại!',
            'email.required'=>'Tên Email không được để trống',
            'level.required'=>'Level không được để trống',
            'repassword.same'=>'Mật khẩu xác nhận không khớp!',
            'repassword.required'=>'Xác nhận mật khẩu không được để trống',
            'password.required'=>'Mật khẩu không được để trống',
            'password.min'=>'Mật khẩu phải tối thiểu là 6 kí tự!',
        ];
    }
}
