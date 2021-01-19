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
        <h6><span>Sách nổi bật</span>
        </h6>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" id="myInput" onkeyup="myFunction()" placeholder="Tìm kiếm..." aria-label="Search">
            <span class="fa fa-search"></span>
        </form>
        <hr>
        <div id="myTable">
            <div class="recent-book-sec">
                <div class="row">
                    @foreach ($product_highlights as $books)
                    <div class="col-md-3">
                        <div class="single_product">
                            <div class="item">
                                <div class="new">Hot</div>
                                <a href="{{ route('detail', $books->id) }}">
                                    <img src="{{ asset('images/product/' . $books->image) }}" alt="image" />
                                </a>
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
                                    <a class="beta-btn primary" href="{{url('detail',$books->id)}}">{{ __('detail') }}<i class="fa fa-chevron-right"></i></a>
                                </h6>
                                <div class="content">
                                    <div class="body">
                                        &nbsp;<b style="color: #BA510A; font-size: 19px">{{$books->name}}</b> <br>
                                        &nbsp;<i class="fa fa-user"></i> : <b class="font">{{$books->publisher}}</b> <br>
                                        &nbsp;<i class="fa fa-book"></i> : <b class="font">{{$books->productType->name}}</b> <br>
                                        &nbsp;<i class="fa fa-clone"></i> : <b class="font">{{$books->pagenumber}} trang</b><br>
                                        &nbsp;<i class="fa fa-home"></i> : <b class="font">{{$books->productCompany->name}}</b> <br>
                                        &nbsp;<a href="{{route('Read',$books->id)}}"><button class="btnR">Đọc ONLINE</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
                    @endforeach
                </div>
                <div class="btn-sec">{{$product_highlights->links('vendor.pagination.bootstrap-4')}}</div>
            </div>
        </div>
    </div>

</section>
<a href="#" class="bck"></a>
@endsection