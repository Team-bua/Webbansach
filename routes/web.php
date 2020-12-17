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
<<<<<<< HEAD
    return view('welcome');
=======
    return redirect()->route('index');

>>>>>>> 2f011455976f7b18a90446378e2bf63e3ce20b73
});

/*--------------------------------------------------------------------------------*/

//----->trang chủ
Route::get('index',[PageController::class,'getIndex'])->name('index');
//----->tất cả sản phẩm
Route::get('all',[PageController::class,'getall'])->name('all');
//----->gioithieu
Route::get('introduce',[PageController::class,'getintroduce'])->name('introduce');
//----->tintuc
Route::get('news',[PageController::class,'getnews'])->name('news');
//----->đăng nhập
Route::get('login',[PageController::class,'getlogin'])->name('login');
//----->đăng ký
Route::get('signup',[PageController::class,'getsignup'])->name('signup');
//----->giỏ hàng
Route::get('cart',[PageController::class,'getcart'])->name('cart');
//----->chi tiết sản phẩm
Route::get('detail',[PageController::class,'getdetail'])->name('detail');
//----->đọc sách
Route::get('Read',[PageController::class,'getread'])->name('Read');
//----->thanh toán
Route::get('checkout',[PageController::class,'getcheckout'])->name('checkout');
/*--------------------------------------------------------------------------------*/



//----->trang admin
Route::get('admin',[PageController::class,'getadmin'])->name('admin');
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
<<<<<<< HEAD
///------>trang admin_CRUD thong tin order
=======
///------>trang admin_CRUD thong tin bill
>>>>>>> 6af55e412e6dd051da70d68d1f5e740e268c3600
Route::resource('bill',BillController::class);
///------>trang show thống kê
Route::resource('chart',ChartController::class);
<<<<<<< HEAD
=======


>>>>>>> 2f011455976f7b18a90446378e2bf63e3ce20b73


