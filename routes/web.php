<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SuppliersController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ArchiveController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductTypeController;
use App\Http\Controllers\BillController;
use App\Http\Controllers\ChartController;

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

/*--------------------------------------------------------------------------------*/

//----->trang chủ
Route::get('index',[PageController::class,'getIndex'])->name('index');
//----->tất cả sản phẩm
Route::get('all',[PageController::class,'getAll'])->name('all');
//----->gioithieu
Route::get('introduce',[PageController::class,'getIntroduce'])->name('introduce');
//----->tintuc
Route::get('news',[PageController::class,'getNews'])->name('news');
//----->đăng nhập
Route::get('login',[PageController::class,'getLogin'])->name('login');
Route::post('login',[PageController::class,'postLogin'])->name('login');
//----->đăng ký
Route::get('signup',[PageController::class,'getSignup'])->name('signup');
Route::post('signup',[PageController::class,'postSignup'])->name('signup');
//----->giỏ hàng
Route::get('cart',[PageController::class,'getCart'])->name('cart');
//----->chi tiết sản phẩm
Route::get('detail/{id}',[PageController::class,'getDetail'])->name('detail');
//----->đọc sách
Route::get('Read',[PageController::class,'getRead'])->name('Read');
//----->thanh toán
Route::get('checkout',[PageController::class,'getCheckout'])->name('checkout');
/*--------------------------------------------------------------------------------*/



//----->trang admin
Route::get('admin',[PageController::class,'getAdmin'])->name('admin');
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
///------>trang admin_CRUD thong tin bill
Route::resource('bill',BillController::class);
///------>trang show thống kê
Route::resource('chart',ChartController::class);




