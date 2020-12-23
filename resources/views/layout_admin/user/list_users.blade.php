@extends('layout_admin.master')
@section('content')
<div class="content-wrapper" style="min-height: 898px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Quản lý tài khoản
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tài khoản</a></li>
            <li class="active">Danh sách</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-xs-12">
                <div class="box ">
                    <div class="box-header">


                        <form action="">
                            <div class="col-md-4 pull-left">
                                <div class="input-group">
                                    <input type="text" name="table_search" class="form-control  pull-right" placeholder="Search">
                                    <div class="input-group-btn">
                                        <button class="btn btn btn-success" style="float:left;margin-bottom:5px;margin-left:2px"><i class="fa fa-search"> Tìm kiếm </i></button>

                                    </div>
                                </div>
                            </div>
                        </form>
                    </div><!-- /.box-header -->
                    <div class="box-body  ">
                        <table class="table table-bordered">
                            <tbody>
                                <tr style=" font-size:18px;">
                                    <th > Tên người dùng
                                        <span id="name" class="fa fa-fw fa-sort pull-right" aria-hidden="true"></span>
                                    </th>
                                    <th >Tên tài khoản
                                        <span id="name" class="fa fa-fw fa-sort pull-right" aria-hidden="true"></span>
                                    </th>
                                    <th >Quyền</th>
                                    <th >Tùy chọn</th>
                                </tr>
                                @foreach($user as $users)
                                <tr >
                                    <td>{{$users->full_name}}</td>
                                    <td>{{$users->username}}</td>
                                    <td>{{$users->role->display_name}}</td>
                                    <td >
                                        <div class="btn-toolbar" role="toolbar">
                                            <div class="btn-group mr-2" role="group">
                                                <a href="{{route('user.show',[$users['id']])}}">
                                                    <button style="float:right" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></button>
                                                </a>
                                            </div>
                                            <div class="btn-group mr-2" role="group">
                                                <form method="post" action="" enctype="multipart/form-data" name="form1" id="form1">
                                                    @csrf
                                                    <input name="_method" type="hidden" value="DELETE">
                                                    <button style="float:right" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có muốn xóa không')"><i class="fa fa-trash-o"></i></button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div><!-- /.box-body -->
                </div>
            </div>
        </div>
    </section><!-- /.content -->
</div>
@endsection