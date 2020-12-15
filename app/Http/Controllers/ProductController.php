<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{

   public function getlaysanpham(){
        return view('layout_admin.product.products_list');
    }
    public function getthemsanpham(){
        return view('layout_admin.product.products_create');
    }
    
}

