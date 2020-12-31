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
        return User::where('id_role','!=' , '1')
        ->orderBy('created_at', 'desc')->paginate(10);
    }

    public function getRole()
    {   
        return Role::orderBy('created_at', 'desc')->paginate(10);
    }

    public function getuser($id)
    {
        return User::find($id);
    }
    
    public function create(Request $request)
    {

       
    }

    public function update($request, $id) {

       $user = User::find($id);
       $user->role->display_name=$request->input('display');
       $user->save();
        
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
