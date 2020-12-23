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
            <form action="{{url('slide')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="box-header">
                </div>
                <div class="box-body">
                    <h4> Tiêu đề : </h4>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                        <input id="namebook" required name="title" type="text" class="form-control" placeholder="Tên sách . . . . . . . . .">
                    </div>
                    <h4> Miêu tả </h4>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-qrcode"></i></span>
                        <input id="descriptionbook" name="description" type="text" class="form-control" placeholder="Miêu tả . . . . . . . . .">
                    </div>
                    <div class="form-group">
                        <h4 for="exampleInputFile">Ảnh slide</h4>
                        <input id="img" type="file" name="img" onchange="changeImg(this)">
                        <img id="avatar" class="thumbnail" width="100px" height="100px" src="new.jpg">
                    </div>
                    <br>
                    <div class="text-center">

                        <input type="submit" name="submit" value="Thêm slide" class="btn  btn-success btn-lg">
                    </div>
            </form>
        </div>
    </section><!-- /.content -->
</div>
@endsection