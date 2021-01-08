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
                                        <input type="text" id="table_search" name="table_search"
                                            class="form-control  pull-right" placeholder="Search">
                                        <div class="input-group-btn">
                                            <button class="btn btn btn-warning"
                                                style="border:none; background-color:#4a4235;float:left;margin-top:0px;margin-left:2px"><i
                                                    class="fa fa-search"> Tìm kiếm </i></button>

                                        </div>
                                    </div>
                                </div>
                            </form>
                            @can('user')
                            <div class="col-md-4 pull-right">
                                <a href="{{ route('book.create') }}">
                                    <button class="btn btn btn-warning"
                                        style="float: right;;margin-bottom:5px;margin-left:2px;border:none; background-color:#4a4235;">
                                        <i class="fa fa-plus"> Thêm sách mới </i></button>
                                </a>
                            </div>
                            @endcan
                        </div><!-- /.box-header -->
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover">
                                <tbody>
                                    <tr style="font-size:18px;">

                                        <th>Tên sách</th>
                                        <th>Loại sách</th>
                                        <th>Tác giả</th>
                                        <th width="10%">Giá </th>
                                        <th>Giá Khuyến Mãi</th>
                                        <th>Hình ảnh</th>
                                        <th colspan="3">
                                            <center>Chức năng</center>
                                        </th>

                                    </tr>
                                    @foreach ($products as $pro)
                                        <tr>
                                            <td>
                                                <p
                                                    style=" width:150px;text-overflow: ellipsis;overflow: hidden;white-space: nowrap;">
                                                    {{ $pro->name }}</p>
                                            </td>
                                            <td>{{ $pro->productType->name }}</td>
                                            <td>{{ $pro->publisher }}</td>
                                            <td>{{ $pro->unit_price }} VNĐ</span></td>
                                            <td>@if($pro->promotion_price == 0) 0 VNĐ @else {{ $pro->promotion_price }} VNĐ @endif</td>

                                            <td><img style="width:100px;height:100px;"
                                                    src="{{ asset('images/product/' . $pro->image) }}"></td>
                                            <td>
                                                @if ($pro->status == 1)
                                                    <a href="{{ route('product_off', [$pro['id']]) }}">
                                                        <button
                                                            onclick="return confirm('Bạn có muốn ngừng kinh doanh không')"
                                                            style="background-color:rgb(189, 189, 189);border:none;"
                                                            class="btn btn-warning btn pull-right">
                                                            <i class="fa fa-pause"></i> </button>
                                                    </a>
                                                @else
                                                    <a href="{{ route('product_on', [$pro['id']]) }}">
                                                        <button style="background-color:rgb(69, 204, 69);border:none;"
                                                            class="btn btn-warning btn pull-right">
                                                            <i class="fa fa-play"></i> </button>
                                                    </a>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('book.edit', [$pro['id']]) }}">
                                                    <button class="btn btn-warning btn pull-right"><i class="fa fa-edit">
                                                            Sửa </i> </button>
                                                </a>
                                            </td>
                                            <td>
                                                <form method="post" action="{{ route('book.destroy', [$pro['id']]) }}"
                                                    enctype="multipart/form-data" name="form1" id="form1">
                                                    @csrf
                                                    <input name="_method" type="hidden" value="DELETE">
                                                    <button class="btn btn-danger btn pull-left"
                                                        onclick="return confirm('Bạn có muốn xóa không')"> <i
                                                            class="fa fa-trash-o"> Xóa </i> </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div><!-- /.box-body -->
                        <div class="pull-right">{{ $products->links('vendor.pagination.bootstrap-4') }}</div>
                    </div><!-- /.box -->
                </div>
            </div>
        </section><!-- /.content -->
    </div>

@endsection
