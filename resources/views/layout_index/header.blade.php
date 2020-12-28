    <header>
        <div class="header-top">
            <div class="container">
                <div class="row">
                   @if(Auth::check())
                    <div class="col-md-3">Chào Bạn : <a href="{{route('admin')}}">{{Auth::user()->full_name}}</a></a></div>
                    @else
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
                    <a class="navbar-brand" href="{{route('index')}}"><img src="images/logoteambua.png" alt="logo"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="navbar-item active">
              <a href="{{route('index')}}" class="nav-link">Trang Chủ</a>
            </li>
            <li class="navbar-item active">
              <a href="{{route('introduce')}}" class="nav-link">Giới thiệu</a>
            </li>
            <li class="navbar-item active">
              <a href="{{route('news')}}" class="nav-link">Tin Tức</a>
            </li>
            @if(Auth::check())
            @else
            <li class="navbar-item active">
              <a href="{{route('login')}}" class="nav-link">Đăng Nhập</a>
            </li>
             @endif
            <li class="navbar-item active">
              <a href="{{route('signup')}}" class="nav-link">Đăng Ký</a>
            </li>

          </ul>
          <div class="cart my-2 my-lg-0">
            <a href="{{route('cart')}}"><span>
                <i class="fa fa-shopping-cart" aria-hidden="true"></i></span></a>
          </div>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search here..." aria-label="Search">
            <span class="fa fa-search"></span>
          </form>
        </div>
                </nav>
            </div>
        </div>
    </header>