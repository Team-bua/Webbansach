<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

   public function getIndex(){
        return view('layout_index.index');
    }

    public function getall(){
        return view('layout_index.page.viewall');
    }

    public function getintroduce(){
        return view('layout_index.page.about');
    }

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
