@extends('layout_index.master')
@section('content')
<section class="slider">
    <div class="container">
        <div id="slide-wrapper">
            <ul id="slider">
                @foreach($slide as $sl)
                <li>
                    <div class="border_on_img"></div>
                    <img src="{{ asset('images/slide/'.$sl->image) }}">
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="container">
        <ul class="vert-one">
        <li>
            <center> <p><a><i class="fa fa-bars" ></i> Danh Mục Sách</a></p></center>
        </li>  
        </ul>
    <div class="left_column">
        <div class="product_menu">
            @foreach ($product_type as $pro)
        <ul id="prod_nav" class="clearfix">
            <li class="top"><a  class="top_link"><span class="down"><i class="fa fa-book"></i>  {{ $pro->name }}</span></a>
            <ul  class="sub">
                <li>
                    <ul>
                      <li><a href="#">Link 1</a></li>
                      <li><a href="#">Link 2</a></li>
                      <li><a href="#">Link 3</a></li>
                      <li><a href="#">Link 4</a></li>
                      <li><a href="#">Link 5</a></li>
                    </ul>         
                </li>
            </ul>
          </li>

        </ul>
        @endforeach
      </div>
    </div>    
</div>
</section>
<section class="static about-sec">
        <div class="container"> 
            <h6><span>S</span>
                <span>á</span>
                <span>c</span> 
                <span>h</span>  
                <span>M</span> 
                <span>ớ</span> 
                <span>i</span> 
                <span>T</span> 
                <span>ì</span> 
                <span>m</span> 
                <span>T</span> 
                <span>h</span> 
                <span>ấ</span> 
                <span>y</span> 
                <span>{{count($product)}}</span> 
                <span>s</span> 
                <span>ả</span> 
                <span>n</span> 
                <span>p</span> 
                <span>h</span> 
                <span>ẩ</span> 
                <span>m</span> 
            </h6>
            <hr>
            <div class="recent-book-sec">
                <div class="row" id="load" style="position: relative;">
                     @foreach ($product as $pro)
                    <div class="col-md-3">
                        <div class="item">
                        @if($pro->promotion_price==0)
                       <div class="new">new</div>
                    @else
                        <span class="sale">sale</span>
                    @endif
                        
                             <a href="{{route('detail',$pro->id)}}"><img src="{{ asset('images/product/' . $pro->image) }}" alt="image"/></a>
                            <h3><a href="#">{{ $pro->name }}</a></h3>
                <div class="content">
                <div class="body">
                    <p>{!! $pro->description !!}</p>
                </div>
                </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="btn-sec">
                    <a href="{{route('all')}}"><button class="btn gray-btn">Xem Thêm</button></a>
                </div>

            </div>
        </div>
    </section>
<section class="static about-sec" >
        <div class="container"> 
            <h6><span>S</span>
                <span>á</span>
                <span>c</span> 
                <span>h</span>  
                <span>M</span> 
                <span>ớ</span> 
                <span>i</span> 
                <span>T</span> 
                <span>ì</span> 
                <span>m</span> 
                <span>T</span> 
                <span>h</span> 
                <span>ấ</span> 
                <span>y</span> 
                <span>{{count($product)}}</span> 
                <span>s</span> 
                <span>ả</span> 
                <span>n</span> 
                <span>p</span> 
                <span>h</span> 
                <span>ẩ</span> 
                <span>m</span> 
            </h6>
            <hr>
            <div class="recent-book-sec">
                <div class="row" id="load" style="position: relative;">
                     @foreach ($product as $pro)
                    <div class="col-md-3">
                        <div class="item">
                        @if($pro->promotion_price==0)
                       <div class="new">new</div>
                    @else
                        <span class="sale">sale</span>
                    @endif
                        
                             <a href="{{route('detail',$pro->id)}}"><img src="{{ asset('images/product/' . $pro->image) }}" alt="image"/></a>
                           
                <div class="content">
                <div class="body">
                    <p>{!! $pro->description !!}</p>
                </div>
                </div>
                 <h3><a href="#">{{ $pro->name }}</a></h3>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="btn-sec">
                    <a href="{{route('all')}}"><button class="btn gray-btn">Xem Thêm</button></a>
                </div>
            </div>
        </div>
    </section>
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