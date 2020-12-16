@extends('layout_admin.master')
@section('content')
<div class="content-wrapper" style="min-height: 898px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Simple Tables
            <small>preview of simple tables</small>
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
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Danh sách nhà cung cấp</h3>
                  <div class="box-tools">
                    <div class="input-group">
                      <input type="text" name="table_search" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search">
                      <div class="input-group-btn">
                        <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                      </div>
                    </div>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tbody><tr style="  font-size:18px; ">
                      <th>Tên nhà cung cấp</th>
                      <th>Email</th>
                      <th>Địa chỉ </th>
                      <th>Số điện thoại</th>

                      <th colspan="2"><center>Chức năng</center></th>
                     
                    </tr>
                    <tr>
                      <td>John Doe</td>
                      <td>11-7-2014</td>
                      <td>Approved</span></td>
                      <td></td>
                      <td><button class="btn btn-block btn-warning btn"> Sửa  </button></td>
                      <td><button class="btn btn-block btn-danger btn"> Xóa </button></td>
                    </tr>
                  </tbody></table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
          </div>
        </section><!-- /.content -->
      </div>
@endsection