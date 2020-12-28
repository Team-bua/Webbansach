<?php

namespace App\Repositories;

use App\Models\ProductType;

class ProductTypeRepository
{
    /**
     * Get member collection paginate.
     *
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function getAll()
    {
        return ProductType::all();
    }

    /**
     * create a member.
     *
     * @param  \App\Http\Requests\ProductTypeRequest $request
     * @param  \App\Models\ProductType $product_type
     * @return void
     */
    public function create($request)
    {
       $product_type = new ProductType();
       $product_type->name=$request->input('name');
       $product_type->save();
       return $product_type;
    }

    /**
     * update a member.
     *
     * @param  \App\Http\Requests\ProductTypeRequest $request
     * @param  \App\Models\ProductType $product_type
     * @return void
     */
    public function update($request, $id) 
    {  
        $product_type = ProductType::find($id);
        $product_type->name = $request->input('name');
        $product_type->save();
        return $product_type;
    }

     /**
     * delete a member.
     *
     * @param  \App\Http\Requests\ProductTypeRequest $request
     * @param  \App\Models\ProductType $product_type
     * @return void
     */
    public function destroy($id) {
        $product_type = ProductType::find($id);
        $product_type->delete();
      
    }
     /**
     * search  member.
     *
     * @param  \App\Http\Requests\ProductTypeRequest $request
     * @param  \App\Models\ProductType $product_type
     * @return void
     */

    public function search($request) {

        $search = $request->table_search;
        return ProductType::where(function ($query) use ($search) {
                $query->where('name', 'like', "%$search%");
            })->paginate(10);
    }


}
