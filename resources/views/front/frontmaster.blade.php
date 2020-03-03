<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from demo.hasthemes.com/javenist-preview-v1/Javenist/index-5.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Dec 2019 04:23:37 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('/')}}/front/assets/img/favicon.ico">

    <!-- Ionicons Font CSS-->
    <link rel="stylesheet" href="{{asset('/')}}/front/assets/css/ionicons.min.css">
    <!-- font awesome CSS-->
    <link rel="stylesheet" href="{{asset('/')}}/front/assets/css/font-awesome.min.css">

    <!-- Animate CSS-->
    <link rel="stylesheet" href="{{asset('/')}}/front/assets/css/animate.css">
    <!-- UI CSS-->
    <link rel="stylesheet" href="{{asset('/')}}/front/assets/css/jquery-ui.min.css">
    <!-- Chosen CSS-->
    <link rel="stylesheet" href="{{asset('/')}}/front/assets/css/chosen.css">
    <!-- Meanmenu CSS-->
    <link rel="stylesheet" href="{{asset('/')}}/front/assets/css/meanmenu.min.css">
    <!-- Fancybox CSS-->
    <link rel="stylesheet" href="{{asset('/')}}/front/assets/css/jquery.fancybox.css">
    <!-- Normalize CSS-->
    <link rel="stylesheet" href="{{asset('/')}}/front/assets/css/normalize.css">
    <!-- Nivo Slider CSS-->
    <link rel="stylesheet" href="{{asset('/')}}/front/assets/css/nivo-slider.css">
    <!-- Owl Carousel CSS-->
    <link rel="stylesheet" href="{{asset('/')}}/front/assets/css/owl.carousel.min.css">
    <!-- EasyZoom CSS-->
    <link rel="stylesheet" href="{{asset('/')}}/front/assets/css/easyzoom.css">
    <!-- Slick CSS-->
    <link rel="stylesheet" href="{{asset('/')}}/front/assets/css/slick.css">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{asset('/')}}/front/assets/css/bootstrap.min.css">
    <!-- Default CSS -->
    <link rel="stylesheet" href="{{asset('/')}}/front/assets/css/default.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('/')}}/front/assets/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('/')}}/front/assets/css/responsive.css">
    <!-- Modernizr Js -->
    <script src="{{asset('/')}}/front/assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<div class="wrapper home-5">

    @include('front.includes.header')

    @yield('body')


    @include('front.includes.footer')

</div>



<!--All Js Here-->

<!--Jquery 1.12.4-->
<script src="{{asset('/')}}/front/assets/js/vendor/jquery-1.12.4.min.js"></script>
<!--Popper-->
<script src="{{asset('/')}}/front/assets/js/popper.min.js"></script>
<!--Bootstrap-->
<script src="{{asset('/')}}/front/assets/js/bootstrap.min.js"></script>
<!--Imagesloaded-->
<script src="{{asset('/')}}/front/assets/js/imagesloaded.pkgd.min.js"></script>
<!--Isotope-->
<script src="{{asset('/')}}/front/assets/js/isotope.pkgd.min.js"></script>
<!--Ui js-->
<script src="{{asset('/')}}/front/assets/js/jquery-ui.min.js"></script>
<!--Countdown-->
<script src="{{asset('/')}}/front/assets/js/jquery.countdown.min.js"></script>
<!--Counterup-->
<script src="{{asset('/')}}/front/assets/js/jquery.counterup.min.js"></script>
<!--ScrollUp-->
<script src="{{asset('/')}}/front/assets/js/jquery.scrollUp.min.js"></script>
<!--Chosen js-->
<script src="{{asset('/')}}/front/assets/js/chosen.jquery.js"></script>
<!--Meanmenu js-->
<script src="{{asset('/')}}/front/assets/js/jquery.meanmenu.min.js"></script>
<!--Instafeed-->
<script src="{{asset('/')}}/front/assets/js/instafeed.min.js"></script>
<!--EasyZoom-->
<script src="{{asset('/')}}/front/assets/js/easyzoom.min.js"></script>
<!--Fancybox-->
<script src="{{asset('/')}}/front/assets/js/jquery.fancybox.pack.js"></script>
<!--Nivo Slider-->
<script src="{{asset('/')}}/front/assets/js/jquery.nivo.slider.js"></script>
<!--Waypoints-->
<script src="{{asset('/')}}/front/assets/js/waypoints.min.js"></script>
<!--Carousel-->
<script src="{{asset('/')}}/front/assets/js/owl.carousel.min.js"></script>
<!--Slick-->
<script src="{{asset('/')}}/front/assets/js/slick.min.js"></script>
<!--Wow-->
<script src="{{asset('/')}}/front/assets/js/wow.min.js"></script>
<!--Plugins-->
<script src="{{asset('/')}}/front/assets/js/plugins.js"></script>
<!--Main Js-->
<script src="{{asset('/')}}/front/assets/js/main.js"></script>

<script>

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    function ajaxEmailCheck(email)
    {
        $.ajax({

            url      : 'ajax-email-check/'+email,
            method   : 'GET',
            dataType : 'JSON',
            success  : function (res) {
                    $('#res').text(res);
                    if(res == 'Email Address Already Exist')
                    {
                        $('#regbtn').prop('disabled',true);
                    }
                    else
                    {
                        $('#regbtn').prop('disabled',false);
                    }

            }

        });
    }



</script>


</body>

<!-- Mirrored from demo.hasthemes.com/javenist-preview-v1/Javenist/index-5.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Dec 2019 04:24:08 GMT -->
</html>
