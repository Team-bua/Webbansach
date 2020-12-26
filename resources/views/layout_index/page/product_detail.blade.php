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

                                <img id="image-main" style="height:505px"
                                    src=" {{ asset('images/product/' . $product_detail->image) }}" class="img-fluid">

                            </div>

                        </div>


                        <!-- main slider carousel nav controls -->
                        @if($product_detail->imagedetail)
                        <ul class="carousel-indicators list-inline">
                            @for($i=0; $i<3; $i++)
                            <li class="list-inline-item active">
                                <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#myCarousel">
                                <img style="height:160px"src="{{ asset('images/product_detail/'.$product_detail->imagedetail[$i]) }}" class="img-fluid">                
                                </a>
                            </li>
                            @endfor
                        </ul>
                        @endif
                    </div>
                    <!--/main slider carousel-->
                </div>
                
                <script>
                    let imageMain = document.getElementById('image-main');
                    let imageDetail = document.querySelectorAll('.img-fluid');
                    imageDetail.forEach(function(btn) {
                        btn.addEventListener('click', function() {
                            let src = this.src;
                            imageMain.src = src;
                        });
                    });

                </script>
                <div class="col-md-6 slider-content">
                    <ul>
                        <li>
                            <span class="name">Giá Bán</span><span class="clm">:</span>
                            <span class="price">{{$product_detail->unit_price}} Đ</span>
                        </li>
                        <li>
                            <span class="name">Giá Khuyến mãi</span><span class="clm">:</span>
                            <span class="price final">{{$product_detail->promotion_price}} Đ</span>
                        </li>

                    </ul>

                    <form action="" class="cart">
                        <div class="quantity">
                            <span class="name">Số Lượng</span><span class="clm"> : </span> <input type="number" size="4"
                                class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1">
                        </div>

                    </form>
                    <div class="btn-sec">
                        <a href="{{url('addcart',$product_detail->id)}}"><button class="btn ">Thêm Vào Giỏ Hàng</button></a>
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
                                <div>
                                    <h1>Rating Card</h1>
                                </div>
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
                            Chỉ có thành viên mới có thể nhận xét. Vui <a href="{{ route('login') }}">Đăng nhập</a> hoặc<a
                                href="{{ route('signup') }}"> Đăng Ký</a>
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

                </div>
            </div>
        </div>
    </section>
    <a href="#" class="bck"></a>
@endsection

<script>
    let varName = document.getElementById('elementId');

</script>
