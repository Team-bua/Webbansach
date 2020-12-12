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

    </div>
   
</section>
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
        </div>
    </section>
  <section class="recomended-sec">
        <div class="container">
            <div class="title">
                <h2>highly recommendes books</h2>
                <hr>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="item">
                        <img src="images/img1.jpg" alt="img">
                        <h3>how to be a bwase</h3>
                        <h6><span class="price">$49</span> / <a href="#">Buy Now</a></h6>
                        <div class="hover">
                            <a href="{{route('chitiet')}}">
                            <span><i class="fa fa-long-arrow-right" aria-hidden="true" ></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about-sec">
        <div class="about-img">
            <figure style="background:url(./images/about-img.jpg)no-repeat;"></figure>
        </div>
        <div class="about-content">
            <h2>About bookstore,</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's printer took a galley of type and Scrambled it to make a type and typesetting industry. Lorem Ipsum has been the book. </p>
            <p>It has survived not only fiveLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's printer took a galley of type and</p>
            <div class="btn-sec">
                <a href="shop.html" class="btn yellow">shop books</a>
                <a href="login.html" class="btn black">subscriptions</a>
            </div>
        </div>
    </section>
    <section class="recent-book-sec">
        <div class="container">
            <div class="title">
                <h2>highly recommendes books</h2>
                <hr>
            </div>
            <div class="row">
                <div class="col-lg-2 col-md-3 col-sm-4">
                    <div class="item">
                        <img src="images/r1.jpg" alt="img">
                        <h3><a href="#">Keepers of the kalachakara</a></h3>
                        <h6><span class="price">$19</span> / <a href="#">Buy Now</a></h6>
                    </div>
                </div>
            </div>
            <div class="btn-sec">
                <a href="{{route('tatcaSP')}}" class="btn gray-btn">view all books</a>
            </div>
        </div>
    </section>
@endsection