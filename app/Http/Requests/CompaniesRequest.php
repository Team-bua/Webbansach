<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompaniesRequest extends FormRequest
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
            'name' => 'required|unique:companies|regex:/(^[\pL0-9 ]+$)/u',
            'email' => 'required|email',
            'address' => 'required',
            'phone' => 'required|max:10',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Bạn chưa nhập tên',
            'name.unique' => 'Tên nhà xuất bản đã tồn tại',
            'name.regex' => 'Tên nhà xuất bản không được phép có ký tự đặc biệt',
            'email.required' => 'Bạn chưa nhập email',
            'email.email' => 'Không đúng định dạng email',
            'address.required' => 'Bạn chưa nhập địa chỉ',
            'phone.required' => 'Bạn chưa nhập số điện thoại',    
            'phone.max' => 'Điện thoại chỉ có 10 số' 
        ];
    }
}
