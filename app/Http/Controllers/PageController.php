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

=======
>>>>>>> f03173c184c20b062581b9a72f92bfe5dada7a09
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
>>>>>>> f03173c184c20b062581b9a72f92bfe5dada7a09
     public function getcart(){
        return view('layout_index.page.cart');
    }

    public function getsignup(){
        return view('layout_index.page.register');
    }
<<<<<<< HEAD
    
=======
>>>>>>> f03173c184c20b062581b9a72f92bfe5dada7a09

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
