@extends('layout_index.master')
@section('content')
<section class="slider">
    <div class="container">
        <div id="slide-wrapper">
            <ul id="slider">
                @foreach($slide as $sl)
                <li>
                    <div class="border_on_img"></div>
                    <img src="{{ asset('images/slide/'.$sl->image) }}" alt="Lorem ipsum dolor sit amet, consectetuer adipiscing elit.">
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="container">
        <ul class="vert-one">
        <li>
            <center> <p><a>Danh Mục Sách</a></p></center>
        </li>  
    </ul>
    <div class="left_column">
        <div class="product_menu">
            @foreach ($product_type as $pro)
        <ul id="prod_nav" class="clearfix">
            <li class="top"><a  class="top_link"><span class="down">{{ $pro->name }}</span></a>
            <ul  class="sub">
              <li>
                  <ul>
                      <li><h6>Submenu #1</h6></li>
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
            <h3>Sản phẩm mới: {{count($product)}} sản phẩm </h3>
            <hr>
            <div class="recent-book-sec">
                <div class="row">
                     @foreach ($product as $pro)
                    <div class="col-md-3">
                        <div class="item">
                        <div class="sale">- %20</div>
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

            <h3>Sản phẩm mới: {{count($product)}} sản phẩm </h3>
            <hr>
            <div class="recent-book-sec">
                <div class="row">
                     @foreach ($product as $pro)
                    <div class="col-md-3">
                        <div class="item">
                        <div class="sale">- %20</div>
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

            <h3>Sản phẩm mới: {{count($product)}} sản phẩm </h3>
            <hr>
            <div class="recent-book-sec">
                <div class="row">
                     @foreach ($product as $pro)
                    <div class="col-md-3">
                        <div class="item">
                        <div class="sale">- %20</div>
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
<section class="features-sec">
        <div class="container">
            <ul>
                <li>
                    <span class="icon"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
                    <h3>SAFE SHOPPING</h3>
                    <h5>Safe Shopping Guarantee</h5>
                    <h6>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's...</h6>
                </li>
                <li>
                    <span class="icon return"><i class="fa fa-reply-all" aria-hidden="true"></i></span>
                    <h3>30- DAY RETURN</h3>
                    <h5>Moneyback guarantee</h5>
                    <h6>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's...</h6>
                </li>
                <li>
                    <span class="icon chat"><i class="fa fa-comments" aria-hidden="true"></i></span>
                    <h3>24/7 SUPPORT</h3>
                    <h5>online Consultations</h5>
                    <h6>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's...</h6>
                </li>
            </ul>

</section>
    
    <a href="#" class="bck"></a>   
@endsection