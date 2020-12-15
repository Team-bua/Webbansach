@extends('layout_index.master')
@section('content')

<div class="breadcrumb">
    <div class="container">
        <a class="breadcrumb-item" href="index.html">Home</a>
        <span class="breadcrumb-item active">Register</span>
    </div>
</div>
<section class="static about-sec">
    <div class="container">
        <h1>Tài Khoản / Đăng nhập </h1>

        <div class="form">
            <form>
                <div class="row  justify-content-md-center">
                    <div class="col-6">

                        <input type="email" class="form-control" placeholder="Mời nhập Email " required="">
                       <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                </div>

                <div class="row  justify-content-md-center">

                    <div class="col-6">
<<<<<<< HEAD

                        <input type="email" placeholder="Mời nhập Email " required="">
=======
                        <div class="form-group has-feedback">
                            <input type="password" class="form-control" placeholder="Password" required="" />
                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        </div>
>>>>>>> 548835b9959debe77b45e7d228632e80af45dc36
                        <span class="required-star">*</span>
                    </div>
                    <span class="required-star">*</span>
                </div>

                <div class="row justify-content-md-center">
                    <div class="col-3">
                        <button class="btn black">Đăng Nhập </button>
                    </div>
                </div>
                <div class="row  justify-content-md-center">
                    <div class="col-5">
                        <h5>Không có Tài Khoản / <a href="{{route('dangky')}}">Đăng Ký Tại Đây</a></h5>
                    </div>
                </div>
        </div>
    </div>
    </form>
    </div>
    </div>
</section>
@endsection