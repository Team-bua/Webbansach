<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
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


    return redirect()->route('trangchu');



    return redirect()->route('trangchu');


});

//----->trang chủ
Route::get('index',[PageController::class,'getIndex'])->name('index');
//----->loại

//----->chitiet
Route::get('detail',[PageController::class,'getdetail'])->name('detail');
//----->tất cả sản phẩm
Route::get('all_products',[PageController::class,'get_all_products'])->name('all_products');
//----->gioithieu
Route::get('about',[PageController::class,'getabout'])->name('about');
//----->tintuc
Route::get('news',[PageController::class,'getnews'])->name('news');
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
Route::get('admin',[PageController::class,'getadmin'])->name('admin');
Route::get('login',[PageController::class,'getlogin'])->name('login');
Route::get('register',[PageController::class,'geregister'])->name('register');
Route::get('cart',[PageController::class,'getcart'])->name('cart');

Route::resource('list',ProductController::class);

