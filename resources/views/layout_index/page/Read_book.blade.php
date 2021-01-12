@extends('layout_index.master')
@section('content')
 <div class="container">
 	<object data="book_pdf/{{$pdf->link}}" width="100%" height="1000px"></object>
 </div>
 <br>
 <br>
 <div class="container" >
 	 <form role="form">
        <div class="form-group">
          <textarea class="form-control" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-success">Gửi</button>
      </form>
      <br><br>
      
      <p><span class="badge">2</span> Comments:</p><br>
 </div>
 <div class="container">
        <div id="comment-list">
                            <ul>
                                <li class="com-title">
                                    Team bùa
                                    <br>
                                    <span>2020-19-01 10:00:00</span>    
                                </li>
                                <li class="com-details">
                                    Nếu bạn đọc bình luận này thì bố mẹ bạn sẽ chết trong vòng 5 năm . Để tránh khỏi điều này bạn phải copy và gửi nó vào 5 truyện khác . Tôi vô cùng vô cung xin lỗi khong thể lấy mạng cha mẹ ra cược được, làm ơn tha thứ cho tôi
                                </li>
                            </ul>
                           
                        </div>
    </div>
@endsection