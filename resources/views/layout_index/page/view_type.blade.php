@extends('layout_index.master')
@section('content')
<section class="deltai">
    <div class="container">
        <div class="sidebar-widget tag">

            <h2 class="title">{{ __("Request To Choose") }}</h2>
            <a href="#">{{ __("New Product") }}</a>
            <a href="#">{{ __("A To Z") }}</a>
            <a href="#">{{ __("Price Low To High") }}</a>
            <a href="#">{{ __("Price High To Low") }}</a>
            <a href="#">{{ __("Discounts High To Low") }}</a>
            <a href="#">{{ __("Discount From Low To High") }}</a>

        </div>
    </div>


</section>

<section class="static about-sec">
    <div class="container">
        <h6><span>{{ $type_name->name }}</span>
        </h6>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" id="myInput" onkeyup="myFunction()" placeholder="Tìm kiếm..." aria-label="Search">
            <span class="fa fa-search"></span>
        </form>
        <hr>
        <div id="myTable">
            <div class="recent-book-sec">
                <div class="row" id="load" style="position: relative;">
                    @foreach ($product_types as $books)
                    <div class="col-md-3">
                        <div class="single_product">
                            <div class="item">
                                @if ($books->promotion_price != 0)
                                <div class="new">sale</div>
                                @else
                                <span class="sale">new</span>
                                @endif

                                <a href="{{ route('detail', $books->id) }}"><img src="{{ asset('images/product/' . $books->image) }}" alt="image" /></a>

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
                                </h6>
                            </div>
                        </div>
                        <br>
                    </div>
                    @endforeach
                </div>
                <div class="btn-sec">
                    <div class="btn-sec">{{$product_types->links('vendor.pagination.bootstrap-4')}}</div>
                </div>
            </div>
        </div>
    </div>
</section>
<a href="#" class="bck"></a>
@endsection