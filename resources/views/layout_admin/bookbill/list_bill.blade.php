@extends('layout_admin.master')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Quản lý đơn hàng

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
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-blue"><i class="fa  fa-money"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">Tổng doanh thu</span>
            <span class="info-box-number">2.000.000.000 VNĐ</span>
          </div><!-- /.info-box-content -->
        </div><!-- /.info-box -->
      </div><!-- /.col -->
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-green">
            <i class="fa  fa-shopping-cart"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">Tổng đơn hàng</span>
            <span class="info-box-number">410</span>
          </div><!-- /.info-box-content -->
        </div><!-- /.info-box -->
      </div><!-- /.col -->

      <!-- fix for small devices only -->
      <div class="clearfix visible-sm-block"></div>

      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-yellow">
            <i class="fa fa-rouble"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">Sản phẩm đã mua</span>
            <span class="info-box-number">5</span>
          </div><!-- /.info-box-content -->
        </div><!-- /.info-box -->
      </div><!-- /.col -->
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-red"><i class=" fa fa-user"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">Tổng khách hàng</span>
            <span class="info-box-number">5</span>
          </div><!-- /.info-box-content -->
        </div><!-- /.info-box -->
      </div><!-- /.col -->
    </div><!-- /.row -->

    <div class="row">

      <div class="col-xs-12">
        <div class="box box-solid box-primary">

          <div class="box-header">
            <h3 class="box-title"><i class="fa fa-table"></i> Danh sách đơn hàng</h3>
            <div class="col-md-4 pull-right">
              <div class="input-group ">
                <input type="text" class="form-control">
                <span class="input-group-btn">
                  <button class="btn btn-default btn-flat" type="button">Seach</button>
                </span>
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

                  <div class="input-group-btn">
                    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Tiếp nhận <span class="fa fa-caret-down"></span></button>
                    <ul class="dropdown-menu">
                      <li><a href="#">Đang xử lý</a></li>
                      <li><a href="#">Đã giao</a></li>
                    </ul>
                  </div>

                  <div class="input-group-btn">
                    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Đã giao <span class="fa fa-caret-down"></span></button>
                    <ul class="dropdown-menu">
                      <li><a href="#">Đang xử lý</a></li>
                      <li><a href="#">Tiếp nhận</a></li>
                    </ul>
                  </div>
                <td><button class="btn btn-info btn-sm"><i class="fa fa-eye"></i></button>
                  <button class="btn btn-danger btn-sm"><i class="fa fa-times"></i></button>
                </td>
              </tr>



            </table>
          </div><!-- /.box-body -->
        </div><!-- /.box -->

      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <!-- Success box -->
        <div class="box box-solid box-primary">
          <div class="box-header">
            <h3 class="box-title"><i class="fa  fa-rss"></i> Sản phảm mới cập nhật</h3>
            <div class="box-tools pull-right">
              <button class="btn btn-primary btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div>
          </div>
          <div class="box-body">
            <div class="list-group">
              <a href="#" class="list-group-item"><i class="fa fa-angle-double-right"></i>&nbsp; First item</a>
              <a href="#" class="list-group-item"><i class="fa fa-angle-double-right"></i>&nbsp; Second item</a>
              <a href="#" class="list-group-item"><i class="fa fa-angle-double-right"></i>&nbsp; Third item</a>
              <a href="#" class="list-group-item"><i class="fa fa-angle-double-right"></i>&nbsp; Second item</a>
              <a href="#" class="list-group-item"><i class="fa fa-angle-double-right"></i>&nbsp; Third item</a>
            </div>
            <a href="#"><i class="fa  fa-hand-o-right"></i>&nbsp; Xem thêm</a>
            </p>
          </div><!-- /.box-body -->
        </div><!-- /.box -->
      </div><!-- /.col -->

      <div class="col-md-6">
        <!-- Success box -->
        <div class="box box-solid box-primary">
          <div class="box-header">
            <h3 class="box-title"><i class="fa  fa-rss"></i> Sản phảm được mua nhiều</h3>
            <div class="box-tools pull-right">
              <button class="btn btn-primary btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div>
          </div>
          <div class="box-body">
            <div class="list-group">
              <a href="#" class="list-group-item"><i class="fa fa-angle-double-right"></i>&nbsp; First item</a>
              <a href="#" class="list-group-item"><i class="fa fa-angle-double-right"></i>&nbsp; Second item</a>
              <a href="#" class="list-group-item"><i class="fa fa-angle-double-right"></i>&nbsp; Third item</a>
              <a href="#" class="list-group-item"><i class="fa fa-angle-double-right"></i>&nbsp; Second item</a>
              <a href="#" class="list-group-item"><i class="fa fa-angle-double-right"></i>&nbsp; Third item</a>
            </div>
            <a href="#"><i class="fa  fa-hand-o-right"></i>&nbsp; Xem thêm</a>
            </p>
          </div><!-- /.box-body -->
        </div><!-- /.box -->
      </div><!-- /.col -->

    </div><!-- /.row -->



  </section><!-- /.content -->
</div><!-- /.content-wrapper -->


@endsection