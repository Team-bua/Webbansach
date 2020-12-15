@extends('layout_admin.master')
@section('content')
<div class="content-wrapper" style="min-height: 898px;">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Thêm sách
      <small>Nguyễn Văn Tèo</small>
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
      <form action="{{url('book')}}" method="post" enctype="multipart/form-data" >
      @csrf
        <div class="box-header">
        </div>
        <div class="box-body">

          <h4> Tên sách : </h4>
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
            <input name="name" type="text" class="form-control" placeholder="Tên sách . . . . . . . . .">
          </div>

          <h4>Loại sách</h4>

          <div class="input-group input-group">
            <div class="input-group-btn">
              <select required name="cate" class="form-control">
              @foreach($product as $pro)
              <option value="{{$pro->id}}">{{$pro->name}}</option>
              @endforeach
              </select>
            </div><!-- /btn-group -->
          </div><!-- /input-group -->

          <h4> Giá : </h4>
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-money"></i></span>
            <input name="unit_price" type="text" class="form-control" placeholder="Gía . . . . . . . . .">
            <span class="input-group-addon">VNĐ</span>
          </div>


          <h4> Giá khuyến mãi : </h4>
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-money"></i></span>
            <input name="promotion_price" type="text" class="form-control" placeholder="Khuyến mãi . . . . . . . . .">
            <span class="input-group-addon">VNĐ</span>
          </div>

          <h4> Miêu tả </h4>
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-qrcode"></i></span>
            <input name="description" type="text" class="form-control" placeholder="Miêu tả . . . . . . . . .">
            <span class="input-group-addon">Quyển</span>
          </div>



          <div class="form-group">
            <label for="exampleInputFile">Hình Ảnh</label>
            <input name="img" type="file" id="exampleInputFile">
            <p class="help-block">Example block-level help text here.</p>
          </div>
          <br>
          <div class="text-center">

            <input type="submit" name="submit" value="Thêm" class="btn  btn-success btn-lg">
          </div>

    </form>













</div>
</section><!-- /.content -->
</div>
@endsection