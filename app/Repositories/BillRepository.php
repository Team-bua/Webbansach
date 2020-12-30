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
        $bills = Bill::orderBy('created_at', 'desc')->paginate(10);
        foreach($bills as $bill){
            $bill->products;
        }
        return $bills;
    }

    public function getbill($id)
    {
        return Bill::find($id);
    }
    
    public function create(Request $request)
    {

       
    }

    public function update($request, $id) {

       $user = Bill::find($id);
       $user->name=$request->input('name');
       $user->email=$request->input('email');
       $user->address=$request->input('address');
       $user->phone=$request->input('phone');
       $user->save();
        
    }

    public function destroy($id) {
       $user = Bill::find($id);
       $user->delete();
      
    }

    public function search($request) {

        $search = $request->table_search;
        return Bill::where(function ($query) use ($search) {
                $query->where('name', 'like', "%$search%")
                        ->orWhere('email', 'like', "%$search%")
                        ->orWhere('phone', 'like', "%$search%");
            })->paginate(10);
    }

}
