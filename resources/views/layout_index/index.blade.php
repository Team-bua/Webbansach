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

<br>
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
                        <h6><a href="javascript:"><i onclick="AddCart('{{$pro->id}}')" class="fa fa-cart-arrow-down"></i></a> /
                            <a class="beta-btn primary" href="{{url('detail',$pro->id)}}">{{ __("detail") }} <i class="fa fa-chevron-right"></i></a>
                            <a class="beta-btn primary" onclick="BuyCart('')" data-toggle="modal" data-target="#product_view">{{ __("Buy now") }}<i class="fa fa-chevron-right"></i></a>
                        </h6>
                        <div class="content">
                            <div class="body">
                                <b>Tên sách:</b> {{$pro->name}} <br>
                                <b>Tác giả:</b> {{$pro->publisher}} <br>
                                <b>Thể loại:</b> {{$pro->productType->name}} <br>
                                <b>Kích thước:</b> {{$pro->size}} Cm<br>
                                <b>Số trang:</b> {{$pro->pagenumber}} <br>
                                <b>Định dạng:</b> {{$pro->format}} <br>
                                <b>Ngôn ngữ:</b> {{$pro->language}} <br>
                                <b>Phát hành:</b> {{$pro->productCompany->name}} <br>
                                    <a href="{{route('Read',$pro->id)}}"><button class="btnR">Đọc ONLINE</button></a>
                            </div>
                        </div>
                        @if($pro->promotion_price == 0)
                        <span class="price-new">{{number_format($pro->unit_price,0,"",",")}} VNĐ </span>
                        @else
                        <span class="price-old">{{number_format($pro->unit_price,0,"",",")}} VNĐ
                        </span>
                        <span class="price-new">{{number_format($pro->promotion_price,0,"",",")}} VNĐ
                        </span>
                        </p>
                        @endif
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
                                <b>Kích thước:</b> {{$pro->size}} Cm<br>
                                <b>Số trang:</b> {{$pro->pagenumber}} <br>
                                <b>Định dạng:</b> {{$pro->format}} <br>
                                <b>Ngôn ngữ:</b> {{$pro->language}} <br>
                                <b>Phát hành:</b> {{$pro->productCompany->name}} <br>
                                    <a href="{{route('Read',$pro->id)}}"><button class="btnR">Đọc ONLINE</button></a>
                            </div>
                        </div>
                        <h3><a href="#">{{ $pro->name }}</a></h3>
                        <h6><a href="javascript:"><i onclick="AddCart('{{$pro->id}}')" class="fa fa-cart-arrow-down"></i></a> /
                            <a class="beta-btn primary" href="{{url('detail',$pro->id)}}">{{ __("detail") }}<i class="fa fa-chevron-right"></i></a>
                        <a class="beta-btn primary" onclick="BuyCart('')" data-toggle="modal" data-target="#product_view">{{ __("Buy now") }}<i class="fa fa-chevron-right"></i></a>
                        </h6>
                        @if($pro->promotion_price == 0)
                        <span class="price-new">{{number_format($pro->unit_price,0,"",",")}} VNĐ </span>
                        @else
                        <span class="price-old">{{number_format($pro->unit_price,0,"",",")}} VNĐ
                        </span>
                        <span class="price-new">{{number_format($pro->promotion_price,0,"",",")}} VNĐ
                        </span>
                        </p>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
            <div class="btn-sec">
                <a href="{{ route('allsale') }}"><button class="btn gray-btn">Xem Thêm</button></a>
            </div>
        </div>

    </div>

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
                                <b>Kích thước:</b> {{$pro->size}} Cm<br>
                                <b>Số trang:</b> {{$pro->pagenumber}} <br>
                                <b>Định dạng:</b> {{$pro->format}} <br>
                                <b>Ngôn ngữ:</b> {{$pro->language}} <br>
                               <b>Phát hành:</b> {{$pro->productCompany->name}} <br>
                                    <a href="{{route('Read',$pro->id)}}"><button class="btnR">Đọc ONLINE</button></a>
                            </div>
                        </div>
                        <h3><a href="#">{{ $pro->name }}</a></h3>
                        <h6><a href="javascript:"><i onclick="AddCart('{{$pro->id}}')" class="fa fa-cart-arrow-down"></i></a> /
                            <a class="beta-btn primary" href="{{url('detail',$pro->id)}}">{{ __("detail") }}<i class="fa fa-chevron-right"></i></a>
                            <a class="beta-btn primary" onclick="BuyCart('')" data-toggle="modal" data-target="#product_view">{{ __("Buy now") }}<i class="fa fa-chevron-right"></i></a>
                        </h6>
                        @if($pro->promotion_price == 0)
                        <span class="price-new">{{number_format($pro->unit_price,0,"",",")}} VNĐ </span>
                        @else
                        <span class="price-old">{{number_format($pro->unit_price,0,"",",")}} VNĐ
                        </span>
                        <span class="price-new">{{number_format($pro->promotion_price,0,"",",")}} VNĐ
                        </span>
                        </p>
                        @endif
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
   <div class="modal fade product_view" id="product_view">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 product_img">
                            <img src="" class="img-responsive" width="200px">
                        </div>
                        <div class="col-md-6 product_content">
                            <h4></h4>
                           
                            <h3 class="cost">
                                <span class="glyphicon glyphicon-usd"></span> 
                                <small class="pre-cost">
                                    <span class="glyphicon glyphicon-usd"></span> 
                                </small>
                                <span class="glyphicon glyphicon-usd"></span> 
                            </h3>
                 
                            <div class="space-ten"></div>
                            <div class="btn-ground">
                                <a href=""><button type="button" class="btn btn-primary">Thanh Toán</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<section class="features-sec">
    <div class="container">
        <ul>
            <li>
                <span class="icon"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
                <h3>MUA SẮM AN TOÀN</h3>
            </li>
            <li>
                <span class="icon return"><i class="fa fa-reply-all" aria-hidden="true"></i></span>
                <h3>TRẢ LẠI 30- NGÀY</h3>

            </li>
            <li>
                <span class="icon chat"><i class="fa fa-comments" aria-hidden="true"></i></span>
                <h3>HỖ TRỢ 24/7</h3>
            </li>
        </ul>

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