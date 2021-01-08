@extends('layout_index.master')

@section('content')
    <div class="breadcrumb">
        <div class="container">
            <a class="breadcrumb-item" href="index.html">Home</a>
            <span class="breadcrumb-item active">Info</span>
        </div>
    </div>

        <!-- Main content -->
        <section class="static about-sec">
        <div class="container">
            <h1>Thông tin tài khoản </h1>         
            <div class="form">     
                <form action="{{ route('changeinfo',Auth::user()->id)}}" method="post" class="form" id="myform">
                @csrf 
                <div class="row  justify-content-md-center">       
                <h4> Họ tên: </h4>      
                    <div class="col-4">
                        <input type="text" name="fullname" value="{{$customer->full_name}}">
                    </div>
                </div>
                <div class="row  justify-content-md-center">
                <h4> Email: </h4> 
                    <div class="col-6">
                        <input type="email" name="email" value="{{$customer->email}}">
                    </div>
                </div>
                <div class="row  justify-content-md-center">
                <h4> Địa chỉ: </h4> 
                    <div class="col-6">
                        <input type="text" name="address" value="{{$customer->address}}">
                    </div>
                </div>
                <div class="row  justify-content-md-center">
                <h4> Số điện thoại: </h4> 
                    <div class="col-6">
                        <input type="text" name="phone" data-inputmask="'mask': '999-999-9999'" value="{{$customer->phone}}">
                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <div class="col-3">
                        <button class="btn black">Cập nhật thông tin </button>
                    </div>
                </div>
                </form>         
            </div>
        </div>
        </div>
    </section>
@endsection
@section('js')
    <script type="text/javascript">
      $(":input").inputmask();
    </script>
@stop