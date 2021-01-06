@extends('layout_index.master')
@section('content')
<section class="product-sec">
    <div class="container">

        <h1>{{$product_detail->name}}</h1>
        <div class="row">
            <div class="col-md-6 slider-sec">

                <div id="myCarousel" class="carousel slide">
                    <!-- main slider carousel items -->
                    <div class="carousel-inner">
                        <div class="sale">- %20</div>
                        <div class="active item carousel-item" data-slide-number="0">
                            <img id="image-main" style="height:505px" src=" {{ asset('images/product/' . $product_detail->image) }}" class="img-fluid">
                        </div>
                    </div>
                    <!-- main slider carousel nav controls -->
                    @if($product_detail->imagedetail)
                    <ul class="carousel-indicators list-inline">
                        @for($i=0; $i<$image_detail; $i++) <li class="list-inline-item active">
                            <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#myCarousel">
                                <img style="height:160px;width:120px;" src="{{ asset('images/product_detail/'.$product_detail->imagedetail[$i]) }}" class="img-fluid">
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
                    btn.addEventListener('mouseover', function() {
                        let src = this.src;
                        imageMain.src = src;
                    });
                    
                });
            </script>

            <div class="col-md-6 slider-content">
                <p style="text-align:justify">{!! $product_detail->description  !!}</p>
                <ul>
                    @if($product_detail->promotion_price == 0)
                    <li>
                        <span class="name">Giá Bán</span><span class="clm">:</span>
                        <span class="price final" style="color:black">{{number_format($product_detail->unit_price,0,"",",")}}VNĐ</span>

                    </li>
                    @else
                    <li>
                        <span class="name">Giá Bán</span><span class="clm">:</span>
                        <span class="price">{{number_format($product_detail->unit_price,0,"",",")}}VNĐ</span>
                        <span class="name">Giá Khuyến mãi</span><span class="clm">:</span>
                        <span class="price final">{{number_format($product_detail->promotion_price,0,"",",")}}VNĐ</span>

                    </li>
                    @endif
                </ul>

                <form action="" class="cart">
                    <div class="quantity">
                        <span class="name">Số Lượng</span><span class="clm"> : </span> <input type="number" size="4" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1">
                    </div>
                </form>
                <div class="btn-sec">
                    <a href="javascript:"><button class="btn" onclick="AddCart('{{$product_detail->id}}')">Thêm Vào Giỏ Hàng</button></a>
                    <button class="btn " data-toggle="modal" data-target="#product_view">Mua Ngay</button>
                    <a href="{{route('Read')}}"><button class="btn black">Đọc ONLINE</button></a>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <div class="modal fade product_view" id="product_view">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 product_img">
                        <img src="{{ asset('images/product/' . $product_detail->image) }}" class="img-responsive" width="200px">
                    </div>
                    <div class="col-md-6 product_content">
                        <h4>{{ $product_detail->name }}</h4>
                        @if($product_detail->promotion_price == 0)
                        <h3 class="cost">
                        <span class="glyphicon glyphicon-usd"></span> {{number_format($product_detail->unit_price,0,"",",")}}VNĐ 
                         @else
                        <small class="pre-cost">
                        <span class="glyphicon glyphicon-usd"></span> {{number_format($product_detail->unit_price,0,"",",")}}VNĐ
                        </small>
                        <span class="glyphicon glyphicon-usd"></span> {{number_format($product_detail->promotion_price,0,"",",")}}VNĐ
                        </h3>
                        @endif
                        <div class="space-ten"></div>
                        <div class="btn-ground">
                            <a href=""<button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-shopping-cart"></span> Thanh Toán</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<section class="comment">
    <div class="container">
        <div id="comment-wrapper">
            <div id="tabs" class="htabs">
                <a href="#tab-specification">Đánh Giá</a>
                <a href="#tab-review">Bình Luận</a>
                <a href="#tab-information">Thông Tin</a>
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
                                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="user name" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                        </div>
                                        <input type="email" class="form-control" id="nombre" name="email" placeholder="abc@gmail.com" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
                                        </div>
                                        <textarea style="resize: none;" rows="4" cols="30" class="form-control" placeholder="messenger" required></textarea>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <input type="submit" value="Gửi" class="btn btn-info btn-block rounded-0 py-2">
                                </div>
                            </div>
                            <br>

                        </div>
                    </form>
                    <div style="clear:both;"></div>
                </div>
            </div>
            <div id="tab-information" class="tab-content">
                <div class="cpt_product_description ">
                    <div>
                        <section class="features">
                            <ul>
                                <li><i class="fas fa-check"></i>Tác Giả:{{ $product_detail->publisher  }}</li>
                                <li><i class="fas fa-check"></i>Nhà Phát Hành: {{ $product_detail->publisher  }}</li>
                                <li><i class="fas fa-check"></i>Định Dạng: {{ $product_detail->format }}</li>
                                <li><i class="fas fa-check"></i>Ngày Phát Hành:{{ $product_detail->releasedate }}</li>
                                <li><i class="fas fa-check"></i>Ngôn Ngữ:{{ $product_detail->language }}</li>
                                <li><i class="fas fa-check"></i>Kích Thước:{{ $product_detail->size  }}</li>
                                <li><i class="fas fa-check"></i>Số Trang:{{ $product_detail->pagenumber  }}</li>
                            </ul>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div id="last-product-wrapper">
            <div id="comment-list">
                <ul>
                    <li class="com-title">
                        Team bùa
                        <br>
                        <span>2020-19-01 10:00:00</span>
                    </li>
                    <li class="com-details">
                        Nếu bạn đọc bình luận này thì bố mẹ bạn sẽ chết trong vòng 5 năm . Để tránh khỏi điều này bạn phải copy và gửi nó vào 5 truyện khác . Tôi vô cùng vô cung xin lỗi khong thể lấy mạng cha mẹ ra cược được, làm ơn tha thứ cho tôi
                    </li>
                </ul>

            </div>
        </div>
    </div>
</section>
<a href="#" class="bck"></a>
@endsection
@section('script')
<script>
        function AddCart(id) {
            $.ajax({
                url: 'addcart/' + id,
                type: 'GET'
            }).done(function(response) {
                Swal.fire({
                    icon: 'success',
                    title: 'Đã thêm vào giỏ hàng',
                    showConfirmButton: false,
                    timer: 1500
                })
            })
        }

    </script>

@stop
