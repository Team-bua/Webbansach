<?php

namespace App\Repositories;

use App\Models\Product;
use App\Models\ProductType;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Slide;
use Illuminate\Http\Request;

class PageRepository
{
    /**
     * Get member collection paginate.
     *
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function getAll()
    {   
        return User::orderBy('created_at', 'desc')->paginate(10);
    }

    public function getAllproduct()
    {        
        return  Product::orderBy('created_at', 'desc')->paginate(10);
    }
 
    public function getProduct($id)
    {
        return Product::find($id);
    }

     public function getnewProduct()
    {
        $new_product = Product::latest()->paginate(5);
        return $new_product;
    }

    public function getProductType()
    {
        return ProductType::all();
    }
    public function getSlide()
    {   
        return Slide::where('status', 1)->get();
    }
    
    public function createUser(Request $request)
    {
        $user = new User();
        $user->full_name = $request->input('fullname');
        $user->username = $request->input('username');
        $user->email = $request->input('username');
        $user->password = hash::make($request->input('password'));
        $user->phone = $request->input('phone');
        $user->address = $request->input('address');
        $user->save();
       
    }
    
    public function destroy($id) {
        $supplier = User::find($id);
        $supplier->delete();
      
    }
}
