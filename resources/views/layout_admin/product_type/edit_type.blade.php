
@if($type)
<div class="panel-body">
	<form action="{{route('book_type.update',$type['id'])}}" method="post" enctype="multipart/form-data" >
		@csrf
		@method('put')
		<div class="col-xs-12">
			<div class="form-group">
				<label>Tên loại sản phẩm</label><br>
        <input style="width:300px" type="text" name="name" class="form-control" value="{{$type->name}}" required placeholder="Tên danh mục...">
			</div>
			<div class="modal-footer">
			<input type="submit" name="submit" value="Cập nhật" class="btn btn-primary">
		</div>
		</div>
	</form>
</div>

@endif