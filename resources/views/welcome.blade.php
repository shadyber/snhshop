<!DOCTYPE html>
<html lang="en-us">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="robots" content="index, follow" />
    <title>SandHstore | Welcome @yield ('title') </title>
    <meta name="description" content="sandhstore - HANDMADE PRODUCTS" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Add site Favicon -->
    <link rel="shortcut icon" href="/assets/images/favicon/favicon.ico" type="image/png">


    <!-- vendor css (Icon Font) -->
    <link rel="stylesheet" href="/assets/css/vendor/bootstrap.min.css" />
    <link rel="stylesheet" href="/assets/css/vendor/pe-icon-7-stroke.css" />
    <link rel="stylesheet" href="/assets/css/vendor/font.awesome.css" />

    <!-- plugins css (All Plugins Files) -->
    <link rel="stylesheet" href="/assets/css/plugins/animate.css" />
    <link rel="stylesheet" href="/assets/css/plugins/swiper-bundle.min.css" />
    <link rel="stylesheet" href="/assets/css/plugins/jquery-ui.min.css" />
    <link rel="stylesheet" href="/assets/css/plugins/nice-select.css" />
    <link rel="stylesheet" href="/assets/css/plugins/venobox.css" />

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <!-- <link rel="stylesheet" href="/assets/css/vendor/vendor.min.css" />
    <link rel="stylesheet" href="/assets/css/plugins/plugins.min.css" />
    <link rel="stylesheet" href="/assets/css/oldstyle.min.css"> -->

    <!-- Main Style -->
    <link rel="stylesheet" href="/assets/css/style.css" />

</head>

<body>

<!-- Top Bar -->

<div class="header-to-bar" style="display: none;"> HELLO EVERYONE! 25% Off All Products </div>

@include('components.header')
<!-- Hero/Intro Slider Start -->
<div class="section ">
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4" aria-label="Slide 5"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="5" aria-label="Slide 6"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="6" aria-label="Slide 7"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="/assets/images/banner/14.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="/assets/images/banner/12.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    </div>
            </div>
            <div class="carousel-item">
                <img src="/assets/images/banner/13.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                     </div>
            </div>
            <div class="carousel-item">
                <img src="/assets/images/banner/15.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                      </div>
            </div>

            <div class="carousel-item">
                <img src="/assets/images/banner/16.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                      </div>
            </div>
            <div class="carousel-item">
                <img src="/assets/images/banner/17.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                      </div>
            </div>
            <div class="carousel-item">
                <img src="/assets/images/banner/18.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                      </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<!-- Hero/Intro Slider End -->

<!-- Feature Area Srart -->
<div class="feature-area pb-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <!-- single item -->
                <div class="single-feature">
                    <div class="feature-icon">
                        <img src="/assets/images/icons/1.png" alt="">
                    </div>
                    <div class="feature-content">
                        <h4 class="title">Free Shipping</h4>
                        <span class="sub-title">Capped at $39 per order</span>
                    </div>
                </div>
            </div>
            <!-- single item -->
            <div class="col-lg-4 col-md-6 mb-md-30px mb-lm-30px mt-lm-30px">
                <div class="single-feature">
                    <div class="feature-icon">
                        <img src="/assets/images/icons/2.png" alt="">
                    </div>
                    <div class="feature-content">
                        <h4 class="title">Card Payments</h4>
                        <span class="sub-title">12 Months Installments</span>
                    </div>
                </div>
            </div>
            <!-- single item -->
            <div class="col-lg-4 col-md-6">
                <div class="single-feature">
                    <div class="feature-icon">
                        <img src="/assets/images/icons/3.png" alt="">
                    </div>
                    <div class="feature-content">
                        <h4 class="title">Easy Returns</h4>
                        <span class="sub-title">Shop With Confidence</span>
                    </div>
                </div>
                <!-- single item -->
            </div>
        </div>
    </div>
</div>
<!-- Feature Area End -->



