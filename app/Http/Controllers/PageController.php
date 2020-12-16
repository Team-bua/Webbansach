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

    public function get_all_products(){
        return view('layout_index.page.viewall');

    }

    public function getabout(){
        return view('layout_index.page.about');
    }

    public function getloaisach(){
        return view('layout_index.page.product_type');
    }

     public function getcart(){
        return view('layout_index.page.cart');
    }



    public function geregister (){
        return view('layout_index.page.Register');
    }
    

    public function getlogin(){
        return view('layout_index.page.login');
    }

    public function getadmin(){
        return view('layout_admin.index_admin');
    }
}
