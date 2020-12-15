@extends('layout_index.master')
@section('content')
</div>
        <div class="main-menu">
            
        </div>
    </header>
    <div class="breadcrumb">
        <div class="container">
            <a class="breadcrumb-item" href="index.html">Home</a>
            <span class="breadcrumb-item active">Register</span>
        </div>
    </div>
    <section class="static about-sec">
        <div class="container">
            <h1>Đăng Ký Tài Khoản </h1>
            
            <div class="form">
                <form>
                <div class="row  justify-content-md-center">
                    <div class="col-6">

                        <input type="text" placeholder="Mời nhập Email " required="">
                        <span class="required-star">*</span>
                    </div>
                </div>
                <div class="row  justify-content-md-center">
                    <div class="col-6">

                        <input type="Password" placeholder="Mời Nhập Password " required="">
                        <span class="required-star">*</span>
                    </div>
                </div>
                <div class="row  justify-content-md-center">
                    <div class="col-6">

                        <input type="Email" placeholder="Mời nhập Email " required="">
                        <span class="required-star">*</span>
                    </div>
                </div>
                <div class="row  justify-content-md-center">
                    <div class="col-6">

                        <input type="text" placeholder="Mời nhập Họ Tên " required="">
                        <span class="required-star">*</span>
                    </div>
                </div>
                <div class="row  justify-content-md-center">
                    <div class="col-6">

                        <input type="text" placeholder="Mời nhập Địa Chỉ" required="">
                        <span class="required-star">*</span>
                    </div>
                </div>
                <div class="row  justify-content-md-center">
                    <div class="col-6">

                        <input type="text" placeholder="Mời nhập số điện thoại " required="">
                        <span class="required-star">*</span>
                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <div class="col-3">
                        <button class="btn black">Đăng Ký </button>
                    </div>
                </div>
                <div class="row  justify-content-md-center">
                    <div class="col-5">
                        <h5>Đã có tài khoản / <a href="{{route('login')}}">Đăng Nhập Tại Đây</a></h5>
                    </div>
                </div>
                    
                </form>
            </div>
        </div>
    </section>
    @endsection