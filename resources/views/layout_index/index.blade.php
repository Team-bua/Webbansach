@extends('layout_index.master')
@section('content')
    <section  class="slider">
        <div class="container">
            <div id="slide-wrapper">
                <ul id="slider">
                    @foreach ($slide as $sl)
                        <li>
                            <div class="border_on_img"></div>
                            <img src="{{ asset('images/slide/' . $sl->image) }}">
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>
    <div class="container">
        <table >
            <tr>
                <td ><img style="height:260px;"src="{{ asset('images/slide1.png') }}"alt="image" /> </td>
                    <td ><img style="height:260px;" src="{{ asset('images/slide1.png') }}"alt="image" /> </td>
                    <td ><img style="height:260px" src="{{ asset('images/slide2.png') }}"alt="image" /> </td>
                    <td ><img style="height:260px;" src="{{ asset('images/slide3.png') }}"alt="image" /> </td>
               
            </tr>
        </table>
    </div>
    <br>
    <section class="static about-sec">
        <div class="container">
            <h6><span>S</span>
                <span>á</span>
                <span>c</span>
                <span>h</span>
                <span>M</span>
                <span>ớ</span>
                <span>i</span>
                <span>N</span>
                <span>h</span>
                <span>ấ</span>
                <span>t</span>
                <span>.</span>

            </h6>
            <hr>
            <div class="recent-book-sec">
                <div class="row" id="load" style="position: relative;">
                    @foreach ($product_new as $pro)
                        <div class="col-md-3">
                            <div class="item">                               
                                    <div class="new">new</div>
                                <a href="{{ route('detail', $pro->id) }}"><img
                                        src="{{ asset('images/product/' . $pro->image) }}" alt="image" /></a>
                                <h3><a href="#">{{ $pro->name }}</a></h3>
                                 <h6><a href="javascript:"><i onclick="AddCart('{{$pro->id}}')" class="fa fa-cart-arrow-down"></i></a></h6>
                                <div class="content">
                                    <div class="body">
                                        <p>{!! $pro->description !!}</p>
                                    </div>
                                </div>
                               @if($pro->promotion_price == 0)
                                      <p class="wrap_price">
                                     <span class="price-new">
                                        {{number_format($pro->unit_price,0,"",",")}}VNĐ
                                     </span> 
                                      @else
                                      <span class="price-old">
                                        {{number_format($pro->unit_price,0,"",",")}}VNĐ
                                      </span> 
                                     <span class="price-new">{{number_format($pro->promotion_price,0,"",",")}}VNĐ
                                     </span>
                                      </p>
                               @endif   
                            </div>
                        </div>

                    @endforeach
                </div>
                <div class="btn-sec">
                    <a href="{{ route('allnew') }}"><button class="btn gray-btn">Xem Thêm</button></a>
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
                <span>K</span>
                <span>h</span>
                <span>u</span>
                <span>y</span>
                <span>ế</span>
                <span>n</span>
                <span>M</span>
                <span>ã</span>
                <span>i</span>
                <span>.</span>

            </h6>
            <hr>
            <div class="recent-book-sec">
                <div class="row" id="load" style="position: relative;">
                    @foreach ($product_sale as $pro)
                        <div class="col-md-3">
                            <div class="item">
                                @if ($pro->promotion_price != 0)
                                   
                                    <span class="sale">sale</span>
                                @endif

                                <a href="{{ route('detail', $pro->id) }}"><img
                                        src="{{ asset('images/product/' . $pro->image) }}" alt="image" /></a>
                                         <h3><a href="#">{{ $pro->name }}</a></h3>
                              @if($pro->promotion_price == 0)
                                      <p class="wrap_price">
                                     <span class="price-new">
                                        {{number_format($pro->unit_price,0,"",",")}}VNĐ
                                     </span> 
                                      @else
                                      <span class="price-old">
                                        {{number_format($pro->unit_price,0,"",",")}}VNĐ
                                      </span> 
                                     <span class="price-new">{{number_format($pro->promotion_price,0,"",",")}}VNĐ
                                     </span>
                                      </p>
                               @endif   
                                <div class="content">
                                    <div class="body">
                                        <p>{!! $pro->description !!}</p>
                                    </div>
                                </div>
                                  <h6><a href="javascript:"><i onclick="AddCart('{{$pro->id}}')" class="fa fa-cart-arrow-down"></i></a></h6>
                                
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="btn-sec">
                    <a href="{{ route('allsale') }}"><button class="btn gray-btn">Xem Thêm</button></a>
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
                <span>N</span>
                <span>ổ</span>
                <span>i</span>
                <span>B</span>
                <span>ậ</span>
                <span>t</span>
                <span>.</span>

            </h6>
            <hr>
            <div class="recent-book-sec">
                <div class="row" id="load" style="position: relative;">
                    @foreach ($product_hightlights as $pro)
                        <div class="col-md-3">
                            <div class="item">
                                @if ($pro->new == 1)
                                    <div class="new">Hot</div> 
                                @endif

                                <a href="{{ route('detail', $pro->id) }}"><img
                                        src="{{ asset('images/product/' . $pro->image) }}" alt="image" /></a>
                                         <h3><a href="#">{{ $pro->name }}</a></h3>
                                        <h6><a href="javascript:"><i onclick="AddCart('{{$pro->id}}')" class="fa fa-cart-arrow-down"></i></a></h6>
                                <div class="content">
                                    <div class="body">
                                        <p>{!! $pro->description !!}</p>
                                    </div>
                                </div>
                               @if($pro->promotion_price == 0)
                                      <p class="wrap_price">
                                     <span class="price-new">
                                        {{number_format($pro->unit_price,0,"",",")}}VNĐ
                                     </span> 
                                      @else
                                      <span class="price-old">
                                        {{number_format($pro->unit_price,0,"",",")}}VNĐ
                                      </span> 
                                     <span class="price-new">{{number_format($pro->promotion_price,0,"",",")}}VNĐ
                                     </span>
                                      </p>
                               @endif   
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="btn-sec">
                    <a href="{{  route('allhighlights')  }}"><button class="btn gray-btn">Xem Thêm</button></a>
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
@section('script')
<script>
        function AddCart(id) {
            $.ajax({
                url: 'addcart/' + id,
                type: 'GET'
            }).done(function(response) {
                Swal.fire({
                    icon: 'success',
                    title: 'Đã thêm vào giỏ hàng',
                    showConfirmButton: false,
                    timer: 1500
                })
            })
        }

    </script>
@stop