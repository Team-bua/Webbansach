@extends('layout_index.master')
@section('content')
<section class="slider">
    <div class="container">
        <div id="slide-wrapper">
            <ul id="slider">
                <li>
                    <div class="border_on_img"></div>
                    <img src="images/slide/TrangComicManga_main_920x420.jpg" alt="Lorem ipsum dolor sit amet, consectetuer adipiscing elit.">
                </li>
                <li>
                    <div class="border_on_img"></div>
                    <img src="images/slide/VNDirectT10_mainbanner_920x420.jpg" alt="sed diam nonummy">
                </li>
                <li>
                    <div class="border_on_img"></div>
                    <img src="images/slide/p2-209x179.jpg" alt="Lorem ipsum dolor sit amet, consectetuer adipiscing elit.">
                </li>
                <li>
                    <div class="border_on_img"></div>
                    <img src="images/slide/361437_image20200910t030157126z.jpg" alt="Lorem ipsum dolor sit amet, consectetuer adipiscing elit.">
                </li>
            </ul>
        </div>
    </div>
    <div class="container">
  <ul class="vert-one">
  <li><a href="" class="current" ><center>Danh Mục Sách</center></a></li>
  <li><a href="">CSS Layouts</a></li>

</ul>
</div>
</section>

<<<<<<< HEAD
<section class="about-sec">
    <div class="container">
        <div class="title">
            <h5>Sách hay</h5>
            <hr>
        </div>
        <div class="about-img">
            <figure style="background:url(./images/about-img.jpg)no-repeat;"></figure>
        </div>
        <div class="about-content">
            <h2>About bookstore,</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's printer took a galley of type and Scrambled it to make a type and typesetting industry. Lorem Ipsum has been the book. </p>
            <p>It has survived not only fiveLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's printer took a galley of type and</p>
            <div class="btn-sec">
                <button class="btn ">Thêm Vào Giỏ Hàng</button>
                <button class="btn black">Đọc ONLINE</button>
            </div>
        </div>
        </div>
    </section>
  <section class="recomended-sec">
        <div class="container">
            <div class="row">
               <div class="col-lg-2 col-md-3 col-sm-4">
                    <div class="item">
                        <a href="{{route('detail')}}"><img src="images/r1.jpg" alt="img" ></a>
                        <h6><a href="#">Mua ngay</a></h6>
                    </div>
                </div>
            </div>
             <div class="btn-sec">
                <a href="{{route('all')}}" class="btn gray-btn">Xem Thêm</a>
            </div>
        </div>
    </section>
    <section class="about-sec">
        <div class="container">
        <div class="about-img">
            <figure style="background:url(./images/about-img.jpg)no-repeat;"></figure>
        </div>
        <div class="about-content">
            <h2>About bookstore</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's printer took a galley of type and Scrambled it to make a type and typesetting industry. Lorem Ipsum has been the book. </p>
            <p>It has survived not only fiveLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's printer took a galley of type and</p>
            <div class="btn-sec">
                <a href="#" class="btn yellow">Thêm Vào Giỏ Hàng</a>
                <a href="{{route('Read')}}" class="btn black">Đọc Online</a>
            </div>
        </div>
        </div>
    </section>
    <section class="static about-sec">
        <div class="container">
            <div class="row">
               <div class="col-lg-2 col-md-3 col-sm-4">
                    <div class="item">
                        <a href="{{route('detail')}}"><img src="images/r1.jpg" alt="img" ></a>
                        <h6><a href="#">Buy Now</a></h6>
                    </div>
                </div>
            </div>
             <div class="btn-sec">
                <a href="{{route('all')}}" class="btn gray-btn">Xem Thêm</a>
            </div>
        </div>
    </section>
    <section class="about-sec">
        <div class="container">
            <div class="title">
                <h5>Sách hay</h5>
                <hr>
            </div>
        <div class="about-img">
            <figure style="background:url(./images/about-img.jpg)no-repeat;"></figure>
        </div>
        <div class="about-content">
            <h2>About bookstore,</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's printer took a galley of type and Scrambled it to make a type and typesetting industry. Lorem Ipsum has been the book. </p>
            <p>It has survived not only fiveLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's printer took a galley of type and</p>
            <div class="btn-sec">
                <button class="btn ">Thêm Vào Giỏ Hàng</button>
                <button class="btn black">Đọc ONLINE</button>
            </div>
        </div>
    </section>
    <div class="container">
            <div class="row">
               <div class="col-lg-2 col-md-3 col-sm-4">
                    <div class="item">
                        <a href="{{route('detail')}}"><img src="images/r1.jpg" alt="img" ></a>
                        <h6><a href="#">Buy Now</a></h6>
                    </div>
                </div>
            </div>
             <div class="btn-sec">
                <a href="{{route('all')}}" class="btn gray-btn">Xem Thêm</a>
            </div>
