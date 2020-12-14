<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
<<<<<<< HEAD
=======

>>>>>>> fcd7816f627669a7db269fe2497854f5a8eb2fae
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
<<<<<<< HEAD
=======
    }

    public function getadmin (){
        return view('layout_admin.index_admin');
>>>>>>> fcd7816f627669a7db269fe2497854f5a8eb2fae
    }
}
