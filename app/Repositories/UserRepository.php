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
        //
    }

    public function getRole()
    {   
        return Role::all();
    }

    public function getuser($id)
    {
        return User::find($id);
    }
    
    public function create(Request $request)
    {
       
       
    }

    public function update($request, $id) {
       ;
        
    }

    public function destroy($id) {
      
      
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
