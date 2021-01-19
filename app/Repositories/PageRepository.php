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
use App\Models\Date;
use App\Models\BillDetail;
use App\Models\Comment;
use App\Models\Company;
use App\Models\Rating;
use App\Models\News;
use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function allBookAdm(){
        return Product::all();
    }

    public function getAllproductbook()
    {
        return  Product::orderBy('created_at', 'desc')->paginate(20);
    }

    public function getAllstore()
    {
        return  Store::sum('all_product_in_store');
    }
    // sách hoạt động

    public function getAllproductNew()
    {
        return Product::orderBy('created_at', 'desc')
            ->where('status', 1)
            ->latest()
            ->paginate(10);
    }
    // sach mới

    public function getAllProductSale()
    {
        return  Product::where('promotion_price', '<>', 0)->where('status', 1)
            ->latest()
            ->paginate(10);
    }
    // sách giảm giá

    public function getAllproductHighlights()
    {
        return  Product::where('new', 1)->where('status', 1)
            ->latest()
            ->paginate(10);
    }
    //sách nổi bật

    public function getProduct($id)
    {
        return Product::find($id);
    }

    public function getSearch($req)
    {
        $product = Product::where('status', 1)
            ->where('name', 'like', '%' . $req->key . '%')
            ->orWhere('unit_price', $req->key)
            ->paginate(20);
        return $product;
    }

    public function getProductType()
    {
        return ProductType::all();
    }

    public function store($id)
    {
        return Store::where('id_product', $id)->first();
    }

    public function getProductTypeName($id)
    {
        return ProductType::find($id);
    }

    public function getProductCompanyName($id)
    {
        return Company::find($id);
    }

    public function postComment($id, $request)
    {
        $comment = new Comment();
        $comment->id_product = $id;
        $comment->id_user = Auth::user()->id;
        $comment->body = $request->input('body');
        $comment->save();
    }

    public function getComment($id)
    {
        $product =  Product::find($id);
        return $product->userComments;
    }

    public function getRating($id)
    {
        $ra_5 = Rating::where('ra_number',5)->count();
        $ra_4 = Rating::where('ra_number',4)->count();
        $ra_3 = Rating::where('ra_number',3)->count();
        $ra_2 = Rating::where('ra_number',2)->count();
        $ra_1 = Rating::where('ra_number',1)->count();
        $count_ra = Rating::where('id_product', $id)->get();
        $product =  Product::find($id);
        $ra_date = $product->ratings()->orderBy('rating.created_at', 'desc')->paginate(10);
        return ['ra_date'=>$ra_date, 'product'=>$product, 'ra_5'=>$ra_5,
                'ra_4'=>$ra_4, 'ra_3'=>$ra_3, 'ra_2'=>$ra_2, 'ra_1'=>$ra_1,
                'count_ra'=>$count_ra];
    }

    public function postRating($id, $request)
    {
        $rating = new Rating();
        $rating->id_product = $id;
        $rating->id_user = Auth::user()->id;
        $rating->ra_number = $request->input('rating');
        $rating->body = $request->input('body');
        $rating->save();

        $product = Product::find($id);
        $product->total_number += $request->input('rating');
        $product->total_ra += 1;
        $product->save();
    }

    public function getProductTypeID($id)
    {
        return Product::where('id_type', $id)->where('status', 1)->paginate(10);
    }

    public function getProductCompanyID($id)
    {
        return Product::where('id_company', $id)->where('status', 1)->paginate(10);
    }

    public function getSlide()
    {
        return Slide::where('status', 1)->get();
    }

    public function getAddCart(Request $request, $id)
    {
        $store = Store::where('id_product', $request->id)->first();
        if($store && $store->stored_product != 0){
            $product = Product::find($id);
            $oldcart = Session('cart') ? Session::get('cart') : null;
            $cart = new Cart($oldcart);
            $cart->add($product, $id);
            $request->session()->put('cart', $cart);
            return response()->json(array('cart' => $cart));
        }else{
            return response()->json([
                'code' => 500,
                'message' => 'error',
            ], 500);
        }        
    }

    public function postCart(Request $request)
    {
        $oldCart = Session('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->changeItem($request->id, $request->quantity);
        $request->session()->put('cart', $cart);
        return response()->json(array('cart' => $cart, 'id' => $request->id));
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
        return response()->json([
            'code' => 200,
            'message' => 'success',
            'cart' => $cart,
        ], 200);
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

    public function getInfo($id)
    {
        return User::find($id);
    }

    public function changeInfo(Request $request, $id)
    {
        $customer = User::find($id);
        $customer->full_name = $request->input('fullname');
        $customer->email = $request->input('email');
        $customer->phone = $request->input('phone');
        $customer->address = $request->input('address');
        $customer->save();
    }

    public function updatePassword(Request $request, $id)
    {
        if (Hash::Check($request->password, Auth::user()->password)) {
            $pa = User::find($id);
            $pa->password = $request->input('password');
            $request->user()->fill([
                'password' => Hash::make($request->new_password)
            ])->save();
            return redirect()->back()->with('success', 'Thay đổi thành công ');
        }
        return redirect()->back()->with('danger', 'Mật khẩu cũ không đúng ');
    }

    public function getBill()
    {
        return Bill::where('id_user', Auth::user()->id)->get();
    }

    public function destroy($id)
    {
        $supplier = User::find($id);
        $supplier->delete();
    }

    public function getRead($id)
    {
        return Product::find($id);
    }

    // tin tức
    public function getContent()
    {
        return News::where('status', 1)->get();
    }

    public function getContentDetail($id)
    {
        return News::where('id', $id)->get();
    }

    public function getContentFist()
    {
        return News::orderBy('id', 'desc')->where('status', 1)->first();
    }

}
