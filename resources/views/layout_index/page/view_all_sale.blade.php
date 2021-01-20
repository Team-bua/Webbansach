@extends('layout_index.master')
@section('content')
<section class="deltai">
    <div class="container">
        <div class="sidebar-widget tag">

            <h2 class="title">Yêu Cầu Lựa Chọn</h2>
            <a href="#">sản phẩm mới</a>
            <a href="#">A đến Z</a>
            <a href="#">Giá Thấp Đến Cao</a>
            <a href="#">Giá Cao Đến Thấp</a>
            <a href="#">Giảm Giá Cao Đến Thấp</a>
            <a href="#">Giảm Giá Thấp Đến Cao</a>

        </div>
    </div>


</section>

<section class="static about-sec">
    <div class="container">
        <h6><span>Sách Khuyến Mãi</span>
        </h6>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" id="myInput" onkeyup="myFunction()" placeholder="Tìm kiếm..." aria-label="Search">
            <span class="fa fa-search"></span>
        </form>
        <hr>
        <div id="myTable">
            <div class="recent-book-sec">
            <div class="row" id="load" style="position: relative;">
                @foreach ($product_sale as $books)
                <div class="col-md-3">
                    <div class="item">
                        <div class="single_product">
                       @if ($books->promotion_price != 0)
                            <span class="sale">sale</span>
                            @endif
                        <a href="{{ route('detail', $books->id) }}"><img src="{{ asset('images/product/' . $books->image) }}" alt="image" /></a>

                        <div class="content">
                            <div class="body">
                                <b>Tên sách:</b> {{$books->name}} <br>
                                <b>Tác giả:</b> {{$books->publisher}} <br>
                                <b>Thể loại:</b> {{$books->productType->name}} <br>
                                <b>Phát hành:</b> {{$books->productCompany->name}} <br>
                                <a href="{{route('Read',$books->id)}}"><button class="btnR">Đọc ONLINE</button></a>
                            </div>
                        </div>
                        <h3><a href="#">{{ $books->name }}</a></h3>
                        @if($books->promotion_price == 0)
                        <span class="price-new">{{number_format($books->unit_price,0,"",",")}} VNĐ </span>
                        @else
                        <span class="price-old">{{number_format($books->unit_price,0,"",",")}} VNĐ
                        </span>
                        <span class="price-new">{{number_format($books->promotion_price,0,"",",")}} VNĐ
                        </span>
                        @endif
                        <br>
                        <h6><a href="javascript:"><i onclick="AddCart('{{$books->id}}')" class="fa fa-cart-arrow-down"></i></a> /
                            <a class="beta-btn primary" href="{{url('detail',$books->id)}}">{{ __("detail") }}<i class="fa fa-chevron-right"></i></a>
                            <a class="beta-btn primary" href="@if(Auth::check()) {{route('checkout')}} @else {{route('login')}} @endif" onclick="BuyCart('{{$books->id}}')">{{ __("Buy now") }}<i class="fa fa-chevron-right"></i></a>
                        </h6>
                    </div>
                </div>
                </div>
                @endforeach
            </div>
              <div class="btn-sec">{{$product_sale->links('vendor.pagination.bootstrap-4')}}</div>
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