=======
<div class="container">
    
</div>
 <section class="features-sec">
        <div class="container">
            <ul>
                <li>
                    <span class="icon"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
                    <h3>SAFE SHOPPING</h3>
                    <h5>Safe Shopping Guarantee</h5>
                    <h6>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's...</h6>
                </li>
                <li>
                    <span class="icon return"><i class="fa fa-reply-all" aria-hidden="true"></i></span>
                    <h3>30- DAY RETURN</h3>
                    <h5>Moneyback guarantee</h5>
                    <h6>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's...</h6>
                </li>
                <li>
                    <span class="icon chat"><i class="fa fa-comments" aria-hidden="true"></i></span>
                    <h3>24/7 SUPPORT</h3>
                    <h5>online Consultations</h5>
                    <h6>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's...</h6>
                </li>
            </ul>

</section>
<div class="product-widget-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Top Sách Bán Chạy</h2>
                        <a href="" class="wid-view-more">View All</a>
                        <div class="single-wid-product">
                            <a href="single-product.html"><img src="images/r1.jpg" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.html">sách</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$400.00</ins> <del>$425.00</del>
                            </div>                            
                        </div>
                        <div class="single-wid-product">
                            <a href="single-product.html"><img src="images/r1.jpg" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.html">sách</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$400.00</ins> <del>$425.00</del>
                            </div>                            
                        </div>
                        <div class="single-wid-product">
                            <a href="single-product.html"><img src="images/r1.jpg" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.html">sách</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$400.00</ins> <del>$425.00</del>
                            </div>                            
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Sách bán chạy trong tuần</h2>
                        <a href="#" class="wid-view-more">View All</a>
                        <div class="single-wid-product">
                            <a href="single-product.html"><img src="images/r1.jpg" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.html">sách</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$400.00</ins> <del>$425.00</del>
                            </div>                            
                        </div>
                        <div class="single-wid-product">
                            <a href="single-product.html"><img src="images/r1.jpg" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.html">sách</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$400.00</ins> <del>$425.00</del>
                            </div>                            
                        </div>
                        <div class="single-wid-product">
                            <a href="single-product.html"><img src="images/r1.jpg" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.html">sách</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$400.00</ins> <del>$425.00</del>
                            </div>                            
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Top Sách mới</h2>
                        <a href="#" class="wid-view-more">View All</a>
                        <div class="single-wid-product">
                            <a href="single-product.html"><img src="images/r1.jpg" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.html">sách</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$400.00</ins> <del>$425.00</del>
                            </div>                            
                        </div>
                        <div class="single-wid-product">
                            <a href="single-product.html"><img src="images/r1.jpg" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.html">sách</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$400.00</ins> <del>$425.00</del>
                            </div>                            
                        </div>
                        <div class="single-wid-product">
                            <a href="single-product.html"><img src="images/r1.jpg" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.html">sách</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$400.00</ins> <del>$425.00</del>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
