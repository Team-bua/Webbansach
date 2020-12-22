<?php

namespace App\Repositories;

use App\Models\Product;
use App\Models\Product_type;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
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
 
    public function getproduct($id)
    {
        return Product::find($id);
    }

    public function getproduct_type()
    {
        return Product_type::all();
    }



    public function getsupplier($id)
    {
        return User::find($id);
    }
    
    public function createuser(Request $request)
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
