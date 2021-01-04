<?php

namespace App\Repositories;

use App\Models\Bill;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class BillRepository
{
    /**
     * Get member collection paginate.
     *
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function getAll()
    {   
        return Bill::orderBy('created_at', 'desc')->paginate(10);
    }

    public function getbill($id)
    {
        return Bill::find($id);
    }
    
    public function create(Request $request)
    {

       
    }

    public function update($request, $id) {

        
    }

    public function destroy($id) {
       $user = Bill::find($id);
       $user->delete();
      
    }

    public function search($request) {

       
    }

}