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



            <!-- Main row -->
            <div class="row">
                <!-- Left col -->

                <div class="col-md-4">
                    <!-- PRODUCT LIST -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title"><i class="fa fa-signal">&nbsp; Hoạt động</i></h3>
                            <div class="box-tools pull-right">
                                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>

                            </div>
                        </div><!-- /.box-header -->
                        <div class="box-body  ">
                            <div class="info col-xs-7">Tiền bán hàng</div>
                            <div class="info col-xs-5 data text-right">0</div>
                            <div class="info col-xs-7">Số đơn hàng</div>
                            <div class="info col-xs-5 data text-right">0</div>
                            <div class="info col-xs-7">Số sản phẩm</div>
                            <div class="info col-xs-5 data text-right">0</div>
                            <div class="info col-xs-7">Khách hàng trả</div>
                            <div class="info col-xs-5 data text-right">0</div>
                            <div class="box-footer text-center">
                                <a href="javascript::;" class="uppercase">Xem Thêm</a>
                            </div><!-- /.box-footer -->
                        </div><!-- /.box -->
                    </div>
                </div><!-- /.col -->

                <div class="col-md-4">
                    <!-- PRODUCT LIST -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title"><i class="fa fa-bars">&nbsp;Thông tin kho</i> </h3>
                            <div class="box-tools pull-right">
                                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>

                            </div>
                        </div><!-- /.box-header -->
                        <div class="box-body  ">
                            <div class="info col-xs-7">Tồn kho</div>
                            <div class="info col-xs-5 data text-right">14</div>
                            <div class="info col-xs-7">Hết Hàng</div>
                            <div class="info col-xs-5 data text-right">1</div>
                            <div class="info col-xs-7">Sắp hết hàng</div>
                            <div class="info col-xs-5 data text-right">0</div>
                            <div class="info col-xs-7">Vượt định mức</div>
                            <div class="info col-xs-5 data text-right">0</div>
                            <div class="box-footer text-center">
                                <a href="javascript::;" class="uppercase">Xem Thêm</a>
                            </div><!-- /.box-footer -->
                        </div>
                    </div><!-- /.box -->
                </div><!-- /.col -->

                <div class="col-md-4">
                    <!-- PRODUCT LIST -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title"><i class="fa fa-barcode">&nbsp;Thông tin sản phẩm</i></h3>
                            <div class="box-tools pull-right">
                                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>

                            </div>
                        </div><!-- /.box-header -->
                        <div class="box-body ">
                            <div class="info col-xs-7">sản phẩm/Nhà sản xuất</div>
                            <div class="info col-xs-5 data text-right">21 /14</div>
                            <div class="info col-xs-7">Chưa làm giá bán</div>
                            <div class="info col-xs-5 data text-right">1</div>
                            <div class="info col-xs-7">Chưa nhập giá mua</div>
                            <div class="info col-xs-5 data text-right">0</div>
                            <div class="info col-xs-7">Hàng chưa phân loại</div>
                            <div class="info col-xs-5 data text-right">0</div>
                            <div class="box-footer text-center">
                                <a href="javascript::;" class="uppercase">Xem Thêm</a>
                            </div><!-- /.box-footer -->
                        </div>
                    </div><!-- /.box -->
                </div><!-- /.col -->


            </div><!-- /.row -->


            <div class="row">
                <div class="col-md-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Monthly Recap Report</h3>
                            <div class="box-tools pull-right">

                                <div class="btn-group">
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a></li>
                                    </ul>
                                </div>

                            </div>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <p class="text-center">
                                        <strong>Sales: 1 Jan, 2014 - 30 Jul, 2014</strong>
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
                                        <span class="description-percentage text-green"><i class="fa fa-caret-up"></i>
                                            17%</span>
                                        <h5 class="description-header">$35,210.43</h5>
                                        <span class="description-text">TOTAL REVENUE</span>
                                    </div><!-- /.description-block -->
                                </div><!-- /.col -->
                                <div class="col-sm-3 col-xs-6">
                                    <div class="description-block border-right">
                                        <span class="description-percentage text-yellow"><i class="fa fa-caret-left"></i>
                                            0%</span>
                                        <h5 class="description-header">$10,390.90</h5>
                                        <span class="description-text">TOTAL COST</span>
                                    </div><!-- /.description-block -->
                                </div><!-- /.col -->
                                <div class="col-sm-3 col-xs-6">
                                    <div class="description-block border-right">
                                        <span class="description-percentage text-green"><i class="fa fa-caret-up"></i>
                                            20%</span>
                                        <h5 class="description-header">$24,813.53</h5>
                                        <span class="description-text">TOTAL PROFIT</span>
                                    </div><!-- /.description-block -->
                                </div><!-- /.col -->
                                <div class="col-sm-3 col-xs-6">
                                    <div class="description-block">
                                        <span class="description-percentage text-red"><i class="fa fa-caret-down"></i>
                                            18%</span>
                                        <h5 class="description-header">1200</h5>
                                        <span class="description-text">GOAL COMPLETIONS</span>
                                    </div><!-- /.description-block -->
                                </div>
                            </div><!-- /.row -->
                        </div><!-- /.box-footer -->
                    </div><!-- /.box -->
                </div><!-- /.col -->

            </div>

        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
@endsection
