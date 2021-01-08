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
        <div class="col-sm-6">
            <form method="post" action="{{ route('changeinfo',Auth::user()->id)}}">
                @csrf
                <div class="form-group">
                    <label>Họ tên:</label>
                    <input type="text" name="fullname" class="form-control"   value="{{$customer->full_name}}"/>
                </div>
                <div class="form-group">
                    <label>Số điện thoại:</label>
                    <input type="text" name="phone" class="form-control" data-inputmask="'mask': '999-999-9999'" value="{{$customer->phone}}"  />
                </div>
                <div class="form-group">
                    <label>Địa chỉ:</label>
                    <input type="text" name="address" class="form-control"  
                    value="{{$customer->address}}" />
                </div>
                <div class="form-group">
                    <label>Email:</label>
                    <input type="text" name="email" class="form-control"  value="{{$customer->email}}"   />
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
            <div class="row" >
        <div class="col-sm-4">
            <label>Mật Khẩu Cũ</label>
            <div class="form-group pass_show"> 
                <input type="password" name="password"  class="form-control" placeholder="Mật Khẩu Cũ" > 
            </div> 
               <label>Mật Khẩu Mới</label>
            <div class="form-group pass_show"> 
                <input type="password" name="new_password"  class="form-control" placeholder="Mật Khẩu Mới"> 
            </div> 
               <label>Nhập Lại Mật Khẩu</label>
            <div class="form-group pass_show"> 
                <input type="password"  name="re_password" class="form-control" placeholder="Nhập Lại Mật Khẩu"> 
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
                        <tr class="bg-primary" >
                        <th width=30%>Sản phẩm</th>
                        <th>Giá</th>
                        <th>Số Lượng</th>
                        <th>Ngày đặt</th>
                        <th>Tổng tiền</th>
                        <th>Thanh toán</th>
                        </tr>
                    </thead>
                        <tbody>
                  
                        <tr class="cart_item">
                            <td class="product-name">
                                <div class="media">
                                    <div class="media-body">
                                        <p class="font-large table-title"></p>
                                        <p class="table-option"></p>
                                    </div>
                                </div>
                            </td>

                            <td class="product-price">
                                <span class="amount"></span>
                            </td>

                            <td class="product-quantity">
                                <select name="product-qty" id="product-qty">
                                    <option></option>
                                </select>
                            </td>
                            <td class="product-status">
                                
                            </td>

                            <td class="product-subtotal">
                                <span class="amount"></span>
                            </td>
                            <td class="product-status">
                                
                            </td>
                            <td class="product-status">
                               
                            </td>
                            
                        </tr>
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
    $(document).ready(function(){
$('.pass_show').append('<span class="ptxt">hiện</span>');  
});
  

$(document).on('click','.pass_show .ptxt', function(){ 

$(this).text($(this).text() == "ẩn" ? "hiện" : "ẩn"); 

$(this).prev().attr('type', function(index, attr){return attr == 'password' ? 'text' : 'password'; }); 

});  
</script>
@stop