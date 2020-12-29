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
            <ul>
                <li><a href="#">Nulla </a><span>(45)</span></li>
                <li><a href="#">Curabitur </a><span>(34)</span></li>
                <li><a href="#">Nunc </a><span>(67)</span></li>
                <li><a href="#">Ullamcorper</a><span>(74)</span></li>
                <li><a href="#">Fusce </a><span>(89)</span></li>
                <li><a href="#">Sagittis</a><span>(28)</span></li>
                <li><a href="#">Nulla </a><span>(45)</span></li>
                <li><a href="#">Curabitur </a><span>(34)</span></li>
                <li><a href="#">Nunc </a><span>(67)</span></li>
                <li><a href="#">Ullamcorper</a><span>(74)</span></li>
                <li><a href="#">Fusce </a><span>(89)</span></li>
                <li><a href="#">Sagittis</a><span>(28)</span></li>
                
            </ul>
        </div>
</div>

</section>

<section class="static about-sec">
        <div class="container"> 
            <h2>books </h2>
<form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search here..." aria-label="Search">
            <span class="fa fa-search"></span>
          </form>
            <hr>
            <div class="recent-book-sec">
                <div class="row">
                    @foreach ($product as $books)
                    <div class="col-md-3">
                        <div class="item">
                        <div class="sale">- %20</div>
                        <a href="{{route('detail',$books->id)}}">
                            <img src="{{ asset('images/product/' . $books->image) }}" alt="image"/>
                        </a>
                            <h3><a href="#">{{ $books->name }}</a></h3>
                            <div class="content">
                <div class="body">
                    <p>{!! $books->description !!}</p>
                </div>
                </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="btn-sec">{{$product->links('vendor.pagination.bootstrap-4')}}</div>
            </div>
        </div>

    </section>
    <a href="#" class="bck"></a> 
@endsection