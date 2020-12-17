@extends('layout_admin.master')
@section('content')
    <div class="content-wrapper" style="min-height: 898px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Quản lý nhà cung cấp

            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Nhà cung cấp</a></li>
                <li class="active">Danh Sách</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">



            <div class="row">

                <div class="col-xs-12">
                    <div class="box box-solid box-primary">

          <div class="box-header">
            <h3 class="box-title"><i class="fa fa-table"></i>&nbsp; Danh sách nhà cung cấp</h3>
            <div class="col-md-4 pull-right">
              <div class="input-group ">
                <input type="text" class="form-control">
                <span class="input-group-btn">
                  <button class="btn btn-default btn-flat" type="button">Seach</button>
                </span>
              </div>
            </div>
          </div>
          <div class="box-body ">
            <table class="table table-bordered">
              <tr>
                <th>Ảnh đại diện </th>
                <th>Tên nhà cung cấp </th>
                <th>Email</th>
                <th>Địa chỉ </th>
                <th>Số Điện Thoại</th>

                <th colspan="2">Tùy chọn</th>
              </tr>
              @foreach($supplier as $sup)
              <tr>
                <td><img style="width:50px;height:50px;" src="{{asset('images/users/'.$sup->image)}}" ></td>
                <td>{{$sup->name}}</td>
                <td>{{$sup->email}}</td>
                <td>{{$sup->address}}</td>
                <td>{{$sup->phone}}</td>  
                <td>
                  <button class="btn btn-info btn-sm"><i class="fa fa-eye"></i></button>
                  <a href="{{ route('supplier.edit',[$sup['id']]) }}">
                    <button class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></button>
                  </a>
                  <form method="post" action="{{route('supplier.destroy', [$sup['id']]) }}" enctype="multipart/form-data" name="form1" id="form1">
    							@csrf
                    <input name="_method" type="hidden" value="DELETE">
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Bạn có muốn xóa không')"><i class="fa fa-times"></i></button>
                  </form>         
                </td>             
              </tr>
              @endforeach
            </table>
          </div><!-- /.box-body -->
        </div><!-- /.box -->

                            </table>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                   
                    
                </div>
            </div>
        </section><!-- /.content -->
    </div>
@endsection
