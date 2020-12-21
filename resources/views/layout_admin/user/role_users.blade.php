@extends('layout_admin.master')

@section('content')
    <div class="content-wrapper" style="min-height: 898px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Thông tin thành viên
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Tài Khoản</a></li>
                <li class="active">Phân Quyền</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="box ">
                <form action="#" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="box-header">
                    </div>
                    <div class="box-body">

                        <h4> Họ tên: </h4>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                            <input name="name" type="text" value="{{$user->full_name}}" class="form-control"disabled>
                        </div>

                        <h4> Tên đăng nhập : </h4>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                            <input name="promotion_price" type="text" value="{{$user->username}}" class="form-control" disabled>

                        </div>

                        <h4> Số điện thoại </h4>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                            <input name="unit_price" type="number" value="{{$user->phone}}" class="form-control" disabled>

                        </div>


                        <h4> Địa chỉ : </h4>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-book"></i></span>
                            <input name="promotion_price" type="text" value="{{$user->address}}" class="form-control"disabled>

                        </div>

                        <h4> Email: </h4>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            <input name="description" type="text" value="{{$user->email}}" class="form-control"disabled>
                        </div>
                        <h4> Gửi thông báo đến thành viên : </h4>
                        <div class="form-group">
                            <label>
                                <div class="icheckbox_minimal-red" aria-checked="false" aria-disabled="false"
                                    style="position: relative;  "><input type="checkbox" class="minimal-red" checked=""
                                        style="position: absolute; opacity: 0;">
                                    <ins class="iCheck-helper"
                                        style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                    &nbsp;&nbsp; Gửi cho thành viên một email thông báo về thay đổi quyền
                                </div>

                            </label>


                        </div>

                        <div class="input-group-btn">
                            <h4> Vai trò: </h4>
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Quản lý
                                &nbsp;&nbsp;&nbsp; <span class="fa fa-caret-down"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </div>

                        <br>
                        <div class="text-center">

                            <input type="submit" name="submit" value="Cập nhật" class="btn  btn-success btn-lg">
                        </div>
                    </div>

                </form>
            </div>
        </section><!-- /.content -->
    </div>
@endsection
