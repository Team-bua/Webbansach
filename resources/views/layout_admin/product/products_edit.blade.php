@extends('layout_admin.master')
@section('content')
<div class="content-wrapper" style="min-height: 898px;">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Cập nhật sách
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
      <form action="{{route('book.update',[$product['id']])}}" method="post" enctype="multipart/form-data" >
      @csrf
      @method('put')
        <div class="box-header">
        </div>
        <div class="box-body">

          <h4> Tên sách : </h4>
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
            <input required name="name" type="text" class="form-control" value="{{$product->name}}" placeholder="Tên sách . . . . . . . . .">
          </div>

          <h4>Loại sách</h4>

          <div class="input-group input-group">
            <div class="input-group-btn">
              <select required name="cate" class="form-control">
              @foreach($type as $ty)
							@if($ty->id == $product->id_type)
                <option selected value="{{$ty->id}}" >{{$ty->name}}</option>   
							@else
							  <option value="{{$ty->id}}" >{{$ty->name}}</option> 
							@endif  
							@endforeach  
              </select>
            </div><!-- /btn-group -->
          </div><!-- /input-group -->

          <h4> Giá : </h4>
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-money"></i></span>
            <input required name="unit_price" type="text" value="{{$product->unit_price}}" class="form-control" placeholder="Gía . . . . . . . . .">
            <span class="input-group-addon">VNĐ</span>
          </div>


          <h4> Giá khuyến mãi : </h4>
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-money"></i></span>
            <input name="promotion_price" type="text" value="{{$product->promotion_price}}" class="form-control" placeholder="Khuyến mãi . . . . . . . . .">
            <span class="input-group-addon">VNĐ</span>
          </div>

          <h4> Miêu tả </h4>
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-qrcode"></i></span>
            <input name="description" type="text" value="{{$product->description}}" class="form-control" placeholder="Miêu tả . . . . . . . . .">
          </div>
          <div class="form-group">
            <label for="exampleInputFile">Ảnh đại diện</label>
            <img id="avatar" class="thumbnail" width="150px" src="{{asset('images/product/'.$product->image)}}">
            <input name="img" type="file" id="exampleInputFile">
          </div>
          <div class="form-group">
            <h4 for="exampleInputFile">Ảnh chi tiết</h4>
            @foreach($product->imagedetail as $pro)
            <img id="avatar" width="100px" height="100px" src="{{asset('images/product_detail/'.$pro)}}">
            @endforeach
            <input name="img_detail[]" type="file" id="exampleInputFile" multiple="multiple">
          </div>
          <br>
          <div class="text-center">

            <input type="submit" name="submit" value="Sửa" class="btn  btn-success btn-lg">
          </div>

    </form>
</div>
</section><!-- /.content -->
</div>
@endsection