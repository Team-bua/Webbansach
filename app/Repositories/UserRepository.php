<?php

namespace App\Repositories;

use App\Models\Role;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Http\Request;

class UserRepository
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

    public function getuser($id)
    {
        return User::find($id);
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
        $supplier = User::find($id);
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
        $supplier = User::find($id);
        $supplier->delete();
      
    }

    public function search($request) {

        $search = $request->table_search;
        return User::where(function ($query) use ($search) {
                $query->where('name', 'like', "%$search%")
                        ->orWhere('email', 'like', "%$search%")
                        ->orWhere('phone', 'like', "%$search%");
            })->paginate(10);
    }

}
