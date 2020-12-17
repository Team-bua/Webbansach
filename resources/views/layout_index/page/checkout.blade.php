@extends('layout_index.master')
@section('content')
<div class="container">
<div class="checkout">
            <div class="container-fluid"> 
                <div class="row">
                    <div class="col-lg-8">
                        <div class="checkout-inner">
                            <div class="billing-address">
                                <h2 style="font-family:Times New Roman;">Địa chỉ thanh toán</h2>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label style="font-family:Times New Roman;">Tên và tên</label>
                                        <input class="form-control" type="text" placeholder="First Name">
                                    </div>
                                    <div class="col-md-6">
                                        <label style="font-family:Times New Roman;">E-mail</label>
                                        <input class="form-control" type="text" placeholder="E-mail">
                                    </div>
                                    <div class="col-md-6">
                                        <label style="font-family:Times New Roman;">Số Điện Thoại</label>
                                        <input class="form-control" type="text" placeholder="Mobile No">
                                    </div>
                                    <div class="col-md-12">
                                        <label style="font-family:Times New Roman;">Địa Chỉ</label>
                                        <input class="form-control" type="text" placeholder="Address">
                                    </div>
                                  
                                    <div class="col-md-6">
                                        <label style="font-family:Times New Roman;">Thành Phố</label>
                                        <input class="form-control" type="text" placeholder="City">
                                    </div>
                                    <div class="col-md-6">
                                        <label style="font-family:Times New Roman;">Quận</label>
                                        <input class="form-control" type="text" placeholder="State">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="checkout-inner">
                        <div class="checkout-summary">
                                <h1 style="font-family:Times New Roman;" >Tổng số giỏ hàng</h1>                              
                                <p class="ship-cost" style="font-family:Times New Roman;" >Số lượng<span>$1</span></p>
                                <h2 style="font-family:Times New Roman;">Thành tiền<span>1500000VNĐ</span></h2>
                            </div>
                            <div class="checkout-payment">
                                <div class="payment-methods">
                                    <h1 style="font-family:Times New Roman;" >Hình thức thanh toán</h1>
                                    <div class="payment-method">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="payment-1" name="payment">
                                            <label class="custom-control-label" for="payment-1" style="font-family:Times New Roman;">Thanh toán khi nhận hàng</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="checkout-btn">
                                    <button>Thanh Toán</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
									<div class="col-sm-2 hidden-xs"><img src="http://placehold.it/100x100" alt="..." class="img-responsive"/></div>
									<div class="col-sm-10">
										<h4 class="nomargin">Product 1</h4>
										<p>Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet.</p>
									</div>
								</div>
                </div>
            </div>
        </div>
</div>
@endsection