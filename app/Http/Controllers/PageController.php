<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

   public function getIndex(){
        return view('layout_index.index');
    }

<<<<<<< HEAD
=======
   public function getdetail(){
        return view('layout_index.page.product_detail');
    }

   public function getnews(){
        return view('layout_index.page.news');
    }

>>>>>>> f18a7fe2a6ddd2b9bc354382cf20ef5cf42160e0
    public function getall(){
        return view('layout_index.page.viewall');
    }

    public function getintroduce(){
        return view('layout_index.page.about');
    }

<<<<<<< HEAD
    public function getnews(){
        return view('layout_index.page.news');
    }

    public function getlogin(){
        return view('layout_index.page.login');
    }
   
    public function getsignup (){
        return view('layout_index.page.Register');
    }

    public function getcart(){
        return view('layout_index.page.cart');
=======
     public function getcart(){
        return view('layout_index.page.cart');
    }

    public function getsignup(){
        return view('layout_index.page.register');
>>>>>>> f18a7fe2a6ddd2b9bc354382cf20ef5cf42160e0
    }
    
    public function getdetail(){
        return view('layout_index.page.product_detail');
    }

    public function getread(){
        return view('layout_index.page.Read_book');
    }

    public function getadmin(){
        return view('layout_admin.index_admin');
    }
}
