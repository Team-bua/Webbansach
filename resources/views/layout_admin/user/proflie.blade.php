@extends('layout_admin.master2')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Thống Kê
            <small>Móc bô</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Profile</li>
        </ol>
    </section>

    <!-- Main content -->

    <div class="row">


        <div class="col-md">
            <div class="text-center">
                <div class="box box-primary">

                    <div class="box-header">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                        <p>
                            Alexander Pierce - Web Developer
                            <small>Member since Nov. 2012</small>
                        </p>
                        <h3 class="box-title">Date picker</h3>
                    </div>
                    <div class="box-body">
                        <!-- Date range -->
                        <form class="form-inline">
                            <div class="form-group">
                                <label for="inputPassword6">Password &nbsp:</label>
                                <input size="50px" type="password" id="inputPassword6" class="form-control mx-sm-3" aria-describedby="passwordHelpInline">

                            </div>
                    </div><!-- /.form group -->
                    <div class="box-body">
                        <!-- Date and time range -->
                        <div class="form-inline">
                            <div class="form-group">
                                <label for="inputPassword6">Password &nbsp:</label>
                                <input size="50px" type="password" id="inputPassword6" class="form-control mx-sm-3" aria-describedby="passwordHelpInline">

                            </div>
                        </div><!-- /.form group -->
                    </div>
                    <!-- Date and time range -->
                    <div class="box-body">
                        <div class="form-inline">
                            <div class="form-group">
                                <label for="inputPassword6">Password &nbsp:</label>
                                <input  size="50px" type="password" id="inputPassword6" class="form-control mx-sm-3" aria-describedby="passwordHelpInline">

                            </div>
                        </div><!-- /.form group -->
                    </div>
                </div>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div>
    <!-- iCheck -->

</div><!-- /.col (right) -->
</div><!-- /.row -->

</section>
</div>
</div><!-- /.content-wrapper -->
@endsection