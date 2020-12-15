<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SuppliersController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ArchiveController;
use App\Http\Controllers\UserController;

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
    return redirect()->route('trangchu');
});

//----->trang chủ
Route::get('trangchu',[PageController::class,'getIndex'])->name('trangchu');
//----->loại

//----->chitiet
Route::get('chitiet',[PageController::class,'getchitiet'])->name('chitiet');
//----->tất cả sản phẩm
Route::get('tatcaSP',[PageController::class,'gettatcaSP'])->name('tatcaSP');
//----->gioithieu
Route::get('gioithieu',[PageController::class,'getgioithieu'])->name('gioithieu');
//----->tintuc
Route::get('tintuc',[PageController::class,'gettintuc'])->name('tintuc');
/*--------------------------------------------------------------------------------*/
//----->trang admin
Route::get('dashboard',[PageController::class,'getadmin'])->name('admin');
Route::get('dangnhap',[PageController::class,'getdangnhap'])->name('dangnhap');
Route::get('dangky',[PageController::class,'getdangky'])->name('dangky');
Route::get('giohang',[PageController::class,'getcart'])->name('giohang');
////----->trang admin_CRUD san pham
Route::get('danhsach_sanpham',[ProductController::class,'getlaysanpham'])->name('danhsach-sanpham');
Route::get('them_sanpham',[ProductController::class,'getthemsanpham'])->name('them-sanpham');
////----->trang admin_CRUD nha cung cap
Route::get('danhsach_nhacungcap',[SuppliersController::class,'getlaynhacungcap'])->name('danhsach-nhacungcap');
Route::get('them_nhacungcap',[SuppliersController::class,'getthemnhacungcap'])->name('them-nhacungcap');
///------>trang admin_CRUD kho hang
Route::get('danhsach_khohang',[ArchiveController::class,'getlaykhohang'])->name('danhsach-khohang');
///------>trang admin_CRUD thong tin user
Route::get('thongtin_user',[UserController::class,'getthongtinuser'])->name('thongtin-user');
