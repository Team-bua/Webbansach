<header>
        <div class="header-top">
            <div class="container">
                <div class="row">
                   @if(Auth::check())
                    @if(Auth::user()->id_role == 1 || Auth::user()->id_role == 2)
                    <div class="col-md-3">Chào Bạn : <a href="{{route('admin')}}">{{Auth::user()->full_name}}</a></a><br><a href="{{ url('logout') }}">Đăng Xuất</a></div>
                    @else
                    <div class="col-md-3">Chào Bạn : <a href="{{route('index')}}">{{Auth::user()->full_name}}</a></a><br><a href="{{ url('logout') }}">Đăng Xuất</a></div>
                    @endif
                  @endif
                     
                  <div class="col-md-3">
                        <span class="ph-number"><i class="fa fa-truck"></i>Miễn Phí Vận Chuyển</span>
                    </div>
                    <div class="col-md-3">
                        <span class="ph-number"><i class="fa fa-phone"></i>Call: 0779 750 123</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-menu">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="{{ route('index') }}"><img src="images/logoteambua.png"
                            alt="logo"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="cart my-2 my-lg-0">
                            <a href="{{ route('cart') }}">
                                <span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span></a>
                            <span class="quntity">
                                @if (Session::has('cart'))
                                {{ Session('cart')->totalQty }}@else 0 @endif
                            </span>
                        </div>
                        <form class="form-inline my-2 my-lg-0" role="search" method="get" id="searchform"
                            action="{{ route('search') }}">
                            <input type="text" value="" name="key" id="s" placeholder="Nhập từ khóa..."
                                autocomplete="off" />
                            <span class="fa fa-search"></span>
                        </form>
                    </div>
                </nav>
            </div>
        </div>
        <div class="main-menu">
          <div class="container">
              <nav class="navbar navbar-expand-lg navbar-light">
                   <div id="menu">
    <ul>
      <li class="menu_item down"><a href="#"><i class="fa fa-bars"></i> Danh Mục Sách</a>
                              <div class="sub_menu" style="">
                                  <div class="bubble"></div>
                                  <div class="sub_menu_block" style="width:326px">
                                      <ul>
                                          @foreach ($types as $pro)
                                              <li><a href="">{{ $pro->name }}</a></li>
                                          @endforeach                            
                                      </ul>

                                  </div>
                              </div>
                          </li>
      <li class="menu_item down"><a href="{{ route('index') }}">Trang Chủ</a> </li>
      <li class="menu_item down"><a href="{{ route('introduce') }}">Giới thiệu</a></li>
      <li class="menu_item down"><a href="{{ route('news') }}">Tin Tức</a></li>
      @if (Auth::check())
      @else
      <li class="menu_item down"><a href="{{ route('login') }}">Đăng Nhập</a></li>
      <li class="menu_item down"><a href="{{ route('signup') }}">Đăng Ký</a></li>
      @endif
    </ul>
  </div>
              </nav>
          </div>
      </div>
    </header>