<<<<<<< HEAD
=======
>>>>>>> d7bd73b7cf1f0d53ac2b865d93836e84bfc42aaf
>>>>>>> d9422bc5d4cd7ae3bd0a11f3aa6f44fa66d04c69
        </div>
    </div>

<section class="about-sec">
    <div class="container">
        <div class="title">
            <h5>Sách hay</h5>
            <hr>
        </div>
        <div class="about-img">
            <figure style="background:url(./images/about-img.jpg)no-repeat;"></figure>
        </div>
        <div class="about-content">
            <h2>About bookstore,</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's printer took a galley of type and Scrambled it to make a type and typesetting industry. Lorem Ipsum has been the book. </p>
            <p>It has survived not only fiveLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's printer took a galley of type and</p>
            <div class="btn-sec">
                <button class="btn ">Thêm Vào Giỏ Hàng</button>
                <a href="{{route('Read')}}"> <button class="btn black">Đọc ONLINE</button></a>
            </div>
        </div>
        </div>
    </section>
    <section class="recent-book-sec">
        <div class="container">
            <div class="title">
                <h2 style="font-family:Times New Roman;">Sách Hay</h2>
                <hr>
            </div>
            <div class="row">
                <div class="col-lg-2 col-md-3 col-sm-4">
                    <div class="item">
                    <div class="offer">- %20</div>
                        <a href="{{route('detail')}}"> <img src="images/r1.jpg" alt="img"></a>  
                        <h3><a href="#">Keepers of the kalachakara</a></h3>
                        <h6><span class="price">$19</span> / <a href="#">Buy Now</a></h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4">
                    <div class="item">
                        <img src="images/r2.jpg" alt="img">
                        <h3><a href="#">Keepers of the kalachakara</a></h3>
                        <h6><span class="price">$19</span> / <a href="#">Buy Now</a></h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4">
                    <div class="item">
                        <img src="images/r3.jpg" alt="img">
                        <h3><a href="#">Keepers of the kalachakara</a></h3>
                        <h6><span class="price">$19</span> / <a href="#">Buy Now</a></h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4">
                    <div class="item">
                        <img src="images/r4.jpg" alt="img">
                        <h3><a href="#">Keepers of the kalachakara</a></h3>
                        <h6><span class="price">$19</span> / <a href="#">Buy Now</a></h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4">
                    <div class="item">
                        <img src="images/r5.jpg" alt="img">
                        <h3><a href="#">Keepers of the kalachakara</a></h3>
                        <h6><span class="price">$19</span> / <a href="#">Buy Now</a></h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4">
                    <div class="item">
                        <img src="images/r1.jpg" alt="img">
                        <h3><a href="#">Keepers of the kalachakara</a></h3>
                        <h6><span class="price">$19</span> / <a href="#">Buy Now</a></h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4">
                    <div class="item">
                        <img src="images/r2.jpg" alt="img">
                        <h3><a href="#">Keepers of the kalachakara</a></h3>
                        <h6><span class="price">$19</span> / <a href="#">Buy Now</a></h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4">
                    <div class="item">
                        <img src="images/r3.jpg" alt="img">
                        <h3><a href="#">Keepers of the kalachakara</a></h3>
                        <h6><span class="price">$19</span> / <a href="#">Buy Now</a></h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4">
                    <div class="item">
                        <img src="images/r4.jpg" alt="img">
                        <h3><a href="#">Keepers of the kalachakara</a></h3>
                        <h6><span class="price">$19</span> / <a href="#">Buy Now</a></h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4">
                    <div class="item">
                        <img src="images/r5.jpg" alt="img">
                        <h3><a href="#">Keepers of the kalachakara</a></h3>
                        <h6><span class="price">$19</span> / <a href="#">Buy Now</a></h6>
                    </div>
                </div>
            </div>
            <div class="btn-sec">
                <a href="{{route('all')}}" class="btn gray-btn" >Xem Thêm</a>
            </div>
        </div>
    </section>

    
    <a href="#" class="bck"></a>   
@endsection