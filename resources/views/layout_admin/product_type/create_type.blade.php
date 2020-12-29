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

                <div class="col-xs pull-right">
                    <button class="btn btn-block btn-success btn"
                        onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Thêm loại
                        sách</button>

                    <div id="id01" class="modal" id="bookmodal">

                        <form id="TypeBook" class="modal-content animate" action="" method="post">
                            <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />


                            <div class="container">

                                <label for="name">
                                    <h4>Tên loại sách: </h4>
                                </label>

                                <input type="text" placeholder="Mời nhập tên loại sách......" name="name" id="name"
                                    required>
                                <div style="width:500px" class="text-center">
                                    <button type="submit" class=" btn  btn-success btn">Thêm</button>
                                </div>
                            </div>





                        </form>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-xs">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Danh sách loại sản phẩm</h3>
                            <div class="box-tools">
                                <div class="input-group">
                                    <input type="text" name="table_search" class="form-control input-sm pull-right"
                                        style="width: 150px;" placeholder="Search">
                                    <div class="input-group-btn">
                                        <button style="width: 40px" class="btn btn-sm btn-default"><i
                                                class="fa fa-search"></i></button>
                                    </div>
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

                            <div class="col-md-4 pull-right">

                                <a class="btn btn-success" style="float: right;;margin-bottom:5px;margin-left:2px"
                                    data-toggle="modal" data-target="#bookmodal">
                                    <i class="fa fa-plus"> Thêm sách mới </i></button>
                                </a>
                            </div>


                        </div><!-- /.box-header -->
                        <div class="box-body table-responsive no-padding">
                            <table id="tableId2" class="table table-hover">
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
                                            
                                                    <button class="btn btn-warning btn" data-id="edit-{{$pro->id}}" onclick="editType(this)"> Sửa </button>
                                                
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
                <div id="myModal" class="modal fade" role="dialog">
                    <div  class="modal-dialog">
                
                        <!-- Modal content-->
                        <div class="modal-content" style="width:400px;">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Cập nhật loại sản phẩm</h4>
                            </div>
                            <div class="modal-body" id="content">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
                            </div>
                        </div>
                
                    </div>
                </div>
                
            </div>
            <!-- Button trigger modal -->

            <!-- Modal -->
            <div class="modal fade" id="bookmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true">
                <div style="width:1000px" class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">

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
                                <button type="submit" class="btn btn-success"> Thêm </button>

                            </form>
                        </div>

                    </div>
                </div>
            </div>
            
            <!-- EditModal -->
            <div class="modal fade" id="bookeditmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true">
                <div style="width:1000px" class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">

                            <h4 class="modal-title" id="myModalLabel">Cập nhật loại sách</h4>
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
                                <button type="submit" class="btn btn-success"> Thêm </button>

                            </form>
                        </div>

                    </div>
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
                name:name
            },
            success: function(response) {
                if(response){
                var output = "<tr>"+
                   "<td>" + name + "</td>" +
                   "<td>" + "<button data-toggle='modal' data-target='#bookmodal' class='btn btn-warning btn' >Sửa </button>" + "</td>" +
                   "<td>" + "<button class='btn btn-danger btn' >Xóa </button>" + "</td>" +
                 "</tr>";
                $("#tableId2 tbody").append(output);
                $("#bookmodal").modal('hide');
                }else{
                var output = "<tr>" +
                  "<td align='center' colspan='4'>No record found.</td>" +
                "</tr>";
                    $("#tableId2 tbody").append(output);
                    $("#bookmodal").modal('hide');
                    
                }
            }
        });
    });
function editType(id){

}
</script>
@stop
