<?php

namespace App\Repositories;

use Illuminate\Support\Facades\Hash;
use App\Models\Bill_in;
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
        return Bill_in::orderBy('created_at', 'desc')->paginate(10);
    }

    public function getuser($id)
    {
        return Bill_in::find($id);
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
        $supplier = Bill_in::find($id);
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
        $supplier = Bill_in::find($id);
        $supplier->delete();
      
    }

    public function search(Request $request)
    {
        if ($request->ajax()) {
            $output = '';
            $products = Product::where('id', 'LIKE', '%' . $request->search . '%')
                                ->orwhere('name', 'LIKE', '%' . $request->search . '%')
                                ->get();
            if ($products) {
                foreach ($products as $key => $product) {
                    $output .= '<tr>
                    <td>' . $product->id . '</td>
                    <td>' . $product->name . '</td>
                    <td>' . $product->description . '</td>
                    <td>' . $product->unit_price . '</td>
                    </tr>';
                }
            }
            
            return Response($output);
        }
    }

}