<!-- Banner Area Start -->
<div class="banner-area pt-100px pb-100px plr-15px">
    <div class="row m-0">
        <div class="col-12 col-lg-4 mb-md-30px mb-lm-30px">
            <div class="single-banner-2">
                <img src="/assets/images/banner/1.jpg" alt="">
                <div class="item-disc">
                    <h4 class="title">Best Collection <br>
                        For Women</h4>
                    <a href="/cat/2" class="shop-link btn btn-primary ">Shop Now <i
                            class="fa fa-shopping-basket ml-5px" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-4 center-col mb-md-30px mb-lm-30px">
            <div class="single-banner-2">
                <img src="/assets/images/banner/3.jpg" alt="">
                <div class="item-disc">
                    <h4 class="title">Best Collection <br>
                        For Men</h4>
                    <a href="/cat/3" class="shop-link btn btn-primary">Shop Now <i
                            class="fa fa-shopping-basket ml-5px" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-4">
            <div class="single-banner-2">
                <img src="/assets/images/banner/2.jpg" alt="">
                <div class="item-disc">
                    <h4 class="title">New Collection <br>
                        </h4>
                    <a href="cat/1" class="shop-link btn btn-primary">Shop Now <i
                            class="fa fa-shopping-basket ml-5px" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner Area End -->

