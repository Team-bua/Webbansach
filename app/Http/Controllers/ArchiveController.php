<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArchiveController extends Controller
{
    public function getlaykhohang(){
        return view('layout_admin.archive.archive_list');
    }
}
