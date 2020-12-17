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
>>>>>>> 2f011455976f7b18a90446378e2bf63e3ce20b73

   public function getnews(){
        return view('layout_index.page.news');
    }

<<<<<<< HEAD

=======
>>>>>>> 2f011455976f7b18a90446378e2bf63e3ce20b73
    public function getall(){
        return view('layout_index.page.viewall');
    }

    public function getintroduce(){
        return view('layout_index.page.about');
    }

<<<<<<< HEAD
    public function getlogin(){
        return view('layout_index.page.login');
    }

=======
>>>>>>> 2f011455976f7b18a90446378e2bf63e3ce20b73
     public function getcart(){
        return view('layout_index.page.cart');
    }

    public function getsignup(){
        return view('layout_index.page.register');
<<<<<<< HEAD
    }
    
    public function getdetail(){
        return view('layout_index.page.product_detail');
=======
>>>>>>> 2f011455976f7b18a90446378e2bf63e3ce20b73
    }

    public function getread(){
        return view('layout_index.page.Read_book');
    }

    public function getcheckout(){
        return view('layout_index.page.checkout');
    }

    public function getadmin(){
        return view('layout_admin.index_admin');
    }
}
