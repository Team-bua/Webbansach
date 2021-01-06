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
            'img' => 'mimes:jpg,jpeg,png,gif|max:2048|',
            'name'=>'required|unique:product',
            'cate'=>'required',
            'publisher'=>'required',
            'unit_price'=>'required|integer',
            'promotion_price'=>'required|integer',
            'imgs[]' => 'max:2',
            'img' => 'required|mimes:jpg,jpeg,png,gif|max:2048',
            'description'=>'required'   

        ];
    }
    public function messages()
    {
        return [
            'name.unique'=>'Tên sản phẩm đã tồn tại',
            'name.required'=>'Vui lòng nhập tên sản phẩm',
            'cate.required'=>'Vui lòng Chọn loại sản phẩm',
            'publisher.required'=>'Vui lòng nhập nhà sản xuất',
            'unit_price.required'=>'Vui lòng nhập giá sản phẩm',
            'unit_price.integer'=>'Giá sản phẩm không đúng định dạng',
            'promotion_price.required'=>'Vui lòng nhập % giảm giá',
            'promotion_price.integer'=>'Giá giảm không đúng định dạng',
            'img.required'=>'Vui lòng chọn ảnh',
            'img.mimes' => 'Chỉ chấp nhận hình thẻ với đuôi .jpg .jpeg .png .gif',
            'img.max' => 'Hình thẻ giới hạn dung lượng không quá 2M',
            'imgs[].max' => 'Ảnh chi tiết không quá 2 tệp',
            'description.required'=>'Vui lòng nhập mô tả sản phẩm',
            
        ];
    }
}