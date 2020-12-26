@extends('layout_index.master')
@section('content')
<section class="static about-sec">
	<div class="container">
    	<table id="cart" class="table table-hover table-condensed">
    				<thead>
						<tr>
							<th style="width:50%">Tên sản phẩm</th>
							<th style="width:10%">Giá tiền</th>
							<th style="width:15%">số lượng</th>
							<th style="width:22%" class="text-center">Tổng</th>
							<th style="width:10%"></th>
						</tr>
					</thead>
					<tbody>
					@if(Session::has('cart'))
					@foreach($product_cart as $pro)
						<tr>
							<td data-th="Product">
								<div class="row">
									<div class="col-sm-2 hidden-xs"><img src="{{asset('images/product/'.$pro['item']['image'])}}" alt="..." class="img-responsive"/></div>
									<div class="col-sm-10">
										<h4 class="nomargin">{{$pro['item']['name']}}</h4>
										<p></p>
									</div>
								</div>
							</td>
							<td data-th="Price">{{number_format($pro['item']['promotion_price'])}}</td>
							<td data-th="Quantity">
								<input type="number" class="form-control text-center" value="{{$pro['qty']}}"> 
							</td>
							<td data-th="Subtotal" class="text-center">{{number_format($pro['price'])}}</td>
							<td class="actions" data-th="">
								<button class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button>
								<button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>								
							</td>
						</tr>
					@endforeach
					@endif
					</tbody>
					<tfoot>
						<tr class="visible-xs">
							<td class="pull-right"><strong>Total 1.99</strong></td>
						</tr>
						<tr>
							<td colspan="2" class="hidden-xs"></td>
							<td class="hidden-xs text-center"><strong>Total $1.99</strong></td>
							<td><a href="{{route('checkout')}}" class="btn btn-success btn-block">Thanh Toán <i class="fa fa-angle-right"></i></a></td>
						</tr>
					</tfoot>
				</table>
        </div>
    </section>
    @endsection