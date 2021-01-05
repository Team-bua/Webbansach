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
use App\Http\Controllers\SlideController;
use App\Http\Controllers\PublisherController;
use App\Http\Controllers\LoginController;


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
//----->đăng xuất
Route::get('logout',[PageController::class,'postLogout'])->name('logout');
//----->đăng ký
Route::get('signup',[PageController::class,'getSignup'])->name('signup');
Route::post('signup',[PageController::class,'postSignup'])->name('signup');
//----->giỏ hàng
Route::get('cart',[PageController::class,'getCart'])->name('cart');
Route::get('/addcart/{id}',[PageController::class,'getAddcart'])->name('addcart');
Route::get('/delcart/{id}',[PageController::class,'getDelcart'])->name('delcart');
//----->chi tiết sản phẩm
Route::get('detail/{id}',[PageController::class,'getDetail'])->name('detail');
Route::get('product_type/{type}',[PageController::class,'getproductType'])->name('product_type');
//----->đọc sách
Route::get('Read',[PageController::class,'getRead'])->name('Read');
//----->thanh toán
Route::get('checkout',[PageController::class,'getCheckout'])->name('checkout');
Route::post('checkout',[PageController::class,'postCheckout'])->name('checkout');
//----->Tìm kiếm
Route::get('search',[PageController::class,'getSearch'])->name('search');
/*--------------------------------------------------------------------------------*/



//----->trang admin
Route::group(['middleware' => 'App\Http\Middleware\LoginMiddleware'], function() {
    Route::get('admin',[PageController::class,'getAdmin'])->name('admin');
});
////----->trang admin_CRUD san pham
Route::resource('book',ProductController::class);
////----->trang admin_CRUD loai san pha,
Route::resource('book_type',ProductTypeController::class);
Route::post('book_edit/edit',[ProductTypeController::class,'getEdit'])->name('book_edit');
Route::post('book_update',[ProductTypeController::class,'getUpdate'])->name('book_update');
////----->trang admin_CRUD nha cung cap
Route::resource('supplier',SuppliersController::class);
///------>trang admin_CRUD kho hang
Route::resource('archive',ArchiveController::class);
///------>trang admin_CRUD thong tin user
Route::resource('user',UserController::class);
///------>trang admin_CRUD thong tin bill
Route::resource('bill',BillController::class);
Route::get('bill_processing/{id}',[BillController::class,'getProcessing'])->name('bill_processing');
Route::get('bill_receiving/{id}',[BillController::class,'getReceiving'])->name('bill_receiving');
Route::get('bill_delivered/{id}',[BillController::class,'getDelivered'])->name('bill_delivered');
///------>trang show thống kê
Route::resource('chart',ChartController::class);
///------>trang show slide
Route::resource('slide',SlideController::class);
Route::get('slide_on/{id}',[SlideController::class,'getOn'])->name('slide_on');
Route::get('slide_off/{id}',[SlideController::class,'getOff'])->name('slide_off');
///------>Trang dành cho nhà xuất bản
Route::resource('publisher',PublisherController::class);

