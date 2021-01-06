<style>
    .wordart {
        font-family: Arial, sans-serif;
        font-size: 34px;
        font-weight: bold;
        position: relative;
        z-index: 1;
        display: inline-block;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }
    .wordart.horizon .text {
        font-family: Arial, sans-serif;
        font-weight: bold;
        font-style: oblique;
        background: #7286a7;
        background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJod…EiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
        background: -moz-linear-gradient(top, #e8ecf3 0%, #e8ecf3 13%, #ffffff 50%, #cdd82e 56%, #ffffff 100%);
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #7286a7), color-stop(13%, #7286a7), color-stop(50%, #ffffff), color-stop(56%, #812f30), color-stop(100%, #ffffff));
        background: -webkit-linear-gradient(top, #e8ecf3 0%, #e8ecf3 13%, #ffffff 50%, #cdd82e 56%, #ffffff 100%);
        background: -o-linear-gradient(top, #e8ecf3 0%, #e8ecf3 13%, #ffffff 50%, #cdd82e 56%, #ffffff 100%);
        background: -ms-linear-gradient(top, #e8ecf3 0%, #e8ecf3 13%, #ffffff 50%, #cdd82e 56%, #ffffff 100%);
        background: linear-gradient(to bottom, #e8ecf3 0%, #e8ecf3 13%, #ffffff 50%, #cdd82e 56%, #ffffff 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#7286a7', endColorstr='#ffffff', GradientType=0);
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
    .wordart.horizon .text:before {
        content: attr(data-text);
        position: absolute;
        z-index: -1;
        text-shadow: 0.01em 0em 0 #161616, 0em 0.01em 0 #8d8d8d, 0.02em 0.01em 0 #161616, 0.01em 0.02em 0 #8d8d8d, 0.03em 0.02em 0 #161616, 0.02em 0.03em 0 #8d8d8d, 0.04em 0.03em 0 #161616, 0.03em 0.04em 0 #8d8d8d, 0.05em 0.04em 0 #161616, 0.04em 0.05em 0 #8d8d8d, 0.06em 0.05em 0 #161616, 0.05em 0.06em 0 #8d8d8d, 0.07em 0.06em 0 #161616, 0.06em 0.07em 0 #8d8d8d, 0.08em 0.07em 0 #161616, 0.07em 0.08em 0 #8d8d8d, 0.09em 0.08em 0 #161616, 0.08em 0.09em 0 #8d8d8d, 0.1em 0.09em 0 #161616, 0.09em 0.1em 0 #8d8d8d;
    }
</style>


<header class="main-header  ">
    <!-- Logo -->
    <a href="{{ url('index') }}" class="logo"><b><img style=" padding-right:35px;"
                src="{{ asset('images/icon/backg.png') }}" class="user-image" alt="User Image" height="50px"
                width="250px" /></b></a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <div class="wordart horizon">
            <span class="text">Hệ thống quản lý trang bán sách </span>
        </div>
        <a href="" class="sidebar-toggle " data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="dropdown user user-menu">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown">
                        <img style="background-color: #ffffff" src="{{ asset('images/icon/adminicon.png') }}"
                            class="user-image" alt="User Image" />
                        <span class="hidden-xs">{{ Auth::user()->full_name }}</span>
                    </a>
                    <ul class="dropdown-menu" style="padding-top: 7px;">
                        <!-- User image -->
                        <li style="background-color: #ecc518" class="user-header">
                            <img style="background-color: #ffffff" src="{{ asset('images/icon/admin.png') }}"
                                class="img-circle" alt="User Image" />
                            <p style="color: #ffffff">
                                {{ Auth::user()->full_name }} ({{ Auth::user()->role->display_name }})
                                <small>{{ Auth::user()->email }}</small>
                            </p>
                        </li>




                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="{{ route('user.edit', Auth::user()->id) }}" class="btn btn-danger btn-flat">Đổi
                                    mật khẩu</a>
                            </div>
                            <div class="pull-right">
                                <a href="{{ url('logout') }}" class="btn btn-primary btn-flat">Đăng Xuất</a>
                            </div>
                        </li>
                    </ul>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{ asset('images/icon/tiengviet.png') }}" height="16px" width="25px">
                    </a>
                    <ul class="dropdown-menu" style="margin-top:7px;min-width:55px;
                     min-height:50px;padding-left:29%;background-color:#ffffff;line-height:35px;">
                        <li>
                            <img src="{{ asset('images/icon/tienganh.png') }}" height="16px" width="25px">
                        </li>
                    </ul>
                </li>

                </li>
            </ul>
        </div>
    </nav>
</header>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img style="background-color: #ffffff" src="{{ asset('images/icon/admin.png') }}" class="img-circle"
                    alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->full_name }}</p>

                <a href=""><i class="fa fa-circle text-warning"></i> {{ Auth::user()->role->display_name }} </a>
            </div>
        </div>
        <!-- search form -->
        <form action="" method="get" class="sidebar-form" style="border-color: #222d32">
            <div class="input-group" >
              <select name="searchs" id="searchs" class="form-control" placeholder="Search...">
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    <option value="mercedes">Mercedes</option>
                    <option value="audi">Audi</option>
                </select>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat" style="border:none; background-color:#4a4235;color:#fff;float:left;margin-top:0px;margin-left:2px"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>


        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header ">
                <span style="font-size:20px ;color:rgb(238, 238, 238)"> QUẢN LÝ CỬA HÀNG </span>
            </li>

            <!-- Thống kê -->
            <li class="treeview">
                <a href="{{ url('admin') }}">
                    <i style="color:#7c7059" class="fa fa-pie-chart fa-lg text-warning"></i>
                    <span style="font-size:16px ;">Tổng Quan</span>
                </a>
            </li>


            <li class=" treeview">
                <a href="{{ route('book.index') }}">
                    <i style="color:#7c7059" class="fa fa-book fa-lg text-warning"></i>
                    <span style="font-size:16px ;"> Sách</span>

                </a>

            </li>
            <!-- CRUD thể loại sách -->
            <li class="treeview">
                <a href="{{ route('book_type.index') }}">
                    <i style="color:#7c7059"class="fa fa-edit  fa-lg text-warning"></i>
                    <span style="font-size:16px ;">Loại sách</span>


                </a>

            </li>
            <!-- CRUD  nhà cung cấp -->
            <li class=" treeview">
                <a href="{{ route('supplier.index') }}">
                    <i style="color:#7c7059"class="fa fa-briefcase fa-lg text-warning"></i>
                    <span style="font-size:16px ;">Nhà cung cấp</span>
                </a>
            </li>

            <!-- Quản lý slide -->
            <li class="treeview">
                <a href="{{ route('slide.index') }}">
                    <i style="color:#7c7059"class="fa fa-list-alt  fa-lg text-warning"></i>
                    <span>Bìa</span>
                </a>

            <li class="header ">
                <span style="font-size:20px ;color:rgb(238, 238, 238)"> QUẢN LÝ BÁN HÀNG </span>
            </li>
            <!-- Đơn hàng -->
            <li class="treeview">
                <a href="{{ route('user.index') }}">
                  <i style="color:#7c7059" class="fa fa-inbox fa-lg text-warning"></i>
                  <span style="font-size:16px ;">Đơn hàng</span>
                  <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu" style="display: none;">
                  <li> <a href="{{ route('notreceiving') }}"><i class="fa fa-rotate-right"></i> Đơn hàng chưa xử lý</a></li>
                  <li> <a href="{{ route('receiving') }}"><i class="fa fa-play"></i> Đơn hàng đang giao</a></li>
                  <li> <a href="{{ route('completereceiving') }}"><i class="fa fa-check-square"></i> Đơn hàng đã giao</a></li>
                </ul>
              </li>
            <!-- Quản lý kho hàng -->
            <li class="treeview">
                <a >
                    <i style="color:#7c7059" class="fa fa-archive  fa-lg text-warning"></i>
                    <span style="font-size:16px ;"> Kho hàng</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu" style="display: none;">
                    <li> <a href="{{ route('archive.index') }}"><i class="fa fa-list-alt"></i> Tồn Kho </a></li>
                    <li> <a href=""><i class="fa fa-inbox"></i> Nhập kho</a></li>
                  </ul>
            </li>
            <li class="treeview">
                <a href="{{ route('companies.index') }}">
                    <i style="color:#7c7059" class="fa  fa-suitcase  fa-lg text-warning"></i>
                    <span style="font-size:16px ;">Nhà phát hành</span>

                </a>
            </li> 
            
            @if (Auth::check())
                @if (Auth::user()->id_role == 1)
                    <li class="header ">
                        <span style="font-size:20px ;padding:22px;color:rgb(238, 238, 238)"> PHÂN QUYỀN </span>
                    </li>

                    <li class="treeview">
                        <a href="{{ route('user.index') }}">
                            <i style="color:#7c7059"class="fa fa-desktop  fa-lg"></i>
                            <span style="font-size:16px ;"> Tài Khoản</span>

                        </a>

                    </li>
                    <li class="treeview">
                        <a href="{{ url('logout') }}">
                            <i style="color:#7c7059" class="fa fa-sign-out  fa-lg text-warning"></i>
                            <span style="font-size:16px ;">Thoát</span>


            </li>
            @endif
<<<<<<< HEAD
=======


>>>>>>> 09617c2c7663823b9c97129729763d39d3ffff14
            @endif
        </ul>
    </section>

</aside>