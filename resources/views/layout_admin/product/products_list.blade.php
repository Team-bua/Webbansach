@extends('layout_admin.master')
@section('content')
    <div class="content-wrapper" style="min-height: 898px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Danh sách sản phẩm
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
                        <div class="box-header" >
                            <h3 class="box-title"></h3>
                            
                                <div class="col-md-4 ">
                                    <div class="input-group ">
                                        <input type="text" name="table_search" class="form-control input t"
                                            placeholder="Search">
                                        <div class="input-group-btn">
                                            <button style="float:left;margin-bottom:5px;margin-left:2px"
                                                class="btn btn btn-success"><i class="fa fa-search"> Tìm kiếm
                                                </i></button>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 pull-right ">


                                    <button style="float:right;margin-bottom:5px;margin-left:2px"
                                        class="btn btn btn-success"><i class="fa fa-plus"> Thêm sách mới </i></button>



                                </div>
                           

                        </div><!-- /.box-header -->
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover">
                                <tbody>
                                    <tr style="  font-size:18px; ">

                                        <th>Tên sách</th>
                                        <th>Loại sách</th>
                                        <th>Giá </th>
                                        <th>Giá Khuyến Mãi</th>
                                        <th>Miêu tả</th>
                                        <th>Hình ảnh</th>
                                        <th colspan="2">
                                            <center>Chức năng</center>
                                        </th>

                                    </tr>
                                    @foreach ($product as $pro)
                                        <tr>
                                            <td>{{ $pro->name }}</td>
                                            <td>{{ $pro->product_type->name }}</td>
                                            <td>{{ $pro->unit_price }}</span></td>
                                            <td>{{ $pro->promotion_price }}</td>
                                            <td>{{ $pro->description }}</td>
                                            <td><img style="width:100px;height:100px;"
                                                    src="{{ asset('images/product/' . $pro->image) }}"></td>

                                            <td>
                                                <a href="{{ route('book.edit', [$pro['id']]) }}">
                                                    <button class="btn btn-warning btn"> Sửa </button>
                                                </a>
                                            </td>
                                            <td>
                                                <form method="post" action="{{ route('book.destroy', [$pro['id']]) }}"
                                                    enctype="multipart/form-data" name="form1" id="form1">
                                                    @csrf
                                                    <input name="_method" type="hidden" value="DELETE">
                                                    <button class="btn btn-danger btn"
                                                        onclick="return confirm('Bạn có muốn xóa không')"> Xóa </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div>
            </div>
        </section><!-- /.content -->
    </div>
@endsection
