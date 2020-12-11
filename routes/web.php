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
// route cac trang index
Route::get('/', function () {
    return view('welcome');
});
Route::get('/trangchu',[PageController::class,'getIndex']);

Route::get('/chitiet',[PageController::class,'getChitiet']);

Route::get('gioithieu', function(){
	return view('layout_index.about');
});
Route::get('tintuc', function(){
	return view('layout_index.news');
});
// route cac trang admin

Route::get('admin', function(){
	return view('layout_admin.index_admin');
});

Route::get('adproduct', function(){
	return view('layout_admin.product.products_list');
});

Route::get('crproduct', function(){
	return view('layout_admin.product.products_create');
});
Route::get('edproduct', function(){
	return view('layout_admin.product.products_edit');
});