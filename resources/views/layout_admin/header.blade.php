<header class="main-header  ">
    <!-- Logo -->
    <a href="{{url('admin')}}" class="logo"><b>Admin</b></a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="" class="sidebar-toggle " data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- Messages: style can be found in dropdown.less-->
                <li class="dropdown messages-menu">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-envelope-o"></i>
                        <span class="label label-primary">4</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">Bạn có 4 tin nhắn</li>
                        <li>
                            <!-- inner menu: contains the actual data -->
                            <ul class="menu">
                                <li>
                                    <!-- start message -->
                                    <a href="">
                                        <div class="pull-left">
                                            <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
                                        </div>
                                        <h4>
                                            Support Team
                                            <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                        </h4>
                                        <p>Why not buy a new awesome theme?</p>
                                    </a>
                                </li><!-- end message -->
                                <li>
                                    <a href="">
                                        <div class="pull-left">
                                            <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="user image" />
                                        </div>
                                        <h4>
                                            AdminLTE Design Team
                                            <small><i class="fa fa-clock-o"></i> 2 hours</small>
                                        </h4>
                                        <p>Why not buy a new awesome theme?</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <div class="pull-left">
                                            <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="user image" />
                                        </div>
                                        <h4>
                                            Developers
                                            <small><i class="fa fa-clock-o"></i> Today</small>
                                        </h4>
                                        <p>Why not buy a new awesome theme?</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <div class="pull-left">
                                            <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="user image" />
                                        </div>
                                        <h4>
                                            Sales Department
                                            <small><i class="fa fa-clock-o"></i> Yesterday</small>
                                        </h4>
                                        <p>Why not buy a new awesome theme?</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <div class="pull-left">
                                            <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="user image" />
                                        </div>
                                        <h4>
                                            Reviewers
                                            <small><i class="fa fa-clock-o"></i> 2 days</small>
                                        </h4>
                                        <p>Why not buy a new awesome theme?</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="footer"><a href="">Xem thêm</a></li>
                    </ul>
                </li>
                <!-- Notifications: style can be found in dropdown.less -->
                <li class="dropdown notifications-menu">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-bell-o"></i>
                        <span class="label label-warning">10</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">Bạn có 10 thông báo</li>
                        <li>
                            <!-- inner menu: contains the actual data -->
                            <ul class="menu">
                                <li>
                                    <a href="">
                                        <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="fa fa-warning text-yellow"></i> Very long description here that may
                                        not fit into the page and may cause design problems
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="fa fa-users text-red"></i> 5 new members joined
                                    </a>
                                </li>

                                <li>
                                    <a href="">
                                        <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="fa fa-user text-red"></i> You changed your username
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="footer"><a href="">Xem thêm</a></li>
                    </ul>
                </li>


                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image" />
                        <span class="hidden-xs">{{Auth::user()->full_name}}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
                            <p>
                               {{Auth::user()->full_name}}
                                <small>Member since Nov. 2012</small>
                            </p>
                        </li>


                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="" class="btn btn-default btn-flat">Đổi mật khẩu</a>
                            </div>
                            <div class="pull-right">
                                <a href="{{url('logout')}}" class="btn btn-default btn-flat">Đăng Xuất</a>
                            </div>
                        </li>
                    </ul>
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
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>Team Bùa</p>

                <a href=""><i class="fa fa-circle text-success"></i> Online </a>
            </div>
        </div>
        <!-- search form -->

        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header ">
                <span style="font-size:20px ;padding:20px;color:rgb(192, 184, 184)"> HỆ THỐNG </span>
            </li>

            <!-- Thống kê -->
            <li class="treeview">
                <a href="{{ url('admin') }}">
                    <i class="fa fa-pie-chart fa-lg text-success"></i>
                    <span>Tổng Quan</span>
                </a>
            </li>


            <li class=" treeview">
                <a href="{{ route('book.index') }}">
                    <i class="fa fa-book fa-lg text-success"></i> <span> Sách</span>
                    <small class="label pull-right bg-green"></small>
                </a>

            </li>
            <!-- CRUD thể loại sách -->
            <li class="treeview">
                <a href="{{ route('book_type.index') }}">
                    <i class="fa fa-edit  fa-lg text-success"></i>
                    <span>Loại sách</span>
                    <small class="label pull-right bg-green">500</small>

                </a>

            </li>
            <!-- CRUD  nhà cung cấp -->
            <li class=" treeview">
                <a href="{{ route('supplier.index') }}">
                    <i class="fa fa-briefcase fa-lg text-success"></i> <span>Nhà cung cấp</span>
                </a>
            </li>
            <!-- Đơn hàng -->
            <li class="treeview">
                <a href="{{ route('bill.index') }}">
                    <i class="fa fa-inbox fa-lg text-success"></i>
                    <span>Đơn hàng</span>
                    <small class="label pull-right bg-yellow">500</small>
                </a>

            </li>
            <!-- Quản lý kho hàng -->
            <li class="treeview">
                <a href="{{ route('archive.index') }}">
                    <i class="fa fa-archive  fa-lg text-success"></i>
                    <span>Kho hàng</span>
                    <small class="label pull-right bg-yellow">12</small>
                </a>

            </li>
            <!-- Quản lý slide -->
            <li class="treeview">
                <a href="{{ route('slide.index') }}">
                    <i class="fa fa-list-alt  fa-lg text-success"></i>
                    <span>Slide</span>
                </a>

            </li>
            <li class="header ">
                <span style="font-size:20px ;padding:20px;color:rgb(192, 184, 184)"> PHÂN QUYỀN </span>
            </li>

            <li class="treeview">
                <a href="{{ route('user.index') }}">
                    <i class="fa fa-desktop  fa-lg text-success"></i>
                    <span>Tài Khoản</span>

                </a>

            </li>
            <li class="treeview">
                <a href="">
                    <i class="fa fa-user  fa-lg text-success"></i>
                    <span>Vai trò</span>

                </a>

            </li>
            <!--
            <li class="treeview">
              <a href="">
                <i class="fa fa-files-o"></i>
                <span>Layout Options</span>
                <span class="label label-primary pull-right">4</span>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
                <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
                <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
                <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
              </ul>
            </li>

            <li>
              <a href="pages/widgets.html">
                <i class="fa fa-th"></i> <span>Widgets</span> <small class="label pull-right bg-green">new</small>
              </a>
            </li> -->

        </ul>
    </section>

</aside>

    <!-- <script>
    $("tr input").hide();
    $("#btnsave").hide();

   
    $("#btnedit").click(function() {
        $("#btnsave").hide();
        $("#infull,#inuser,#indis").toggle();
    });
    $("#btnsave").click(function() {
        $("#infull,#inuser,#indis").toggle();
        $("#btnedit").hide();

        var obj = {};
                        var elems = $("tr").eq(index).find("label, input");
                        
                        elems.each(function(i, el) {
                            if ($(el).is("label")) {
                                obj[el.textContent] = elems[i + 1].value
                            }
                        });
    
});

</script> -->