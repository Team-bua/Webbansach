@extends('layout_admin.master')
@section('content')
    <div class="content-wrapper" style="min-height: 898px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Quản lý sách
                <small>Thêm, xóa và cập nhật sách</small>
            </h1>

            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Sách</a></li>
                <li class="active">Danh sách</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">


                            <form action="">
                                <div class="col-md-4 pull-left">
                                    <div class="input-group">
                                        <input type="text" id="table_search" name="table_search" class="form-control  pull-right"
                                            placeholder="Search">
                                        <div class="input-group-btn">
                                            <button class="btn btn btn-warning"
                                                style="border:none; background-color:#4a4235;float:left;margin-top:0px;margin-left:2px"><i
                                                    class="fa fa-search"> Tìm kiếm </i></button>

                                        </div>
                                    </div>
                                </div>
                            </form>

                            <div class="col-md-4 pull-right">
                                <a href="{{ route('book.create') }}">
                                    <button class="btn btn btn-warning"
                                        style="float: right;;margin-bottom:5px;margin-left:2px;border:none; background-color:#4a4235;">
                                        <i class="fa fa-plus"> Thêm sách mới </i></button>
                                </a>
                            </div>
                        </div><!-- /.box-header -->
                        <div class="box-body table-responsive no-padding">
                            <table  class="table table-hover">
                                <tbody>
                                    <tr style="font-size:18px;">

                                        <th>Tên sách</th>
                                        <th>Loại sách</th>
                                        <th>Tác giả</th>
                                        <th>Giá </th>
                                        <th>Giá Khuyến Mãi</th>
                                        <th>Ngày nhập</th>

                                        <th>Hình ảnh</th>
                                        <th colspan="2">
                                            <center>Chức năng</center>
                                        </th>

                                    </tr>
                                    @foreach ($product as $pro)
                                        <tr>
                                            <td><p style=" width:150px;text-overflow: ellipsis;overflow: hidden;white-space: nowrap;">{{ $pro->name }}</p></td>
                                            <td>{{ $pro->productType->name }}</td>
                                            <td>{{ $pro->publisher }}</td>
                                            <td>{{ $pro->unit_price }}</span></td>
                                            <td>{{ $pro->promotion_price }}</td>
                                            <td>{{ $pro->created_at }}</td>
                                            <td><img style="width:100px;height:100px;"
                                                    src="{{ asset('images/product/' . $pro->image) }}"></td>
                                            <td>
                                                <a href="{{ route('book.edit', [$pro['id']]) }}">
                                                    <button class="btn btn-warning btn pull-right"><i class="fa fa-edit"> Sửa </i> </button>
                                                </a>
                                            </td>
                                            <td>
                                                <form method="post" action="{{ route('book.destroy', [$pro['id']]) }}"
                                                    enctype="multipart/form-data" name="form1" id="form1">
                                                    @csrf
                                                    <input name="_method" type="hidden" value="DELETE">
                                                    <button class="btn btn-danger btn pull-left"
                                                        onclick="return confirm('Bạn có muốn xóa không')"> <i class="fa fa-trash-o"> Xóa </i> </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                               
                            </table>
                            
                            {{ $product->links('vendor.pagination.bootstrap-4') }}
                        </div><!-- /.box-body -->
                       
                    </div><!-- /.box -->
                </div>
            </div>
        </section><!-- /.content -->
    </div>

@endsection


