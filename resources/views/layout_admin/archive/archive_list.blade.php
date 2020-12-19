@extends('layout_admin.master2')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Kho Lưu Trữ 
            <small>Móc bô</small>
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
            <div class="col-md-3 col-sm-6 col-xs-12     ">
                <div class="info-box ">
                    <span class="info-box-icon bg-blue"><i class="fa  fa-arrow-circle-down"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Sản Phẩm Nhập Vào</span>
                        <span class="info-box-number">410</span>
                    </div><!-- /.info-box-content -->
                </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-green"><i class="fa  fa-arrow-circle-up"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Sản Phẩm Đã Bán</span>
                        <span class="info-box-number">410</span>
                    </div><!-- /.info-box-content -->
                </div><!-- /.info-box -->
            </div><!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix visible-sm-block"></div>

            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-yellow">
                        <span class="glyphicon glyphicon-th-large"></span></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Sản phẩm hiện có</span>
                        <span class="info-box-number">760</span>
                    </div><!-- /.info-box-content -->
                </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-red"><i class=" fa fa-undo"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Sản phẩm đổi trả</span>
                        <span class="info-box-number">20</span>
                    </div><!-- /.info-box-content -->
                </div><!-- /.info-box -->
            </div><!-- /.col -->
        </div><!-- /.row -->

        <div class="row">
            <div class="col-md-6">
                <!-- TABLE: LATEST ORDERS -->
                <div class="box box-solid box-success">
                    <div class="box-header ">
                        <h3 class="box-title">Bán chạy</h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table no-margin">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Tên</th>
                                        <th>Đã Bán</th>
                                        <th>Còn Lại</th>
                                        <th>Nhập</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="pages/examples/invoice.html">1</a></td>
                                        <td>Harry Potter</td>
                                        <td>
                                            <h4><span class="label label-info ">200</span></h4>
                                        </td>
                                        <td>
                                            <h4><span class="label label-warning">50</span>
                                                <h4></h4>
                                        </td>
                                        <td>
                                            <h4><button type="button" class="btn btn-info btn-xs"><i class="fa fa-plus"></i></h4></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="pages/examples/invoice.html">1</a></td>
                                        <td>Harry Potter</td>
                                        <td>
                                            <h4><span class="label label-info ">200</span></h4>
                                        </td>
                                        <td>
                                            <h4><span class="label label-warning">50</span>
                                                <h4></h4>
                                        </td>
                                        <td>
                                            <h4><button type="button" class="btn btn-info btn-xs"><i class="fa fa-plus"></i></h4></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="pages/examples/invoice.html">1</a></td>
                                        <td>Harry Potter</td>
                                        <td>
                                            <h4><span class="label label-info ">200</span></h4>
                                        </td>
                                        <td>
                                            <h4><span class="label label-warning">50</span>
                                                <h4></h4>
                                        </td>
                                        <td>
                                            <h4><button type="button" class="btn btn-info btn-xs"><i class="fa fa-plus"></i></h4></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="pages/examples/invoice.html">1</a></td>
                                        <td>Harry Potter</td>
                                        <td>
                                            <h4><span class="label label-info ">200</span></h4>
                                        </td>
                                        <td>
                                            <h4><span class="label label-warning">50</span>
                                                <h4></h4>
                                        </td>
                                        <td>
                                            <h4><button type="button" class="btn btn-info btn-xs"><i class="fa fa-plus"></i></h4></button>
                                        </td>
                                    </tr>



                                </tbody>
                            </table>
                        </div><!-- /.table-responsive -->
                    </div><!-- /.box-body -->

                </div><!-- /.box -->
            </div><!-- /.col -->
            <div class="col-md-6">
                <!-- TABLE: LATEST ORDERS -->
                <div class="box box-solid box-success">
                    <div class="box-header with-border">
                        <h3 class="box-title">Bán chạy</h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table no-margin">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Tên</th>
                                        <th>Đã Bán</th>
                                        <th>Còn Lại</th>
                                        <th>Nhập</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="pages/examples/invoice.html">1</a></td>
                                        <td>Harry Potter</td>
                                        <td>
                                            <h4><span class="label label-info ">200</span></h4>
                                        </td>
                                        <td>
                                            <h4><span class="label label-warning">50</span>
                                                <h4></h4>
                                        </td>
                                        <td>
                                            <h4><button type="button" class="btn btn-info btn-xs"><i class="fa fa-plus"></i></h4></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="pages/examples/invoice.html">1</a></td>
                                        <td>Harry Potter</td>
                                        <td>
                                            <h4><span class="label label-info ">200</span></h4>
                                        </td>
                                        <td>
                                            <h4><span class="label label-warning">50</span>
                                                <h4></h4>
                                        </td>
                                        <td>
                                            <h4><button type="button" class="btn btn-info btn-xs"><i class="fa fa-plus"></i></h4></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="pages/examples/invoice.html">1</a></td>
                                        <td>Harry Potter</td>
                                        <td>
                                            <h4><span class="label label-info ">200</span></h4>
                                        </td>
                                        <td>
                                            <h4><span class="label label-warning">50</span>
                                                <h4></h4>
                                        </td>
                                        <td>
                                            <h4><button type="button" class="btn btn-info btn-xs"><i class="fa fa-plus"></i></h4></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="pages/examples/invoice.html">1</a></td>
                                        <td>Harry Potter</td>
                                        <td>
                                            <h4><span class="label label-info ">200</span></h4>
                                        </td>
                                        <td>
                                            <h4><span class="label label-warning">50</span>
                                                <h4></h4>
                                        </td>
                                        <td>
                                            <h4><button type="button" class="btn btn-info btn-xs"><i class="fa fa-plus"></i></h4></button>
                                        </td>
                                    </tr>



                                </tbody>
                            </table>
                        </div><!-- /.table-responsive -->
                    </div><!-- /.box-body -->

                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->

        <div class="row">
            <div class="col-md-6">
                <!-- TABLE: LATEST ORDERS -->
                <div class="box box-solid box-success">
                    <div class="box-header with-border">
                        <h3 class="box-title">Bán chạy</h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table no-margin">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Tên</th>
                                        <th>Đã Bán</th>
                                        <th>Còn Lại</th>
                                        <th>Nhập</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="pages/examples/invoice.html">1</a></td>
                                        <td>Harry Potter</td>
                                        <td>
                                            <h4><span class="label label-info ">200</span></h4>
                                        </td>
                                        <td>
                                            <h4><span class="label label-warning">50</span>
                                                <h4></h4>
                                        </td>
                                        <td>
                                            <h4><button type="button" class="btn btn-info btn-xs"><i class="fa fa-plus"></i></h4></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="pages/examples/invoice.html">1</a></td>
                                        <td>Harry Potter</td>
                                        <td>
                                            <h4><span class="label label-info ">200</span></h4>
                                        </td>
                                        <td>
                                            <h4><span class="label label-warning">50</span>
                                                <h4></h4>
                                        </td>
                                        <td>
                                            <h4><button type="button" class="btn btn-info btn-xs"><i class="fa fa-plus"></i></h4></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="pages/examples/invoice.html">1</a></td>
                                        <td>Harry Potter</td>
                                        <td>
                                            <h4><span class="label label-info ">200</span></h4>
                                        </td>
                                        <td>
                                            <h4><span class="label label-warning">50</span>
                                                <h4></h4>
                                        </td>
                                        <td>
                                            <h4><button type="button" class="btn btn-info btn-xs"><i class="fa fa-plus"></i></h4></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="pages/examples/invoice.html">1</a></td>
                                        <td>Harry Potter</td>
                                        <td>
                                            <h4><span class="label label-info ">200</span></h4>
                                        </td>
                                        <td>
                                            <h4><span class="label label-warning">50</span>
                                                <h4></h4>
                                        </td>
                                        <td>
                                            <h4><button type="button" class="btn btn-info btn-xs"><i class="fa fa-plus"></i></h4></button>
                                        </td>
                                    </tr>



                                </tbody>
                            </table>
                        </div><!-- /.table-responsive -->
                    </div><!-- /.box-body -->

                </div><!-- /.box -->
            </div><!-- /.col -->
            <div class="col-md-6">
                <!-- TABLE: LATEST ORDERS -->
                <div class="box box-solid box-success">
                    <div class="box-header with-border">
                        <h3 class="box-title">Bán chạy</h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table no-margin">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Tên</th>
                                        <th>Đã Bán</th>
                                        <th>Còn Lại</th>
                                        <th>Nhập</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="pages/examples/invoice.html">1</a></td>
                                        <td>Harry Potter</td>
                                        <td>
                                            <h4><span class="label label-info ">200</span></h4>
                                        </td>
                                        <td>
                                            <h4><span class="label label-warning">50</span>
                                                <h4></h4>
                                        </td>
                                        <td>
                                            <h4><button type="button" class="btn btn-info btn-xs"><i class="fa fa-plus"></i></h4></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="pages/examples/invoice.html">1</a></td>
                                        <td>Harry Potter</td>
                                        <td>
                                            <h4><span class="label label-info ">200</span></h4>
                                        </td>
                                        <td>
                                            <h4><span class="label label-warning">50</span>
                                                <h4></h4>
                                        </td>
                                        <td>
                                            <h4><button type="button" class="btn btn-info btn-xs"><i class="fa fa-plus"></i></h4></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="pages/examples/invoice.html">1</a></td>
                                        <td>Harry Potter</td>
                                        <td>
                                            <h4><span class="label label-info ">200</span></h4>
                                        </td>
                                        <td>
                                            <h4><span class="label label-warning">50</span>
                                                <h4></h4>
                                        </td>
                                        <td>
                                            <h4><button type="button" class="btn btn-info btn-xs"><i class="fa fa-plus"></i></h4></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="pages/examples/invoice.html">1</a></td>
                                        <td>Harry Potter</td>
                                        <td>
                                            <h4><span class="label label-info ">200</span></h4>
                                        </td>
                                        <td>
                                            <h4><span class="label label-warning">50</span>
                                                <h4></h4>
                                        </td>
                                        <td>
                                            <h4><button type="button" class="btn btn-info btn-xs"><i class="fa fa-plus"></i></h4></button>
                                        </td>
                                    </tr>



                                </tbody>
                            </table>
                        </div><!-- /.table-responsive -->
                    </div><!-- /.box-body -->

                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->

    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
@endsection