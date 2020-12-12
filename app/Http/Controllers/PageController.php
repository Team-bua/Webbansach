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
        return view('layout_index.page.product');
>>>>>>> 280df63ca4e41d7ea85c52c9f1fd9accb265d81b
    }
}
