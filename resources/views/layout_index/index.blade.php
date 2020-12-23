@extends('layout_index.master')
@section('content')
<section class="slider">
    <div class="container">
        <div id="slide-wrapper">
            <ul id="slider">
                <li>
                    <div class="border_on_img"></div>
                    <img src="images/slide/TrangComicManga_main_920x420.jpg" alt="Lorem ipsum dolor sit amet, consectetuer adipiscing elit.">
                </li>
                <li>
                    <div class="border_on_img"></div>
                    <img src="images/slide/VNDirectT10_mainbanner_920x420.jpg" alt="sed diam nonummy">
                </li>
                <li>
                    <div class="border_on_img"></div>
                    <img src="images/slide/p2-209x179.jpg" alt="Lorem ipsum dolor sit amet, consectetuer adipiscing elit.">
                </li>
                <li>
                    <div class="border_on_img"></div>
                    <img src="images/slide/361437_image20200910t030157126z.jpg" alt="Lorem ipsum dolor sit amet, consectetuer adipiscing elit.">
                </li>

            </ul>
        </div>
    </div>
    <div class="container">
            <ul class="vert-one" >
        <li>
            <p><a href="#t1">DANH MỤC SÁCH</a></p>
        </li>
        
    </ul>
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
                             <a href="{{route('detail')}}"><img src="{{ asset('images/product/' . $pro->image) }}" alt="image"/></a>
                            <h3><a href="#">{{ $pro->name }}</a></h3>
                            <h6><span class="price">{{ $pro->unit_price }}</span>
                                <span class="price"><del> {{ $pro->promotion_price }}</del> </span></h6>
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