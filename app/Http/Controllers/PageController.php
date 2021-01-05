<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Repositories\PageRepository;
use App\Http\Requests\PageRequest;

class PageController extends Controller
{
    /**
  * The ProductRepository instance.
  *
  * @var \App\Repositories\PageRepository
  * 
  */
 protected $repository;



/**
 * Create a new PostController instance.
 *
 * @param  \App\Repositories\PageRepository $repository
 *
 */
public function __construct(PageRepository $repository)
{
    $this->repository = $repository;
   
}

   public function getIndex(){
        $slide = $this->repository->getSlide();
        $product_new = $this->repository->getNewproduct();
        $product_sale = $this->repository->getSaleproduct();
        $product_type = $this->repository->getProductType();
        return view('layout_index.index',compact('product_new','product_sale','product_type','slide'));
    }

   public function getDetail($id){
        $product_detail = $this->repository->getproduct($id);
        $image_detail = count($product_detail->imagedetail);
        return view('layout_index.page.product_detail',compact('product_detail', 'image_detail'));
    }
        
   
   public function getNews(){
        return view('layout_index.page.news');
    }

    public function getAll(){
        $product = $this->repository->getAllproductbook();
        $product_type = $this->repository->getProductType();

      // $count_book = $this->repository->countBook(); 
       // $count_all=[];
       // foreach ($count_book as $counts){
        //    foreach ($counts ->products as $count ){
       //         $count_all[]=$count;
       //     }
   //     }
    //   dd($count_book);
        return view('layout_index.page.Viewall',compact('product','product_type'));
    }

    public function getMenuType($id){
        $type_name = $this->repository->getProductTypeName($id);
        $product_types = $this->repository->getProductTypeID($id);
        return view('layout_index.page.view_type',compact('product_types','type_name'));
    }

    public function getIntroduce(){
        return view('layout_index.page.about');
    }

    public function getLogin(){
        return view('layout_index.page.login');
    }

    public function postLogin(Request $request){
        $credentaials = array('username'=>$request->username,'password'=>$request->password);
        if(Auth::attempt($credentaials)){
            return redirect()->back()->with(['flag'=>'success','messege'=>'Đăng nhập thành công']);
        }else{
            return redirect()->back()->with(['flag'=>'danger','messege'=>'Đăng nhập không thành công']);
        }
    }

     public function getSearch(Request $req){
        $search=$this->repository->getSearch($req);
        return view('layout_index.page.search',compact('search'));
    }

    public function postLogout(){
        Auth::logout();
        return redirect()->route('index');
    }

     public function getCart(){
        return view('layout_index.page.cart');
    }

    public function getAddCart(Request $request, $id){
        $this->repository->getAddCart($request, $id);
        return redirect()->back();
    }

    public function getDelcart($id){
        return $this->repository->getDelcart($id);
    }

    public function getSignup(){
        return view('layout_index.page.register');
    }

    public function postSignup(PageRequest $request){
        $this->repository->createuser($request);
        return redirect()->back()->with('thongbao','Đăng ký thành công');
    }
    
    public function getRead(){
        return view('layout_index.page.Read_book');
    }

    public function getCheckout(){
        if(Auth::check()){
            $name = Auth::user()->full_name;
            $email = Auth::user()->email;
            $address = Auth::user()->address;
            $phone = Auth::user()->phone;
        }
        else{
            $name = "";
            $email = "";
            $address = "";
            $phone = "";
        }
        return view('layout_index.page.checkout', compact('name','email', 'address', 'phone'));
    }

    public function postCheckout(Request $request){
        $this->repository->postCheckout($request);
        return redirect()->back()->with('thongbao','Đặt hàng thành công');
    }

    public function getAdmin(){
        $user = $this->repository->getAll ();
        $product = $this->repository->getAllproductbook();
        return view('layout_admin.index_admin',compact('product','user'));
    }
   
}
