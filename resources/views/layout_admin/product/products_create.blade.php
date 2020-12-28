@extends('layout_admin.master')

@section('content')
<div class="content-wrapper" style="min-height: 898px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Thêm sách
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Sách</a></li>
            <li class="active">Thêm sách</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="box box-info">
            <form action="{{url('book')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="box-header">
                </div>
                <div class="box-body">
                    <h4> Tên sách : </h4>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                        <input id="namebook" required name="name" type="text" class="form-control" placeholder="Tên sách . . . . . . . . .">
                    </div>
                    <h4> Loại sách </h4>
                    <div class="input-group input-group">
                        <div class="input-group-btn">
                            <select required name="cate" class="form-control">
                                <option value="-1">--Chọn thể loại sách--</option>
                                @foreach($product as $pro)
                                <option value="{{$pro->id}}">{{$pro->name}}</option>
                                @endforeach
                            </select>
                        </div><!-- /btn-group -->
                    </div><!-- /input-group -->

                    <h4> Tác giả </h4>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-smile-o"></i></span>
                        <input id="publisherbook" name="publisher" type="text" class="form-control" placeholder="Tác giả. . . . . . . . .">
                    </div>

                    <h4> Giá : </h4>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-money"></i></span>
                        <input required id="unit_pricebook" name="unit_price" type="text" class="form-control" placeholder="Gía . . . . . . . . .">
                        <span class="input-group-addon">VNĐ</span>
                    </div>


                    <h4> Giá khuyến mãi : </h4>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-money"></i></span>
                        <input id="promotion_pricebook" name="promotion_price" type="text" class="form-control" placeholder="Khuyến mãi . . . . . . . . .">
                        <span class="input-group-addon">VNĐ</span>
                    </div>
                    <h4> Miêu tả </h4>
<<<<<<< HEAD
                    <div class='box-body pad'>
                        <form>
                            <textarea name="description" class="textarea" placeholder="Miêu tả . . . . ." style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                        </form>
                    </div>
=======
                        <div class='box-body pad'>
                          <form>
                            <textarea id="descriptionbook" name="description"class="textarea" placeholder="Place some text here" 
                            style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                          </form>
                        </div>
                      
>>>>>>> 675dc2317f427ce25f35ae52f4494a4eda41369b
                    <div class="form-group">
                        <h4 for="exampleInputFile">Ảnh sản phẩm</h4>
                        <input required id="img" type="file" name="img" onchange="changeImg(this)">
                        <img id="avatar" class="thumbnail" width="100px" height="100px" src="new.jpg">
                    </div>
                    <div class="form-group">
                        <h4 for="exampleInputFile">Ảnh chi tiết</h4>
                        <input name="img_detail[]" type="file" id="exampleInputFile" multiple="multiple">
                    </div>
                    <br>
                    <div class="text-center">

                        <input type="submit" name="submit" value="Thêm" class="btn  btn-success btn-lg">
                    </div>


                    


            </form>
        </div>
    </section><!-- /.content -->
</div>
<<<<<<< HEAD
@endsection
@section('js')
<script type="text/javascript">
    $(function() {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('editor1');
        //bootstrap WYSIHTML5 - text editor
        $(".textarea").wysihtml5();
    });
</script>
@stop
=======

@endsection
@section('js')
<script type="text/javascript">
    $(function () {
      // Replace the <textarea id="editor1"> with a CKEditor
      // instance, using default configuration.
      CKEDITOR.replace('editor1');
      //bootstrap WYSIHTML5 - text editor
      $(".textarea").wysihtml5();
    });
  </script>

  
  @stop
  
>>>>>>> 675dc2317f427ce25f35ae52f4494a4eda41369b
