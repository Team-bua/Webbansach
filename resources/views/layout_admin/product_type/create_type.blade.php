@extends('layout_admin.master')



@section('content')

    <div class="content-wrapper" style="min-height: 898px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Thêm loại sách
                <small></small>
            </h1>
            <ol class="breadcrumb">
                <li><a href=""><i class="fa fa-dashboard"></i> Home </a></li>
                <li><a href="">Loại sách</a></li>
                <li class="active">Simple</li>
            </ol>
        </section>

        <!-- Main content -->




        <section class="content">





            <div class="row">
                <div class="col-xs">
                    <div class="box">
                        <div class="box-header">
                            <form action="">
                                <div class="col-md-4 pull-left">
                                    <div class="input-group">
                                        <input type="text" name="table_search" class="form-control  pull-right"
                                            placeholder="Search">
                                        <div class="input-group-btn">
                                            <button class="btn btn btn-success"
                                                style="float:left;margin-bottom:5px;margin-left:2px"><i
                                                    class="fa fa-search"> Tìm kiếm </i></button>

                                        </div>
                                    </div>
                                </div>
                            </form>

                            <div class="col-xs pull-right">
                                <button class="btn btn-block btn-success btn"
                                    onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Thêm
                                    loại
                                    sách</button>

                                <div id="id01" class="modal" id="bookmodal">

                                    <form id="TypeBook" class="modal-content animate" action="" method="post">
                                        <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />


                                        <div class="container">

                                            <label for="name">
                                                <h4>Tên loại sách: </h4>
                                            </label>

                                            <input type="text" placeholder="Mời nhập tên loại sách......" name="name"
                                                id="name" required>
                                            <div style="width:500px" class="text-center">
                                                <button type="submit" class=" btn  btn-success btn">Thêm</button>
                                            </div>
                                        </div>





                                    </form>
                                </div>
                            </div>
                        </div><!-- /.box-header -->
                        <div class="box-body table-responsive no-padding">
                            <table id="tableId" class="table table-hover">
                                <tbody>
                                    <tr>
                                        <th>Tên loại</th>
                                        <th colspan="2" width="20%">
                                            <center>Chức năng</center>
                                        </th>
                                    </tr>
                                    @foreach ($product_type as $pro)
                                        <tr>
                                            <td>{{ $pro->name }}</td>
                                            <td>
                                                <a href="{{ route('book_type.edit', [$pro['id']]) }}">
                                                    <button class="btn btn-warning btn"> Sửa </button>
                                                </a>
                                            </td>
                                            <td>
                                                <form method="post" action="{{ route('book_type.destroy', [$pro['id']]) }}"
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




        </section>
        <!-- danh sach -->

        </section><!-- /.content -->

    </div>

@endsection
@section('js')

@stop
