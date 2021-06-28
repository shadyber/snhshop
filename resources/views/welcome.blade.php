<!DOCTYPE html>
<html lang="en-us">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="robots" content="index, follow" />
    <title>sandhstore | Welcome @yield ('title') </title>
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
    <link rel="stylesheet" href="/assets/css/style.min.css"> -->

    <!-- Main Style -->
    <link rel="stylesheet" href="/assets/css/style.css" />

</head>

<body>

<!-- Top Bar -->

<div class="header-to-bar" style="display: none;"> HELLO EVERYONE! 25% Off All Products </div>

@include('components.header')
<!-- Hero/Intro Slider Start -->
<div class="section ">
    <div class="hero-slider swiper-container slider-nav-style-1 slider-dot-style-1">
        <!-- Hero slider Active -->
        <div class="swiper-wrapper">
            <!-- Single slider item -->
            <div class="hero-slide-item-2 slider-height swiper-slide d-flex bg-color1">
                <div class="container align-self-center">
                    <div class="row">
                        <div class="col-xl-6 col-lg-5 col-md-5 col-sm-5 align-self-center sm-center-view">
                            <div class="hero-slide-content hero-slide-content-2 slider-animated-1">
                                <span class="category">Sale 45% Off</span>
                                <h2 class="title-1">Exclusive New<br> Offer 2021</h2>
                                <a href="shop-left-sidebar.html" class="btn btn-lg btn-primary btn-hover-dark"> Shop
                                    Now <i class="fa fa-shopping-basket ml-15px" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div
                            class="col-xl-6 col-lg-7 col-md-7 col-sm-7 d-flex justify-content-center position-relative">
                            <div class="show-case">
                                <div class="hero-slide-image">
                                    <img src="/assets/images/slider-image/slider-2-1.png" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single slider item -->
            <div class="hero-slide-item-2 slider-height swiper-slide d-flex bg-color2">
                <div class="container align-self-center">
                    <div class="row">
                        <div class="col-xl-6 col-lg-5 col-md-5 col-sm-5 align-self-center sm-center-view">
                            <div class="hero-slide-content hero-slide-content-2 slider-animated-1">
                                <span class="category">Sale 45% Off</span>
                                <h2 class="title-1">Exclusive New<br> Offer 2021</h2>
                                <a href="shop-left-sidebar.html" class="btn btn-lg btn-primary btn-hover-dark"> Shop
                                    Now <i class="fa fa-shopping-basket ml-15px" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div
                            class="col-xl-6 col-lg-7 col-md-7 col-sm-7 d-flex justify-content-center position-relative">
                            <div class="show-case">
                                <div class="hero-slide-image">
                                    <img src="/assets/images/slider-image/slider-2-2.png" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination swiper-pagination-white"></div>
        <!-- Add Arrows -->
        <div class="swiper-buttons">
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</div>

<!-- Hero/Intro Slider End -->

<!-- Feature Area Srart -->
<div class="feature-area  mt-n-65px">
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

<!-- Product Area Start -->
<div class="product-area pt-100px pb-100px">
    <div class="container">
        <!-- Section Title & Tab Start -->
        <div class="row">
            <!-- Section Title Start -->
            <div class="col-12">
                <div class="section-title text-center mb-0">
                    <h2 class="title">#products</h2>
                    <!-- Tab Start -->
                    <div class="nav-center">
                        <ul class="product-tab-nav nav align-items-center justify-content-center">
                            <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab"
                                                    href="#tab-product--all">Universal</a></li>

                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab"
                                                    href="#tab-product-men">Men</a></li>
                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab"
                                                    href="#tab-product-women">Women</a></li>

                        </ul>
                    </div>
                    <!-- Tab End -->
                </div>
            </div>
            <!-- Section Title End -->
        </div>
        <!-- Section Title & Tab End -->

        <div class="row">
            <div class="col">
                <div class="tab-content mb-30px0px">
                    <!-- 1st tab start -->
                    <div class="tab-pane fade show active" id="tab-product--all">
                        <div class="row">
                          @foreach(\App\Models\Item::universalN(8) as $item)
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                 data-aos-delay="200">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a href="/item/{{$item->slug}}" class="image">
                                            <img src="{{$item->thumb}}" alt="{{$item->name}}" />
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

                                        <button type="submit" title="Add To Cart" class=" add-to-cart" itemid="{{$item->id}}">Add
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
                                                <span class="new">$ {{$item->price}}</span>
                                            </span>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                    <!-- 1st tab end -->

                    <!-- 3rd tab start -->
                    <div class="tab-pane fade" id="tab-product-men">
                        <div class="row">
                            @foreach(\App\Models\Item::mensN(8) as $item)
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                 data-aos-delay="200">
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
                                                <span class="new">$ {{$item->price}}</span>
                                            </span>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- 3rd tab end -->
                    <!-- 4th tab start -->
                    <div class="tab-pane fade" id="tab-product-women">
                        <div class="row">
                        @foreach(\App\Models\Item::womensN(8) as $item)
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                 data-aos-delay="200">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a href="/item/{{$item->slug}}" class="{{$item->name}} image">
                                            <img src="{{$item->thumb}}" alt="{{$item->name}}" />
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
                                                <span class="new">$ {{$item->price}}</span>
                                            </span>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- 4th tab end -->

                </div>
                <a href="/item" class="btn btn-lg btn-primary btn-hover-dark "> Load More <i
                        class="fa fa-arrow-right ml-15px" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- Product Area End -->

<!-- Banner Area Start -->
<div class="banner-area pt-100px pb-100px plr-15px">
    <div class="row m-0">
        <div class="col-12 col-lg-4 mb-md-30px mb-lm-30px">
            <div class="single-banner-2">
                <img src="/assets/images/banner/4.jpg" alt="">
                <div class="item-disc">
                    <h4 class="title">Best Collection <br>
                        For Women</h4>
                    <a href="shop-left-sidebar.html" class="shop-link btn btn-primary ">Shop Now <i
                            class="fa fa-shopping-basket ml-5px" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-4 center-col mb-md-30px mb-lm-30px">
            <div class="single-banner-2">
                <img src="/assets/images/banner/5.jpg" alt="">
                <div class="item-disc">
                    <h4 class="title">Best Collection <br>
                        For Men</h4>
                    <a href="shop-left-sidebar.html" class="shop-link btn btn-primary">Shop Now <i
                            class="fa fa-shopping-basket ml-5px" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-4">
            <div class="single-banner-2">
                <img src="/assets/images/banner/6.jpg" alt="">
                <div class="item-disc">
                    <h4 class="title">New Collection <br>
                        For Kids</h4>
                    <a href="shop-left-sidebar.html" class="shop-link btn btn-primary">Shop Now <i
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
                                                <a href="compare.html" class="action compare" title="Compare"><i
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
                                                    <span class="new">$ {{$item->price}}</span>
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
                                                    <span class="new">$ {{$item->price}}</span>
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
                                                    <span class="new">$ {{$item->price}}</span>
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
<div class="deal-area deal-bg deal-bg-2" data-bg-image="assets/images/deal-img/deal-bg-2.jpg">
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
                        <a href="/item" class="btn btn-lg btn-primary btn-hover-dark m-auto"> Shop
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
    $( ".add-to-cart" ).click(function() {

var itemid=$(this).attr("itemid")
        var cbtn=$(this);
        $.get("/addtocart/"+itemid, function(data){
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
