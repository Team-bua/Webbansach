@extends('layout_index.master')
@section('content')
    <style type="text/css">
        .clear {
            clear: both;
        }

        br.clear {
            clear: both;
            margin-top: -15px;
        }

        a {
            outline: none;
            text-decoration: none;

        }

        .fl_left,
        .imgl {
            float: left;
        }

        .fl_right,
        .imgr {
            float: right;
        }

        img {
            display: block;
            margin: 0;
            padding: 0;
            border: none;
        }

        .imgl,
        .imgr {
            border: 1px solid #C7C5C8;
            padding: 5px;
        }

        .imgl {
            margin: 0 8px 8px 0;
            clear: left;
        }

        .imgr {
            margin: 0 0 8px 8px;
            clear: right;
        }

        /* ----------------------------------------------Wrapper------------------------------------- */

        div.wrapper {
            display: block;
            width: 100%;
            margin: 0;
            text-align: left;
        }

        div.wrapper h1,
        div.wrapper h2,
        div.wrapper h3,
        div.wrapper h4,
        div.wrapper h5,
        div.wrapper h6 {
            margin: 0 0 15px 0;
            padding: 0;
            font-size: 20px;
            font-weight: normal;
            line-height: normal;
        }

        .col1 {
            color: #666666;
            background-color: #000000;
        }

        .col2 {
            color: #E5E5E5;
            background-color: #839B05;
        }

        .col3 {
            color: #E5E5E5;
            background-color: #000000;
            padding: 20px 0;
            border-bottom: 1px solid #839B05;
        }

        .col5 {
            color: #E5E5E5;
            background-color: #000000;
        }

        .col6 {
            color: #E5E5E5;
            background-color: #000000;
            border-top: 1px solid #839B05;
            border-bottom: 1px solid #839B05;
        }

        .col7,
        .col7 a {
            color: #666666;
            background-color: #151515;
        }

        /* ----------------------------------------------Generalise------------------------------------- */

        #header,
        #topbar,
        #breadcrumb,
        #container,
        .gallery,
        #footer,
        #copyright {
            display: block;
            position: relative;
            width: 960px;
            margin: 0 auto;
        }

        /* ----------------------------------------------Content------------------------------------- */

        #container {
            padding: 30px 0;
        }

        #content {
            display: block;
            float: left;
            width: 630px;
        }

        /* Homepage */

        #featured_post {
            margin-bottom: 45px;
        }

        #featured_post img {
            display: block;
            width: 620px;
            height: 270px;
            margin: 0;
            padding: 4px;
            border: 1px solid #BFE009;
        }

        #hpage_latest {
            display: block;
            width: 100%;
        }

        #hpage_latest ul {
            margin: 0;
            padding: 0;
            list-style: none;
            display: inline;
        }

        #hpage_latest li {
            display: block;
            float: left;
            width: 200px;
            margin: 0 10px 0 0;
            padding: 0;
        }

        #hpage_latest li.last {
            margin-right: 0;
        }

        #hpage_latest img {
            margin: 0;
            padding: 4px;
            border: 1px solid #BFE009;
        }

        #hpage_latest .readmore {
            text-align: right;
        }

        /* Comments */

        /* ----------------------------------------------Column------------------------------------- */

        #column {
            display: block;
            float: right;
            width: 300px;
        }

        #column .holder {
            display: block;
            width: 260px;
            margin-bottom: 20px;
            padding-left: 10px;
        }

        #column .holder,
        #column #featured {
            display: block;
            width: 300px;
            margin-bottom: 20px;
        }

        #column .holder p {
            line-height: 1.6em;
        }

        #column h2 {
            font-size: 20px;
        }

        #column .holder h2.title {
            display: block;
            width: 100%;
            height: 65px;
            margin: 0;
            padding: 15px 0 0 0;
            font-size: 20px;
            line-height: normal;
            border-bottom: 1px dashed #666666;
        }

        #column .holder h2.title img {
            float: left;
            margin: -15px 8px 0 0;
            padding: 5px;
            border: 1px solid #666666;
        }

        #column .holder p.readmore {
            display: block;
            width: 100%;
            font-weight: bold;
            text-align: right;
            line-height: normal;
        }

        #column div.imgholder {
            display: block;
            width: 290px;
            margin: 0 0 10px 0;
            padding: 4px;
            border: 1px solid #666666;
        }


        .ten {
            white-space: nowrap;
            width: 200px;
            overflow: hidden;
            text-overflow: ellipsis;
        }

    </style>
         @if($content_fist)  
    <div class="wrapper col4">
        
        <div id="container">
            <h1>Tin tức liên quan</h1>
            <div id="content">
               
                <div id="featured_post">
                    
                    <img style="width:620px;height:340px;" src="{{ asset('images/news/' . $content_fist->image) }}">
                    <h3>  {!! $content_fist->name !!}</h3>

                </div>
               
                <div id="hpage_latest">
                    @foreach ($content as $con)
                        <ul>
                            <li>
                                <img style="width:190px;height:180px;" src="{{ asset('images/news/' . $con->image) }}">
                                <p class="ten"><b>{{ $con->name }}</b></p>
                                <a href="{{ route('newsdetail', [$con['id']]) }}">
                                    <p class="readmore">Xem thêm &raquo;</p>
                                </a>

                            </li>
                        </ul>
                    @endforeach
                    <br class="clear" />
                </div>
            </div>
            <div id="column">
                @foreach ($content as $con)
                    <ul id="latestnews">
                        <li> <img style="width:80px;height:80px;" src="{{ asset('images/news/' . $con->image) }}">
                            <p><strong><a href="#"></a></strong></p>
                        </li>
                    </ul>
                @endforeach
                
            </div>
            @else
            <div id="container">
                Không có tin tức
            </div>
            <br class="clear" />
        </div>
        <br class="clear" />
        
    </div>
   
        @endif
   


@endsection