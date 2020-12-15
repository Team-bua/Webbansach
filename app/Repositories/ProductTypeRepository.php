<?php

namespace App\Repositories;

use App\Models\Product_type;

class ProductTypeRepository
{
    /**
     * Get member collection paginate.
     *
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function getAll()
    {
        return Product_type::paginate(10);
    }

    /**
     * create a member.
     *
     * @param  \App\Http\Requests\ProductTypeRequest $request
     * @param  \App\Models\Product_type $product_type
     * @return void
     */
    public function create($request)
    {
       $product_type = new Product_type();
       $product_type->name=$request->input('name');
       $product_type->save();
       return redirect()->back();
    }

    /**
     * update a member.
     *
     * @param  \App\Http\Requests\ProductTypeRequest $request
     * @param  \App\Models\Product_type $product_type
     * @return void
     */
    public function update() {

        
    }

     /**
     * delete a member.
     *
     * @param  \App\Http\Requests\ProductTypeRequest $request
     * @param  \App\Models\Product_type $product_type
     * @return void
     */
    public function destroy() {

      
    }

     /**
     * search  member.
     *
     * @param  \App\Http\Requests\ProductTypeRequest $request
     * @param  \App\Models\Product_type $product_type
     * @return void
     */


}
