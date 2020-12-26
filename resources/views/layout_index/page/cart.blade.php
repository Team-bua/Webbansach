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
						<tr>
							<td data-th="Product">
								<div class="row">
									<div class="col-sm-2 hidden-xs"><img src="http://placehold.it/100x100" alt="..." class="img-responsive"/></div>
									<div class="col-sm-10">
										<h4 class="nomargin">Product 1</h4>
										<p>Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet.</p>
									</div>
								</div>
							</td>
							<td data-th="Price">$1.99</td>
							<td data-th="Quantity">
								<input type="number" class="form-control text-center" value="1">
							</td>
							<td data-th="Subtotal" class="text-center">1.99</td>
							<td class="actions" data-th="">
								<button class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button>

								<button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>								
							</td>
						</tr>
					</tbody>
					<tfoot>
						<tr class="visible-xs">
							<td class="text-center"><strong>Total 1.99</strong></td>
						</tr>
						<tr>
							<td colspan="2" class="hidden-xs"></td>
							<td><a href="{{route('checkout')}}" class="btn btn-success btn-block">Thanh Toán <i class="fa fa-angle-right"></i></a></td>
						</tr>
					</tfoot>
				</table>
        </div>
    </section>
    @endsection