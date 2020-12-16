<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

   public function getIndex(){
        return view('layout_index.index');
    }

   public function getdetail(){
        return view('layout_index.page.product_detail');
    }

   public function getnews(){
        return view('layout_index.page.news');
    }

<<<<<<< HEAD
    public function get_all_products(){
        return view('layout_index.page.viewall');

    }

    public function getabout(){
=======
    public function getall(){
        return view('layout_index.page.viewall');

    }
    public function getintroduce(){
>>>>>>> 5bf7554b65f648dcbbf5d3eaaecb23945f711ba1
        return view('layout_index.page.about');
    }

    public function getlbooktype(){
        return view('layout_index.page.product_type');
    }

     public function getcart(){
        return view('layout_index.page.cart');
    }

<<<<<<< HEAD


    public function geregister (){
        return view('layout_index.page.Register');
=======
    public function getsignup(){
        return view('layout_index.page.register');
>>>>>>> 5bf7554b65f648dcbbf5d3eaaecb23945f711ba1
    }
    

    public function getlogin(){
        return view('layout_index.page.login');
    }

    public function getadmin(){
        return view('layout_admin.index_admin');
    }
}