<!-- Product Area Start -->
<div class="product-area pt-100px pb-100px">
    <div class="container">
        <!-- Section Title & Tab Start -->
        <div class="row">
            <!-- Section Title Start -->
            <div class="col-lg col-md col-12">
                <div class="section-title mb-0">
                    <h2 class="title">#newarrivals</h2>
                </div>
            </div>
            <!-- Section Title End -->

            <!-- Tab Start -->
            <div class="col-lg-auto col-md-auto col-12">
                <ul class="product-tab-nav nav">
                    <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab"
                                            href="#tab-product-all">popular</a></li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tab-product-new">New</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab"
                                            href="#tab-product-bestsellers">Bestsellers</a></li>

                </ul>
            </div>
            <!-- Tab End -->
        </div>
        <!-- Section Title & Tab End -->

        <div class="row">
            <div class="col">
                <div class="tab-content top-borber">
                    <!-- 1st tab start -->
                    <div class="tab-pane fade show active" id="tab-product-all">
                        <div class="new-product-slider swiper-container slider-nav-style-1 small-nav">
                            <div class="new-product-wrapper swiper-wrapper">
                               @foreach(\App\Models\Item::popularN(8) as $item)
                                <div class="new-product-item swiper-slide">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="/item/{{$item->slug}}" class="{{$item->name}} image">
                                                <img src="{{$item->thumb}}" alt="{{$item->name}}" />
                                                <img class="hover-image" src="{{$item->thumb}}"
                                                     alt="Product" />
                                            </a>
                                            <span class="badges">
                                                    <span class="new">{{$item->badge}}</span>
                                                </span>
                                            <div class="actions">
                                                <a href="#" class="action wishlist" title="Wishlist"><i
                                                        class="pe-7s-like"></i></a>
                                                <a href="#" class="action quickview" data-link-action="quickview{{$item->id}}"
                                                   title="Quick view" data-bs-toggle="modal"
                                                   data-bs-target="#quickModal{{$item->id}}"><i class="pe-7s-search"></i></a>
                                                <a href="#" class="action compare" title="Compare"><i
                                                        class="pe-7s-refresh-2"></i></a>
                                            </div>
                                            <button title="Add To Cart" class=" add-to-cart" itemid="{{$item->id}}">Add
                                                To Cart</button>
                                        </div>
                                        <div class="content">
                                                <span class="ratings">
                                                    <span class="rating-wrap">
                                                        <span class="star" style="width: 100%"></span>
                                                    </span>
                                                    <span class="rating-num">( 5 Review )</span>
                                                </span>
                                            <h5 class="title"><a href="/item/{{$item->slug}}">{{$item->name}}
                                                </a>
                                            </h5>
                                            <span class="price">

                                                </span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach


                            </div>
                            <!-- Add Arrows -->
                            <div class="swiper-buttons">
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                    </div>
                    <!-- 1st tab end -->
                    <!-- 2nd tab start -->
                    <div class="tab-pane fade" id="tab-product-new">
                        <div class="new-product-slider swiper-container slider-nav-style-1 small-nav">
                            <div class="new-product-wrapper swiper-wrapper">
                               @foreach(\App\Models\Item::lastN(8) as $item)
                                <div class="new-product-item swiper-slide">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="/item/{{$item->slug}}" class="{{$item->name}} image">
                                                <img src="{{$item->thumb}}" alt="{{$item->name}} photo" />
                                                <img class="hover-image" src="{{$item->thumb}}"
                                                     alt="{{$item->name}}" />
                                            </a>
                                            <span class="badges">
                                                    <span class="new">{{$item->badge}}</span>
                                                </span>
                                            <div class="actions">
                                                <a href="#" class="action wishlist" title="Wishlist"><i
                                                        class="pe-7s-like"></i></a>
                                                <a href="#" class="action quickview" data-link-action="quickview{{$item->id}}"
                                                   title="Quick view" data-bs-toggle="modal"
                                                   data-bs-target="#quickModal{{$item->id}}"><i class="pe-7s-search"></i></a>

                                            </div>
                                            <button title="Add To Cart" class=" add-to-cart" itemid="{{$item->id}}">Add
                                                To Cart</button>
                                        </div>
                                        <div class="content">
                                                <span class="ratings">
                                                    <span class="rating-wrap">
                                                        <span class="star" style="width: 100%"></span>
                                                    </span>
                                                    <span class="rating-num">( 5 Review )</span>
                                                </span>
                                            <h5 class="title"><a href="/item/{{$item->slug}}">{{$item->name}}
                                                </a>
                                            </h5>
                                            <span class="price">

                                                </span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <!-- Add Arrows -->
                            <div class="swiper-buttons">
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                    </div>
                    <!-- 2nd tab end -->
                    <!-- 3rd tab start -->
                    <div class="tab-pane fade" id="tab-product-bestsellers">
                        <div class="new-product-slider swiper-container slider-nav-style-1 small-nav">
                            <div class="new-product-wrapper swiper-wrapper">
                                @foreach(\App\Models\Item::lastN(8) as $item)
                                    <div class="new-product-item swiper-slide">
                                        <!-- Single Prodect -->
                                        <div class="product">
                                            <div class="thumb">
                                                <a href="/item/{{$item->slug}}" class="{{$item->name}} image">
                                                    <img src="{{$item->thumb}}" alt="{{$item->name}} photo" />
                                                    <img class="hover-image" src="{{$item->thumb}}"
                                                         alt="{{$item->name}}" />
                                                </a>
                                                <span class="badges">
                                                    <span class="new">{{$item->badge}}</span>
                                                </span>
                                                <div class="actions">
                                                    <a href="#" class="action wishlist" title="Wishlist"><i
                                                            class="pe-7s-like"></i></a>
                                                    <a href="#" class="action quickview" data-link-action="quickview{{$item->id}}"
                                                       title="Quick view" data-bs-toggle="modal"
                                                       data-bs-target="#quickModal{{$item->id}}"><i class="pe-7s-search"></i></a>

                                                </div>
                                                <button title="Add To Cart" class=" add-to-cart" itemid="{{$item->id}}">Add
                                                    To Cart</button>
                                            </div>
                                            <div class="content">
                                                <span class="ratings">
                                                    <span class="rating-wrap">
                                                        <span class="star" style="width: 100%"></span>
                                                    </span>
                                                    <span class="rating-num">( 5 Review )</span>
                                                </span>
                                                <h5 class="title"><a href="/item/{{$item->slug}}">{{$item->name}}
                                                    </a>
                                                </h5>
                                                <span class="price">

                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <!-- Add Arrows -->
                            <div class="swiper-buttons">
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                    </div>
                    <!-- 3rd tab end -->

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product Area End -->

