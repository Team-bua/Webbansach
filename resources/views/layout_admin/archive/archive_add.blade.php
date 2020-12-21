@extends('layout_admin.master')
@section('content')


<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Quản lý kho hàng
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

      <div class="col-md-8">
        <div class="box box ">

          <div class="box-header">

            <input type="text" class="form-control ui-autocomplete-input" placeholder="Nhập mã sản phẩm hoặc tên sản phẩm" id="search-pro-box" autocomplete="off">


          </div>
          <div class="box-body ">
            <table class="table table-bordered">

              <tbody style="text-align:center">
                <tr>
                  <th style="text-align:center">STT </th>
                  <th style="text-align:center">Mã hàng </th>
                  <th style="text-align:center">Tên sản phẩm</th>
                  <th style="text-align:center">Số lượng</th>
                  <th style="text-align:center">Giá nhập</th>
                  <th style="text-align:center">Thành tiền</th>
                </tr>
                <tr>
                  <td>Harry Potter</td>
                  <td>2</td>
                  <td>20000</td>
                  <td></td>
                  <td><input type="text"></td>
                  <td></td>
                </tr>
              </tbody>
            </table>
          </div><!-- /.box-body -->
        </div><!-- /.box -->
      </div>
      <div class="col-md-4">
        <div class="box box-primary">

          <div class="box-body">
            <!-- Date range -->
            <div class="form-group">
              <label>Nhà cung cấp</label>
              <div class="input-group input-group-sm">

                <input type="text" class="form-control">
                <span class="input-group-btn">
                  <button class="btn btn-info btn-flat" type="button"><i class="fa fa-plus"></i></button>
                </span>
              </div>
            </div><!-- /.form group -->

            <!-- Date and time range -->
            <div class="form-group">
              <label>Ngày nhập</label>
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-clock-o"></i>
                </div>
                <input type="date" class="form-control pull-right" id="reservationtime">
              </div><!-- /.input group -->
            </div><!-- /.form group -->

          </div><!-- /.box-body -->
        </div><!-- /.box -->
        <!-- iCheck -->
      </div>
    </div>
  </section><!-- /.content -->
</div><!-- /.content-wrapper -->



@endsection