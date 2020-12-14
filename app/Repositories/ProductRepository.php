<?php

namespace App\Repositories;

use App\Models\Product;

class ProductRepository
{
    /**
     * Get member collection paginate.
     *
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function getAll()
    {
        return Product::paginate(10);
    }

    /**
     * create a member.
     *
     * @param  \App\Http\Requests\MemberRequest $request
     * @param  \App\Models\Member $member
     * @return void
     */
    public function create()
    {
       
    }

    /**
     * update a member.
     *
     * @param  \App\Http\Requests\MemberRequest $request
     * @param  \App\Models\Member $member
     * @return void
     */
    public function update() {

        
    }

     /**
     * delete a member.
     *
     * @param  \App\Http\Requests\MemberRequest $request
     * @param  \App\Models\Member $member
     * @return void
     */
    public function destroy() {

      
    }

     /**
     * search  member.
     *
     * @param  \App\Http\Requests\MemberRequest $request
     * @param  \App\Models\Member $member
     * @return void
     */


}
