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
Route::get('admin',[PageController::class,'getadmin'])->name('admin');
Route::get('dangnhap',[PageController::class,'getdangnhap'])->name('dangnhap');
Route::get('dangky',[PageController::class,'getdangky'])->name('dangky');
Route::get('giohang',[PageController::class,'getcart'])->name('giohang');

