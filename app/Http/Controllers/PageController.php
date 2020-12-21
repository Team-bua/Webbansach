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
  */
 protected $repository;


/**
 * Create a new PostController instance.
 *
 * @param  \App\Repositories\PageRepository $repository
 */
public function __construct(ProductRepository $repository)
{
    $this->repository = $repository;
}

   public function getIndex(){
        $product = $this->repository->getAll();
        return view('layout_index.index',compact('product'));
    }

   public function getdetail(){

        return view('layout_index.page.product_detail');
    }

   public function getnews(){
        return view('layout_index.page.news');
    }

    public function getall(){
        return view('layout_index.page.viewall');
    }

    public function getintroduce(){
        return view('layout_index.page.about');
    }

    public function getlogin(){
        return view('layout_index.page.login');
    }

    public function postlogin(Request $request){
        $credentaials = array('username'=>$request->username,'password'=>$request->password);
        if(Auth::attempt($credentaials)){
            return redirect()->back()->with(['flag'=>'success','messege'=>'Đăng nhập thành công']);
        }else{
            return redirect()->back()->with(['flag'=>'danger','messege'=>'Đăng nhập không thành công']);
        }
       
    }

     public function getcart(){
        return view('layout_index.page.cart');
    }

    public function getsignup(){
        return view('layout_index.page.register');
    }

    public function postsignup(PageRequest $request){
        $this->repository->createuser($request);
        return redirect()->back()->with('thongbao','Đăng ký thành công');
    }
    
    public function getread(){
        return view('layout_index.page.Read_book');
    }

    public function getcheckout(){
        return view('layout_index.page.checkout');
    }

    public function getadmin(){
        return view('layout_admin.index_admin');
    }
}
