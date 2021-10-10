<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <meta name="robots" content="index, follow"/>
    <title>sandhstore | ipsa Detail</title>
    <meta name="description" content="sandhstore"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes"/>

    <!-- Add site Favicon -->
    <link rel="shortcut icon" href="/assets/images/favicon/favicon.ico" type="image/png">
    <!-- Styles -->
    <link href="http://sandhstore.test/css/app.css" rel="stylesheet">

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
    <style>
        .cont{
            position: absolute;
            top:0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .swiper-wrapper{
            width:40px;
            align-content: center;
            justify-content: center;

        }
    </style>
</head>

<body>
<div class="cont col-md-12 col-sm-12">



            <div class="swiper-container zoom-top">
                    <div class="swiper-wrapper">

                        @foreach($photos as $photo)

                        <div class="swiper-slide zoom-image-hover">
                            <img class="img-responsive m-auto" src="{{$photo->thumb}}"
                                 alt="{{$photo->title}}">
                        </div>
                        @endforeach

                    </div>
                </div>
                <div class="swiper-container zoom-thumbs">
                    <div class="swiper-wrapper">
                        @foreach($photos as $photo)
                        <div class="swiper-slide flex" width="20px">
                            <img src="{{$photo->thumb}}"   class="rounded-circle" width="32px" >
                        </div>
                        @endforeach
                    </div>
                </div>
</div>


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

</body>

</html>
