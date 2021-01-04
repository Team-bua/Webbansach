<?php

namespace App\Repositories;

use App\Models\Product;
use App\Models\ProductType;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\Cart;
use App\Models\Slide;
use App\Models\Bill;
use App\Models\BillDetail;
use Illuminate\Http\Request;


class PageRepository
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

    public function getAllproductbook()
    {
        return  Product::all();
    }

    public function getAllproduct()
    {
        return  Product::orderBy('created_at', 'desc')->paginate(10);
    }

 



    public function getProduct($id)
    {
        return Product::find($id);
    }

    public function getSearch($req)
    {
        $product = Product::where('name', 'like', '%' . $req->key . '%')
            ->orWhere('unit_price', $req->key)
            ->paginate(20);
        return $product;
    }

    public function getProductType()
    {
        return ProductType::all();
    }

    public function getSlide()
    {
        return Slide::where('status', 1)->get();
    }

    public function getAddCart(Request $request, $id)
    {
        $product = Product::find($id);
        $oldcart = Session('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldcart);
        $cart->add($product, $id);
        $request->session()->put('cart', $cart);
    }

    public function getDelcart($id)
    {
        $oldcart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldcart);
        $cart->removeItem($id);
        if (count($cart->items) > 0) {
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }
        return redirect()->back();
    }

    public function postCheckout(Request $request)
    {
        $cart = Session::get('cart');

        $bill = new Bill();
        $bill->id_user = Auth::user()->id;
        $bill->date_order = date('Y-m-d');
        $bill->email = $request->email;
        $bill->phone = $request->phone;
        $bill->address = $request->address;
        $bill->total = $cart->totalPrice;
        $bill->quantity = $cart->totalQty;
        $bill->payment = $request->payment;
        $bill->status = 0;
        $bill->save();

        foreach ($cart->items as $key => $value) {
            $bill_detail = new BillDetail();
            $bill_detail->id_bill = $bill->id;
            $bill_detail->id_product = $key;
            $bill_detail->quantity = $value['qty'];
            $bill_detail->unit_price = ($value['price'] / $value['qty']);
            $bill_detail->save();
        }
        Session::forget('cart');
    }

    public function createUser(Request $request)
    {
        $user = new User();
        $user->full_name = $request->input('fullname');
        $user->username = $request->input('username');
        $user->email = $request->input('username');
        $user->password = hash::make($request->input('password'));
        $user->phone = $request->input('phone');
        $user->address = $request->input('address');
        $user->save();
    }

    public function destroy($id)
    {
        $supplier = User::find($id);
        $supplier->delete();
    }
    /*
     * Get member collection paginate.
    public function countBook(){
        $product_type=ProductType::where('id')->get();
        return ProductType::where('name', $product_type->id)->first();
    }
    */

  //  public function countBook()
   // {
       // $product_type = ProductType::where('id')
          //  ->groupBy('name')
         //   ->count('id');
          //  return ProductType::where('name', $product_type)->first();
        //product_type = Product::with([
        //   'productType' => function ($query) {
        //      // Adds count of category-related products
        //   $query->withCount('productType as count');
        // },
        //])->get();



    
}
