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
          'img' => 'mimes:jpg,jpeg,png,gif|max:10048|',
            'name'=>'required|unique:product',
           
           'publisher'=>'required',
           'unit_price'=>'required|integer',
            
        
            'img' => 'required|mimes:jpg,jpeg,png,gif|max:10048',
            'description'=>'required'   

        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'Vui lòng nhập tên sản phẩm',
 
            'publisher.required'=>'Vui lòng nhập nhà sản xuất',
            'unit_price.required'=>'Vui lòng nhập giá sản phẩm',
            'unit_price.integer'=>'Giá sản phẩm không đúng định dạng',
            
           
           'img.required'=>'Vui lòng chọn ảnh',
            'img.mimes' => 'Chỉ chấp nhận hình thẻ với đuôi .jpg .jpeg .png .gif',
           'img.max' => 'Hình thẻ giới hạn dung lượng không quá 10M',
           
            'description.required'=>'Vui lòng nhập mô tả sản phẩm',
            
        ];
    }
}