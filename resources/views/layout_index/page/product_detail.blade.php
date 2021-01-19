@extends('layout_index.master')
@section('content')
<style type="text/css">
    .area {
        font-size: 15px;
        border: 2px solid #EF5050;
        padding: 2rem 1rem;
        min-height: 3em;
        resize: none;
        background: #ffd73e33;
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
                <textarea class="area" type="text" rows="7" cols="63" id="text" disabled>
                {!! $product_detail->description !!}
            </textarea>
                <!--                 <audio id="myAudio">
                    <source src="images/music/oke.mp3.mp3" type="audio/mpeg">
                </audio> -->
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
                    <li>
                        <span class="name">Đánh giá</span><span class="clm">:</span> &nbsp; &nbsp;
                        @if($rating['product'])
                        <?php
                        $product_ra = 0;
                        if ($rating['product']->total_ra) {
                            $product_ra = round($rating['product']->total_number / $rating['product']->total_ra, 2);
                        }

                        ?>
                        @for($i=1; $i<=5; $i++) <i class="fa fa-star {{$i <= $product_ra ? 'active' : ''}}" style="color:#999"></i>
                            @endfor
                            @endif
                    </li>
                    <li>
                        <span class="name">Trạng thái</span><span class="clm">:</span>
                        @if($store && $store->stored_product == 0)
                        &emsp;<h6 class="badge badge-danger" style="font-size: 14px;">Hết hàng&ensp;</h6>
                        @else
                        &emsp;<h6 class="badge badge-success" style="font-size: 14px;">Còn hàng&ensp;</h6>
                        @endif
                    </li>
                </ul>
                <div class="btn-sec">

                    <button class="btn btn-success btn-lg" id="btPlay" onclick="playAudio()"><i class="fa fa-play"></i></button>
                    <button class="btn btn-success btn-lg" id="btPause" onclick="pauseAudio()"><i class="fa fa-stop"></i></button>
                    <button class="btn black" onclick="AddCart('{{ $product_detail->id }}')">{{ __('addcart') }}</button>
                    <a href="{{ route('Read', $product_detail->id) }}"><button class="btn black">{{ __('read online') }}</button></a>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</section>
<div class="container">
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
                                    <p><i class="fa fa-user" aria-hidden="true"></i> {{count($rating['count_ra'])}} Đánh Giá</p>
                                </div>
                                <div class="rating-process">
                                    <div class="rating-right-part">
                                        <i aria-hidden="true" class="fa fa-star"></i>
                                            <i aria-hidden="true" class="fa fa-star"></i>
                                            <i aria-hidden="true" class="fa fa-star"></i>
                                            <i aria-hidden="true" class="fa fa-star"></i>
                                            <i aria-hidden="true" class="fa fa-star"></i>
                                            {{$rating['ra_5']}} <i class="fa fa-check-square"></i>
                                    </div>
                                    <div class="rating-right-part">
                                        <p><i aria-hidden="true" class="fa fa-star"></i>
                                            <i aria-hidden="true" class="fa fa-star"></i>
                                            <i aria-hidden="true" class="fa fa-star"></i>
                                            <i aria-hidden="true" class="fa fa-star"></i>
                                            {{$rating['ra_5']}} <i class="fa fa-check-square"></i>
                                        </p>

                                    </div>
                                    <div class="rating-right-part">
                                        <p><i aria-hidden="true" class="fa fa-star"></i>
                                            <i aria-hidden="true" class="fa fa-star"></i>
                                            <i aria-hidden="true" class="fa fa-star"></i>

                                        </p>

                                    </div>
                                    <div class="rating-right-part">
                                        <p><i aria-hidden="true" class="fa fa-star"></i>
                                            <i aria-hidden="true" class="fa fa-star"></i>

                                        </p>

                                    </div>
                                    <div class="rating-right-part">
                                        <p><i aria-hidden="true" class="fa fa-star"></i>

                                        </p>

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
                                <p><i class="fa fa-user" aria-hidden="true"></i> {{count($count_ra)}} Đánh giá</p>
                            </div>
                            <div class="rating-process">
                                <div class="rating-right-part">
                                    <p><i aria-hidden="true" class="fa fa-star"></i>
                                        <i aria-hidden="true" class="fa fa-star"></i>
                                        <i aria-hidden="true" class="fa fa-star"></i>
                                        <i aria-hidden="true" class="fa fa-star"></i>
                                        <i aria-hidden="true" class="fa fa-star"></i>
                                    </p>

                                </div>
                                <div class="rating-right-part">
                                    <p><i aria-hidden="true" class="fa fa-star"></i>
                                        <i aria-hidden="true" class="fa fa-star"></i>
                                        <i aria-hidden="true" class="fa fa-star"></i>
                                        <i aria-hidden="true" class="fa fa-star"></i>

                                    </p>

                                </div>
                                <div class="rating-right-part">
                                    <p><i aria-hidden="true" class="fa fa-star"></i>
                                        <i aria-hidden="true" class="fa fa-star"></i>
                                        <i aria-hidden="true" class="fa fa-star"></i>

                                    </p>

                                </div>
                                <div class="rating-right-part">
                                    <p><i aria-hidden="true" class="fa fa-star"></i>
                                        <i aria-hidden="true" class="fa fa-star"></i>

                                    </p>

                                </div>
                                <div class="rating-right-part">
                                    <p><i aria-hidden="true" class="fa fa-star"></i>

                                    </p>

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
        $("#btPause").click(function() {
            if (responsiveVoice.isPlaying()) {
                responsiveVoice.pause();
            } else {
                responsiveVoice.resume();
            }
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