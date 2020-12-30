@extends('layout_admin.master')

@section('content')




    <div class="content-wrapper" style="min-height: 898px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Thêm sách
                <small>Thêm, xóa, cập nhập sản phẩm.</small>
            </h1>

            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Sách</a></li>
                <li class="active">Thêm sách</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="box box-info">
                <form action="{{ url('book') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="box-header">
                    </div>
                    <div class="box-body">
                        <h4> Tên sách : </h4>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-pencil fa-lg"></i></span>
                            <input id="namebook" required name="name" type="text" class="form-control"
                                placeholder="Tên sách . . . . . . . . .">
                        </div>
                        <h4> Loại sách </h4>
                        <div class="input-group input-group">
                            <div class="input-group-btn">
                                <select style=" font-weight:bold;" required name="cate" class="form-control">
                                    <option style=" font-weight:bold;" value="-1"> --Chọn thể loại sách-- </option>
                                    @foreach ($product as $pro)
                                        <option value="{{ $pro->id }}">{{ $pro->name }}</option>
                                    @endforeach
                                </select>
                            </div><!-- /btn-group -->
                        </div><!-- /input-group -->

                        <h4> Tác giả : </h4>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-smile-o fa-lg"></i></span>
                            <input id="publisherbook" name="publisher" type="text" class="form-control"
                                placeholder="Tác giả. . . . . . . . .">
                        </div>

                        <h4> Giá : </h4>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-money fa-lg"></i></span>
                            <input required id="unit_pricebook" name="unit_price" type="text" class="form-control"
                                placeholder="Giá  . . . . . . . . .">
                            <span class="input-group-addon">VNĐ</span>
                        </div>


                        <h4> Giá khuyến mãi : </h4>
                        <div class="input-group">
                            <span class="input-group-addon" ><i class="fa fa-money fa-lg"></i></span>
                            <input id="promotion_pricebook" name="promotion_price" type="text" class="form-control"
                                placeholder="Khuyến mãi . . . . . . . . .">
                            <span class="input-group-addon">VNĐ</span>
                        </div>
                        <h4> Định dạng: </h4>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa  fa-bold fa-lg"></i></span>
                            <input id="Format" name="Format" type="text" class="form-control"
                                placeholder="Định dạng là chữ hoặc hình  . . . . . . . . .">

                        </div>
                        <h4> Ngày nhập : </h4>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-calendar fa-lg"></i></span>
                            <input style="width:300px" id="Release_Date" name="ReleaseDate" type="date" class="form-control"
                                placeholder="Ngày nhập sách  . . . . . . . . . ">

                        </div>
                        <h4> Ngôn ngữ </h4>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-language fa-lg "></i></span>
                            <input id="Language" name="Language" type="text" class="form-control"
                                placeholder="Ngôn ngữ . . . . . . . . .">
                        </div>

                        <h4> Số trang :</h4>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-file-text fa-lg"></i></span>
                            <input id="Page_Number" name="PageNumber" type="text" class="form-control"
                                placeholder="Nhập số trang  . . . . . . . . .">
                            <span class="input-group-addon">Trang</span>
                        </div>
                        <h4> Kích thước :</h4>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-arrows-alt fa-lg"></i></span>
                            <input id="size" name="size" type="text" class="form-control"
                                placeholder="Nhập chiều dài và cao . . . . . . . . .">
                            <span class="input-group-addon">Cm</span>
                        </div>

                        <div class="form-group">
                            <h4 for="exampleInputFile">Ảnh sản phẩm</h4>
                            <input id="imgbook" type="file" name="img" onchange="changeImg(this)">
                            <img id="avatar" class="img-rounded" width="200px" height="300px">
                        </div>

                        <div class="form-group">
                            <h4 for="exampleInputFile">Ảnh chi tiết</h4>
                            <input name="img_detail[]" id="exampleInputFile" type='file' multiple />
                            <div id="myImg">
                            </div>
                        </div>
                        <br>
                        <div class="text-center">

                            <input type="submit" name="submit" value="Thêm" class="btn  btn-warning btn-lg">
                        </div>





                </form>
            </div>
        </section><!-- /.content -->
    </div>

@endsection
@section('js')
    <script type="text/javascript">
        $(function() {
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace('editor1');
            //bootstrap WYSIHTML5 - text editor
            $(".textarea").wysihtml5();
        });

    </script>
    <script type="text/javascript">
        $('#avatar').hide();

        function changeImg(input) {
            //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                //Sự kiện file đã được load vào website
                reader.onload = function(e) {
                    //Thay đổi đường dẫn ảnh
                    $('#avatar').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
                $('#avatar').show();
            }
        }
        $(document).ready(function() {
            $('#avatar').click(function() {
                $('#imgbook').click();


            });
        });

    </script>

    <script type="text/javascript">
        $("#exampleInputFile").change(function() {

            if (this.files && this.files[0]) {
                for (var i = 0; i < this.files.length; i++) {
                    var reader_detail = new FileReader();
                    reader_detail.onload = imageIsLoaded;
                    reader_detail.readAsDataURL(this.files[i]);
                }
            }
        });

        function imageIsLoaded(e) {
            var output = '&nbsp; <img  width="200px" height="300px" src=' + e.target.result + '>';
            $("#myImg ").append(output);

        };

    </script>



@stop
