@extends('layout_admin.master2')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Thống Kê
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Thống Kê</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Info boxes -->
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-aqua"><i class="fa fa-suitcase"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Sản Phẩm</span>
                        <span class="info-box-number">90<small>%</small></span>
                    </div><!-- /.info-box-content -->
                </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-red"><i class="fa fa-archive"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Kho</span>
                        <span class="info-box-number">410</span>
                    </div><!-- /.info-box-content -->
                </div><!-- /.info-box -->
            </div><!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix visible-sm-block"></div>

            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Sales</span>
                        <span class="info-box-number">760</span>
                    </div><!-- /.info-box-content -->
                </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text"></span>
                        <span class="info-box-number">2,000</span>
                    </div><!-- /.info-box-content -->
                </div><!-- /.info-box -->
            </div><!-- /.col -->
        </div><!-- /.row -->

        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title"><i class="fa fa-bar-chart-o"></i>&nbsp;Báo cáo theo tháng</h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-8">
                                <p class="text-center">
                                    <strong>Bán hàng: Ngày 1, tháng 12, năm 2020</strong>
                                </p>
                                <div class="chart-responsive">
                                    <!-- Sales Chart Canvas -->
                                    <canvas id="salesChart" height="180"></canvas>
                                </div><!-- /.chart-responsive -->
                            </div><!-- /.col -->
                            <div class="col-md-4">
                                <p class="text-center">
                                    <strong>Goal Completion</strong>
                                </p>
                                <div class="progress-group">
                                    <span class="progress-text">Add Products to Cart</span>
                                    <span class="progress-number"><b>160</b>/200</span>
                                    <div class="progress sm">
                                        <div class="progress-bar progress-bar-aqua" style="width: 80%"></div>
                                    </div>
                                </div><!-- /.progress-group -->
                                <div class="progress-group">
                                    <span class="progress-text">Complete Purchase</span>
                                    <span class="progress-number"><b>310</b>/400</span>
                                    <div class="progress sm">
                                        <div class="progress-bar progress-bar-red" style="width: 80%"></div>
                                    </div>
                                </div><!-- /.progress-group -->
                                <div class="progress-group">
                                    <span class="progress-text">Visit Premium Page</span>
                                    <span class="progress-number"><b>480</b>/800</span>
                                    <div class="progress sm">
                                        <div class="progress-bar progress-bar-green" style="width: 80%"></div>
                                    </div>
                                </div><!-- /.progress-group -->
                                <div class="progress-group">
                                    <span class="progress-text">Send Inquiries</span>
                                    <span class="progress-number"><b>250</b>/500</span>
                                    <div class="progress sm">
                                        <div class="progress-bar progress-bar-yellow" style="width: 80%"></div>
                                    </div>
                                </div><!-- /.progress-group -->
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- ./box-body -->
                    <div class="box-footer">
                        <div class="row">
                            <div class="col-sm-3 col-xs-6">
                                <div class="description-block border-right">
                                    <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 17%</span>
                                    <h5 class="description-header">600,000,000 VNĐ</h5>
                                    <span class="description-text">Tổng Doanh Thu</span>
                                </div><!-- /.description-block -->
                            </div><!-- /.col -->
                            <div class="col-sm-3 col-xs-6">
                                <div class="description-block border-right">
                                    <span class="description-percentage text-yellow"><i class="fa fa-caret-left"></i> 0%</span>
                                    <h5 class="description-header">$10,390.90</h5>
                                    <span class="description-text">Chi Phí</span>
                                </div><!-- /.description-block -->
                            </div><!-- /.col -->
                            <div class="col-sm-3 col-xs-6">
                                <div class="description-block border-right">
                                    <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 20%</span>
                                    <h5 class="description-header">$24,813.53</h5>
                                    <span class="description-text">Lợi Nhuận</span>
                                </div><!-- /.description-block -->
                            </div><!-- /.col -->
                            <div class="col-sm-3 col-xs-6">
                                <div class="description-block">
                                    <span class="description-percentage text-red"><i class="fa fa-caret-down"></i> 18%</span>
                                    <h5 class="description-header">1200</h5>
                                    <span class="description-text">Đơn Hàng Đã Hoàn Thành</span>
                                </div><!-- /.description-block -->
                            </div>
                        </div><!-- /.row -->
                    </div><!-- /.box-footer -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->

        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <div class='col-md-4'>
                <!-- USERS LIST -->
                <div class="box box-danger">
                    <div class="box-header with-border">
                        <h3 class="box-title"><i class="fa fa-user"></i>&nbsp;Thành Viên Mới</h3>
                        <div class="box-tools pull-right">
                            <span class="label label-danger">8 Thành Viên</span>
                            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div><!-- /.box-header -->
                    <div class="box-body no-padding">
                        <ul class="users-list clearfix">
                            <li>
                                <img src="dist/img/user1-128x128.jpg" alt="User Image" />
                                <a class="users-list-name" href="#">Alexander Pierce</a>
                                <span class="users-list-date">Today</span>
                            </li>
                            <li>
                                <img src="dist/img/user8-128x128.jpg" alt="User Image" />
                                <a class="users-list-name" href="#">Norman</a>
                                <span class="users-list-date">Yesterday</span>
                            </li>
                            <li>
                                <img src="dist/img/user7-128x128.jpg" alt="User Image" />
                                <a class="users-list-name" href="#">Jane</a>
                                <span class="users-list-date">12 Jan</span>
                            </li>
                            <li>
                                <img src="dist/img/user6-128x128.jpg" alt="User Image" />
                                <a class="users-list-name" href="#">John</a>
                                <span class="users-list-date">12 Jan</span>
                            </li>
                            <li>
                                <img src="dist/img/user2-160x160.jpg" alt="User Image" />
                                <a class="users-list-name" href="#">Alexander</a>
                                <span class="users-list-date">13 Jan</span>
                            </li>
                            <li>
                                <img src="dist/img/user5-128x128.jpg" alt="User Image" />
                                <a class="users-list-name" href="#">Sarah</a>
                                <span class="users-list-date">14 Jan</span>
                            </li>
                            <li>
                                <img src="dist/img/user4-128x128.jpg" alt="User Image" />
                                <a class="users-list-name" href="#">Nora</a>
                                <span class="users-list-date">15 Jan</span>
                            </li>
                            <li>
                                <img src="dist/img/user3-128x128.jpg" alt="User Image" />
                                <a class="users-list-name" href="#">Nadia</a>
                                <span class="users-list-date">15 Jan</span>
                            </li>
                        </ul><!-- /.users-list -->
                    </div><!-- /.box-body -->
                    <div class="box-footer text-center">
                        <a href="javascript::" class="uppercase">Xem Thêm</a>
                    </div><!-- /.box-footer -->
                </div>
                <!--/.box -->
            </div><!-- /.col -->
            <div class="col-md-4">
                <!-- PRODUCT LIST -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"><i class="fa fa-bars"></i>&nbsp;Sản Phẩm Đã Được Thêm Gần Đây</h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <ul class="products-list product-list-in-box">
                            <li class="item">
                                <div class="product-img">
                                    <img src="http://placehold.it/50x50/d2d6de/ffffff" alt="Product Image" />
                                </div>
                                <div class="product-info">
                                    <a href="javascript::;" class="product-title">Samsung TV <span class="label label-warning pull-right">$1800</span></a>
                                    <span class="product-description">
                                        Samsung 32" 1080p 60Hz LED Smart HDTV.
                                    </span>
                                </div>
                            </li><!-- /.item -->
                            <li class="item">
                                <div class="product-img">
                                    <img src="dist/img/default-50x50.gif" alt="Product Image" />
                                </div>
                                <div class="product-info">
                                    <a href="javascript::;" class="product-title">Bicycle <span class="label label-info pull-right">$700</span></a>
                                    <span class="product-description">
                                        26" Mongoose Dolomite Men's 7-speed, Navy Blue.
                                    </span>
                                </div>
                            </li><!-- /.item -->
                            <li class="item">
                                <div class="product-img">
                                    <img src="dist/img/default-50x50.gif" alt="Product Image" />
                                </div>
                                <div class="product-info">
                                    <a href="javascript::;" class="product-title">Xbox One <span class="label label-danger pull-right">$350</span></a>
                                    <span class="product-description">
                                        Xbox One Console Bundle with Halo Master Chief Collection.
                                    </span>
                                </div>
                            </li><!-- /.item -->
                            <li class="item">
                                <div class="product-img">
                                    <img src="dist/img/default-50x50.gif" alt="Product Image" />
                                </div>
                                <div class="product-info">
                                    <a href="javascript::;" class="product-title">PlayStation 4 <span class="label label-success pull-right">$399</span></a>
                                    <span class="product-description">
                                        PlayStation 4 500GB Console (PS4)
                                    </span>
                                </div>
                            </li><!-- /.item -->
                        </ul>
                    </div><!-- /.box-body -->
                    <div class="box-footer text-center">
                        <a href="javascript::;" class="uppercase">Xem Thêm</a>
                    </div><!-- /.box-footer -->
                </div><!-- /.box -->
            </div><!-- /.col -->

            <div class="col-md-4">
                <!-- Info Boxes Style 2 -->
                <div class="info-box bg-yellow">
                    <span class="info-box-icon"><i class="ion ion-ios-pricetag-outline"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Inventory</span>
                        <span class="info-box-number">5,200</span>
                        <div class="progress">
                            <div class="progress-bar" style="width: 50%"></div>
                        </div>
                        <span class="progress-description">
                            50% Increase in 30 Days
                        </span>
                    </div><!-- /.info-box-content -->
                </div><!-- /.info-box -->
                <div class="info-box bg-green">
                    <span class="info-box-icon"><i class="ion ion-ios-heart-outline"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Mentions</span>
                        <span class="info-box-number">92,050</span>
                        <div class="progress">
                            <div class="progress-bar" style="width: 20%"></div>
                        </div>
                        <span class="progress-description">
                            20% Increase in 30 Days
                        </span>
                    </div><!-- /.info-box-content -->
                </div><!-- /.info-box -->
                <div class="info-box bg-red">
                    <span class="info-box-icon"><i class="ion ion-ios-cloud-download-outline"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Downloads</span>
                        <span class="info-box-number">114,381</span>
                        <div class="progress">
                            <div class="progress-bar" style="width: 70%"></div>
                        </div>
                        <span class="progress-description">
                            70% Increase in 30 Days
                        </span>
                    </div><!-- /.info-box-content -->
                </div><!-- /.info-box -->
                <div class="info-box bg-aqua">
                    <span class="info-box-icon"><i class="ion-ios-chatbubble-outline"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Direct Messages</span>
                        <span class="info-box-number">163,921</span>
                        <div class="progress">
                            <div class="progress-bar" style="width: 40%"></div>
                        </div>
                        <span class="progress-description">
                            40% Increase in 30 Days
                        </span>
                    </div><!-- /.info-box-content -->
                </div><!-- /.info-box -->
            </div><!-- /.col -->
        </div><!-- /.row -->


        <div class="row">

            <div class="col-xs">
                <div class="box box-solid ">

                    <div class="box-header">
                        <h3 class="box-title"><i class="fa fa-table"></i>&nbsp;Đơn hàng mới</h3>
                        <div class="box-tools pull-right">

                        </div>
                    </div>
                    <div class="box-body ">
                        <table class="table table-bordered">
                            <tr>
                                <th>Tên sách </th>
                                <th>Số lượng</th>
                                <th>Đơn giá</th>
                                <th>tổng tiền Tiền</th>
                                <th>Tình trạng</th>
                                <th>Tùy chọn</th>
                            </tr>
                            <tr>
                                <td>Harry Potter</td>
                                <td>2</td>
                                <td>20000</td>
                                <td>4</td>
                                <td>
                                    
                                    <div class="input-group-btn">
                                        <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Đang xử lý <span class="fa fa-caret-down"></span></button>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Tiếp nhận</a></li>
                                            <li><a href="#">Đã giao</a></li>

                                        </ul>
                                    </div>
                                <td><button class="btn btn-info btn-sm"><i class="fa fa-eye"></i></button>
                                    <button class="btn btn-danger btn-sm"><i class="fa fa-times"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>Harry Potter</td>
                                <td>2</td>
                                <td>20000</td>
                                <td>4</td>
                                <td>
                                    
                                    <div class="input-group-btn">
                                        <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Đang xử lý <span class="fa fa-caret-down"></span></button>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Tiếp nhận</a></li>
                                            <li><a href="#">Đã giao</a></li>

                                        </ul>
                                    </div>
                                <td><button class="btn btn-info btn-sm"><i class="fa fa-eye"></i></button>
                                    <button class="btn btn-danger btn-sm"><i class="fa fa-times"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>Harry Potter</td>
                                <td>2</td>
                                <td>20000</td>
                                <td>4</td>
                                <td>
                                    
                                    <div class="input-group-btn">
                                        <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Đang xử lý <span class="fa fa-caret-down"></span></button>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Tiếp nhận</a></li>
                                            <li><a href="#">Đã giao</a></li>

                                        </ul>
                                    </div>
                                <td><button class="btn btn-info btn-sm"><i class="fa fa-eye"></i></button>
                                    <button class="btn btn-danger btn-sm"><i class="fa fa-times"></i></button>
                                </td>
                            </tr>



                        </table>
                        <a href="{{route('order.index')}} "><i class="fa  fa-hand-o-right"></i>&nbsp; Xem thêm</a>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->

            </div>
        </div>

    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
@endsection