@extends('layout_index.master')
@section('content')
 <div class="container">
 	 <object data="book_pdf/Sachvui.Com-ban-hang-thong-minh-qua-dien-thoai-va-internet-josiane-chriqui-feigon.pdf" width="100%" height="1000px"></object>
 </div>
 <br>
 <br>
 <div class="container" >
 	 <form role="form">
        <div class="form-group">
          <textarea class="form-control" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
      </form>
      <br><br>
      
      <p><span class="badge">2</span> Comments:</p><br>
 </div>
@endsection