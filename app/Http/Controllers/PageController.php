<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
<<<<<<< HEAD
   public function getIndex (){
        return view('layout_index.index');
    }

   public function getchitiet (){
        return view('layout_index.page.product_simgle');
    }

   public function gettintuc (){
        return view('layout_index.news');
    }

    public function gettatcaSP (){
        return view('layout_index.page.viewall');
=======
    public function getIndex(){
        return view('layout_index.index');
    }

    public function getChitiet(){
        return view('layout_index.page.product_detail');
>>>>>>> feb25c6e06c22ebb88153777f89cd78ad15d11b8
    }
}
