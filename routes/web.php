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
<<<<<<< HEAD
//----->trang chủ
Route::get('trangchu',[PageController::class,'getIndex'])->name('trangchu');
//----->loại
Route::get('loai',[PageController::class,'getloai'])->name('loai');
//----->chitiet
Route::get('chitiet',[PageController::class,'getchitiet'])->name('chitiet');
//----->gioithieu
Route::get('gioithieu',[PageController::class,'getgioithieu'])->name('gioithieu');
//----->tintuc
Route::get('tintuc',[PageController::class,'gettintuc'])->name('tintuc');
/*--------------------------------------------------------------------------------*/
=======
Route::get('trangchu', function(){
	return view('layout_index.index');
});
Route::get('loai', function(){
	return view('layout_index.product');
});
Route::get('chitiet', function(){
	return view('layout_index.page.product_simgle');
});
Route::get('gioithieu', function(){
	return view('layout_index.about');
});
Route::get('tintuc', function(){
	return view('layout_index.news');
});
// route cac trang admin

>>>>>>> 07c4f847505d209751dc448699a043b1f58089ed
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