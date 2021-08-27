<!DOCTYPE html>
<html lang="en-us">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <meta name="robots" content="index, follow"/>
    <title>sandhstore | @yield('title')</title>
    <meta name="description" content="sandhstore"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

    <!-- Add site Favicon -->
    <link rel="shortcut icon" href="/assets/images/favicon/favicon.ico" type="image/png">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- vendor css (Icon Font) -->
    <link rel="stylesheet" href="/assets/css/vendor/bootstrap.min.css"/>
    <link rel="stylesheet" href="/assets/css/vendor/pe-icon-7-stroke.css"/>
    <link rel="stylesheet" href="/assets/css/vendor/font.awesome.css"/>

    <!-- plugins css (All Plugins Files) -->
    <link rel="stylesheet" href="/assets/css/plugins/animate.css"/>
    <link rel="stylesheet" href="/assets/css/plugins/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="/assets/css/plugins/jquery-ui.min.css"/>
    <link rel="stylesheet" href="/assets/css/plugins/nice-select.css"/>
    <link rel="stylesheet" href="/assets/css/plugins/venobox.css"/>

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <!-- <link rel="stylesheet" href="/assets/css/vendor/vendor.min.css" />
    <link rel="stylesheet" href="/assets/css/plugins/plugins.min.css" />
    <link rel="stylesheet" href="/assets/css/oldstyle.min.css"> -->

    <!-- Main Style -->
    <link rel="stylesheet" href="/assets/css/style.css"/>
    @yield('css')

</head>

<body>

<!-- Top Bar -->

<div class="header-to-bar" style="display: none;"> HELLO EVERYONE! 25% Off All Products</div>

<!-- Top Bar -->
@include('components.header')
<!-- breadcrumb-area start -->
<div class="breadcrumb-area mb-n-30px">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 text-center">
                <h2 class="breadcrumb-title">@yield('title')</h2>
                <!-- breadcrumb-list start -->
                <ul class="breadcrumb-list">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active">@yield('title')</li>
                </ul>
                <!-- breadcrumb-list end -->
            </div>
        </div>
    </div>
</div>

<!-- breadcrumb-area end -->

<!-- Shop Page Start  -->
<div class="shop-category-area mt-n-65px  pb-100px">
    <div class="container">
        <div class="row">
            <div class="col-12">

                @include('components.flash_message')
                @yield('content')

            </div>
        </div>
    </div>
</div>
<!-- Shop Page End  -->
@include('components.footer')
<!-- Global Vendor, plugins JS -->


<!-- Vendor JS -->
<!-- Vendor JS -->
<script src="/assets/js/vendor/jquery-3.5.1.min.js"></script>

<script src="/assets/js/vendor/bootstrap.bundle.min.js"></script>
<script src="/assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>
<script src="/assets/js/vendor/modernizr-3.11.2.min.js"></script>

<!--Plugins JS-->
<script src="/assets/js/plugins/swiper-bundle.min.js"></script>
<script src="/assets/js/plugins/jquery-ui.min.js"></script>
<script src="/assets/js/plugins/jquery.nice-select.min.js"></script>
<script src="/assets/js/plugins/countdown.js"></script>
<script src="/assets/js/plugins/scrollup.js"></script>
<script src="/assets/js/plugins/jquery.zoom.min.js"></script>
<script src="/assets/js/plugins/venobox.min.js"></script>
<script src="/assets/js/plugins/ajax-mail.js"></script>

<!-- Use the minified version files listed below for better performance and remove the files listed above -->
<!-- <script src="assets/js/vendor/vendor.min.js"></script>
<script src="assets/js/plugins/plugins.min.js"></script> -->

<!-- Main Js -->
<script src="/assets/js/main.js"></script>

<script>
    var qnt=1;

    function getqnt(){
        qnt = document.getElementById("qtybutton").value;


    }

    function getquantity(){
        return qnt;
    }

    $( ".add-to-cart" ).click(function() {

        var itemid=$(this).attr("itemid");
        var cbtn=$(this);
        var itemqnt=$(this).attr('qnt')



        $.get("/multipleaddtocart/"+itemid+"/"+qnt, function(data){
            // Display the returned data in browser
            cbtn.animate({
                opacity: 0.25,
                left: "+=5000",
                top: "-=5000",
                height: "toggle"
            }, 50, function() {
                // Animation complete.
            });
            $('#cartCount').html(data);
        });
    });
</script>
@yield('js')
</body>

</html>
