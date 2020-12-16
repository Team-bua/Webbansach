@extends('layout_admin.master')
@section('content')
<div class="content-wrapper" style="min-height: 898px;">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Thêm loại sách
      <small></small>
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
    <form action="{{ url('book_type') }}" method="post" enctype="multipart/form-data" name="form1" id="form1">
          @csrf
      <div class="box-header">
      </div>
      <div class="box-body">
          <h4> Tên loại sách : </h4>
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
            <input required type="text" name="name" class="form-control" placeholder="Tên sách . . . . . . . . ." >
          </div>
          <br>
          <center>
            <div class="input-group">
              <td><button class="btn btn-block btn-success btn-lg"> Thêm loại sách </button></td>
            </div>
          </center>
        
      </div>
      </form>

      <form action="#" method="post" enctype="multipart/form-data" name="form1" id="form1">
      @csrf
      <section class="content">

        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">Danh sách loại sản phẩm</h3>
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
                  <tbody>  
                    <tr>
                      <th>Tên loại</th>
                      <th colspan="2" width="20%">
                        <center>Chức năng</center>
                      </th>
                    </tr>
                    @foreach($product_type as $pro)
                    <tr>
                      <td>{{$pro->name}}</td>
                      <td>
                      <form method="put" action="{{ route('book_type.edit',[$pro['id']]) }}" enctype="multipart/form-data" name="form1" id="form1">
    							  	@csrf
    								  <input name="_method" type="hidden" value="UPDATE">
                        <button class="btn btn-warning btn"> Sửa </button>
                      </form>
                    </td>                     
                      <td>
                      <form method="post" action="{{route('book_type.destroy', [$pro['id']]) }}" enctype="multipart/form-data" name="form1" id="form1">
    								  @csrf
    								  <input name="_method" type="hidden" value="DELETE">
                        <button class="btn btn-danger btn" onclick="return confirm('Bạn có muốn xóa không')"> Xóa </button>
                      </form>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div><!-- /.box-body -->
            </div><!-- /.box -->
            </form>
          </div>
        </div>
      </section>
      <!-- danh sach -->

  </section><!-- /.content -->
</div>
@endsection