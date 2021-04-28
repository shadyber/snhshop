<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="/rs-plugin/css/settings.css" media="screen" />

    <!-- Bootstrap Core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="/css/ionicons.min.css" rel="stylesheet">
    <link href="/css/main.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/responsive.css" rel="stylesheet">
    <link href="/font/flaticon.css" rel="stylesheet">

    <!-- JavaScripts -->
    <script src="/js/modernizr.js"></script>

    <!-- Online Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Merriweather:300,400,700,900|Poppins:300,400,500,600,700|Montserrat:300,400,500,600,700,800" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="app">


<!-- LOADER -->
<div id="loader">
    <div class="position-center-center">
        <div class="ldr"></div>
    </div>
</div>

<!-- Wrap -->
<div id="wrap">
@include('components.nav')

@include('components.header')
<!-- Main Layout -->
    <main class="cd-main-content">

        <!-- HOME MAIN  -->
        <section class="simple-head" data-stellar-background-ratio="0.5">
            <div class="position-center-center">
                <!-- Container Fluid -->
                <div class="container-full">
                    <!-- Header Text -->
                    <div class="text-left col-lg-8 no-padding"><span class="price"><small>$</small>299.99</span>
                        <h4>The Latest Products for 2021</h4>
                        <h1 class="extra-huge-text">look hot with 2021 style</h1>
                        <div class="text-btn"><a href="#." class="btn btn-inverse margin-top-40">SHOP NOW</a></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Content -->
        <div id="content">
