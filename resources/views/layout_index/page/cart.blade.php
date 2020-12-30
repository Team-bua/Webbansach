@extends('layout_index.master')
@section('content')
<section class="static about-sec">
	<div class="container">
    	<table id="cart" class="table table-hover table-condensed">
		@if(Session::has('cart'))
    				<thead>
						<tr>
							<th style="width:50%">Tên sản phẩm</th>
							<th style="width:15%">Giá tiền</th>
							<th style="width:10%">Số lượng</th>
							<th style="width:22%" class="text-center">Tổng</th>
							<th style="width:10%"></th>
						</tr>
					</thead>
					<tbody>
					@foreach($product_cart as $pro)
						<tr>
							<td data-th="Product">
								<div class="row">
									<div class="col-sm-2 hidden-xs"><img style="width:150px; height:80px" src="{{asset('images/product/'.$pro['item']['image'])}}" alt="..." class="img-responsive"/></div>
									<div class="col-sm-10">
										<h4 class="nomargin">{{$pro['item']['name']}}</h4>
										<p></p>
									</div>
								</div>
							</td>
							<td data-th="Price"><span>@if($pro['item']['promotion_price']==0){{number_format($pro['item']['unit_price'])}} VNĐ @else <span style="text-decoration:line-through">{{number_format($pro['item']['unit_price'])}}VNĐ </span>{{number_format($pro['item']['promotion_price'])}} VNĐ @endif</span></td>
							<td data-th="Quantity">
								<input type="number" class="form-control text-center" value="{{$pro['qty']}}"> 
							</td>
							<td data-th="Subtotal" class="text-center">{{number_format($pro['price'])}} VNĐ</td>
							<td class="actions">
								<a class="btn btn-danger "><i class="fa fa-save"></i></a>
								<a class="btn btn-danger btn-sm" href="{{url('delcart',$pro['item']['id'])}}"><i class="fa fa-trash"></i></a>								
							</td>
						</tr>
					@endforeach
					
					</tbody>
					<tfoot>
						<tr>
							<td colspan="3" class="hidden-xs"></td>
							<td><strong>Tổng tiền : {{number_format($cart->totalPrice)}} VNĐ</strong></td>
							<td></td>
						</tr>	
						<tr>
							<td colspan="3" class="hidden-xs"></td>
							<td><a href="{{route('checkout')}}" class="btn btn-success btn-block">Thanh Toán <i class="fa fa-angle-right"></i></a></td>
							<td></td>
						</tr>
					</tfoot>
					@endif
				</table>
        </div>
    </section>
	@endsection