<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SuppliersController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ArchiveController;
use App\Http\Controllers\UserController;


use App\Http\Controllers\ProductTypeController;
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
    return redirect()->route('index');

});

//----->trang chủ
Route::get('index',[PageController::class,'getIndex'])->name('index');
//----->loại

//----->chitiet
Route::get('detail',[PageController::class,'getdetail'])->name('detail');
//----->tất cả sản phẩm
Route::get('all',[PageController::class,'getall'])->name('all');
//----->gioithieu
Route::get('introduce',[PageController::class,'getintroduce'])->name('introduce');
//----->tintuc
Route::get('news',[PageController::class,'getnews'])->name('news');
/*--------------------------------------------------------------------------------*/



//----->trang admin
Route::get('admin',[PageController::class,'getadmin'])->name('admin');
Route::get('login',[PageController::class,'getlogin'])->name('login');
Route::get('signup',[PageController::class,'getsignup'])->name('signup');
Route::get('cart',[PageController::class,'getcart'])->name('cart');
////----->trang admin_CRUD san pham
Route::resource('book',ProductController::class);
////----->trang admin_CRUD loai san pha,
Route::resource('book_type',ProductTypeController::class);
////----->trang admin_CRUD nha cung cap
Route::resource('supplier',SuppliersController::class);
///------>trang admin_CRUD kho hang
Route::resource('archive',ArchiveController::class);
///------>trang admin_CRUD thong tin user
Route::resource('user',UserController::class);