@include('components.quickview')
            <section class="padding-top-100 padding-bottom-100">
                <div class="container-full">

                    <!-- Main Heading -->
                    <div class="heading text-center">
                        <h4>Best Collection Arrived</h4>
                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec faucibus maximus vehicula. </span> </div>

                    <!-- New Arrival -->
                    <div class="arrival-block">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item"> <a class="active" id="Best-tab" data-toggle="tab" href="#bst-sell" role="tab" aria-selected="true">Best Selling</a> </li>
                            <li class="nav-item"> <a id="Papular-tab" data-toggle="tab" href="#pap" role="tab" aria-selected="false">Hand Made Items</a> </li>
                            <li class="nav-item"> <a id="Top-tab" data-toggle="tab" href="#top-10" role="tab" aria-selected="false">Top 10 Items <span class="top-tgs">Specials</span></a> </li>
                        </ul>

                        <!-- Tab Content -->
                        <div class="tab-content" id="arrival-tab">

                            <!-- Best Selling  -->
                            <div class="tab-pane fade show active" id="bst-sell" role="tabpanel">
                            @foreach( \App\Models\Item::popularN(12) as $item)

                                <!-- Item -->
                                    <div class="item">
                                        <!-- Sale -->
                                        <div class="on-sale">{{$item->badge}}</div>
                                        <div class="img-ser"> <img class="img-1 lazyloaded" src="{{$item->photo}}" alt="{{$item->name}}">
                                            <img class="img-2 lazyloaded" src="{{$item->photo}}" alt="{{$item->name}}">

                                            <!-- Images
                                            <img class="img-1 lazyload" src="images/item-img-1-1.jpg" alt=""> <img class="img-2 lazyload" src="images/item-img-1-1-1.jpg" alt=""> -->
                                            <!-- Overlay  -->
                                            <div class="overlay">
                                                <div class="position-center-center"> <a class="popup-with-move-anim" href="#qck-view-shop{{$item->id}}"><i class="icon-eye"></i></a> </div>
                                                <div class="add-crt"><a href="#."><i class="icon-basket margin-right-10"></i> Add To Cart</a></div>
                                            </div>
                                        </div>
                                        <!-- Item Name -->
                                        <div class="item-name"> <a href="/item/{{$item->slug}}" class="i-tittle">{{$item->name}}</a> <span class="price"><small>$USD</small><span class="line-through">{{$item->price}}</span> <small>$USD</small>{{$item->price}}</span> <a class="deta animated fadeInRight" href="/item/{{$item->slug}}">View Detail</a> </div>
                                    </div>
                                @endforeach

                            </div>

                            <!-- Papular Items -->
                            <div class="tab-pane animated fadeInDown" id="pap" role="tabpanel">
                                <!-- Item -->
                                <div class="item">
                                    <div class="img-ser">
                                        <!-- Images -->
                                        <img class="img-1 lazyload" src="images/item-img-1-5.jpg" alt=""> <img class="img-2 lazyload" src="images/item-img-1-5-1.jpg" alt="">
                                        <!-- Overlay  -->
                                        <div class="overlay">
                                            <div class="position-center-center"> <a class="popup-with-move-anim" href="#qck-view-shop">Quick View</a> <a href="#."><i class="icon-magnifier"></i></a> </div>
                                            <div class="add-crt"><a href="#."><i class="icon-basket margin-right-10"></i> Add To Cart</a></div>
                                        </div>
                                    </div>
                                    <!-- Item Name -->
                                    <div class="item-name"> <a href="#." class="i-tittle">Mid Rise Skinny Jeans</a> <span class="price"><small>$</small>299.00</span> </div>
                                </div>

                                <!-- Item -->
                                <div class="item">

                                    <!-- Sale -->
                                    <div class="on-sale"> Sale </div>
                                    <div class="img-ser">
                                        <!-- Images -->
                                        <img class="img-1 lazyload" src="images/item-img-1-4.jpg" alt=""> <img class="img-2 lazyload" src="images/item-img-1-4-1.jpg" alt="">
                                        <!-- Overlay  -->
                                        <div class="overlay">
                                            <div class="position-center-center"> <a class="popup-with-move-anim" href="#qck-view-shop"><i class="icon-eye"></i></a> </div>
                                            <div class="add-crt"><a href="#."><i class="icon-basket margin-right-10"></i> Add To Cart</a></div>
                                        </div>
                                    </div>
                                    <!-- Item Name -->
                                    <div class="item-name"> <a href="#." class="i-tittle">Mid Rise Skinny Jeans</a> <span class="price"><small>$</small><span class="line-through">299.00</span> <small>$</small>199.00</span> <a class="deta animated fadeInRight" href="#.">View Detail</a> </div>
                                </div>

                                <!-- Item -->
                                <div class="item">
                                    <!-- Sale -->
                                    <div class="on-sale"> Sale </div>
                                    <div class="img-ser">
                                        <!-- Images -->
                                        <img class="img-1 lazyload" src="images/item-img-1-3.jpg" alt=""> <img class="img-2 lazyload" src="images/item-img-1-3-1.jpg" alt="">
                                        <!-- Overlay  -->
                                        <div class="overlay">
                                            <div class="position-center-center"> <a class="popup-with-move-anim" href="#qck-view-shop"><i class="icon-eye"></i></a> </div>
                                            <div class="add-crt"><a href="#."><i class="icon-basket margin-right-10"></i> Add To Cart</a></div>
                                        </div>
                                    </div>
                                    <!-- Item Name -->
                                    <div class="item-name"> <a href="#." class="i-tittle">Mid Rise Skinny Jeans</a> <span class="price"><small>$</small><span class="line-through">299.00</span> <small>$</small>199.00</span> <a class="deta animated fadeInRight" href="#.">View Detail</a> </div>
                                </div>

                                <!-- Item -->
                                <div class="item">
                                    <!-- Sale -->
                                    <div class="on-sale"> Sale </div>
                                    <div class="img-ser">
                                        <!-- Images -->
                                        <img class="img-1 lazyload" src="images/item-img-1-2.jpg" alt=""> <img class="img-2 lazyload" src="images/item-img-1-2-1.jpg" alt="">
                                        <!-- Overlay  -->
                                        <div class="overlay">
                                            <div class="position-center-center"> <a class="popup-with-move-anim" href="#qck-view-shop"><i class="icon-eye"></i></a> </div>
                                            <div class="add-crt"><a href="#."><i class="icon-basket margin-right-10"></i> Add To Cart</a></div>
                                        </div>
                                    </div>
                                    <!-- Item Name -->
                                    <div class="item-name"> <a href="#." class="i-tittle">Mid Rise Skinny Jeans</a> <span class="price"><small>$</small><span class="line-through">299.00</span> <small>$</small>199.00</span> <a class="deta animated fadeInRight" href="#.">View Detail</a> </div>
                                </div>

                                <!-- Item -->
                                <div class="item">
                                    <!-- Sale -->
                                    <div class="on-sale"> Sale </div>
                                    <div class="img-ser">
                                        <!-- Images -->
                                        <img class="img-1 lazyload" src="images/item-img-1-1.jpg" alt=""> <img class="img-2 lazyload" src="images/item-img-1-1-1.jpg" alt="">
                                        <!-- Overlay  -->
                                        <div class="overlay">
                                            <div class="position-center-center"> <a class="popup-with-move-anim" href="#qck-view-shop"><i class="icon-eye"></i></a> </div>
                                            <div class="add-crt"><a href="#."><i class="icon-basket margin-right-10"></i> Add To Cart</a></div>
                                        </div>
                                    </div>
                                    <!-- Item Name -->
                                    <div class="item-name"> <a href="#." class="i-tittle">Mid Rise Skinny Jeans</a> <span class="price"><small>$</small><span class="line-through">299.00</span> <small>$</small>199.00</span> <a class="deta animated fadeInRight" href="#.">View Detail</a> </div>
                                </div>
                                <!-- Item -->
                                <div class="item">
                                    <!-- Sale -->
                                    <div class="on-sale"> Sale </div>
                                    <div class="img-ser">
                                        <!-- Images -->
                                        <img class="img-1 lazyload" src="images/item-img-1-10.jpg" alt=""> <img class="img-2 lazyload" src="images/item-img-1-10-1.jpg" alt="">
                                        <!-- Overlay  -->
                                        <div class="overlay">
                                            <div class="position-center-center"> <a class="popup-with-move-anim" href="#qck-view-shop"><i class="icon-eye"></i></a> </div>
                                            <div class="add-crt"><a href="#."><i class="icon-basket margin-right-10"></i> Add To Cart</a></div>
                                        </div>
                                    </div>
                                    <!-- Item Name -->
                                    <div class="item-name"> <a href="#." class="i-tittle">Mid Rise Skinny Jeans</a> <span class="price"><small>$</small><span class="line-through">299.00</span> <small>$</small>199.00</span> <a class="deta animated fadeInRight" href="#.">View Detail</a> </div>
                                </div>

                                <!-- Item -->
                                <div class="item">
                                    <div class="img-ser">
                                        <!-- Images -->
                                        <img class="img-1 lazyload" src="images/item-img-1-9.jpg" alt=""> <img class="img-2 lazyload" src="images/item-img-1-9-1.jpg" alt="">
                                        <!-- Overlay  -->
                                        <div class="overlay">
                                            <div class="position-center-center"> <a class="popup-with-move-anim" href="#qck-view-shop"><i class="icon-eye"></i></a> </div>
                                            <div class="add-crt"><a href="#."><i class="icon-basket margin-right-10"></i> Add To Cart</a></div>
                                        </div>
                                    </div>
                                    <!-- Item Name -->
                                    <div class="item-name"> <a href="#." class="i-tittle">Mid Rise Skinny Jeans</a> <span class="price"><small>$</small><span class="line-through">299.00</span> <small>$</small>199.00</span> <a class="deta animated fadeInRight" href="#.">View Detail</a> </div>
                                </div>

                                <!-- Item -->
                                <div class="item">
                                    <!-- Sale -->
                                    <div class="on-sale"> Sale </div>
                                    <div class="img-ser">
                                        <!-- Images -->
                                        <img class="img-1 lazyload" src="images/item-img-1-8.jpg" alt=""> <img class="img-2 lazyload" src="images/item-img-1-8-1.jpg" alt="">
                                        <!-- Overlay  -->
                                        <div class="overlay">
                                            <div class="position-center-center"> <a class="popup-with-move-anim" href="#qck-view-shop"><i class="icon-eye"></i></a> </div>
                                            <div class="add-crt"><a href="#."><i class="icon-basket margin-right-10"></i> Add To Cart</a></div>
                                        </div>
                                    </div>
                                    <!-- Item Name -->
                                    <div class="item-name"> <a href="#." class="i-tittle">Mid Rise Skinny Jeans</a> <span class="price"><small>$</small><span class="line-through">299.00</span> <small>$</small>199.00</span> <a class="deta animated fadeInRight" href="#.">View Detail</a> </div>
                                </div>

                                <!-- Item -->
                                <div class="item">
                                    <div class="img-ser">
                                        <!-- Images -->
                                        <img class="img-1 lazyload" src="images/item-img-1-7.jpg" alt=""> <img class="img-2 lazyload" src="images/item-img-1-7-1.jpg" alt="">
                                        <!-- Overlay  -->
                                        <div class="overlay">
                                            <div class="position-center-center"> <a class="popup-with-move-anim" href="#qck-view-shop"><i class="icon-eye"></i></a> </div>
                                            <div class="add-crt"><a href="#."><i class="icon-basket margin-right-10"></i> Add To Cart</a></div>
                                        </div>
                                    </div>
                                    <!-- Item Name -->
                                    <div class="item-name"> <a href="#." class="i-tittle">Mid Rise Skinny Jeans</a> <span class="price"><small>$</small><span class="line-through">299.00</span> <small>$</small>199.00</span> <a class="deta animated fadeInRight" href="#.">View Detail</a> </div>
                                </div>

                                <!-- Item -->
                                <div class="item">
                                    <!-- Sale -->
                                    <div class="on-sale"> Sale </div>
                                    <div class="img-ser">
                                        <!-- Images -->
                                        <img class="img-1 lazyload" src="images/item-img-1-6.jpg" alt=""> <img class="img-2 lazyload" src="images/item-img-1-6-1.jpg" alt="">
                                        <!-- Overlay  -->
                                        <div class="overlay">
                                            <div class="position-center-center"> <a class="popup-with-move-anim" href="#qck-view-shop"><i class="icon-eye"></i></a> </div>
                                            <div class="add-crt"><a href="#."><i class="icon-basket margin-right-10"></i> Add To Cart</a></div>
                                        </div>
                                    </div>
                                    <!-- Item Name -->
                                    <div class="item-name"> <a href="#." class="i-tittle">Mid Rise Skinny Jeans</a> <span class="price"><small>$</small><span class="line-through">299.00</span> <small>$</small>199.00</span> <a class="deta animated fadeInRight" href="#.">View Detail</a> </div>
                                </div>
                            </div>

                            <!-- Top 10 Items -->
                            <div class="tab-pane fade" id="top-10" role="tabpanel">

                            @foreach(\App\Models\Item::lastN(12) as $item)

                                <!-- Item -->
                                    <div class="item">
                                        <div class="img-ser">
                                            <!-- Images -->
                                            <img class="img-1 lazyload" src="{{$item->photo}}" alt="">
                                            <img class="img-2 lazyload" src="{{$item->photo}}" alt="{{$item->name}}">
                                            <!-- Overlay  -->
                                            <div class="overlay">
                                                <div class="position-center-center"> <a class="popup-with-move-anim" href="#qck-view-shop"><i class="icon-eye"></i></a> </div>
                                                <div class="add-crt"><a href="#."><i class="icon-basket margin-right-10"></i> Add To Cart</a></div>
                                            </div>
                                        </div>
                                        <!-- Item Name -->
                                        <div class="item-name"> <a href="#." class="i-tittle">Mid Rise Skinny Jeans</a> <span class="price"><small>$</small><span class="line-through">299.00</span> <small>$</small>199.00</span> <a class="deta animated fadeInRight" href="#.">View Detail</a> </div>
                                    </div>

                                @endforeach


                            </div>


                        </div>
                    </div>
                </div>
            </section>


            <!-- ABOUT -->
            <section class="about">
                <div class="light-gray-bg">
                    <div class="main-page-section half_left_layout">

                        <!-- Left Background -->
                        <div class="main-half-layout half_left_layout studio-bg"></div>
                        <!-- Right Content -->
                        <div class="main-half-layout-container half_left_layout">
                            <div class="about-us-con">
                                <h3>A Brief History of the SandHShop</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas nibh dolor,
                                    efficitur eget pharetra ac, cursus sed sapien. Cras posuere ligula ut blandit
                                    varius. Nunc consectetur scelerisque felis, et volutpat massa aliquam in.<br>
                                    <br>
                                    Consectetur adipiscing elit. Maecenas nibh dolor, efficitur eget pharetra ac, cursus
                                    sed sapien.</p>
                                <h6>1950 <span></span> 1999</h6>
                                <p>Lorem ipsum dolor sit amet, efficitur eget pharetra ac, cursus sed sapien. Cras
                                    posuere ligula ut blandit varius. Nunc consectetur scelerisque felis. consectetur
                                    adipiscing elit. Maecenas nibh dolor</p>
                                <h6>2000 <span></span> 2021</h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas nibh dolor,
                                    efficitur eget pharetra ac, cursus sed sapien.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ABOUT -->
            <section class="about">
                <!-- Right Background -->
                <div class="main-page-section half_left_layout">
                    <div class="main-half-layout half_right_layout"></div>

                    <!-- Left Content -->
                    <div class="main-half-layout-container half_right_layout">
                        <div class="about-us-con">
                            <h3>Fully Customizability Options Look Beautiful in 2021</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas nibh dolor, efficitur
                                eget pharetra ac, cursus sed sapien. Cras posuere ligula ut blandit varius. </p>
                            <ul class="order-info">
                                <li><i class="flaticon-sewing-machine"> </i>
                                    <h5>Fully Customizability</h5>
                                </li>
                                <li><i class="flaticon-needle-with-thread-to-sew-clothes"> </i>
                                    <h5>Fully Hand Made</h5>
                                </li>
                                <li><i class="flaticon-suit-and-tie-outfit"> </i>
                                    <h5>Elegant Looks</h5>
                                </li>
                            </ul>
                            <a href="#." class="btn btn-inverse">Order Now</a></div>
                    </div>
                </div>
            </section>

            <!-- Popular item-img-1s -->
            <section class="dark-bg padding-top-150 padding-bottom-150">
                <div class="container-full">

                    <!-- Main Heading -->
                    <div class="heading text-center">
                        <h4>Popular Products</h4>
                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec faucibus maximus vehicula.
              Sed feugiat, tellus vel tristique posuere, diam</span></div>

                    <!-- Popular Item Slide -->
                    <div class="papular-block block-slide">

                    @foreach(\App\Models\Item::popularN(10) as $item)
                        <!-- Item -->
                            <div class="item">
                                <!-- Item img -->
                                <div class="item-img"><img class="img-1" src="{{$item->photo}}" alt="{{$item->name}}">
                                    <img
                                        class="img-2" src="{{$item->photo}}" alt="{{$item->name}}">
                                    <!-- Overlay -->
                                    <div class="overlay">
                                        <div class="position-bottom">
                                            <div class="inn"><a href="{{$item->photo}}" data-lighter><i
                                                        class="icon-magnifier"></i></a>
                                                <a href="#." data-toggle="tooltip"
                                                   data-placement="top"
                                                   title="Add To Cart"><i
                                                        class="icon-basket"></i></a>
                                                <a href="#." data-toggle="tooltip"
                                                   data-placement="top"
                                                   title="Add To WishList"><i
                                                        class="icon-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Item Name -->
                                <div class="item-name"><a href="/item/{{$item->slug}}">{{$item->title}} </a>
                                    <p>{{$item->detail}}</p>
                                </div>
                                <!-- Price -->
                                <span class="price"><small>$USD </small> {{$item->price}}</span></div>
                        @endforeach


                    </div>
                </div>
            </section>

            <!-- Shipment -->
            <section class="shipment">
                <div class="container">
                    <ul>
                        <li><i class="flaticon-shipped"></i>
                            <h4>Free Shipment Over 50$</h4>
                        </li>
                        <li><i class="flaticon-support-1"></i>
                            <h4>24/7 online Support</h4>
                        </li>
                        <li><i class="flaticon-credit-card"></i>
                            <h4>100% Secure Payment </h4>
                        </li>
                        <li><i class="flaticon-box"></i>
                            <h4>World Wide Shipment</h4>
                        </li>
                    </ul>
                </div>
            </section>

            <!-- Knowledge Share -->
            <section class="light-gray-bg padding-top-100 padding-bottom-80">
                <div class="container-full">

                    <!-- Main Heading -->
                    <div class="heading text-center">
                        <h4>Knowledge Share</h4>
                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec faucibus maximus vehicula.
              Sed feugiat, tellus vel tristique posuere,</span></div>
                    <div class="knowledge-share">
                        <ul class="row">
                        @foreach(\App\Models\Blog::lastN(3) as $blog)
                            <!-- Post 1 -->
                                <li class="col-md-4">

                                    <!-- Post Img -->
                                    <div class="img-por"><img src="{{$blog->photo}}" alt="{{$blog->title}}"></div>
                                    <article>
                                        <!-- Date And comment -->
                                        <div class="date"><span class="huge">{{$blog->created_at->format('d')}}</span>
                                            <span>{{$blog->created_at->format('M - Y')}}</span></div>
                                        <div class="com-sec">
                                            <span>By: <strong><a href="#">{{$blog->user->name}}</a></strong></span>
                                            <span>Comments: <strong><a href="/blog/{{$blog->slug}}">32</a></strong></span>
                                        </div>
                                        <div class="clearfix"></div>
                                        <a href="/blog/{{$blog->slug}}" class="b-tittle">{{$blog->title}}</a>
                                        <p>{{\Illuminate\Support\Str::substr($blog->detail,0,255)}} <a href="/blog/{{$blog->slug}}">Read more</a></p>
                                    </article>
                                </li>
                            @endforeach


                        </ul>
                    </div>
                </div>
            </section>

            <!-- About -->
            <section class="small-about">
                <div class="container-full">
                    <div class="news-letter padding-top-150 padding-bottom-150">
                        <div class="row">
                            <div class="col-lg-6">
                                <h3>We always stay with our clients and respect their business. We deliver 100% and
                                    provide instant response to help them succeed in constantly changing and challenging
                                    business world. </h3>
                                <ul class="social_icons">
                                    <li><a href="#."><i class="icon-social-facebook"></i></a></li>
                                    <li><a href="#."><i class="icon-social-twitter"></i></a></li>
                                    <li><a href="#."><i class="icon-social-tumblr"></i></a></li>
                                    <li><a href="#."><i class="icon-social-youtube"></i></a></li>
                                    <li><a href="#."><i class="icon-social-dribbble"></i></a></li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <h3>Subscribe Our Newsletter</h3>
                                <span>Phasellus lacinia fermentum bibendum. Interdum et malesuada fames ac.</span>
                                <form>
                                    <input type="email" placeholder="Enter your email address" required>
                                    <button type="submit">Subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Testimonial -->
            <section class="testimonial padding-top-60 padding-bottom-80">
                <div class="container-full"><i class="fa fa-quote-left"></i>

                    <!-- Slide -->
                    <div class="single-slide">

                        <!-- Slide -->
                        <div class="testi-in">
                            <p>Phasellus lacinia fermentum bibendum. Interdum et malesuada fames ac ante ipsum primis in
                                faucibus. Sed ullamcorper sapien lacus, eu luctus non. Nulla lacinia, eros vel fermentum
                                consectetur,</p>
                            <h5>John Smith</h5>
                            <span>rootsystem</span></div>

                        <!-- Slide -->
                        <div class="testi-in">
                            <p>Phasellus lacinia fermentum bibendum. Interdum et malesuada fames ac ante ipsum primis in
                                faucibus. Sed lacus, eu posuere odio luctus non. Nulla lacinia, eros vel fermentum
                                consectetur, </p>
                            <h5>John Smith</h5>
                            <span>rootsystem</span></div>

                        <!-- Slide -->
                        <div class="testi-in">
                            <p>Phasellus lacinia fermentum bibendum. Interdum et malesuada fames ac ante ipsum. Sed
                                ullamcorper sapien lacus, eu posuere odio luctus non. Nulla lacinia, eros vel fermentum
                                consectetur, </p>
                            <h5>John Smith</h5>
                            <span>rootsystem</span></div>
                    </div>
                </div>
            </section>

            <!-- Clients -->
            <section class="clients light-gray-bg padding-top-60 padding-bottom-80">
                <div class="container-full">
                    <div class="clients-slide">
                        <div><img src="/images/c-mg-1.png" alt=""></div>
                        <div><img src="/images/c-mg-2.png" alt=""></div>
                        <div><img src="/images/c-mg-3.png" alt=""></div>
                        <div><img src="/images/c-mg-1.png" alt=""></div>
                        <div><img src="/images/c-mg-2.png" alt=""></div>
                        <div><img src="/images/c-mg-3.png" alt=""></div>
                        <div><img src="/images/c-mg-1.png" alt=""></div>
                        <div><img src="/images/c-mg-2.png" alt=""></div>
                        <div><img src="/images/c-mg-3.png" alt=""></div>
                    </div>
                </div>
            </section>
        </div>

    @include('components.footer')
    </main>
    <!-- GO TO TOP  -->
    <a href="#" class="cd-top"><i class="fa fa-angle-up"></i></a>
    <!-- GO TO TOP End -->
</div>

<script src="/js/jquery-1.12.4.min.js"></script>
<script src="/js/popper.min.js"></script>
<script src="/js/bootstrap.min.js" ></script>
<script src="/js/own-menu.js"></script>
<script src="/js/jquery.lighter.js"></script>
<script src="/js/jquery.magnific-popup.min.js"></script>
<script src="/js/owl.carousel.min.js"></script>
<script src="/js/lazysizes.min.js"></script>
<script src="/js/main.js"></script>
</body>
</html>
