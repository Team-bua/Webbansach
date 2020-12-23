@extends('layout_admin.master')



@section('content')

<div class="content-wrapper" style="min-height: 898px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Quản lý slide
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
                <a href="{{route('slide.create')}}">
                    <button class="btn btn-block btn-success btn">
                        <i class="fa fa-plus"> Thêm slide</i></button>
                </a>
            </div>
        </div>


        <div class="row">
            <div class="col-xs">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Danh sách slide</h3>
                        <div class="box-tools">
                            <div class="input-group">
                                <input type="text" name="table_search" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search">
                                <div class="input-group-btn">
                                    <button style="width: 40px" class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table id="tableId" class="table table-hover">
                            <tbody>
                                <tr>
                                    <th>Tiêu đề</th>
                                    <th width="20%">Hình ảnh</th>
                                    <th width="30%">Trạng thái</th>
                                    <th colspan="2" width="20%">
                                        <center>Chức năng</center>
                                    </th>
                                </tr>
                                @foreach ($slide as $sl)
                                <tr>
                                    <td>{{ $sl->title }}</td>
                                    <td><img style="width:100px;height:100px;" src="{{ asset('images/slide/'.$sl->image)}}"></td>
                                    <td>
                                        @if($sl->status == 1)
                                        <div class="input-group-btn">
                                            <a href="{{ route('slide_off', [$sl['id']]) }}">
                                                <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown " aria-expanded="false">Hoạt động</button>
                                            </a>
                                        </div>
                                        @else
                                        <div class="btn-group">
                                            <a href="{{ route('slide_on', [$sl['id']]) }}">
                                                <button type="button" class="btn btn-info">Ngừng hoạt động</button>
                                            </a>
                                        </div>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('slide.edit', [$sl['id']]) }}">
                                            <button class="btn btn-warning btn"> Sửa </button>
                                        </a>
                                    </td>
                                    <td>
                                        <form method="post" action="{{ route('slide.destroy', [$sl['id']]) }}" enctype="multipart/form-data" name="form1" id="form1">
                                            @csrf
                                            <input name="_method" type="hidden" value="DELETE">
                                            <button class="btn btn-danger btn" onclick="return confirm('Bạn có muốn xóa không')"> Xóa </button>
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



</section>
<!-- danh sach -->

</section><!-- /.content -->

</div>

@endsection