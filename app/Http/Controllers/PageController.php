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
        return view('layout_index.news');
    }

    public function gettatcaSP (){
        return view('layout_index.page.viewall');
    }

    public function getadmin (){
        return view('layout_admin.index_admin');
    }
}
