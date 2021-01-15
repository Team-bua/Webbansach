<header>
        <a href="tel:0779 750 123"><div class="hotline">
<span class="before-hotline">Hotline:</span>
<span class="hotline-number">0779 750 123</span>
</div></a>
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <span class="ph-number"><i class="fa fa-truck"></i> Miễn Phí Vận Chuyển </span>
                </div>
                <div class="col-md-4 ">
                    <span style="float: left;" class="ph-number"><i class="fa fa-phone"></i> Số điện thoại: 0779 750 123 || 0945 555 666</span>
                </div>
            </div>
        </div>
    </div>
    <div class="main-menu">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand text-center" href="{{ route('index') }}"><img style=" height: 140px ;width:50%" src="images/logobook.png" alt="logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

            </nav>
        </div>
    </div>
    <div class="main-menu">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div id="menu">
                    <ul>
                        <li class="menu_item down"><a href="#"><i class="fa fa-bars"></i> Danh Mục Sách</a>
                            <div class="sub_menu">
                                <div class="bubble"></div>
                                <div class="sub_menu_block" style="width:326px">
                                    <ul>
                                        @for($i = 0; $i < count($product_n); $i++)
                                        <li><a href="{{ route('product_type', $types_id[$i]) }}">{{ $types_name[$i] }}({{ $product_n[$i] }})</a></li>
                                        @endfor
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="menu_item down"><a href="{{ route('index') }}">Trang Chủ</a> </li>
                        <li class="menu_item down"><a href="{{ route('introduce') }}">Giới thiệu</a></li>
                        <li class="menu_item down"><a href="{{ route('news') }}">Tin Tức</a></li>
                        <li class="menu_item down"><a href="{{ route('all_book') }}">Tất cả sách </a></li>
                        @if (Auth::check())
                        @else
                        <li class="menu_item down"><a href="{{ route('login') }}">Đăng Nhập</a></li>
                        <li class="menu_item down"><a href="{{ route('signup') }}">Đăng Ký</a></li>
                        @endif
                        <li class="menu_item down"><a href="#"><i class="fa fa-bars"></i> Danh Mục NXB</a>
                            <div class="sub_menu">
                                <div class="bubble"></div>
                                <div class="sub_menu_block" style="width:326px">
                                    <ul>
                                        @foreach ($company as $com)
                                        <li><a href="{{ route('product_company', $com->id) }}">{{ $com->name }}</a>
                                        </li>
                                        @endforeach
                                    </ul>

                                </div>
                            </div>
                        </li>
                    </ul>

                </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left: 4%">
                    <div class="cart my-2 my-lg-0">
                        <a href="{{ route('cart') }}">
                            <span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span></a>
                        <span class="quntity">
                            @if (Session::has('cart'))
                            {{ Session('cart')->totalQty }}@else 0
                            @endif
                        </span>
                    </div>
                    <form class="form-inline my-2 my-lg-0" role="search" method="get" id="searchform" action="{{ route('search') }}">
                        <input class="form-control mr-sm-2" type="text" value="" name="key" id="s" placeholder="Nhập từ khóa..." autocomplete="off" />
                        <span class="fa fa-search"></span>
                    </form>
                </div>
                @if (Auth::check())
                @if (Auth::user()->id_role == 1 || Auth::user()->id_role == 2)
                <div class="dropdown">
                    <button class="dropbtn">Chào Bạn &nbsp;<i class="fa fa-user-circle"></i></button>
                    <div class="dropdown-content">
                        <a href="{{ route('admin') }}">{{ Auth::user()->full_name }}</a>
                        <a href="{{ url('logout') }}">Đăng Xuất</a>
                    </div>
                </div>
                @else
                <div class="dropdown">
                    <button class="dropbtn">Chào Bạn &nbsp;<i class="fa fa-user-circle"></i></button>
                    <div class="dropdown-content">
                        <a href="{{ route('info',Auth::user()->id) }}">{{ Auth::user()->full_name }}</a>
                        <a href="{{ url('logout') }}">Đăng Xuất</a>
                    </div>
                </div>
                @endif
                @endif
            </nav>
        </div>
    </div>
</header>