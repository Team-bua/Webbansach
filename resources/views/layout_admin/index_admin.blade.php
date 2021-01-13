@extends('layout_admin.master')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Thống Kê
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i>Hệ thống</a></li>
                <li class="active">Tổng quan</li>
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
                            <span class="info-box-number">{{ count($product) }}<small> cuốn </small></span>
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
                            <span class="info-box-text">Thành viên</span>
                            <span class="info-box-number">{{ count($user) }}</span>
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
                                <div class="col-md-7">
                                    <!-- Bar chart -->
                                    <div class="box-header">
                                        <div class="form-group col-md-12 padd-0" style="padding-left: 5px;">
                                            <div class="col-md-12 padd-0">

                                                <div class="col-md-5 padd-0" style="padding-left: 5px ">
                                                    <div class="input-daterange input-group" id="datepicker">
                                                        <input style="height:34px " type="date"
                                                            class="input-sm form-control" id="search-date-from"
                                                            placeholder="Từ ngày" name="start">
                                                        <span class="input-group-addon">đến</span>
                                                        <input style="height:34px " type="date"
                                                            class="input-sm form-control" id="search-date-to"
                                                            placeholder="Đến ngày" name="end">
                                                    </div>
                                                </div>

                                                <div class="col-md-4 padd-0">
                                                    <select style="width:110px ;margin-left:72%;" class="form-control">
                                                        <option value="0">Tháng 1</option>
                                                        <option value="1">Tháng 2</option>
                                                        <option value="2">Tháng 3</option>
                                                        <option value="3">Tháng 4</option>
                                                        <option value="4">Tháng 5</option>
                                                        <option value="5">Tháng 6</option>
                                                        <option value="6">Tháng 7</option>
                                                        <option value="7">Tháng 8</option>
                                                        <option value="8">Tháng 9</option>
                                                        <option value="9">Tháng 10</option>
                                                        <option value="10">Tháng 11</option>
                                                        <option value="11">Tháng 12</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-3 padd-0" style="padding-left: 5%;">
                                                    <button style="box-shadow: none; margin: 0; background-color:#4a4235; border-color:#4a4235" type="button"
                                                        class="btn btn-success btn-large" onclick="cms_paging_order(1)"><i
                                                            class="fa fa-search"></i>
                                                    </button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.box -->
                            <canvas id="buyers" width="1000px" height="300"></canvas>

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
@section('js')
    <script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js'></script>
    <script>
        // line chart data
        var buyerData = {
            labels: ["Tháng 1", "Tháng 2", "Tháng 3", "Tháng 4", "Tháng 5", "Tháng 6", "Tháng 7", "Tháng 8", "Tháng 9",
                "Tháng 10", "Tháng 11", "Tháng 12"
            ],
            datasets: [{
                fillColor: "rgb(255, 206, 153)",
                strokeColor: "#cc6600",
                pointColor: "#fff",
                pointStrokeColor: "#9DB86D",
                data: [20000000, 1560000, 39000000, 2510000, 3050000, 
                24700000, 24600000, 15500000, 12000000, 19000000, 25500000, 35500000],

            }]
        }
        // get line chart canvas
        var buyers = document.getElementById('buyers').getContext('2d');
        // draw line chart
        new Chart(buyers).Line(buyerData);

    </script>
@stop
