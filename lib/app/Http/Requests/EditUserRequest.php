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
            'email'=>'unique:tbl_users,email,'.$this->segment(4).',id'
        ];
    }

    public function messages(){
        return[
            'email.unique'=>'Tên danh mục đã bị trùng!'
        ];
    }
}
