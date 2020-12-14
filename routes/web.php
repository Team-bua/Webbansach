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

    return redirect()->route('trangchu');

    return view('');

});

//----->trang chủ
Route::get('trangchu',[PageController::class,'getIndex'])->name('trangchu');
//----->loại
Route::get('loaisach',[PageController::class,'getloaisach'])->name('loaisach');
//----->chitiet
Route::get('chitiet',[PageController::class,'getchitiet'])->name('chitiet');
//----->tất cả sản phẩm
Route::get('tatcaSP',[PageController::class,'gettatcaSP'])->name('tatcaSP');
//----->gioithieu
Route::get('gioithieu',[PageController::class,'getgioithieu'])->name('gioithieu');
//----->tintuc
Route::get('tintuc',[PageController::class,'gettintuc'])->name('tintuc');
//-----> giỏ hàng
Route::get('giohang',[PageController::class,'getcart'])->name('giohang');
//----->đăng nhập-Đăng ký
Route::get('dangky',[PageController::class,'getdangky'])->name('dangky');
/*--------------------------------------------------------------------------------*/

// trang admin product
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
// trang admin product_type
Route::get('adproduct_type', function (){
	return view('layout_admin.product_type.create_type');
});
//tran admin thong ke

Route::get('chartbook', function (){
	return view('layout_admin.chart.chart_book');
});

//----->trang admin
Route::get('admin',[PageController::class,'getadmin'])->name('admin');

