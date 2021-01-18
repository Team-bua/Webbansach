@extends('layout_index.master')
@section('content')
<section class="static about-sec">
    <div class="container">
        <h4>Sách được tìm thấy {{count($search)}} sản phẩm </h4>
        <hr>
        <div class="recent-book-sec">
            <div class="row" id="load" style="position: relative;">
                @foreach ($search as $pro)
                <div class="col-md-3">
                    <div class="item">
                        @if($pro->promotion_price==0)
                        <div class="new">new</div>
                        @else
                        <span class="sale">sale</span>
                        @endif

                        <a href="{{route('detail',$pro->id)}}"><img src="{{ asset('images/product/' . $pro->image) }}" alt="image" /></a>
                        <h3><a href="#">{{ $pro->name }}</a></h3>
                        <div class="content">
                            <div class="body">
                                <b>Tên sách:</b> {{$pro->name}} <br>
                                <b>Tác giả:</b> {{$pro->publisher}} <br>
                                <b>Thể loại:</b> {{$pro->productType->name}} <br>
                                <b>Kích thước:</b> {{$pro->size}} Cm<br>
                                <b>Số trang:</b> {{$pro->pagenumber}} <br>
                                <b>Định dạng:</b> {{$pro->format}} <br>
                                <b>Ngôn ngữ:</b> {{$pro->language}} <br>
                                <b>Phát hành:</b> {{$pro->productCompany->name}}
                            </div>
                        </div>
                        <h6><a href="javascript:"><i onclick="AddCart('{{$pro->id}}')" class="fa fa-cart-arrow-down"></i></a> /
                            <a class="beta-btn primary" href="{{url('detail',$pro->id)}}">Chi tiết <i class="fa fa-chevron-right"></i></a>
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
            <div class="btn-sec">{{$search->appends(request()->input())->links('vendor.pagination.bootstrap-4')}}</div>
            <div class="btn-sec">
                <a href="{{route('all_book')}}"><button class="btn gray-btn">Xem Thêm</button></a>
            </div>
        </div>
    </div>
</section>
@endsection