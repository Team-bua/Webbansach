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
                  <h3 class="box-title">Danh sách sản phẩm</h3>
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
                    
                      <th>Tên sách</th>
                      <th>Loại sách</th>
                      <th>Giá </th>
                      <th>Giá Khuyến Mãi</th>
                      <th>Miêu tả</th>
                      
                      <th>Hình ảnh</th>
                      <th colspan="2"><center>Chức năng</center></th>
                     
                    </tr>                    
                    <tr>
                      @foreach($product as $pro)
                      <td>{{$pro->name}}</td>
                      <td>{{$pro->product_type->name}}</td>
                      <td>{{$pro->unit_price}}</span></td>
                      <td>{{$pro->promotion_price}}</td>
                      <td>{{$pro->description}}</td>
                      <td><img style="width:100px;height:100px;" src="{{asset('images/product/'.$pro->image)}}" ></td>
                      
                      <td><button class="btn btn-block btn-warning btn"> Sửa  </button></td>
                      <td><button class="btn btn-block btn-danger btn"> Xóa </button></td>
                      @endforeach
                    </tr>
                  </tbody></table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
          </div>
        </section><!-- /.content -->
      </div>
@endsection