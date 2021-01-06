@extends('layout_index.master')
@section('content')
<section class="static about-sec">
	<div class="container">
		<table id="cart" class="table table-hover table-condensed">
			<thead>
				<tr>
					<th style="width:50%">Tên sản phẩm</th>
					<th style="width:15%">Giá tiền</th>
					<th style="width:10%">Số lượng</th>
					<th style="width:20%; text-align:center">Thành tiền</th>
					<th style="width:10%"></th>
				</tr>
			</thead>
			<tbody>
				<form method="post" action="">
				@csrf
				@if(Session::has('cart'))
				@foreach($product_cart as $pro)
				<tr>
					<td data-th="Product">
						<div class="row">
							<div class="col-sm-2 hidden-xs"><img style="width:150px; height:80px" src="{{asset('images/product/'.$pro['item']['image'])}}" alt="..." class="img-responsive" /></div>
							<div class="col-sm-10">
								<h4 class="nomargin">{{$pro['item']['name']}}</h4>
								<p></p>
							</div>
						</div>
					</td>
					<td data-th="Price"><span>{{number_format($pro['price'])}} VNĐ </span></td>
					<td data-th="Quantity">
						<input type="number" class="form-control text-center qty" value="{{$pro['qty']}}">
					</td>
					<td style="text-align:center" id="">{{number_format($pro['price']*$pro['qty'])}} VNĐ</td>
					<td class="actions">
						<a class="btn btn-danger btn-sm" data-url="{{route('delcart',$pro['item']['id'])}}"><i class="fa fa-trash"></i></a>
					</td>
				</tr>
				@endforeach
				@endif
				</form>
			</tbody>
			<tfoot>			
				<tr>
					<td colspan="3" class="hidden-xs"></td>
					<td><strong id="totalPrice">Tổng tiền :@if(Session::has('cart')) {{number_format($cart->totalPrice)}} @else 0 @endif VNĐ</strong></td>
					<td></td>
				</tr>
				<tr>
					<td colspan="3" class="hidden-xs"></td>
					<td><a href="@if(Auth::check()) {{route('checkout')}} @else {{route('login')}} @endif" class="btn btn-success btn-block">Thanh Toán <i class="fa fa-angle-right"></i></a></td>
					<td></td>
				</tr>				
			</tfoot>
		</table>

	</div>
</section>
@endsection
@section('script')
<script>
	$(document).on('click', '.btn-sm', DelCart);
	function DelCart(e) {
		e.preventDefault();
		let urlRequest = $(this).data('url');
		let that = $(this);
		Swal.fire({
			title: 'Delete',
			text: "Bạn có muốn xóa không!",
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Có, muốn xóa!',
			cancelButtonText: 'Không xóa',
		}).then((result) => {
			if (result.isConfirmed) {
				$.ajax({
					url: urlRequest,
					type: 'GET',
					success: function(data) {
						if (data.code == 200) {
							$('#totalPrice').html('Tổng tiền : ' + Number(data['cart']['totalPrice']).toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,') + ' VNĐ');
							that.parent().parent().remove();
							Swal.fire(
								'Deleted!',
								'Xóa thành công.',
								'success'
							)
						}
					}
				});
			}
		});
	}
	
</script>
@stop
