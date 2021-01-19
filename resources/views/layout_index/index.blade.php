@extends('layout_index.master')
@section('content')
<section class="slider">
    <div class="container">
        <div id="slide-wrapper">
            <ul id="slider">
                @foreach ($slide as $sl)
                <li>
                    <div class="border_on_img"></div>
                    <img src="{{ asset('images/slide/' . $sl->image) }}">
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</section>
<section class="static about-sec">
    <div class="container">
        <h6><span>{{ __("newbook") }}</span>
        </h6>
        <hr>
        <div class="recent-book-sec">
            <div class="row" id="load" style="position: relative;">
                @foreach ($product_new as $pro)
                <div class="col-md-3">
                    <div class="item">
                        <div class="new">new</div>
                        <a href="{{ route('detail', $pro->id) }}"><img src="{{ asset('images/product/' . $pro->image) }}" alt="image" /></a>
                        <h3><a href="#">{{ $pro->name }}</a></h3>
                        @if($pro->promotion_price == 0)
                        <span class="price-new">{{number_format($pro->unit_price,0,"",",")}} VNĐ </span>
                        @else
                        <span class="price-old">{{number_format($pro->unit_price,0,"",",")}} VNĐ
                        </span>
                        <span class="price-new">{{number_format($pro->promotion_price,0,"",",")}} VNĐ
                        </span>
                        @endif
                        <br>
                        <h6><a href="javascript:"><i onclick="AddCart('{{$pro->id}}')" class="fa fa-cart-arrow-down"></i></a> /
                            <a class="beta-btn primary" href="{{url('detail',$pro->id)}}">{{ __("detail") }} <i class="fa fa-chevron-right"></i></a>
                            <a class="beta-btn primary" href="@if(Auth::check()) {{route('checkout')}} @else {{route('login')}} @endif" onclick="BuyCart('{{$pro->id}}')">{{ __("Buy now") }}<i class="fa fa-chevron-right"></i></a>
                        </h6>
                        <div class="content">
                            <div class="body">
                                <b>Tên sách:</b> {{$pro->name}} <br>
                                <b>Tác giả:</b> {{$pro->publisher}} <br>
                                <b>Thể loại:</b> {{$pro->productType->name}} <br>
                                <b>Số trang:</b> {{$pro->pagenumber}} <br>
                                <b>Phát hành:</b> {{$pro->productCompany->name}} <br>
                                <a href="{{route('Read',$pro->id)}}"><button class="btnR">Đọc ONLINE</button></a>
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach
            </div>
            <div class="btn-sec">
                <a href="{{ route('allnew') }}"><button class="btn gray-btn">Xem Thêm</button></a>
            </div>

        </div>
    </div>
</section>
<section class="static about-sec">
    <div class="container">
        <h6><span>{{ __("salebook") }}</span>
        </h6>
        <hr>
        <div class="recent-book-sec">
            <div class="row" id="load" style="position: relative;">
                @foreach ($product_sale as $pro)
                <div class="col-md-3">
                    <div class="item">
                        @if ($pro->promotion_price != 0)

                        <span class="sale">sale</span>
                        @endif

                        <a href="{{ route('detail', $pro->id) }}"><img src="{{ asset('images/product/' . $pro->image) }}" alt="image" /></a>

                        <div class="content">
                            <div class="body">
                                <b>Tên sách:</b> {{$pro->name}} <br>
                                <b>Tác giả:</b> {{$pro->publisher}} <br>
                                <b>Thể loại:</b> {{$pro->productType->name}} <br>
                                <b>Số trang:</b> {{$pro->pagenumber}} <br>
                                <b>Phát hành:</b> {{$pro->productCompany->name}} <br>
                                <a href="{{route('Read',$pro->id)}}"><button class="btnR">Đọc ONLINE</button></a>
                            </div>
                        </div>
                        <h3><a href="#">{{ $pro->name }}</a></h3>
                        @if($pro->promotion_price == 0)
                        <span class="price-new">{{number_format($pro->unit_price,0,"",",")}} VNĐ </span>
                        @else
                        <span class="price-old">{{number_format($pro->unit_price,0,"",",")}} VNĐ
                        </span>
                        <span class="price-new">{{number_format($pro->promotion_price,0,"",",")}} VNĐ
                        </span>
                        @endif
                        <br>
                        <h6><a href="javascript:"><i onclick="AddCart('{{$pro->id}}')" class="fa fa-cart-arrow-down"></i></a> /
                            <a class="beta-btn primary" href="{{url('detail',$pro->id)}}">{{ __("detail") }}<i class="fa fa-chevron-right"></i></a>
                            <a class="beta-btn primary" href="@if(Auth::check()) {{route('checkout')}} @else {{route('login')}} @endif" onclick="BuyCart('{{$pro->id}}')">{{ __("Buy now") }}<i class="fa fa-chevron-right"></i></a>
                        </h6>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="btn-sec">
                <a href="{{ route('allsale') }}"><button class="btn gray-btn">Xem Thêm</button></a>
            </div>
        </div>
    </div>
</section>
<section class="static about-sec">
<div class="container">
        <h6><span>{{ __("hotbook") }}</span>
        </h6>
        <hr>
        <div class="recent-book-sec">
            <div class="row" id="load" style="position: relative;">
                @foreach ($product_hightlights as $pro)
                <div class="col-md-3">
                    <div class="item">
                        @if ($pro->new == 1)
                        <div class="new">Hot</div>
                        @endif

                        <a href="{{ route('detail', $pro->id) }}"><img src="{{ asset('images/product/' . $pro->image) }}" alt="image" /></a>

                        <div class="content">
                            <div class="body">
                                <b>Tên sách:</b> {{$pro->name}} <br>
                                <b>Tác giả:</b> {{$pro->publisher}} <br>
                                <b>Thể loại:</b> {{$pro->productType->name}} <br>
                                <b>Phát hành:</b> {{$pro->productCompany->name}} <br>
                                <a href="{{route('Read',$pro->id)}}"><button class="btnR">Đọc ONLINE</button></a>
                            </div>
                        </div>
                        <h3><a href="#">{{ $pro->name }}</a></h3>
                        @if($pro->promotion_price == 0)
                        <span class="price-new">{{number_format($pro->unit_price,0,"",",")}} VNĐ </span>
                        @else
                        <span class="price-old">{{number_format($pro->unit_price,0,"",",")}} VNĐ
                        </span>
                        <span class="price-new">{{number_format($pro->promotion_price,0,"",",")}} VNĐ
                        </span>
                        @endif
                        <br>
                        <h6><a href="javascript:"><i onclick="AddCart('{{$pro->id}}')" class="fa fa-cart-arrow-down"></i></a> /
                            <a class="beta-btn primary" href="{{url('detail',$pro->id)}}">{{ __("detail") }}<i class="fa fa-chevron-right"></i></a>
                            <a class="beta-btn primary" href="@if(Auth::check()) {{route('checkout')}} @else {{route('login')}} @endif" onclick="BuyCart('{{$pro->id}}')">{{ __("Buy now") }}<i class="fa fa-chevron-right"></i></a>
                        </h6>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="btn-sec">
                <a href="{{  route('allhighlights')  }}"><button class="btn gray-btn">Xem Thêm</button></a>
            </div>
        </div>

    </div>
</section>
<a href="#" class="bck"></a>
@endsection
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