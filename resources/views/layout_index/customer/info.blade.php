@extends('layout_index.master')
@section('content')
<div class="container">
    <br>
    <h6><span>T</span>
        <span>h</span>
        <span>ô</span>
        <span>n</span>
        <span>g</span>
        <span>t</span>
        <span>i</span>
        <span>n</span>
        <span>.</span>
    </h6>
    <hr>
    <div class="btn-sec">
        <button class="btn " data-toggle="modal" data-target="#tab-info">Thông Tin</button>
        <button class="btn " data-toggle="modal" data-target="#tab-content">Đổi Mật Khẩu</button>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr >
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
<div class="container">
    <div class="modal fade product_view" id="tab-info">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <form method="post" action="{{ route('changeinfo',Auth::user()->id)}}">
                                @csrf
                                <div class="form-group">
                                    <label>Họ tên:</label>
                                    <input type="text" name="fullname" class="form-control" value="{{$customer->full_name}}" />
                                </div>
                                <div class="form-group">
                                    <label>Số điện thoại:</label>
                                    <input type="text" name="phone" class="form-control" data-inputmask="'mask': '999-999-9999'" value="{{$customer->phone}}" />
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
        </div>
    </div>
</div>
<div class="container">
    <div class="modal fade product_view" id="tab-content">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <form method="post" action="{{ route('updatePassword',Auth::user()->id)}}">
                                @csrf
                                <label>Mật Khẩu Cũ</label>
                                <div class="form-group pass_show">
                                    <input type="password" name="password" class="form-control" placeholder="Mật Khẩu Cũ">
                                </div>
                                <label>Mật Khẩu Mới</label>
                                <div class="form-group pass_show">
                                    <input type="password" name="new_password" class="form-control" placeholder="Mật Khẩu Mới">
                                </div>
                                <label>Nhập Lại Mật Khẩu</label>
                                <div class="form-group pass_show">
                                    <input type="password" name="re_password" class="form-control" placeholder="Nhập Lại Mật Khẩu">
                                </div>
                                <div class="col-3">
                                    <button class="btn black">Cập nhật thông tin </button>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


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