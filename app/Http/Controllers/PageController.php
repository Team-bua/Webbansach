<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
   public function getIndex (){
        return view('layout_index.index');
    }

   public function getloai (){
        return view('layout_index.product');
    }

   public function getchitiet (){
        return view('layout_index.product_type');
    }

   public function getgioithieu (){
        return view('layout_index.about');
    }

   public function gettintuc (){
        return view('layout_index.news');
    }
}
