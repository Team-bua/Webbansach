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
                <li><a href="#">{{ $pro->name }} </a><span>(45)</span></li>
            </ul>
            @endforeach
        </div>
</div>

</section>

<section class="static about-sec">
        <div class="container"> 
            <h2>books </h2>
            <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" id="myInput" onkeyup="myFunction()" placeholder="Tìm kiếm..." aria-label="Search">
            <span class="fa fa-search"></span>
          </form>
            <hr>
            <div id="myTable">
            <div class="recent-book-sec" >
                <div class="row">
                    @foreach ($product as $books)
                    <div class="col-md-3">
                        <div class="item">
                         @if($pro->promotion_price==0)
                       <div class="new">new</div>
                    @else
                        <span class="sale">sale</span>
                    @endif
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
            </div>
            </div>
        </div>

    </section>
    <a href="#" class="bck"></a> 
@endsection