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
                        <input name="name" type="text" value="{{$user->full_name}}" class="form-control" disabled>
                    </div>

                    <h4> Tên đăng nhập : </h4>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                        <input name="promotion_price" type="text" value="{{$user->username}}" class="form-control" disabled>

                    </div>

                    <h4> Số điện thoại </h4>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                        <input style="padding-left: 20px" name="unit_price" type="number" value="{{$user->phone}}" class="form-control" disabled>

                    </div>


                    <h4> Địa chỉ : </h4>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-book"></i></span>
                        <input name="promotion_price" type="text" value="{{$user->address}}" class="form-control" disabled>

                    </div>

                    <h4> Email: </h4>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                        <input name="description" type="text" value="{{$user->email}}" class="form-control" disabled>
                    </div>

                    <div class="input-group-btn">
                        <h4> Vai trò: </h4>
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">{{$user->role->display_name}}
                            &nbsp;&nbsp;&nbsp; <span class="fa fa-caret-down"></span></button>
                        <ul class="dropdown-menu">
                            @foreach($all_role as $role)
                            <li><a name="role" value="{{$role->id}}">{{$role->display_name}}</a></li>
                            @endforeach
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