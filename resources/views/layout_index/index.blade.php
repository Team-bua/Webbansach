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

    	<ul class="vert-one">

		<li>
			<p><a href="#t1">Danh Mục Sách</a></p>
				<ul id="t1">
                    @foreach($product_type as $pro)
                    <li><a href="#">{{$pro->name}}</a></li>
                    @endforeach
				</ul>
			<a href="#foo"></a>
        </li>

    </ul>
    
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
    <section class="recent-book-sec">
        <div class="container">
            <hr>
          
            <div class="row">
                @foreach($product as $new)
                <div class="col-lg-2 col-md-3 col-sm-4">
                    <div class="item">
                        <div class="new">New</div>
                        <a href="{{route('detail',$new->id)}}"><img src="{{ asset('images/product/'.$new->image) }}" alt="img" width="250px" height="200px"></a>
                        <h3><a href="{{route('detail',$new->id)}}">{{$new->name}}</a></h3>
                        <h6><span class="price">{{ $new->unit_price }}</span> / <a href="#">Buy Now</a></h6>
                    </div>
                     
                </div>
               @endforeach
            </div>
            <div class="row">{{$product->links()}}</div>
            <div class="btn-sec">
                <a href="{{route('all')}}" class="btn gray-btn" >Xem Thêm</a>
            </div>
        </div>
    </section>

    
    <a href="#" class="bck"></a>   
@endsection