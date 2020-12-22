<?php

namespace App\Repositories;

use Illuminate\Support\Facades\Hash;
use App\Models\BillIn;
use App\Models\Product;
use Illuminate\Http\Request;

class ArchiveRepository
{
    /**
     * Get member collection paginate.
     *
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function getAll()
    {   
        return BillIn::orderBy('created_at', 'desc')->paginate(10);
    }

    public function getuser($id)
    {
        return BillIn::find($id);
    }
    
    public function create(Request $request)
    {

       
    }

    public function update($request, $id) {
        $image="";
        if($request->hasfile('img'))
        {
            $file = $request->file('img');
            $image=time().'_'.$file->getClientOriginalName();
            $destinationPath=public_path('images/users'); //project\public\image\cars, //public_path(): trả về đường dẫn tới thư mục public
            $file->move($destinationPath, $image); //lưu hình ảnh vào thư mục public/image
        }
        $supplier = BillIn::find($id);
        $supplier->name=$request->input('name');
        $supplier->email=$request->input('email');
        $supplier->address=$request->input('address');
        $supplier->phone=$request->input('phone');
        if($image==""){
            $image=$supplier->image;
        }
        $supplier->image=$image;
        $supplier->save();
        
    }

    public function destroy($id) {
        $supplier = BillIn::find($id);
        $supplier->delete();
      
    }

    public function search(Request $request){
        
        if($request->ajax()) {
            $output = '';
            $product = Product::where('name', 'LIKE', $request->search.'%')
                                ->get();           
            if($product){
                foreach ($product as $key => $products) {
                    $output.='<tr>'.
                          '<td>'.$products->id.'</td>'.
                          '<td>'.$products->name.'</td>'.
                          '<td>'.$products->unit_price.'</td>'.
                          '<td>'.$products->description.'</td>'.
                        '</tr>';
                }
                return Response($output);
            }                
           
        }
    }
}
