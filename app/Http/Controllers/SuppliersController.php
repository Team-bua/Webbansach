<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuppliersController extends Controller
{
    public function getlaynhacungcap(){
        return view('layout_admin.supplier.supplier_list');
    }
    public function getthemnhacungcap(){
        return view('layout_admin.supplier.supplier_create');
    }
}
