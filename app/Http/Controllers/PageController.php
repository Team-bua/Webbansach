<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex(){
        return view('layout_index.index');
    }

    public function getChitiet(){
        return view('layout_index.page.product');
    }
}
