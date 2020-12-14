<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

   public function getIndex(){
        return view('layout_index.index');
    }

   public function getchitiet(){
        return view('layout_index.page.product_detail');
    }

   public function gettintuc(){
        return view('layout_index.page.news');
    }

    public function gettatcaSP(){
        return view('layout_index.page.viewall');

    }
<<<<<<< HEAD

=======
>>>>>>> cfde4878f17f82cf2ec2b0e7e2b713c8bfda6243

    public function getgioithieu(){
        return view('layout_index.page.about');
    }

    public function getloaisach(){
        return view('layout_index.page.product_type');
    }

     public function getcart(){
        return view('layout_index.page.cart');
    }

<<<<<<< HEAD
    public function getdangky (){
        return view('layout_index.page.Register');
=======
    public function getdangky(){
        return view('layout_index.page.register');
    }

    public function getdangnhap(){
        return view('layout_index.page.login');
>>>>>>> cfde4878f17f82cf2ec2b0e7e2b713c8bfda6243
    }

    public function getadmin(){
        return view('layout_admin.index_admin');
    }
}
