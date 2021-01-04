@extends('layout_admin.master')
@section('content')
<style>
.ad{

    width: 105px;
}
</style>
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
                                <input style="width:300px ;padding:10px; margin: 0;" type="text" class="form-control" id="order-search" placeholder="Nhập mã đơn hàng để tìm kiếm">
                            </div>
                            <div class="form-group col-md-9 padd-0" style="padding-left: 5px;">
                                <div class="col-md-9 padd-0">
                                    <div class="col-md-4 padd-0">
                                        <select style="width:178px ;" id="search-option-1" class="form-control">
                                            <option value="0">Đơn hàng</option>
                                            <option value="1">Đơn hàng đã xóa</option>
                                            <option value="2">Đơn hàng còn nợ</option>
                                        </select>
                                    </div>
                                    <div class="col-md-5 padd-0" style="padding-left: 5px ">
                                        <div class="input-daterange input-group" id="datepicker">
                                            <input style="height:34px " type="date" class="input-sm form-control" id="search-date-from" placeholder="Từ ngày" name="start">
                                            <span class="input-group-addon">to</span>
                                            <input style="height:34px " type="date" class="input-sm form-control" id="search-date-to" placeholder="Đến ngày" name="end">
                                        </div>
                                    </div>
                                    <div class="col-md-3 padd-0" style="padding-left: 19%;">
                                        <button style="box-shadow: none; margin: 0;" type="button" class="btn btn-success btn-large" onclick="cms_paging_order(1)"><i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-md-3 padd-0" style="padding-left: 5px ">
                                    <div class="btn-group order-btn-calendar">
                                        <button type="button" onclick="cms_order_week() " class="btn btn-default" style=" margin: 0;">Tuần</button>
                                        <button type="button" onclick="cms_order_month()" class="btn btn-default" style=" margin: 0;">Tháng</button>
                                        <button type="button" onclick="cms_order_quarter()" class="btn btn-default" style=" margin: 0;">Quý</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-body ">
                        <table class="table table-bordered">
                            <tr>
                                <th>Tên khách hàng </th>
                                <th>Địa chỉ </th>
                                <th width="10%">Số điện thoại </th>
                                <th width="8%">Số lượng</th>
                                <th>Tổng tiền</th>
                                <th>Thanh toán</th>
                                <th width="10%">Tình trạng</th>
                                <th >Tùy chọn</th>
                            </tr>
                            @foreach($bill as $bills)
                            <tr>
                                <td>{{$bills->user->full_name}}</td>
                                <td>{{$bills->address}}</td>
                                <td>{{$bills->phone}}</td>
                                <td style="text-align:center">{{$bills->quantity}}</td>
                                <td>{{$bills->total}} VNĐ</td>
                                <td>{{$bills->payment}}</td>
                                <td>
                                    <div class="btn-group">
                                        @if($bills->status == 0)
                                        <button type="button" class="btn btn-danger ad dropdown-toggle" data-toggle="dropdown" aria-expanded="false" >Đang xử lý</button>
                                        <ul class="dropdown-menu" role="menu" >
                                            <a href="{{route('bill_receiving',[$bills['id']])}}" class="btn btn-warning ad"><li>Tiếp nhận</li></a>
                                            <a href="{{route('bill_delivered',[$bills['id']])}}" class="btn btn-info ad"><li>Đã giao</li></a>
                                        </ul>
                                        @endif
                                        @if($bills->status == 1)
                                        <button type="button" class="btn btn-warning ad dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Tiếp nhận</button>
                                        <ul class="dropdown-menu" role="menu" style="width:105px">
                                            <a href="{{route('bill_processing',[$bills['id']])}}" class="btn btn-danger ad"><li>Đang xử lý</li></a>
                                            <a href="{{route('bill_delivered',[$bills['id']])}}" class="btn btn-info ad"><li>Đã giao</li></a>
                                        </ul>
                                        @endif
                                        @if($bills->status == 2)
                                        <button type="button" class="btn btn-info ad dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Đã giao</button>
                                        <ul class="dropdown-menu" role="menu" >
                                            <a href="{{route('bill_processing',[$bills['id']])}}" class="btn btn-danger ad"><li>Đang xử lý</li></a>
                                            <a href="{{route('bill_receiving',[$bills['id']])}}" class="btn btn-warning ad"><li>Tiếp nhận</li></a>
                                        </ul>
                                        @endif
                                    </div>
                                <td>
                                    <div class="btn-toolbar" role="toolbar">
                                        <div class="btn-group mr-2" role="group">
                                            <button id="loginLink" onclick="toggleTable();" style="float:right" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></button>
                                        </div>
                                        <div class="btn-group mr-2" role="group">
                                            <form method="post" action="" enctype="multipart/form-data" name="form1" id="form1">
                                                @csrf
                                                <input name="_method" type="hidden" value="DELETE">
                                                <button style="float:right" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có muốn xóa không')"><i class="fa fa-trash-o"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                                </td>
                            
                            </tr>
                            @endforeach
                    </div>
                </div>
            </div>
        
        </div><!-- /.box-body -->
</div><!-- /.box -->
</div>
</div>
</div>

</section><!-- /.content -->


<div class="clearfix"></div>
</div><!-- /.content-wrapper -->


@endsection