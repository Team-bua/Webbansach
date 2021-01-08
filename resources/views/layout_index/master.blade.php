<html lang="en">

<head>

    <meta charset="UTF-8">
    <title>BookStore</title>
    <base href="{{asset('')}}">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <!------------------------------------------------------------------------>
    <link rel="stylesheet" href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/carousel.css">
    <!---------------------------------------------------------------------->
    <link rel="shortcut icon" type="image/x-icon" href="\images\icon\logoteambua.png">
    <!------------------------------------------------------------------------>
    <link rel="stylesheet" href="../src/jquery.back-to-top.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!------------------------------------------------------------------------>
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="style.css">
    <!------------------------------------------------------------------------>

</head>


<body>
    @include('layout_index.header')
    @yield('content')
    @include('layout_index.footer')
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script src="js/custom.js"></script>
    <script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
    <!------------------------------------------------------------------------>
    <script type="text/javascript" src="js/jquery.jcarousel.min.js"></script>
    <script type="text/javascript" src="js/jquery.cycle.all.js"></script>
    <script type="text/javascript" src="js/jquery.selectBox.js"></script>
    <script type="text/JavaScript" src="js/cloud-zoom.1.0.2.js"></script>
    <script type="text/JavaScript" src="js/cuties.js"></script>

    <!---------------------------back to top--------------------------------------------->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="../src/jquery.back-to-top.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="plugins/input-mask/jquery.inputmask.js" type="text/javascript"></script>
    <script src="plugins/input-mask/jquery.inputmask.date.extensions.js" type="text/javascript"></script>
    <script src="plugins/input-mask/jquery.inputmask.extensions.js" type="text/javascript"></script>
    <script>
        $(function() {
            $('.bck').backToTop();
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#myInput').on('keyup', function(event) {
                event.preventDefault();
                /* Act on the event */
                var tukhoa = $(this).val().toLowerCase();
                $('#myTable div').filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(tukhoa) > -1);
                });
            });
        });
    </script>
    <!-------------------------------------------------------------------------------------->
    <script type="text/javascript" src="js/jquery.jcarousel.min.js"></script>
<<<<<<< HEAD
=======
    <script type="text/javascript">
jQuery(window).load(function() {

    $("#nav > li > a").click(function () { // binding onclick
        if ($(this).parent().hasClass('selected')) {
            $("#nav .selected div div").slideUp(100); // hiding popups
            $("#nav .selected").removeClass("selected");
        } else {
            $("#nav .selected div div").slideUp(100); // hiding popups
            $("#nav .selected").removeClass("selected");

            if ($(this).next(".subs").length) {
                $(this).parent().addClass("selected"); // display popup
                $(this).next(".subs").children().slideDown(200);
            }
        }
    }); 

});

</script>
<script>
        function AddCart(id) {
            $.ajax({
                url: 'addcart/' + id,
                type: 'GET',
            }).done(function(response) {  
                $('.quntity').html(response['cart']['totalQty']);           
                Swal.fire({
                    icon: 'success',
                    title: 'Đã thêm vào giỏ hàng',
                    showConfirmButton: false,
                    timer: 1500
                })
            })
        }

    </script>
>>>>>>> 2e46d5fd202f9337e16ff378647e9d94912463d5
    <div class="snowflakes" aria-hidden="true">
        <div class="snowflake">❅</div>
        <div class="snowflake">❆</div>
        <div class="snowflake">❅</div>
        <div class="snowflake">❆</div>
        <div class="snowflake">❅</div>
        <div class="snowflake">❆</div>
        <div class="snowflake">❅</div>
        <div class="snowflake">❆</div>
        <div class="snowflake">❅</div>
        <div class="snowflake">❆</div>
        <div class="snowflake">❅</div>
        <div class="snowflake">❆</div>
        <div class="snowflake">❆</div>
        <div class="snowflake">❆</div>
        <div class="snowflake">❆</div>
    </div>
    @yield('script')
    @yield('js')
    @yield('show')
</body>

</html>