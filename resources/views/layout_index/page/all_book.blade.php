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
        <div class="container">
            <div class="sidebar-widget brands">
                <h2 class="title">Nhóm Sản Phẩm</h2>
                @foreach ($product_type as $pro)
                    <ul>
                        <li><a href="{{ route('product_type', $pro->id) }}">{{ $pro->name }} </a><span>(45)</span></li>
                    </ul>
                @endforeach
            </div>
        </div>

        </div>
        </div>
    </section>

    <section class="static about-sec">
        <div class="container">
            <h2> Tất cả sách </h2>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" id="myInput" onkeyup="myFunction()" placeholder="Tìm kiếm..."
                    aria-label="Search">
                <span class="fa fa-search"></span>
            </form>
            <hr>
            <div id="myTable">
                <div class="recent-book-sec">
                    <div class="row">
                        @foreach ($product_all as $books)
                            <div class="col-md-3">
                                <div class="item">
                                    @if ($books->promotion_price != 0)
                                        <div class="sale">Sale</div>
                                        <a href="{{ route('detail', $books->id) }}">
                                            <img src="{{ asset('images/product/' . $books->image) }}" alt="image" />
                                        </a>
                                        <h3><a href="#">{{ $books->name }}</a></h3>
                                    @else
                                        <a href="{{ route('detail', $books->id) }}">
                                            <img src="{{ asset('images/product/' . $books->image) }}" alt="image" />
                                        </a>
                                        <h3><a href="#">{{ $books->name }}</a></h3>

                                    @endif
                                    <div class="content">
                                        <div class="body">
                                            <p>{!! $books->description !!}</p>
                                        </div>
                                    </div>
                                    <h6><a href="javascript:"><i onclick="AddCart('{{ $books->id }}')"
                                                class="fa fa-cart-arrow-down"></i></a>
                                        /
                                        <a class="beta-btn primary" href="{{ url('detail', $books->id) }}">Chi tiết <i
                                                class="fa fa-chevron-right"></i></a>
                                    </h6>
                                    @if ($books->promotion_price == 0)
                                        <span class="price-new"> {{ number_format($books->unit_price, 0, '', ',') }}VNĐ
                                        </span>
                                    @else
                                        <span class="price-old">{{ number_format($books->unit_price, 0, '', ',') }}VNĐ
                                        </span>
                                        <span class="price-new">{{ number_format($books->promotion_price, 0, '', ',') }}VNĐ
                                        </span>
                                        </p>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    </section>
    <a href="#" class="bck"></a>
@endsection
