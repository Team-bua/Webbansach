@extends('layout_index.master')
@section('content')
<style type="text/css">
    .area {
        font-size: 15px;
        border: 10px solid black;
        padding: 2rem 1rem;
        min-height: 3em;
        resize: none;
        background: #ffd73e33;
        border-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='100' height='100' viewBox='0 0 100 100' fill='none' xmlns='http://www.w3.org/2000/svg'%3E %3Cstyle%3Epath%7Banimation:stroke 5s infinite linear%3B%7D%40keyframes stroke%7Bto%7Bstroke-dashoffset:776%3B%7D%7D%3C/style%3E%3ClinearGradient id='g' x1='0%25' y1='0%25' x2='0%25' y2='100%25'%3E%3Cstop offset='0%25' stop-color='%232d3561' /%3E%3Cstop offset='25%25' stop-color='%23c05c7e' /%3E%3Cstop offset='50%25' stop-color='%23f3826f' /%3E%3Cstop offset='100%25' stop-color='%23ffb961' /%3E%3C/linearGradient%3E %3Cpath d='M1.5 1.5 l97 0l0 97l-97 0 l0 -97' stroke-linecap='square' stroke='url(%23g)' stroke-width='3' stroke-dasharray='388'/%3E %3C/svg%3E") 1;
    }

    .active {
        color: #ff9705 !important;
    }
</style>
<section class="product-sec">
    <div class="container">

        <h1>{{ $product_detail->name }}</h1>
        <div class="row">
            <div class="col-md-6 slider-sec">

                <div id="myCarousel" class="carousel slide">
                    <!-- main slider carousel items -->
                    <div class="carousel-inner">
                        @if ($product_detail->promotion_price != 0)
                        <div class="sale">Sale</div>
                        @endif
                        <div class="active item carousel-item" data-slide-number="0">
                            <img id="image-main" style="height:505px" src=" {{ asset('images/product/' . $product_detail->image) }}" class="img-fluid">
                        </div>
                    </div>
                    <!-- main slider carousel nav controls -->
                    @if ($product_detail->imagedetail)
                    <ul class="carousel-indicators list-inline">
                        @for ($i = 0; $i < $image_detail; $i++) <li class="list-inline-item active">
                            <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#myCarousel">
                                <img style="height:160px;width:120px;" src="{{ asset('images/product_detail/' . $product_detail->imagedetail[$i]) }}" class="img-fluid">
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
                <textarea class="area" type="text" placeholder="Nhập gì đó để nói (input something)..." rows="7" cols="63" id="text" disabled>
                {!! $product_detail->description !!}
            </textarea>
                <audio id="myAudio">
                    <source src="images/music/oke.mp3.mp3" type="audio/mpeg">
                </audio>
                <br>
                <br>
                <div class="col-md-4">
                    <div class="form-group">
                        <select id="gender" class="form-control">
                            <option value="Vietnamese Female" style="text-decoration: blink;">Tiếng Việt</option>
                        </select>
                    </div>
                </div>
                <ul>
                    @if ($product_detail->promotion_price == 0)
                    <li>
                        <span class="name">Giá Bán</span><span class="clm">:</span>
                        <span class="price final" style="color:black">{{ number_format($product_detail->unit_price, 0, '', ',') }}VNĐ</span>

                    </li>
                    @else
                    <li>
                        <span class="name">Giá Bán</span><span class="clm">:</span>
                        <span class="price">{{ number_format($product_detail->unit_price, 0, '', ',') }}VNĐ</span>
                        <span class="name">Giá Khuyến mãi</span><span class="clm">:</span>
                        <span class="price final">{{ number_format($product_detail->promotion_price, 0, '', ',') }}VNĐ</span>

                    </li>
                    @endif
                </ul>
                <div class="btn-sec">
                    <button class="btn btn-success btn-lg" id="btPlay" onclick="playAudio()"><i class="fa fa-book"></i></button>
                    <button class="btn" onclick="AddCart('{{ $product_detail->id }}')">Thêm Vào Giỏ Hàng</button>
                    <button class="btn " onclick="BuyCart('{{ $product_detail->id }}')" data-toggle="modal" data-target="#product_view">Mua Ngay</button>
                    <a href="{{ route('Read', $product_detail->id) }}"><button class="btn black">Đọc ONLINE</button></a>
                </div>
            </div>
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
                                <a href="@if(Auth::check()) {{route('checkout')}} @else {{route('login')}} @endif"><button type="button" class="btn btn-primary">Thanh Toán</button></a>
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
                    <a href="#tab-information">Thông Tin</a>
                </div>
                <div id="tab-specification" class="tab-content">
                    @if(Auth::check())
                    <form action="{{route('rating',$product_detail->id)}}" method="post">
                        @csrf
                        @method('put')
                        <div class="cpt_product_description ">
                            <div class="rating-card">
                                <div style="height: 40px">
                                    <h1>Đánh Giá</h1>
                                </div>
                                <div class="rating">
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
                        <center>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
                                </div>
                                <textarea style="resize: none;" rows="3" cols="50" class="form-control" placeholder="Nội dung đánh giá . . . . ." name="body" required></textarea>
                            </div>
                        </center>
                        <br>
                        <div class="text-center">
                            <input type="submit" value="Gửi" class="btn btn-info btn-block">
                        </div>
                    </form>
                    @else
                    <div class="cpt_product_description ">
                        <div class="rating-card">
                            <div style="height: 40px">
                                <h1>Đánh Giá</h1>
                            </div>
                            <div class="rating">
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
                    </div><br>
                    <div style="float: left"> Chỉ có thành viên mới có thể nhận xét. Vui lòng <a href="{{ route('login') }}">Đăng nhập</a> hoặc<a href="{{ route('signup') }}"> Đăng Ký</a></div>
                    @endif
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
                                    <li><i class="fas fa-check"></i>Kích Thước:{{ $product_detail->size  }} Cm</li>
                                    <li><i class="fas fa-check"></i>Số Trang:{{ $product_detail->pagenumber  }} Trang</li>
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
                    @foreach($rating['ra_date'] as $ra)
                    <?php
                    $ra_show = 0;
                    if ($ra->pivot->ra_number) {
                        $ra_show = $ra->pivot->ra_number;
                    }
                    ?>
                    <ul>
                        <li class="com-title">
                            {{$ra->full_name}} &nbsp;
                            @for($i=1; $i<=5; $i++) <i class="fa fa-star {{$i <= $ra_show ? 'active' : ''}}" style="color:#999"></i>
                                @endfor
                                <br>
                                <span>{{$ra->pivot->created_at->format('d/m/Y')}}</span>
                        </li>
                        <li class="com-details">
                            {{$ra->pivot->body}}
                        </li>
                    </ul>
                    @endforeach
                </div>
            </div>
        </div>
</div>
</section>
@endsection
@section('speak')
<script type="text/javascript">
    $(document).ready(function() {
        $("#btPlay").click(function() {
            var text = $("#text").val();
            var gender = $("#gender").val();
            responsiveVoice.speak(text, gender, {
                rate: 1
            });
        });
    });
</script>
@stop
@section('music')
<script>
    var x = document.getElementById("myAudio");

    function playAudio() {
        x.play();
    }

    function pauseAudio() {
        x.pause();
    }
</script>
@stop
@section('js')
<script>
    function BuyCart(id) {
        $.ajax({
            url: 'addcart/' + id,
            type: 'GET',
        }).done(function(response) {
            $('.quntity').html(response['cart']['totalQty']);
        })
    }
</script>
@endsection