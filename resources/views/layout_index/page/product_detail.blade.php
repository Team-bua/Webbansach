@extends('layout_index.master')
@section('content')
<section class="product-sec">
  <div class="container">
    <h1>7 Day Self publish How to Write a Book</h1>
    <div class="row">

      <div class="col-md-6 slider-sec">
        <!-- main slider carousel -->
        <div id="myCarousel" class="carousel slide">
          <!-- main slider carousel items -->
          <div class="carousel-inner">
            <div class="offer">- %20</div>
            <div class="active item carousel-item" data-slide-number="0">
              <img src="images/product1.jpg" class="img-fluid">
            </div>
            <div class="item carousel-item" data-slide-number="1">
              <img src="images/product2.jpg" class="img-fluid">
            </div>
            <div class="item carousel-item" data-slide-number="2">
              <img src="images/product3.jpg" class="img-fluid">
            </div>
          </div>
          <!-- main slider carousel nav controls -->
          <ul class="carousel-indicators list-inline">
            <li class="list-inline-item active">
              <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#myCarousel">
                <img src="images/product1.jpg" class="img-fluid">
              </a>
            </li>
            <li class="list-inline-item">
              <a id="carousel-selector-1" data-slide-to="1" data-target="#myCarousel">
                <img src="images/product2.jpg" class="img-fluid">
              </a>
            </li>
            <li class="list-inline-item">
              <a id="carousel-selector-2" data-slide-to="2" data-target="#myCarousel">
                <img src="images/product3.jpg" class="img-fluid">
              </a>
            </li>
          </ul>
        </div>
        <!--/main slider carousel-->
      </div>
      <div class="col-md-6 slider-content">

        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
          industry's printer took a galley of type and Scrambled it to make a type and typesetting industry. Lorem Ipsum
          has been the book. </p>
        <p>t has survived not only fiveLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
          Ipsum has been the industry's printer took a galley of type and</p>
        <ul>
          <li>
            <span class="name">Giá niêm yết</span><span class="clm">:</span>
            <span class="price">$10.99</span>
          </li>
          <li>
            <span class="name">Giá Bán</span><span class="clm">:</span>
            <span class="price final">$3.37</span>
          </li>

        </ul>

        <form action="" class="cart">
          <div class="quantity">
            <span class="name">Số Lượng</span><span class="clm"> : </span> <input type="number" size="4"
              class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1">
          </div>

        </form>
        <div class="btn-sec">
          <button class="btn ">Thêm Vào Giỏ Hàng</button>
          <button class="btn black">Đọc ONLINE</button>
        </div>
        <br>
        <ul>
          <li>
            <span class="name">Tác Giả</span><span class="clm">:</span>
            <span class="price">#####</span>
          </li>
          <li>
            <span class="name">Tác giả</span><span class="clm">:</span>
            <span class="price">#####</span>
          </li>
          <li>
            <span class="name">Tác giả</span><span class="clm">:</span>
            <span class="price">#####</span>
          </li>
          <li>
            <span class="name">Tác giả</span><span class="clm">:</span>
            <span class="price">#####</span>
          </li>
          <li>
            <span class="name">Tác giả</span><span class="clm">:</span>
            <span class="price">#####</span>
          </li>
          <li>
            <span class="name">Tác giả</span><span class="clm">:</span>
            <span class="price">#####</span>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>
<section class="deltai">
  <div class="container">
    <span class="heading">User Rating</span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star"></span>
    <p>4.1 average based on 254 reviews.</p>
    <hr style="border:3px solid #f1f1f1">

    <div class="row">
      <div class="side">
        <div>5 star</div>
      </div>
      <div class="middle">
        <div class="bar-container">
          <div class="bar-5"></div>
        </div>
      </div>
      <div class="side right">
        <div>150</div>
      </div>
      <div class="side">
        <div>4 star</div>
      </div>
      <div class="middle">
        <div class="bar-container">
          <div class="bar-4"></div>
        </div>
      </div>
      <div class="side right">
        <div>63</div>
      </div>
      <div class="side">
        <div>3 star</div>
      </div>
      <div class="middle">
        <div class="bar-container">
          <div class="bar-3"></div>
        </div>
      </div>
      <div class="side right">
        <div>15</div>
      </div>
      <div class="side">
        <div>2 star</div>
      </div>
      <div class="middle">
        <div class="bar-container">
          <div class="bar-2"></div>
        </div>
      </div>
      <div class="side right">
        <div>6</div>
      </div>
      <div class="side">
        <div>1 star</div>
      </div>
      <div class="middle">
        <div class="bar-container">
          <div class="bar-1"></div>
        </div>
      </div>
      <div class="side right">
        <div>20</div>
      </div>
    </div>
  </div>
  <div class="container">

  </div>
</section>

<a href="#" class="bck"></a>
@endsection