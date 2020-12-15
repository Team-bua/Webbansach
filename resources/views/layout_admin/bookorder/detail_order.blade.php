@extends('layout_admin.master')
@section('content')
<div class="content-wrapper" style="background-color: white;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Chi tiết đơn hàng

        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Simple</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-sm-4">
                <h4>Chi tiết chung</h4>
                <div class="box box-danger">
                    Ngày đặt hàng
                    <div class="box-body">
                        <div class="row">
                            <div class="col-xs-3">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-xs-4">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-xs-5">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div><!-- /.box-body -->
                    Tình trạng :
                    <div class="box-body">
                        <div class="row">

                            <div class="input-group-btn ">

                                <button type="button" class="btn btn-block btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <b> Đang xử lý </b></button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>

                                </ul>

                            </div>

                        </div>
                    </div><!-- /.box-body -->

                    Tình trạng đơn hàng :<br></br>
                    <div class="box box-solid box-primary">
                        <div class="box-header">
                            <h3 class="box-title">Primary Solid Box</h3>
                            <div class="box-tools pull-right">
                                <button class="btn btn-primary btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                <button class="btn btn-primary btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                            </div>
                        </div>
                        <div class="box-body">
                            Box class: <code>.box.box-solid.box-primary</code>
                            <p>
                                amber, microbrewery abbey hydrometer, brewpub ale lauter tun saccharification oxidized barrel.
                                berliner weisse wort chiller adjunct hydrometer alcohol aau!
                                sour/acidic sour/acidic chocolate malt ipa ipa hydrometer.
                            </p>
                            <div class="text-center">
                                <button type="button" class="btn  btn-primary"> Check Đơn Hàng </button>
                                <button type="button" class="btn  btn-primary"> In Hóa Đơn </button>

                            </div>
                        </div><!-- /.box-body -->
                    </div>

                </div>


            </div>

            <div class="col-sm-4">
                
                <h4>Thông tin thanh toán&nbsp;<span><i class="fa fa-check"></i></span></h4>
                <div class="box box-warning">
                   
                    <div class="col-sm invoice-col" style="font-size: 16px;">
                    <br>
                    <b>Tên :</b><br>
                         Nguyễn Trần Lâm<br>
                        <b>Order ID:</b> <br>
                        4F3S8J<br>
                        <b>Địa chỉ :</b><br>
                         78 Phạm Văn Nghị<br>
                        <b>Số Điện thoại:</b><br>
                         968-34567<br>
                        <b>Nơi ở:</b><br>
                         968-34567ád<br>
                        <b>Email</b>:<br>
                         Lamnguyen@gmil.com <br>
                         <br>
                    </div>
                    
                    
                   

                </div>


            </div>
            <div class="col-sm-4">

                <h4>Thông tin thanh toán&nbsp;<span><i class="fa  fa-pencil"></i></span></h4>
                <div class="box box-primary">
                   
                    <div class="col-sm invoice-col" style="font-size: 16px;">
                    <br>
                    <b>Tên :</b><br>
                         Nguyễn Trần Lâm<br>
                        <b>Order ID:</b> <br>
                        4F3S8J<br>
                        <b>Địa chỉ :</b><br>
                         78 Phạm Văn Nghị<br>
                        <b>Số Điện thoại:</b><br>
                         968-34567<br>
                        <b>Nơi ở:</b><br>
                         968-34567ád<br>
                        <b>Email</b>:<br>
                         Lamnguyen@gmil.com <br>
                         <br>
                    </div>
                    
                    
                   

                </div>


            </div>
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->


@endsection