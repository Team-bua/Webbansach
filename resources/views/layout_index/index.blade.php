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
<<<<<<< HEAD
        <ul class="vert-one">
        <li>
            <center> <p><a>Danh Mục Sách</a></p></center>
        </li>  
=======

    	<ul class="vert-one">

		<li>
			<p><a href="">Danh Mục Sách</a></p>
				<ul id="t1">
                    @foreach($product_type as $pro)
                    <li><a href="#">{{$pro->name}}</a></li>
                    @endforeach
				</ul>
			<a href="#foo"></a>
        </li>

>>>>>>> 7abb66f27cb0a095defbb04134dc8d6aa85dd864
    </ul>
<div class="left_column">
      <div class="product_menu">
        <ul id="prod_nav" class="clearfix">
          <li class="top"><a href="#" class="top_link"><span class="down">Sách Trong Nước</span></a>
            <ul class="sub">
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
      </div>
    </div>
    
    </div>
</section>
<section class="static about-sec">
        <div class="container"> 
            <h2>books </h2>
            <hr>
            <div class="recent-book-sec">
                <div class="row">
                     @foreach ($product as $pro)
                    <div class="col-md-3">
                        <div class="item">
                        <div class="sale">- %20</div>
                             <a href="{{route('detail',$pro->id)}}"><img src="{{ asset('images/product/' . $pro->image) }}" alt="image"/></a>
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