<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getthongtinuser(){
        return view('layout_admin.user.proflie');
    }
    
}
