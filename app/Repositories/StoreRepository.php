<?php

namespace App\Repositories;

use App\Models\Store;
use App\Models\HistoryStoredInDay;
use App\Services\GetSession;
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
        $company_id= GetSession::getCompanyId();
        return Store::join('product', 'store.id_product', 'product.id')
                    ->where('product.id_company', $company_id)
                    ->get();
    }

    /*public function getStoredInDay()
    {
        return Store::whereRaw('DATEDIFF(now(), created_at)')
                                ->count();
    }*/

    public function create(Request $request)
    {

    }

    /*public function updateStoredInDay()
    {
        $stored_in_day = Store::whereRaw('DATEDIFF(now(), created_at)')
                                ->get();
            foreach ($stored_in_day as $s_i_d ) {
                
                $history_stored = new HistoryStoredInDay();
                $stored = Store::find($s_i_d->id);

                $history_stored->id_stored = $s_i_d->id;
                $history_stored->stored_product_in_day = $stored->stored_product;
                $history_stored->created_at = $stored->created_at; 
                $history_stored->save();
                
                $stored->all_product_in_store = $stored->all_product_in_store + $stored->stored_product;
                $stored->stored_product = '0';
                $stored->created_at = now();
                $stored->save();
            }
    }*/

    public function update($request)
    {
        $store = Store::find($request->id);
        $store->all_product_in_store = $request->input('total');
        $store->stored_product += $request->input('total');
        $store->save();
        return json_encode((object) ['store' => $store]);
    }

    public function destroy($id)
    {
        
    }
}
