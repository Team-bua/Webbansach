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
                                <button class="btn btn btn-success " style="float:right;;margin-bottom:5px;margin-left:2px;background-color: #4a4235;border: #4a4235">
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
                                    <th>Số lượng sản phẩm bán ra</th>

                                    <th>Tùy chọn</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($stores as $st)
                                <tr>
                                    <td>{{ $st->products->name }}</td>
                                    <td style="text-align:center" id="total-{{ $st->id }}">{{ $st->all_product_in_store }}</td>
                                    <td style="text-align:center" id="qtyTon-{{ $st->id }}">{{ $st->stored_product }}</td>
                                    <td style="text-align:center">{{ $st->sold_product }}</td>
                                    <td>
                                        <div class="btn-toolbar" role="toolbar">
                                            <div class="btn-group mr-2" role="group">
                                                <button style="float:right" class="btn btn-warning btn-sm" id="edit-{{ $st->id }}" onclick="editStore(this)"><i class="fa fa-pencil"></i></button>
                                            </div>
                                            <div class="btn-group mr-2" role="group">
                                                <form method="post" action="{{ route('store.destroy', [$st['id']]) }}" enctype="multipart/form-data" name="form1" id="form1">
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
                    <!-- EditModal -->
                    <div class="modal fade" id="bookeditmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div style="width:1000px" class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myModalLabel">Cập nhật kho</h4>
                                </div>
                                <div class="modal-body">
                                    <form id="bookEditForm">
                                        <input type="hidden" name="_token" id="csrf-token" />
                                        <input type="hidden" name="id" id="id" />
                                        <div class="form-group">
                                            <label for="name">
                                                <h4>Tổng sản phẩm: </h4>
                                            </label>
                                            <input style="width:250px" type="text" id="total" name="total" class="form-control">
                                            <label for="name">
                                                <h4>Sản phẩm tồn kho: </h4>
                                            </label>
                                            <input style="width:250px" type="text" id="qtyTon" name="qtyTon" class="form-control">

                                        </div>
                                        <button style="border-color: #4a4235;background-color:#4a4235" type="submit" id="editsubmit " class="btn btn-success"> Cập nhật </button>

                                </div>

                                </form>
                            </div>


                        </div>

                    </div>
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
            "order": [],
            "bInfo": false,
            "bAutoWidth": true
        });
    </script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        function editStore(edit) {
            $('#bookeditmodal').modal('show');
            var [x, store_all] = edit.id.split('-')
            $.ajax({
                url: "{{ route('store_edit') }}",
                type: "POST",
                data: {
                    id: store_all
                },
                success: function(response) {
                    let store = JSON.parse(response)['store'];
                    $('#total').val(store['all_product_in_store']);
                    $('#qtyTon').val(store['stored_product']);
                    $('#id').val(store['id']);
                }
            });
        }
        $('#bookEditForm').submit(function(e) {
                e.preventDefault();
                let id = $("#id").val();
                let total = $("#total").val();
                let qtyTon = $("#qtyTon").val();
                $.ajax({
                    url: "{{ route('store_update') }}",
                    type: "POST",
                    data: {
                        id: id,
                        total: total,
                        qtyTon: qtyTon
                    },
                    success: function(response) {
                        let store_update = JSON.parse(response)['store'];
                        $("#bookeditmodal").modal('hide');
                        $("#total-" + store_update['id']).html(store_update['all_product_in_store']);
                        $("#qtyTon-" + store_update['id']).html(store_update['stored_product']);
                        Swal.fire({
                            icon: 'success',
                            title: 'Cập nhật thành công',
                            showConfirmButton: false,
                            timer: 1500
                        })
                    }
                });
            });
    </script>

    @stop