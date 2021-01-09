<?php

namespace App\Repositories;

use App\Models\Store;
use App\Models\Product;
use Illuminate\Http\Request;

class StoreRepository
{
    /**
     * Get member collection paginate.
     *
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function getAll()
    {   
        return Store::orderBy('id', 'desc')->paginate(10);
    }

    public function getProduct()
    {   
        return Product::all();
    }

    public function getcompanies($id)
    {
        return Store::find($id);
    }

    public function create(Request $request)
    {
       $stores = new Company();
       $stores->name=$request->input('name');
       $stores->email=$request->input('email');
       $stores->address=$request->input('address');
       $stores->phone_number=$request->input('phone');
       $stores->save();
       
    }

    public function update($request, $id) {
        $stores = Company::find($id);
        $stores->name=$request->input('name');
        $stores->email=$request->input('email');
        $stores->address=$request->input('address');
        $stores->phone_number=$request->input('phone');
        $stores->save();
        
    }

    public function destroy($id) {
        $stores = Company::find($id);
        $stores->delete();
      
    }

    public function search($request) {

        $search = $request->table_search;
        return Store::join('product', 'store.id_product', '=', 'product.id')
               ->where(function ($query) use ($search) {
                $query->where('product.name', 'like', "%$search%");
            })->paginate(10);
    }


}
