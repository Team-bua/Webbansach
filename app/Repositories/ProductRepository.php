<?php

namespace App\Repositories;

use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Product_type;
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
        return Product::all();
    }
    
    public function getproduct($id)
    {
        return Product::find($id);
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
       $image="";
       if($request->hasfile('img'))
       {
            $file = $request->file('img');
            $image = time().'_'.$file->getClientOriginalName();
            $destinationPath=public_path('images/product'); //project\public\image\cars, //public_path(): trả về đường dẫn tới thư mục public
            $file->move($destinationPath, $image); //lưu hình ảnh vào thư mục public/image        
       }
       //kiểm tra file tồn tại
       $imgdetail=[];
       if($request->hasfile('img_detail'))
       {
           $file = $request->file('img_detail');
           foreach($file as $key => $files){
            $file_name = time().'_'.$files->getClientOriginalName();
            $destinationPath=public_path('images/product_detail'); //project\public\image\cars, //public_path(): trả về đường dẫn tới thư mục public
            $files->move($destinationPath, $file_name); //lưu hình ảnh vào thư mục public/image
            $imgdetail[] = $file_name;
        }          
       }
       $product = new Product();
       $product->name=$request->input('name');
       $product->id_type=$request->input('cate');
       $product->publisher=$request->input('publisher');
       $product->id_user=Auth::user()->id;
       $product->unit_price=$request->input('unit_price');
       $product->promotion_price=$request->input('promotion_price');
       $product->description=$request->input('description');
       $product->image=$image;
       $product->imagedetail=$imgdetail;
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
        $image="";
        if($request->hasfile('img'))
        {
            $file = $request->file('img');
            $image=time().'_'.$file->getClientOriginalName();
            $destinationPath=public_path('images/product'); //project\public\image\cars, //public_path(): trả về đường dẫn tới thư mục public
            $file->move($destinationPath, $image); //lưu hình ảnh vào thư mục public/image
        }
        $imgdetail=[];
        if($request->hasfile('img_detail'))
        {
            $file = $request->file('img_detail');
            foreach($file as $key => $files){
             $file_name = time().'_'.$files->getClientOriginalName();
             $destinationPath=public_path('images/product_detail'); //project\public\image\cars, //public_path(): trả về đường dẫn tới thư mục public
             $files->move($destinationPath, $file_name); //lưu hình ảnh vào thư mục public/image
             $imgdetail[] = $file_name;
         }          
        }
        $imgdetail=[];
        if($request->hasfile('img_detail'))
       {
           $file = $request->file('img_detail');
           foreach($file as $key => $files){
            $file_name = time().'_'.$files->getClientOriginalName();
            $destinationPath=public_path('images/product_detail'); //project\public\image\cars, //public_path(): trả về đường dẫn tới thư mục public
            $files->move($destinationPath, $file_name); //lưu hình ảnh vào thư mục public/image
            $imgdetail[] = $file_name;
        }          
       }
        $product = Product::find($id);
        $product->name=$request->input('name');
        $product->id_type=$request->input('cate');
        $product->publisher=$request->input('publisher');
        $product->id_user=Auth::user()->id;
        $product->unit_price=$request->input('unit_price');
        $product->promotion_price=$request->input('promotion_price');
        $product->description=$request->input('description');
        if($image ==""){
            $image=$product->image;
        }
        $product->image = $image;
        if($imgdetail == []){
            $imgdetail = $product->imagedetail;
        }
        $product->imagedetail=$imgdetail;
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
    public function search($request) {

        $search = $request->table_search;
        return Product::where(function ($query) use ($search) {
                $query->where('id', 'like', "%$search%")
                        ->orWhere('name', 'like', "%$search%")
                        ->orWhere('unit_price', 'like', "%$search%");
            })->paginate(10);
    }

}
