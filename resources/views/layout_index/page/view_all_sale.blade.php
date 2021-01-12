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
        <h2>Sách khuyến mãi </h2>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" id="myInput" onkeyup="myFunction()" placeholder="Tìm kiếm..." aria-label="Search">
            <span class="fa fa-search"></span>
        </form>
        <hr>
        <div id="myTable">
            <div class="recent-book-sec">
                <div class="row">
                    @foreach ($product_sale as $books)
                    <div class="col-md-3">
                        <div class="item">
                            @if ($books->promotion_price != 0)
                            <span class="sale">sale</span>
                            @endif
                            <a href="{{ route('detail', $books->id) }}">
                                <img src="{{ asset('images/product/' . $books->image) }}" alt="image" />
                            </a>
                            <h3><a href="#">{{ $books->name }}</a></h3>
                            <div class="content">
                                <div class="body">
                                    <b>Tên sách:</b> {{$books->name}} <br>
                                    <b>Tác giả:</b> {{$books->publisher}} <br>
                                    <b>Thể loại:</b> {{$books->productType->name}} <br>
                                    <b>Kích thước:</b> {{$books->size}} <br>
                                    <b>Số trang:</b> {{$books->pagenumber}} <br>
                                    <b>Định dạng:</b> {{$books->format}} <br>
                                    <b>Ngôn ngữ:</b> {{$books->language}} <br>
                                    <b>Phát hành:</b> {{$books->productCompany->name}}
                                </div>
                            </div>
                            <h6><a href="javascript:"><i onclick="AddCart('{{$books->id}}')" class="fa fa-cart-arrow-down"></i></a> /
                                <a class="beta-btn primary" href="{{url('detail',$books->id)}}">Chi tiết <i class="fa fa-chevron-right"></i></a></h6>
                            @if($books->promotion_price == 0)
                            <span class="price-new">{{number_format($books->unit_price,0,"",",")}} VNĐ </span>
                            @else
                            <span class="price-old">{{number_format($books->unit_price,0,"",",")}} VNĐ
                            </span>
                            <span class="price-new">{{number_format($books->promotion_price,0,"",",")}} VNĐ
                            </span>
                            </p>
                            @endif
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="btn-sec">{{$product_sale->links('vendor.pagination.bootstrap-4')}}</div>
            </div>
        </div>
    </div>

</section>
<a href="#" class="bck"></a>
@endsection