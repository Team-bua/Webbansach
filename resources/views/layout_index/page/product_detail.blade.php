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
                        <div class="offer">- %20</div>
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
                        <button class="btn ">Mua Ngay</button>
                        <button class="btn black">Đọc ONLINE</button>
                    </div>

                </div>
            </div>
        </div>
    </section>
  <section class="comment">
    <div class="container">
        <div id="comment-wrapper">
            <div id="tabs" class="htabs">
      <a href="#tab-specification">Đánh Giá</a>
      <a href="#tab-review">Bình Luận</a> 
    </div>
    <div id="tab-specification" class="tab-content">
      <div class="cpt_product_description ">
        <div>
            <div class="rating-card">
        <div><h1>Rating Card</h1></div>
        <div class="rating">
            <h2>4.0</h2>
            <i aria-hidden="true" class="fa fa-star"></i>
            <i aria-hidden="true" class="fa fa-star"></i>
            <i aria-hidden="true" class="fa fa-star"></i>
            <i aria-hidden="true" class="fa fa-star"></i>
            <i aria-hidden="true" class="fa fa-star-o"></i>
            <p><i class="fa fa-user" aria-hidden="true"></i> 0 Review</p>
        </div>
        <div class="rating-process">
            <div class="rating-right-part">
                <p><i aria-hidden="true" class="fa fa-star"></i> 80%</p>
                <div class="progress"></div>
            </div>
            <div class="rating-right-part">
                <p><i aria-hidden="true" class="fa fa-star"></i> 60%</p>
                <div class="progress-2"></div>
            </div>
            <div class="rating-right-part">
                <p><i aria-hidden="true" class="fa fa-star"></i> 40%</p>
                <div class="progress-3"></div>
            </div>
            <div class="rating-right-part">
                <p><i aria-hidden="true" class="fa fa-star"></i> 20%</p>
                <div class="progress-4"></div>
            </div>
            <div class="rating-right-part">
                <p><i aria-hidden="true" class="fa fa-star"></i> 10%</p>
                <div class="progress-5"></div>
            </div>
        </div>
        <div style="clear:both;"></div>
    </div>
    <br>
    Chỉ có thành viên mới có thể nhận xét. Vui <a href="{{route('login')}}">Đăng nhập</a> hoặc<a href="{{route('signup')}}"> Đăng Ký</a>
        </div>
        <div class="rating1"> 
<input type="radio" name="rating" value="5" id="5">
<label for="5">☆</label> 
<input type="radio" name="rating" value="4" id="4">
<label for="4">☆</label> 
<input type="radio" name="rating" value="3" id="3">
<label for="3">☆</label> 
<input type="radio" name="rating" value="2" id="2">
<label for="2">☆</label> 
<input type="radio" name="rating" value="1" id="1">
<label for="1">☆</label>
</div>
      </div>
    </div>
      <div id="tab-review" class="tab-content">
        <div class="rating-card">
        <form action="" method="post">
            <div class="card border-primary rounded-0">
                <div class="card-body p-3">
                    <div class="form-group">
                    <div class="input-group mb-2">
                    <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                    </div>
                                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre y Apellido" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                        </div>
                                        <input type="email" class="form-control" id="nombre" name="email"  placeholder="ejemplo@gmail.com" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
                                        </div>
                                        <textarea style="resize: none;" rows="5" cols="30" class="form-control"  placeholder="Envianos tu Mensaje" required ></textarea>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <input type="submit" value="Enviar" class="btn btn-info btn-block rounded-0 py-2">
                                </div>
                            </div>

                        </div>
                    </form>
        <div style="clear:both;"></div>
    </div>
    </div>
    </div>
    </div>
    </section>

    <a href="#" class="bck"></a> 
@endsection