@extends('layout_index.master')
@section('content')
<section class="info">
    <div class="container">
        <div id="info-wrapper">
            <div id="tabs" class="htabs">
                <a href="#tab-info">Thông tin tài khoản</a>
                <a href="#tab-changePassword">Đổi Mật Khẩu</a>
                <a href="#tab-application">Đơn Hàng</a>
            </div>
            <div id="tab-info" class="tab-content">
                <div class="cpt_product_description ">
                    <div class="row">
                        @if(Session::has('thongbao'))
                        <div class="alert alert-success">{{Session::get('thongbao')}} </div>
                        @endif
                        <div class="col-sm-6">
                            <form method="post" action="{{ route('changeinfo',Auth::user()->id)}}">
                                @csrf
                                <div class="form-group">
                                    <label>Họ tên:</label>
                                    <input type="text" name="fullname" class="form-control" value="{{$customer->full_name}}" />
                                </div>
                                <div class="form-group">
                                    <label>Số điện thoại:</label>
                                    <input type="text" name="phone" class="form-control" value="{{$customer->phone}}" />
                                </div>
                                <div class="form-group">
                                    <label>Địa chỉ:</label>
                                    <input type="text" name="address" class="form-control" value="{{$customer->address}}" />
                                </div>
                                <div class="form-group">
                                    <label>Email:</label>
                                    <input type="text" name="email" class="form-control" value="{{$customer->email}}" />
                                </div>
                                <div class="col-3">
                                    <button class="btn black">Cập nhật thông tin </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div id="tab-changePassword" class="tab-content">
                <form method="post" action="{{ route('updatePassword',Auth::user()->id)}}">
                    @csrf
                    <div class="row">
                        <div class="col-sm-4">
                            <label>Mật Khẩu Cũ</label>
                            <div class="form-group pass_show">
                                <input type="password" name="password" class="form-control" placeholder="Mật Khẩu Cũ">
                            </div>
                            <label>Mật Khẩu Mới</label>
                            <div class="form-group pass_show">
                                <input type="password" name="new_password" class="form-control" placeholder="Mật Khẩu Mới">
                                @error('new_password')
                                <div style="color: red"> {{ $message }} </div>
                                @enderror
                            </div>
                            <label>Nhập Lại Mật Khẩu</label>
                            <div class="form-group pass_show">
                                <input type="password" name="re_password" class="form-control" placeholder="Nhập Lại Mật Khẩu">
                                @error('re_password')
                                <div style="color: red"> {{ $message }} </div>
                                @enderror
                            </div>

                            <div class="col-3">
                                <button class="btn black">Cập nhật thông tin </button>
                            </div>

                        </div>
                    </div>
                    <br>
                    @if(Session::has('success'))
                    <div class="alert alert-success">{{Session::get('success')}}</div>
                    @endif
                    @if(Session::has('danger'))
                    <div class="alert alert-danger">{{Session::get('danger')}}</div>
                    @endif
                </form>
            </div>
            <div id="tab-application" class="tab-content">
                <div class="cpt_product_description ">
                    <div>
                        <table class="table table-bordered">
                            <thead>
                                <tr class="bg-info">
                                    <th width=20%>Ảnh sản phẩm</th>
                                    <th width=25%>Tên sản phẩm</th>
                                    <th width=20%>Giá</th>
                                    <th>Số Lượng</th>
                                    <th width=15%>Ngày đặt</th>
                                    <th width=20%>Thành tiền</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($bill as $bills)                            
                            @foreach($bills->products as $product)
                                <tr class="cart_item">
                                    <td class="product-name"><img style="width:120px;height:120px;" src="{{ asset('images/product/' . $product->image) }}">
                                    </td>
                                    <td>{{$product->name}}</td>
                                    <td class="product-price">
                                        <span class="amount">{{number_format($product->pivot->unit_price)}} VNĐ</span>
                                    </td>

                                    <td class="product-quantity text-center">{{$product->pivot->quantity}}</td>
                                    <td class="product-status">{{$bills->created_at->format('d/m/y')}}</td>
                                    <td class="product-subtotal">{{number_format($product->pivot->unit_price * $product->pivot->quantity)}} VNĐ</td>

                                </tr>
                                @endforeach
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div id="last-product-wrapper">
            <div id="comment-list">

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
@section('show')
<script type="text/javascript">
    $(document).ready(function() {
        $('.pass_show').append('<span class="ptxt">hiện</span>');
    });


    $(document).on('click', '.pass_show .ptxt', function() {

        $(this).text($(this).text() == "ẩn" ? "hiện" : "ẩn");

        $(this).prev().attr('type', function(index, attr) {
            return attr == 'password' ? 'text' : 'password';
        });

    });
</script>
@stop