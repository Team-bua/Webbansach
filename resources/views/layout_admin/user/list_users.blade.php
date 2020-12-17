@extends('layout_admin.master')
@section('content')
    <div class="content-wrapper" style="min-height: 898px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Danh sách
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
                    <div class="box box-solid box-primary">
                        <div class="box-header">
                            <h3 class="box-title"><i class="fa fa-table"></i>&nbsp; Danh sách tài khoản</h3>
                            <div class="col-md-4 pull-right">
                                <div class="input-group ">
                                    <input type="text" class="form-control">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default btn-flat" type="button">Seach</button>
                                        
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="box-body  ">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr style="  font-size:18px; ">
                                        <th class="text-center">Họ và tên</th>
                                        <th class="text-center">Tên đăng nhập</th>
                                        <th class="text-center">Email </th>
                                        <th class="text-center">Vai trò</th>

                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                <div class="input-group-btn">
                                                    <label>
                                                        <div class="icheckbox_minimal-blue checked" aria-checked="true"
                                                            aria-disabled="false" style="position: relative;"><input
                                                                type="checkbox" class="minimal"
                                                                style="position: absolute; opacity: 0;"><ins
                                                                class="iCheck-helper"
                                                                style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                                        </div>
                                                    </label>
                                                    <button style="background: none;border:none;color:black;" type="button"
                                                        class="btn btn-warning dropdown-toggle" data-toggle="dropdown"
                                                        aria-expanded="false">Vũ Huyền Tuân </button>
                                                        <ul class="dropdown-menu" >
                                                            <button style="background: none ;border:none;"><a href="#">Xem</a></button>
                                                            <button style="background: none ;border:none;"><a href="#">Sửa</a></button>
                                                            <button style="background: none ;border:none;"><a href="#">Xóa</a></button>
                                                        </ul>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center">tuanvu</td>
                                        <td class="text-center">text@gmail.com</td>
                                        <td class="text-center">Quản lý</td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                <div class="input-group-btn">
                                                    <label>
                                                        <div class="icheckbox_minimal-blue checked" aria-checked="true"
                                                            aria-disabled="false" style="position: relative;"><input
                                                                type="checkbox" class="minimal"
                                                                style="position: absolute; opacity: 0;"><ins
                                                                class="iCheck-helper"
                                                                style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                                        </div>
                                                    </label>
                                                    <button style="background: none ;border:none;color:black;" type="button"
                                                        class="btn btn-warning dropdown-toggle" data-toggle="dropdown"
                                                        aria-expanded="false">Vũ Huyền Tuân </button>
                                                    <ul class="dropdown-menu" >
                                                        <button style="background: none ;border:none;"><a href="#">Xem</a></button>
                                                        <button style="background: none ;border:none;"><a href="#">Sửa</a></button>
                                                        <button style="background: none ;border:none;"><a href="#">Xóa</a></button>
                                                    </ul>

                                                    
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center">tuanvu</td>
                                        <td class="text-center">text@gmail.com</td>
                                        <td class="text-center">Quản lý</td>


                                </tbody>
                            </table>
                        </div><!-- /.box-body -->
                    </div>
                </div>
            </div>
        </section><!-- /.content -->
    </div>
@endsection
