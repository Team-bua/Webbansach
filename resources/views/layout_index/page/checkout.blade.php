@extends('layout_index.master')
@section('content')
<div class="container">
    <form action="{{url('checkout')}}" method="post" class="beta-form-checkout">
        @csrf
        <div class="checkout">
            @if(Session::has('thongbao'))
            <div class="alert alert-success">{{Session::get('thongbao')}} </div>
            @endif
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="checkout-inner">
                            <div class="billing-address">
                                <h2 style="font-family:Times New Roman;">Địa chỉ thanh toán</h2>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label style="font-family:Times New Roman;">Họ và tên</label>
                                        <input class="form-control" type="text" value="{{$name}}">
                                    </div>
                                    <div class="col-md-6">
                                        <label style="font-family:Times New Roman;">E-mail</label>
                                        <input class="form-control" name="email" type="text" value="{{$email}}">
                                    </div>
                                    <div class="col-md-6">
                                        <label style="font-family:Times New Roman;">Số Điện Thoại</label>
                                        <input class="form-control" name="phone" type="text" value="{{$phone}}">
                                    </div>
                                    <div class="col-md-12">
                                        <label style="font-family:Times New Roman;">Địa Chỉ</label>
                                        <input class="form-control" name="address" type="text" value="{{$address}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4">
                        @if(Session::has('cart')>=1)
                        <div class="checkout-inner">
                            <div class="checkout-summary">
                                <h1 style="font-family:Times New Roman;">Tổng số giỏ hàng</h1>
                                <p class="ship-cost" style="font-family:Times New Roman;">Số lượng<span>{{number_format($totalQty)}}</span></p>
                                <h2 style="font-family:Times New Roman;">Thành tiền<span>{{number_format($totalPrice)}}</span></h2>
                            </div>

                            <div class="checkout-payment">
                                <div class="payment-methods">
                                    <h1 style="font-family:Times New Roman;">Hình thức thanh toán</h1>
                                    <div class="payment-method">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="payment-1" name="payment" value="COD">
                                            <label class="custom-control-label" name="payment" for="payment-1" style="font-family:Times New Roman;">Thanh toán khi nhận hàng</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="checkout-btn">
                                    <button>Thanh Toán</button>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                    
                </div>
                
            </div>
        </div>
        @if(Session::has('cart')>=1)
        <table class="table table-bordered .table-responsive text-center">
            <tr class="active">
                <td>Ảnh mô tả</td>
                <td>Tên sản phẩm</td>
                <td width="20%">Đơn giá</td>
                <td>Số lượng</td>
            </tr>
            @foreach($product_cart as $pro)
            <tr>
                <td><img style="width:50px; height:50px" src="{{asset('images/product/'.$pro['item']['image'])}}"></td>
                <td>{{$pro['item']['name']}}</td>
                <td><span class="price">@if($pro['item']['promotion_price']==0){{number_format($pro['item']['unit_price'])}} VNĐ @else {{number_format($pro['item']['promotion_price'])}} VNĐ @endif</span></td>
                <td>{{$pro['qty']}}</td>
            </tr>
            @endforeach
        </table>
        @endif
    </form>
</div>
@endsection