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
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\SessionController;


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

//----->tất cả sản phẩm đang có
Route::get('all_book',[PageController::class,'AllBook'])->name('all_book');
//----->tất cả sản phẩm theo mục
Route::get('new',[PageController::class,'getAllNew'])->name('allnew');
Route::get('sale',[PageController::class,'getAllSale'])->name('allsale');
Route::get('highlights',[PageController::class,'getAllHighlights'])->name('allhighlights');
//----->gioithieu
Route::get('introduce',[PageController::class,'getIntroduce'])->name('introduce');
//----->tintuc
Route::get('news',[PageController::class,'getNews'])->name('news');
//----->đăng nhập
Route::get('login',[LoginController::class,'getLogin'])->name('login');
Route::post('login',[LoginController::class,'postLogin'])->name('login');
//----->đăng xuất
Route::get('logout',[LoginController::class,'postLogout'])->name('logout');
//----->đăng ký
Route::get('signup',[PageController::class,'getSignup'])->name('signup');
Route::post('signup',[PageController::class,'postSignup'])->name('signup');
//----->giỏ hàng
Route::get('cart',[PageController::class,'getCart'])->name('cart');
Route::get('/addcart/{id}',[PageController::class,'getAddcart'])->name('addcart');
Route::get('/delcart/{id}',[PageController::class,'getDelcart'])->name('delcart');
Route::post('cart', [PageController::class, 'updateCart'])->name('cart');
//----->chi tiết sản phẩm
Route::get('detail/{id}',[PageController::class,'getDetail'])->name('detail');
Route::get('product_type/{type}',[PageController::class,'getMenuType'])->name('product_type');
//----->thông tin khách hàng
Route::get('/info/{id}',[PageController::class,'getInfo'])->name('info');
Route::post('/changeinfo/{id}',[PageController::class,'changeinfo'])->name('changeinfo');
Route::post('/updatePassword/{id}',[PageController::class,'updatePassword'])->name('updatePassword');
//----->đọc sách
Route::get('Read',[PageController::class,'getRead'])->name('Read');
//----->thanh toán
Route::get('checkout',[PageController::class,'getCheckout'])->name('checkout');
Route::post('checkout',[PageController::class,'postCheckout'])->name('checkout');
//----->Tìm kiếm
Route::get('search',[PageController::class,'getSearch'])->name('search');
//----->Bình Luận
Route::put('comment/{id}',[PageController::class,'postComment'])->name('comment');
//----->nhà xuất bản

/*--------------------------------------------------------------------------------*/



//----->trang admin
Route::group(['middleware' => 'App\Http\Middleware\LoginMiddleware'], function() {
    Route::get('admin',[PageController::class,'getAdmin'])->name('admin');
});
////----->trang admin_CRUD san pham
Route::resource('book',ProductController::class);
Route::get('product_on/{id}',[ProductController::class,'getSell'])->name('product_on');
Route::get('product_off/{id}',[ProductController::class,'getStopSell'])->name('product_off');
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
Route::get('/getrole/{id}',[UserController::class,'getRole'])->name('getrole');
Route::post('/changerole/{id}',[UserController::class,'changeRole'])->name('changerole');
///------>trang admin_CRUD thong tin bill
Route::resource('bill',BillController::class);
Route::get('bill_processing/{id}',[BillController::class,'getProcessing'])->name('bill_processing');
Route::get('bill_receiving/{id}',[BillController::class,'getReceiving'])->name('bill_receiving');
Route::get('bill_delivered/{id}',[BillController::class,'getDelivered'])->name('bill_delivered');
Route::get('bill_fail/{id}',[BillController::class,'getFail'])->name('bill_fail');

Route::get('receiving',[BillController::class,'Received'])->name('receiving');
Route::get('not_receiving',[BillController::class,'NotReceived'])->name('notreceiving');
Route::get('complete_receiving',[BillController::class,'Complete'])->name('completereceiving');
Route::get('fails',[BillController::class,'Fails'])->name('fails');
///------>trang show thống kê
Route::resource('chart',ChartController::class);
///------>trang show slide
Route::resource('slide',SlideController::class);
Route::get('slide_on/{id}',[SlideController::class,'getOn'])->name('slide_on');
Route::get('slide_off/{id}',[SlideController::class,'getOff'])->name('slide_off');
///------>Trang dành cho nhà xuất bản
Route::resource('publisher',PublisherController::class);

Route::resource('companies',CompanyController::class);
Route::get('product_company/{type}',[PageController::class,'getMenuCompany'])->name('product_company');
///------>Trang tìm và lưu sesstion company
Route::post('/slidebar/getcompany', [SessionController::class, 'getCompanyIdSession'])->name('slidebar_companyid');
