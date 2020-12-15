@extends('layout_admin.master')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Danh sách đơn hàng

    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Tables</a></li>
      <li class="active">Simple</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="row">
      <div class="col-xs">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title"></h3>
            <div class="box-tools">
              <div class="input-group">
                <input type="text" name="table_search" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search" />
                <div class="input-group-btn">
                  <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                </div>
              </div>
            </div>
          </div><!-- /.box-header -->
          <div class="box-body ">
            <table class="table table-bordered">
              <tr>
                <th>Tên sách </th>
                <th>Số lượng</th>
                <th>Đơn giá</th>
                <th>tổng tiền Tiền</th>
                <th>Tình trạng</th>
                <th>Chi tiết</th>
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
                      <li><a href="">Tiếp nhận</a></li>
                      <li><a href="">Đã giao</a></li>

                    </ul>
                  </div>
               <td><button class="btn btn-info btn-sm"><a href="">Xem</a></button></td>
              </tr>



            </table>
          </div><!-- /.box-body -->
        </div><!-- /.box -->
      </div>
    </div>
  </section><!-- /.content -->
</div><!-- /.content-wrapper -->


@endsection