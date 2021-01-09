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
            <li><a href=""><i class="fa fa-dashboard"></i> Hệ thống </a></li>
            <li><a href="">Loại sách</a></li>

        </ol>
    </section>

    <!-- Main content -->




    <section class="content">


        <div class="row">
            <!-- Modal -->
            <div class="modal fade" id="bookmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div style="width:1000px" class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button style="background-color:#4a4235" class="  btnmove btn-sm pull-right" style="margin-top:0px;" data-widget="remove"><i class="fa fa-times"></i></button>
                            <h4 class="modal-title" id="myModalLabel">Thêm loại sách</h4>
                        </div>
                        <div class="modal-body">
                            <form id="bookForm">
                                <input type="hidden" name="_token" id="csrf-token" />
                                <div class="form-group">

                                    <label for="name">
                                        <h4>Loại sách: </h4>
                                    </label>
                                    <input style="width:250px" type="text" name="name" class="form-control" id="type_name" placeholder="Tên loại sách . . . . .">

                                </div>
                                <button style="border-color: #4a4235;background-color:#4a4235" type="submit" class="btn btn-success"> Thêm </button>

                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- EditModal -->
        <div class="modal fade" id="bookeditmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div style="width:1000px" class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Cập nhật loại sách</h4>
                    </div>
                    <div class="modal-body">
                        <form id="bookEditForm">
                            <input type="hidden" name="_token" id="csrf-token" />
                            <input type="hidden" name="id" id="id" />
                            <div class="form-group">
                                <label for="name">
                                    <h4>Loại sách: </h4>
                                </label>
                                <input style="width:250px" type="text" id="name_type" name="name" class="form-control" id="type_name" placeholder="Tên loại sách . . . . .">

                            </div>
                            <button style="border-color: #4a4235;background-color:#4a4235" type="submit" id="editsubmit " class="btn btn-success"> Cập nhật </button>

                    </div>

                    </form>
                </div>


            </div>

        </div>
        <div class="box">
            <div class="box-header">

                <div class="col-md-4 pull-right">

                    <a class="btn btn-success" style="border-color: #4a4235;background-color:#4a4235;float: right;margin-bottom:5px;margin-left:2px" data-toggle="modal" data-target="#bookmodal">
                        <i class="fa fa-plus"> Thêm sách mới </i></button>
                    </a>
                </div>
            </div><!-- /.box-header -->
            <div class="box-body">
                <table id="tableId2" class="table table-bordered table-striped">
                    <thead>
                        <tr style="font-size:18px;">
                            <th>Tên loại</th>
                            <th width="20%">
                                Chức năng
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($product_type as $pro)
                        <tr>
                            <td id="name-{{ $pro->id }}">{{ $pro->name }}</td>
                            <td>
                                <button style="margin-right:5px;float: left;" class="btn btn-warning btn" id="edit-{{ $pro->id }}" onclick="editType(this)"> Sửa </button>


                                <form method="post" action="{{ route('book_type.destroy', [$pro['id']]) }}" enctype="multipart/form-data" name="form1">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                    <input name="_method" type="hidden" value="DELETE">
                                    <button class="btn btn-danger delType" id="del" onclick="return alertDelete()"> Xóa </button>
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


</div>

</section><!-- /.content -->

</div>

@endsection
@section('js')
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $("#bookForm").submit(function(e) {
        e.preventDefault();
        let name = $("#type_name").val();
        $.ajax({
            url: "{{ route('book_type.store') }}",
            type: "POST",
            data: {
                name: name
            },
            success: function(response) {
                if (response) {
                    let type = JSON.parse(response)['product_type'];
                    let fromDelete = '';

                    fromDelete += '<form method="post" action="http://localhost:8000/book_type/' +
                        type['id'] + '" name="form1">';
                    fromDelete +=
                        '<input type="hidden" name="_token" value="{{ csrf_token() }}" />';
                    fromDelete += '<input name="_method" type="hidden" value="DELETE">';
                    fromDelete +=
                        '<button class="btn btn-danger delType" id="del" onclick="return alertDelete()"> Xóa </button>';
                    fromDelete += '</form>';
                    fromDelete += '</td>';

                    var output = "<tr>" +
                        "<td id='name-" + type['id'] + "'>" + type['name'] + "</td>" +
                        "<td>" + "<button  style='margin-right:5px;float: left;' class='btn btn-warning btn' id='edit-" + type['id'] +
                        "' onclick='editType(this)' >Sửa </button>" + fromDelete + "</td>"
                    "</tr>";
                    $("#tableId2 tbody").append(output);
                    $("#bookmodal").modal('hide');
                }
            }
        });
    });

    function editType(edit) {
        $('#bookeditmodal').modal('show');
        var [x, book_type] = edit.id.split('-')
        $.ajax({
            url: "{{ route('book_edit') }}",
            type: "POST",
            data: {
                id: book_type
            },
            success: function(response) {
                let type = JSON.parse(response)['type'];
                $('#name_type').val(type['name']);
                $('#id').val(type['id']);
            }
        });

        $('#bookEditForm').submit(function(e) {
            e.preventDefault();
            let id = $("#id").val();
            let name = $("#name_type").val();
            $.ajax({
                url: "{{ route('book_update') }}",
                type: "POST",
                data: {
                    id: id,
                    name: name
                },
                success: function(response) {
                    let type = JSON.parse(response)['product_type'];
                    $("#name-" + type['id']).html(type['name']);
                    $("#bookeditmodal").modal('hide');

                }
            });
        });
    }

    function alertDelete() {
        return confirm('Bạn có muốn xóa không')
    }

    $('#tableId2').dataTable({
        "bPaginate": true,
        "bLengthChange": true,
        "bFilter": true,
        "bSort": true,
        "bInfo": false,
        "bAutoWidth": false
    });
</script>
@stop