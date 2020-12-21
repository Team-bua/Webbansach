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
                        <div class="form-group has-feedback">
                        <input type="email" class="form-control" placeholder="Mời nhập Email " required="">
                       <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        </div>
                    <span class="required-star">*</span>
                     </div>
                </div>
                <div class="row  justify-content-md-center">
                    <div class="col-6">
                        <div class="form-group has-feedback">
                            <input type="password" class="form-control" placeholder="Password" required="" />
                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        </div>
                    <span class="required-star">*</span>
                    </div>
                    
                </div>

                <div class="row justify-content-md-center">
                    <div class="col-3">
                        <button class="btn black">Đăng Nhập </button>
                    </div>
                </div>
                <div class="row  justify-content-md-center">
                    <div class="col-5">
                        <h5>Không có Tài Khoản / <a href="{{route('signup')}}">Đăng Ký Tại Đây</a></h5>
                    </div>
                </div>
        </div>
    </div>
    </form>
    </div>
    </div>
</section>
@endsection