@extends('layout_index.master')
@section('content')
    <section class="product-sec">
        <div class="container">
            <h1>7 Day Self publish How to Write a Book</h1>
            <div class="row">
                <div class="col-md-6 slider-sec">
                    <!-- main slider carousel -->
                    <div id="myCarousel" class="carousel slide">
                        <!-- main slider carousel items -->
                        <div class="carousel-inner">
                            <div class="active item carousel-item" data-slide-number="0">
                                <img src="images/product1.jpg" class="img-fluid">
                            </div>
                            <div class="item carousel-item" data-slide-number="1">
                                <img src="images/product2.jpg" class="img-fluid">
                            </div>
                            <div class="item carousel-item" data-slide-number="2">
                                <img src="images/product3.jpg" class="img-fluid">
                            </div>
                        </div>
                        <!-- main slider carousel nav controls -->
                        <ul class="carousel-indicators list-inline">
                            <li class="list-inline-item active">
                                <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#myCarousel">
                                <img src="images/product1.jpg" class="img-fluid">
                            </a>
                            </li>
                            <li class="list-inline-item">
                                <a id="carousel-selector-1" data-slide-to="1" data-target="#myCarousel">
                                <img src="images/product2.jpg" class="img-fluid">
                            </a>
                            </li>
                            <li class="list-inline-item">
                                <a id="carousel-selector-2" data-slide-to="2" data-target="#myCarousel">
                                <img src="images/product3.jpg" class="img-fluid">
                            </a>
                            </li>
                        </ul>
                    </div>
                    <!--/main slider carousel-->
                </div>
                <div class="col-md-6 slider-content">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's printer took a galley of type and Scrambled it to make a type and typesetting industry. Lorem Ipsum has been the book. </p>
                    <p>t has survived not only fiveLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's printer took a galley of type and</p>
                    <ul>
                        <li>
                            <span class="name">Giá niêm yết</span><span class="clm">:</span>
                            <span class="price">$10.99</span>
                        </li>
                        <li>
                            <span class="name">Giá Bán</span><span class="clm">:</span>
                            <span class="price final">$3.37</span>
                        </li>
                    </ul>
                    <form action="" class="cart">
                                        <div class="quantity">
                                              <span class="name">Số Lượng</span><span class="clm"> : </span> <input type="number" size="4" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1">
                                        </div>
                                       
                                    </form>
                    <div class="btn-sec">
                        <button class="btn ">Thêm Vào Giỏ Hàng</button>
                        <button class="btn black">Đọc ONLINE</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
 <section class="static about-sec">
        <div class="container">
            <h4>Sản Phẩm Liên Quan</h4>
            <hr>
            <div class="clear"></div>
    <div id="carousel">
      <ul class=" jcarousel-skin-tfc">
        <li><a href="#"><img src="images/r1.jpg" alt="" title=""></a></li>
        <li><a href="#"><img src="images/r1.jpg" alt="" title=""></a></li>
        <li><a href="#"><img src="images/r1.jpg" alt="" title=""></a></li>
        <li><a href="#"><img src="images/r1.jpg" alt="" title=""></a></li>
        <li><a href="#"><img src="images/r1.jpg" alt="" title=""></a></li>
        <li><a href="#"><img src="images/r1.jpg" alt="" title=""></a></li>
      </ul>
    </div>
        </div>
    </section>
    <section class="static about-sec">
        <div class="container">
          
        </div>
    </section>
    

    <a href="#" class="bck"></a> 
@endsection