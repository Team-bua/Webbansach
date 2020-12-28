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
                                    onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><i
                                        class="fa fa-plus">&nbsp;Thêm loại sách</i></button>

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
                                                <button type="submit" class=" btn  btn-success btn">Thêm</i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>


                        </div><!-- /.box-header -->

                        <div class="box-body table-responsive no-padding">
                            <table style="width:60% " id="tableId" class="table table-hover">
                                <tbody id="myTable">

                                    <tr>
                                        <th>TT</th>
                                        <th>Tên loại</th>
                                        <th colspan="2" width="20%">
                                            <center>Chức năng</center>
                                        </th>
                                    </tr>
                                    <?php $i = 1; ?>
                                    @foreach ($product_type as $pro)

                                        <tr>
                                            <td>{{ $i }}</td>
                                            <td>{{ $pro->name }}</td>
                                            <td>
                                                <a class="btn btn-warning js_order_item"
                                                    href="{{ route('book_type.edit', $pro->id) }}">Sửa</a>
                                            </td>
                                            <td>
                                                <form method="post" action="{{ route('book_type.destroy', [$pro['id']]) }}"
                                                    enctype="multipart/form-data" name="form1" id="form1">
                                                    @csrf
                                                    <input name="_method" type="hidden" value="DELETE">
                                                    <button class="btn btn-danger "
                                                        onclick="return confirm('Bạn có muốn xóa không')"> Xóa </button>
                                                </form>
                                            </td>
                                        </tr>
                                        <?php $i++; ?>
                                    @endforeach
                                </tbody>
                            </table>
                        </div><!-- /.box-body -->

                    </div><!-- /.box -->

                </div>


            </div>




        </section>
        <!-- danh sach -->




    </div>
    <div id="ModalType" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Cập nhật loại sản phẩm</h4>
                </div>
                <div class="modal-body" id="content">
                </div>


            </div>


            <div class="modal fade" id="formModal" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="formModalLabel">Create Todo</h4>
                        </div>
                        <div class="modal-body">
                            <form id="myForm" name="myForm" class="form-horizontal" novalidate="">

                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" class="form-control" id="namett" name="name"
                                        placeholder="Enter title" value="">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" id="btn-save" value="add">Save changes
                            </button>
                            <input type="hidden" id="todo_id" name="todo_id" value="0">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endsection
    @section('js')
        <script>
            // Get the modal
            var modal = document.getElementById('id01');

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }

        </script>
        <script>
            $(".js_order_item").click(function(event) {
                event.preventDefault();
                let $this = $(this);
                let url = $this.attr('href');
                // $(".slide_id").text('').text($this.attr('data-id'));
                $("#ModalType").modal('show');

                $.ajax({
                    url: url,
                }).done(function(result) {
                    console.log(result);
                    if (result) {
                        $("#content").html('').append(result);
                    }
                });

            });

        </script>

    @stop
