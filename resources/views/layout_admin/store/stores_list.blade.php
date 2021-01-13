@extends('layout_admin.master')
@section('content')
    <div class="content-wrapper" style="min-height: 898px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Quản lý Kho Hàng

            </h1>
            <ol class="breadcrumb">
                <li><a href="{{ url('admin') }}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="{{url('stores')}}">Kho Hàng</a></li>
                <li class="active">Danh Sách</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">




                            <div class="col-md-4 pull-right">
                                <a href="{{ route('store.create') }}">
                                    <button class="btn btn btn-success "
                                        style="float:right;;margin-bottom:5px;margin-left:2px;background-color: #4a4235;border: #4a4235">
                                        <i class="fa fa-plus">&nbsp;Nhập Kho</i></button>
                                </a>
                            </div>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Tên sản phẩm </th>
                                        <th>Tổng sản phẩm</th>
                                        <th>Số lượng sản phẩm tồn kho</th>
                                        <th>Số lượng sản Phẩm bán ra</th>

                                        <th>Tùy chọn</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($stores as $st)
                                        <tr>
                                            <td>{{ $st->products->name }}</td>
                                            <td>{{ $st->all_product_in_store }}</td>
                                            <td>{{ $st->stored_product }}</td>
                                            <td>{{ $st->sold_product }}</td>
                                            <td>
                                                <div class="btn-toolbar" role="toolbar">
                                                    <div class="btn-group mr-2" role="group">
                                                        <a href="{{ route('store.edit', [$st['id_store']]) }}">
                                                            <button style="float:right" class="btn btn-warning btn-sm"><i
                                                                    class="fa fa-pencil"></i></button>
                                                        </a>
                                                    </div>
                                                    <div class="btn-group mr-2" role="group">
                                                        <form method="post"
                                                            action="{{ route('store.destroy', [$st['id_store']]) }}"
                                                            enctype="multipart/form-data" name="form1" id="form1">
                                                            @csrf
                                                            <input name="_method" type="hidden" value="DELETE">
                                                            <button style="float:right" class="btn btn-danger btn-sm"
                                                                onclick="return confirm('Bạn có muốn xóa không')"><i
                                                                    class="fa fa-trash-o"></i></button>
                                                        </form>
                                                    </div>
                                                </div>
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

    @endsection
    @section('js')


    <!-- SlimScroll -->
    <script type="text/javascript">
        $('#example1').dataTable({
            "bPaginate": true,
            "bLengthChange": true,
            "bFilter": true,
            "bSort": true,
            "bInfo": false,
            "bAutoWidth": true
        });

    </script>


@stop