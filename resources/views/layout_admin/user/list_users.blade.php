@extends('layout_admin.master')
@section('content')
    <div class="content-wrapper" style="min-height: 898px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Quản lý tài khoản
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
                    <div class="box ">
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
                        </div><!-- /.box-header -->
                        <div class="box-body  ">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr style=" font-size:18px;">
                                        <th> Tên người dùng
                                            <span id="name" class="fa fa-fw fa-sort pull-right" aria-hidden="true"></span>
                                        </th>
                                        <th>Tên tài khoản
                                            <span id="name" class="fa fa-fw fa-sort pull-right" aria-hidden="true"></span>
                                        </th>
                                        <th>Quyền</th>
                                        <th>Tùy chọn</th>
                                    </tr>
                                    @foreach ($user as $users)
                                        <tr>
                                            <td>
                                                <label> {{ $users->full_name }}</label>
                                                <input id="infull" disabled value=" {{ $users->full_name }}" type="text"
                                                    style="display:block;width:150px;height:30px;" />
                                            </td>
                                            <td>
                                                <label> {{ $users->username }}</label>
                                                <input id="inuser" disabled value=" {{ $users->username }}" type="text"
                                                    style="display:block;width:200px;height:30px;" />
                                            </td>
                                            <td>
                                                <label> {{ $users->role->display_name }}</label>
                                                <input id="indis" type="text" value=" {{ $users->role->display_name }}"
                                                    style="display:block;width:150px;height:30px;" />
                                            </td>
                                            <td>
                                                <div class="btn-toolbar" role="toolbar">

                                                    <div class="btn-group mr-2" role="group">

                                                        <button id="btnedit" style="float:right"
                                                            class="btn btn-info btn-sm"><i class="fa fa-plus"></i></button>
                                                        <button id="btnsave" style="float:right"
                                                            class="btn btn-info btn-sm"><i class="fa fa-save"></i></button>
                                                    </div>
                                                    <div class="btn-group mr-2" role="group">
                                                        <a href="{{ route('user.show', [$users['id']]) }}">
                                                            <button style="float:right" class="btn btn-info btn-sm"><i
                                                                    class="fa fa-eye"></i></button>
                                                        </a>
                                                    </div>
                                                    <div class="btn-group mr-2" role="group">
                                                        <form method="post" action="" enctype="multipart/form-data"
                                                            name="form1" id="form1">
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
                    </div>
                </div>
            </div>
        </section><!-- /.content -->
    </div>
@endsection
@section('js')


    <script>
        $("tr input , #btnsave").hide();
      

                    var index = null;
                    $("tr").click(function() {
                        $("input, label", this).toggle();
                        index = $(this).index("tr");
                        index = $(" #btnsave").show();
                        
      
                    });
                    $("input[type=button]").click(function() {
                       

                        var obj = {};
                        var elems = $("tr").eq(index).find("label, input");
                        
                        elems.each(function(i, el) {
                            
                            if ($(el).is("label")) {
                                obj[el.textContent] = elems[i + 1].value
                            }
                        });
                        
                    });

    </script>


@stop
