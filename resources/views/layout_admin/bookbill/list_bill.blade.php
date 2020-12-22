@extends('layout_admin.master')
@section('content')


    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Quản lý đơn hàng
                <small>Xử lý và xem tình trạng của đơn hàng</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Tables</a></li>
                <li class="active">Simple</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Info boxes -->


            <div class="row">

                <div class="col-xs-12">
                    <div class="box box-solid ">

                        <div class="box-header">
                            <div class="product-sear panel-sear">
                                <div class="form-group col-md-3 padd-0">
                                    <input type="text" class="form-control" id="order-search"
                                        placeholder="Nhập mã đơn hàng để tìm kiếm">
                                </div>
                                <div class="form-group col-md-9 padd-0" style="padding-left: 5px;">
                                    <div class="col-md-9 padd-0">
                                        <div class="col-md-4 padd-0">
                                            <select id="search-option-1" class="form-control">
                                                <option value="0">Đơn hàng</option>
                                                <option value="1">Đơn hàng đã xóa</option>
                                                <option value="2">Đơn hàng còn nợ</option>
                                            </select>
                                        </div>
                                        <div class="col-md-5 padd-0" style="padding-left: 5px;">
                                            <div class="input-daterange input-group" id="datepicker">
                                                <input type="text" class="input-sm form-control" id="search-date-from"
                                                    placeholder="Từ ngày" name="start">
                                                <span class="input-group-addon">to</span>
                                                <input type="text" class="input-sm form-control" id="search-date-to"
                                                    placeholder="Đến ngày" name="end">
                                            </div>
                                        </div>
                                        <div class="col-md-3 padd-0" style="padding-left: 5px;">
                                            <button style="box-shadow: none;" type="button"
                                                class="btn btn-success btn-large" onclick="cms_paging_order(1)"><i
                                                    class="fa fa-search"></i> Tìm kiếm
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-md-3 padd-0" style="padding-left: 5px;">
                                        <div class="btn-group order-btn-calendar">
                                            <button type="button" onclick="cms_order_week()"
                                                class="btn btn-default">Tuần</button>
                                            <button type="button" onclick="cms_order_month()"
                                                class="btn btn-default">Tháng</button>
                                            <button type="button" onclick="cms_order_quarter()"
                                                class="btn btn-default">Quý</button>
                                        </div>
                                    </div>
                                </div>
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
                        </div>
                        <!-- /.box -->
                        <tr>
                            <td>Harry Potter</td>
                            <td>2</td>
                            <td>20000</td>
                            <td>4</td>
                            <td>
                                <div class="input-group-btn">
                                    <button type="button" class="btn btn-warning " aria-expanded="false">Đang xử lý
                                    </button>

                                </div>

                                <div class="input-group-btn ">
                                    <button type="button" class="btn btn-info " aria-expanded="false">Tiếp nhận
                                    </button>

                                </div>

                                <div class="input-group-btn ">
                                    <button type="button" class="btn btn-success" aria-expanded="false">Đã giao
                                    </button>

                                </div>
                            <td>
                                <div class="btn-toolbar" role="toolbar">
                                    <div class="btn-group mr-2" role="group">
                                        <button id="loginLink" onclick="toggleTable();" style="float:right"
                                            class="btn btn-info btn-sm"><i class="fa fa-eye"></i></button>
                                    </div>
                                    <div class="btn-group mr-2" role="group">
                                        <form method="post" action="" enctype="multipart/form-data" name="form1" id="form1">
                                            @csrf
                                            <input name="_method" type="hidden" value="DELETE">
                                            <button style="float:right" class="btn btn-danger btn-sm"
                                                onclick="return confirm('Bạn có muốn xóa không')"><i
                                                    class="fa fa-trash-o"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                            </td>
                        </tr>
                        <tr>
                            <td>Harry Potter</td>
                            <td>2</td>
                            <td>20000</td>
                            <td>4</td>
                            <td>
                                <div class="input-group-btn">
                                    <button type="button" class="btn btn-warning " aria-expanded="false">Đang xử lý
                                    </button>

                                </div>

                                <div class="input-group-btn ">
                                    <button type="button" class="btn btn-info " aria-expanded="false">Tiếp nhận
                                    </button>

                                </div>

                                <div class="input-group-btn ">
                                    <button type="button" class="btn btn-success" aria-expanded="false">Đã giao
                                    </button>

                                </div>
                            <td>
                                <div class="btn-toolbar" role="toolbar">
                                    <div class="btn-group mr-2" role="group">
                                        <button id="loginLink" onclick="toggleTable();" style="float:right"
                                            class="btn btn-info btn-sm"><i class="fa fa-eye"></i></button>
                                    </div>
                                    <div class="btn-group mr-2" role="group">
                                        <form method="post" action="" enctype="multipart/form-data" name="form1" id="form1">
                                            @csrf
                                            <input name="_method" type="hidden" value="DELETE">
                                            <button style="float:right" class="btn btn-danger btn-sm"
                                                onclick="return confirm('Bạn có muốn xóa không')"><i
                                                    class="fa fa-trash-o"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                            </td>
                            
                        </tr>


                 

                        
                    </div>
                </div>
            </div>

    </div><!-- /.box-body -->
    </div><!-- /.box -->
    </div>

    </div>
    </div>







    </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
    <script>
        function toggleTable() {
            if (document.getElementById("tb").style.display == "table") {
                document.getElementById("tb").style.display = "none";

            } else {
                document.getElementById("tb").style.display = "table";

            }
        }

    </script>




@endsection
