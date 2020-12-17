<?php

namespace App\Repositories;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductRepository
{
    /**
     * Get member collection paginate.
     *
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function getAll()
    {
        return Product::orderBy('created_at', 'desc')->paginate(10);
    }

    /**
     * create a member.
     *
     * @param  \App\Http\Requests\ProductRequest $request
     * @param  \App\Models\Product $product
     * @return void
     */
    public function create(Request $request)
    {
       //kiểm tra file tồn tại
       $name="";
       if($request->hasfile('img'))
       {
           $file = $request->file('img');
           $name=time().'_'.$file->getClientOriginalName();
           $destinationPath=public_path('images/product'); //project\public\image\cars, //public_path(): trả về đường dẫn tới thư mục public
           $file->move($destinationPath, $name); //lưu hình ảnh vào thư mục public/image
       }
       $product = new Product();
       $product->name=$request->input('name');
       $product->id_type=$request->input('cate');
       //$product->id_user=Auth::user()->username();
       $product->unit_price=$request->input('unit_price');
       $product->promotion_price=$request->input('promotion_price');
       $product->description=$request->input('description');
       $product->image=$name;
       $product->save();
       
       return redirect()->back();
    }

    /**
     * update a member.
     *
     * @param  \App\Http\Requests\ProductRequest $request
     * @param  \App\Models\Product $product
     * @return void
     */
    public function update($request, $id) {
        $name="";
        if($request->hasfile('img'))
        {
            $file = $request->file('img');
            $name=time().'_'.$file->getClientOriginalName();
            $destinationPath=public_path('images/product'); //project\public\image\cars, //public_path(): trả về đường dẫn tới thư mục public
            $file->move($destinationPath, $name); //lưu hình ảnh vào thư mục public/image
        }
        $product = Product::find($id);
        $product->name=$request->input('name');
        $product->id_type=$request->input('cate');
        //$product->id_user=Auth::user()->username();
        $product->unit_price=$request->input('unit_price');
        $product->promotion_price=$request->input('promotion_price');
        $product->description=$request->input('description');
        if($name==""){
            $name=$product->image;
        }
        $product->image=$name;
        $product->save();
        
        
    }

     /**
     * delete a member.
     *
     * @param  \App\Http\Requests\ProductRequest $request
     * @param  \App\Models\Product $product
     * @return void
     */
    public function destroy($id) {
        $product = Product::find($id);
        $product->delete();
      
    }

     /**
     * search  member.
     *
     * @param  \App\Http\Requests\ProductRequest $request
     * @param  \App\Models\Product $product
     * @return void
     */


}
