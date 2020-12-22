<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Repositories\PageRepository;
use App\Http\Requests\PageRequest;
use App\Repositories\ProductRepository;

class PageController extends Controller
{
    /**
  * The ProductRepository instance.
  *
  * @var \App\Repositories\PageRepository
  * @var \App\Repositories\ProductRepository
  */
 protected $repository;
 protected $repository1;



/**
 * Create a new PostController instance.
 *
 * @param  \App\Repositories\PageRepository $repository
 * @param  \App\Repositories\ProductRepository $repository1
 */
public function __construct(PageRepository $repository)
{
    $this->repository = $repository;
   
}

   public function getIndex(){
        $product = $this->repository->getAllproduct();
        $product_type = $this->repository->getProductType();
        return view('layout_index.index',compact('product','product_type'));
    }

   public function getDetail($id){
    $product_detail = $this->repository->getproduct($id);

        return view('layout_index.page.product_detail',compact('product_detail'));
    }

   
   public function getNews(){
        return view('layout_index.page.news');
    }

    public function getAll(){
        return view('layout_index.page.viewall');
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

    public function postLogout(){
        Auth::logout();
        return redirect('index');
    }

     public function getCart(){
        return view('layout_index.page.cart');
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
        return view('layout_index.page.checkout');
    }

    public function getAdmin(){
        return view('layout_admin.index_admin');
    }
}
