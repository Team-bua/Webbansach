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
use App\Models\Comment;
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
        return  Product::where('status', 1)->get();
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
        $product = Product::where('name', 'like', '%' . $req->key . '%')
            ->orWhere('unit_price', $req->key)
            ->paginate(20);
        return $product;
    }

    public function getProductType()
    {
        return ProductType::all();
    }
    public function getProductTypeName($id)
    {
        return ProductType::find($id);
    }

    public function postComment($id, $request)
    {
        $comment = new Comment();
        $comment->id_product = $id;
        $comment->id_user = Auth::user()->id;
        $comment->body = $request->body;
        $comment->save();
    }

    public function getComment($id)
    {
        $product =  Product::find($id);

        return $product->userComments;
    }

    public function getProductTypeID($id)
    {
        return Product::where('id_type', $id)->where('status', 1)->paginate(10);
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
        return response()->json(array('cart' => $cart));
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

    public function getInfo($id){
        return User::find($id);
    }

    public function changeInfo(Request $request, $id){
        $customer = User::find($id);
        $customer->full_name = $request->input('fullname');
        $customer->email = $request->input('email');
        $customer->phone = $request->input('phone');
        $customer->address = $request->input('address');
        $customer->save();
    }

    public function updatePassword(Request $request, $id)
    {   
        if (Hash::Check($request->password,Auth::user()->password)){
        $pa=User::find($id);
        $pa->password=$request->input('password');
        $request->user()->fill([
            'password' => Hash::make($request->new_password)
        ])->save();
        return redirect()->back()->with('success','Thay đổi thành công ');
    }
            return redirect()->back()->with('danger','Mật khẩu cũ không đúng ');
    }   

    public function destroy($id)
    {
        $supplier = User::find($id);
        $supplier->delete();
    }
}
