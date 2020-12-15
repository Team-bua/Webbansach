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
    return redirect()->route('trangchu');

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

// trang admin product
Route::get('admin', function(){
	return view('layout_admin.index_admin');
});

Route::get('edproduct', function(){
	return view('layout_admin.product.products_edit');
});
// trang admin product_type
Route::get('adproduct_type', function (){
	return view('layout_admin.product_type.create_type');
});
//tran admin thong ke

Route::get('chartbook', function (){
	return view('layout_admin.chart.chart_book');
});

//----->trang admin
Route::get('dashboard',[PageController::class,'getadmin'])->name('admin');
Route::get('dangnhap',[PageController::class,'getdangnhap'])->name('dangnhap');
Route::get('dangky',[PageController::class,'getdangky'])->name('dangky');
Route::get('giohang',[PageController::class,'getcart'])->name('giohang');
////----->trang admin_CRUD san pham
Route::resource('list',ProductController::class);
////----->trang admin_CRUD loai san pha,
Route::resource('list_loaisanpham',ProductTypeController::class);
////----->trang admin_CRUD nha cung cap
Route::resource('list_nhacungcap',SuppliersController::class);
///------>trang admin_CRUD kho hang
Route::resource('list_kho',ArchiveController::class);
///------>trang admin_CRUD thong tin user
Route::resource('list_user',UserController::class);



