@extends('layout_admin.master')
@section('content')
<div class="content-wrapper" style="min-height: 898px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Thêm Nhà Cung Cấp
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Nhà cung cấp</a></li>
            <li class="active">Thêm</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="box box-info">

            <div class="box-header">
            </div>
            <div class="box-body">

                <h4> Tên nhà cung cấp : </h4>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                    <input type="text" class="form-control" placeholder="Tên nhà cung cấp . . . . . . . . .">
                </div>

                <h4> Email : </h4>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                    <input type="text" class="form-control" placeholder="Email . . . . . . . . .">
                </div>


                <h4> Địa chỉ : </h4>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-book"></i></span>
                    <input type="text" class="form-control" placeholder="Địa chỉ . . . . . . . . .">
                </div>

                <h4> Số điện thoại </h4>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                    <input type="text" class="form-control" placeholder="Số điện thoại . . . . . . . . .">
                </div>

                <div class="text-center">
                    <button class=" btn  btn-success btn-lg"> Thêm </button>
                </div>















            </div>
    </section><!-- /.content -->
</div>
@endsection