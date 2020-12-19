@extends('layout_index.master')
@section('content')

<div class="breadcrumb">
    <div class="container">
        <a class="breadcrumb-item" href="index.html">Home</a>
        <span class="breadcrumb-item active">Login</span>
    </div>
</div>
<section class="static about-sec">
    <div class="container">
        <h1>Tài Khoản / Đăng nhập </h1>
        <div class="form">
            <form action="{{url('login')}}" method="post">
                @csrf
                @if(Session::has('flag'))
                <div class="alert alert-{{Session::get('flag')}}">{{Session::get('messege')}} </div>
                @endif
                <div class="row  justify-content-md-center">
                    <div class="col-6">
                            <input type="email" name="username" placeholder="Username . . . . ." required />
                            <span class="required-star">*</span>
                        </div>
                </div>
                <div class="row  justify-content-md-center">
                    <div class="col-6">
                            <input type="password" name="password" placeholder="Password . . . . ."required/>
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