<!-- Deal Area Start -->
<div class="deal-area deal-bg deal-bg-2 pb-40px" data-bg-image="assets/images/deal-img/deal-bg-2.jpg">
    <div class="container ">
        <div class="row">
            <div class="col-12">
                <div class="deal-inner position-relative pt-100px pb-100px">
                    <div class="deal-wrapper">
                        <span class="category">#FASHION SHOP</span>
                        <h3 class="title">Deal Of The Day</h3>
                        <div class="deal-timing">
                            <div data-countdown="2021/05/15"></div>
                        </div>
                        <a href="/item/yn4qoorgtntwuoeduugrhxs0p6docnjk4plo8ojr" class="btn btn-lg btn-primary btn-hover-dark m-auto"> Shop
                            Now <i class="fa fa-shopping-basket ml-15px" aria-hidden="true"></i></a>
                    </div>
                    <div class="deal-image">
                        <img class="img-fluid" src="/assets/images/deal-img/woman.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Deal Area End -->




<!-- Banner Area Start -->
<div class="banner-area pt-100px pb-100px plr-15px pt-4">
    <div class="row m-0">
        <div class="col-12 col-lg-4 mb-md-30px mb-lm-30px">
            <div class="single-banner-2">
                <img src="/assets/images/banner/6.jpg" alt="">
                <div class="item-disc">
                    <h4 class="title">Shop Now</h4>
                    <a href="/item/llbxwcrzbecopspzu4iiyqz9ozt9qz0lrnwbck52-19" class="shop-link btn btn-primary ">Shop Now <i
                            class="fa fa-shopping-basket ml-5px" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-4 center-col mb-md-30px mb-lm-30px">
            <div class="single-banner-2">
                <img src="/assets/images/banner/4.jpg" alt="">
                <div class="item-disc">
                    <h4 class="title">Shop Now</h4>
                    <a href="/item/llbxwcrzbecopspzu4iiyqz9ozt9qz0lrnwbck52-17" class="shop-link btn btn-primary">Shop Now <i
                            class="fa fa-shopping-basket ml-5px" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-4">
            <div class="single-banner-2">
                <img src="/assets/images/banner/5.jpg" alt="">
                <div class="item-disc">
                    <h4 class="title">New Collection <br>
                        shop now
                    </h4>
                    <a href="/item/38zufnrwywbttysoia1qxbckqcodx7zyv5jowhjl" class="shop-link btn btn-primary">Shop Now <i
                            class="fa fa-shopping-basket ml-5px" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner Area End -->


<!--  Blog area Start -->
<div class="main-blog-area pb-100px pt-100px">
    <div class="container">
        <!-- section title start -->
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center mb-30px0px">
                    <h2 class="title">#blog</h2>
                    <p class="sub-title">share our knoledge.
                    </p>
                </div>
            </div>
        </div>
        <!-- section title start -->

        <div class="row">
            @foreach(\App\Models\Blog::lastN(3) as $blog)
            <div class="col-lg-4 mb-md-30px mb-lm-30px">
                <div class="single-blog">
                    <div class="blog-image">
                        <a href="/blog/{{$blog->slug}}"><img src="{{$blog->thumb}}"
                                                                     class="img-responsive w-100" alt="{{$blog->thumb}}"></a>
                    </div>
                    <div class="blog-text">
                        <div class="blog-athor-date">
                            <a class="blog-date height-shape" href="#"><i class="fa fa-calendar"
                                                                          aria-hidden="true"></i> 24 Aug, 2021</a>
                            <a class="blog-mosion" href="#"><i class="fa fa-commenting" aria-hidden="true"></i> 1.5
                                K</a>
                        </div>
                        <h5 class="blog-heading"><a class="blog-heading-link"
                                                    href="/blog/{{$blog->slug}}">{{$blog->title}}</a></h5>

                        <a href="/blog/{{$blog->slug}}" class="btn btn-primary blog-btn"> Read More<i
                                class="fa fa-arrow-right ml-5px" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <!-- End single blog -->
            @endforeach
        </div>
    </div>
</div>
<!--  Blog area End -->
@include('components.footer')

<!-- Global Vendor, plugins JS -->

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
<!-- <script src="/assets/js/vendor/vendor.min.js"></script>
    <script src="/assets/js/plugins/plugins.min.js"></script> -->

<!-- Main Js -->
<script src="/assets/js/main.js"></script>
<script>

    var qnt=1;
    function getqnt(){
        qnt = document.getElementById("qtybutton").value;


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
</body>

</html>
