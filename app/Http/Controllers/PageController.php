<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
   public function getIndex (){
        return view('layout_index.index');
    }

   public function getchitiet (){
        return view('layout_index.page.product_detail');
    }

   public function gettintuc (){
        return view('layout_index.page.news');
    }

    public function gettatcaSP (){
        return view('layout_index.page.viewall');
    }
<<<<<<< HEAD

    public function getgioithieu (){
        return view('layout_index.page.about');
    }

    public function getloaisach (){
        return view('layout_index.page.product_type');
    }

     public function getcart (){
        return view('layout_index.page.cart');
    }

    public function getdangky (){
        return view('layout_index.page.Register');
=======

    public function getadmin (){
        return view('layout_admin.index_admin');
>>>>>>> fab6304dd1e8a009f48f6fd4c172f05fd7cba73f
    }
}
