@extends('layout_admin.master')
@section('content')
    <div class="content-wrapper" style="min-height: 898px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Quản lý nhà cung cấp

            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Nhà cung cấp</a></li>
                <li class="active">Danh Sách</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">



            <div class="row">

                <div class="col-xs-12">
                    <div class="box box-solid box-primary">

                        <div class="box-header">
                            <h3 class="box-title"><i class="fa fa-table"></i>&nbsp; Danh sách nhà cung cấp</h3>
                            <div class="col-md-4 pull-right">
                                <div class="input-group">
                                    <input type="text" name="table_search" class="form-control input-sm pull-right"
                                        style="width: 150px;" placeholder="Search">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-body ">
                            <table class="table table-bordered">
                                <tr>
                                    <th>Tên Nhà Cung Cáp </th>
                                    <th>Email</th>
                                    <th>Địa chỉ </th>
                                    <th>Số Điện Thoại</th>

                                    <th colspan="2">Tùy chọn</th>
                                </tr>
                                <tr>
                                    <td>Harry Potter</td>
                                    <td>2</td>
                                    <td>20000</td>
                                    <td>4</td>
                                    <td>
                                        <button class="btn btn-info btn-sm"><i class="fa fa-eye"></i></button>
                                        <button class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></button>
                                        <button class="btn btn-danger btn-sm"><i class="fa fa-times"></i></button>
                                    </td>
                                </tr>



                            </table>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                   
                    
                </div>
            </div>
        </section><!-- /.content -->
    </div>
@endsection
