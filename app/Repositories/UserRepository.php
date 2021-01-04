<?php

namespace App\Repositories;

use App\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
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
        if(hash::check($request->password_old, Auth::user()->password)){
            $user = User::find($id);
            $user->password = hash::make($request->input('new_password'));
            $user->save();
            return redirect()->back()->with(['flag'=>'success','messege'=>'Đổi mật khẩu thành công']);
        }   
        return redirect()->back()->with(['flag'=>'danger','messege'=>'Mật khẩu cũ không đúng']);
        
    }

    public function destroy($id) {
       $user = User::find($id);
       $user->delete();
      
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
