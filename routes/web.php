<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('trangchu', function(){
	return view('layout_index.index');
});
Route::get('admin', function(){
	return view('layout_admin.index_admin');
});

Route::get('adproduct', function(){
	return view('layout_admin.product.products_list');
});