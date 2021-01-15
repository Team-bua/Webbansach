<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Repositories\PageRepository;
use App\Http\Requests\PageRequest;
use App\Http\Requests\UserRequest;
use Exception;
use Analytics;
use Session;
use Spatie\Analytics\Period;
use Illuminate\Support\Facades\Log;
   
class PageController extends Controller
{
    /**
     * The ProductRepository instance.
     *
     * @var \App\Repositories\PageRepository
     * 
     */
    protected $repository;



    /**
     * Create a new PostController instance.
     *
     * @param  \App\Repositories\PageRepository $repository
     *
     */
    public function __construct(PageRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getIndex()
    {
        $slide = $this->repository->getSlide();
        $product_hightlights = $this->repository->getAllproductHighlights();
        $product_sale = $this->repository->getAllProductSale();
        $product_new = $this->repository->getAllproductNew();
        $product_type = $this->repository->getProductType();
        return view(
            'layout_index.index',
            compact('product_new', 'product_type', 'slide', 'product_sale', 'product_hightlights')
        );
    }

    public function getDetail($id)
    {
        $product_detail = $this->repository->getproduct($id);
        $image_detail = count($product_detail->imagedetail);
        $comments = $this->repository->getComment($id);
        $rating = $this->repository->getRating($id);
        return view('layout_index.page.product_detail', compact('comments', 'product_detail', 'image_detail','rating'));
    }


    public function getNews()
    { 
        $content_fist = $this->repository->getContentFist();
        $content = $this->repository->getContent();
        return view('layout_index.page.news', compact('content','content_fist'));
    }
    public function getNewsContent($id)
    { 
        $content = $this->repository->getContent();
        $content_detail = $this->repository->getContentDetail($id);
       
        return view('layout_index.page.news-detail', compact('content_detail','content'));
    }
    // tin tức

    public function getAllNew()
    {
        $product_new = $this->repository->getAllproductNew();
        $product_type = $this->repository->getProductType();

        return view('layout_index.page.view_all_new', compact('product_type', 'product_new'));
    }
    public function getAllSale()
    {
        $product_type = $this->repository->getProductType();
        $product_sale = $this->repository->getAllProductSale();
        return view('layout_index.page.view_all_sale', compact('product_type', 'product_sale'));
    }
    public function getAllHighlights()
    {
        $product_type = $this->repository->getProductType();
        $product_highlights = $this->repository->getAllproductHighlights();
        return view('layout_index.page.view_all_highlights', compact('product_type', 'product_highlights'));
    }
    // xem tất cả sach theo khuyến mãi , nổi bật

    public function AllBook()
    {
        $product_all = $this->repository->getAllproductbook();
        $product_type = $this->repository->getProductType();
        return view('layout_index.page.all_book', compact('product_all', 'product_type'));
    }
    // xem tất cả cá sách

    public function getMenuType($id)
    {
        $type_name = $this->repository->getProductTypeName($id);
        $product_types = $this->repository->getProductTypeID($id);
        return view('layout_index.page.view_type', compact('product_types', 'type_name'));
    }
    // xem sách của từng thể loại

    public function getMenuCompany($id)
    {
        $company_name = $this->repository->getProductCompanyName($id);
        $product_company = $this->repository->getProductCompanyID($id);
        return view('layout_index.page.product_company', compact('product_company', 'company_name'));
    }

    public function getIntroduce()
    {
        return view('layout_index.page.about');
    }

    public function getLogin()
    {
        return view('layout_index.page.login');
    }

    public function postComment($id, Request $request)
    {
        $this->repository->postComment($id, $request);
        return redirect()->back();
    }

    public function postRating($id, Request $request)
    {
        $this->repository->postRating($id, $request);
        return redirect()->back();
    }

    public function postLogin(Request $request)
    {
        $credentaials = array('username' => $request->username, 'password' => $request->password);
        if (Auth::attempt($credentaials)) {
            return redirect()->back()->with(['flag' => 'success', 'messege' => 'Đăng nhập thành công']);
        } else {
            return redirect()->back()->with(['flag' => 'danger', 'messege' => 'Đăng nhập không thành công']);
        }
    }

    public function getSearch(Request $req)
    {
        $search = $this->repository->getSearch($req);
        return view('layout_index.page.search', compact('search'));
    }

    public function postLogout()
    {
        Auth::logout();
        return redirect()->route('index');
    }

    public function getCart()
    {
        return view('layout_index.page.cart');
    }

    public function getAddCart(Request $request, $id)
    {
        return $this->repository->getAddCart($request, $id);
    }

    public function updateCart(Request $request)
    {
        return $this->repository->postCart($request);
    }

    public function getDelcart($id)
    {
        return $this->repository->getDelcart($id);
    }

    public function getSignup()
    {
        return view('layout_index.page.register');
    }

    public function postSignup(PageRequest $request)
    {
        $this->repository->createuser($request);
        return redirect()->back()->with('thongbao', 'Đăng ký thành công');
    }

    public function getRead($id)
    {
        $pdf = $this->repository->getRead($id);
        return view('layout_index.page.Read_book', compact('pdf'));
    }

    public function getCheckout()
    {
        if (Auth::check()) {
            $name = Auth::user()->full_name;
            $email = Auth::user()->email;
            $address = Auth::user()->address;
            $phone = Auth::user()->phone;
        } else {
            $name = "";
            $email = "";
            $address = "";
            $phone = "";
        }
        return view('layout_index.page.checkout', compact('name', 'email', 'address', 'phone'));
    }

    public function postCheckout(Request $request)
    {
        try {
            $this->repository->postCheckout($request);
            return redirect()->back()->with(['flag' => 'success', 'messege' => 'Đặt hàng thành công']);
        } catch (Exception $exception) {
            return redirect()->back()->with(['flag' => 'danger', 'messege' => 'Không tồn tại sản phẩm']);
        }
    }

    public function getAdmin()
    {
        $data [ "fetchTotalVisitorsAndPageViews"]= Analytics:: fetchTotalVisitorsAndPageViews(Period::days(0));
        $data [ "fetchTopBrowsers"]= Analytics::fetchTopBrowsers(Period::days(0));
        $user = $this->repository->getAll();
       $product = $this->repository->getAllproductbook();
      return view('layout_admin.index_admin',$data, compact('product', 'user'));
    }

    public function getInfo($id)
    {
        $customer = $this->repository->getInfo($id);
        $bill = $this->repository->getBill();
        return view('layout_index.customer.info', compact('customer', 'bill'));
    }

    public function changeInfo(Request $request, $id)
    {
        $this->repository->changeInfo($request, $id);
        return redirect()->back()->with('thongbao', 'Cập nhật thông tin thành công');
    }

    public function updatePassword(UserRequest $request, $id)
    {
        $this->repository->updatePassword($request, $id);
        return redirect()->back();
    }
   
    public function changeLanguage($language)
    {
        Session::put('language', $language);
    
        return redirect()->back();
    }


}
