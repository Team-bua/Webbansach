@extends('layout_admin.master')
@section('content')
<div class="content-wrapper" style="min-height: 898px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Thêm sách
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
         
        <div class="box box-info">

                <div class="box-header">
                </div>
                <div class="box-body">

                <h4> Tên sách : </h4>
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                    <input type="text" class="form-control" placeholder="Tên sách . . . . . . . . .">
                  </div>
                
                  <h4>Loại sách</h4>
                  
                  <div class="input-group input-group">
                    <div class="input-group-btn">
                      <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Mời chọn sách <span class="fa fa-caret-down"></span></button>
                      <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                      </ul>
                    </div><!-- /btn-group -->
                    <input disabled type="text" class="form-control">
                  </div><!-- /input-group -->
                  
                  <h4> Giá : </h4>
                  <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-money"></i></span>
                  <input type="text" class="form-control" placeholder="Gía . . . . . . . . .">
                    <span class="input-group-addon">VNĐ</span>
                  </div>

                 
                  <h4> Giá khuyến mãi : </h4>
                  <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-money"></i></span>
                  <input type="text" class="form-control" placeholder="Khuyến mãi . . . . . . . . .">
                    <span class="input-group-addon">VNĐ</span>
                  </div>

                  <h4> Số lượng </h4>
                  <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-qrcode"></i></span>
                  <input type="text" class="form-control" placeholder="Số lượng . . . . . . . . .">
                    <span class="input-group-addon">Quyển</span>
                  </div>

                  <h4> Miêu tả : </h4>
                  <div class="input-group">
                  <span class="input-group-addon"><i class="fa  fa-pencil-square-o"></i></span>
                  <input type="text" class="form-control" placeholder="Miêu tả . . . . . . . . .">
                    
                  </div>
                  <br>
                  <center>
                  <div class="input-group">
                  <td><button class="btn btn-block btn-success btn-lg"> Thêm sách </button></td>
                  </div></center>
                  

                  
              

                  


                    

                    

                  
              </div>
        </section><!-- /.content -->
      </div>
@endsection