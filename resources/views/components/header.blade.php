<!-- Top Bar -->
<!-- Header Area Start -->
<header>
    <div class="header-main sticky-nav ">
        <div class="container position-relative">
            <div class="row">
                <div class="col-auto align-self-center">
                    <div class="header-logo">
                        <a href="/"><img src="/assets/images/logo/logo.png" alt="SandHshop logo" /></a>
                    </div>
                </div>
                <div class="col align-self-center d-none d-lg-block">
                    <div class="main-menu">
                        <ul>
                            <li><a href="/">Home</a>

                            </li>
                            <li class="dropdown position-static"><a href="#">Shop <i
                                        class="pe-7s-angle-down"></i></a>
                                <ul class="mega-menu d-block">
                                    <li class="d-flex">
                                        <ul class="d-block">

                                            <li class="title"><a href="#">Womens Collection</a></li>
                                            @foreach(\App\Models\Item::womensN(7) as $item)
                                                <li><a href="/item/{{$item->slug}}">{{$item->name}}</a></li>

                                            @endforeach
                                        </ul>
                                        <ul class="d-block">
                                            <li class="title"><a href="#">Mens Collection</a></li>
                                            @foreach(\App\Models\Item::mensN(7) as $item)
                                                <li><a href="/item/{{$item->slug}}">{{$item->name}}</a></li>

                                            @endforeach        </ul>
                                        <ul class="d-block">
                                            <li class="title"><a href="#">Universal Collection</a></li>
                                            @foreach(\App\Models\Item::universalN(5) as $item)
                                            <li><a href="/item/{{$item->slug}}">{{$item->name}}</a></li>

                                            @endforeach
                                        </ul>
                                        <ul class="d-block">
                                            <li class="title"><a href="#">Latest Products</a></li>
                                           @foreach(\App\Models\Item::lastN(7) as $item)
                                            <li><a href="/item/{{$item->slug}}">{{$item->name}}</a></li>
                                         @endforeach

                                        </ul>
                                        <ul class="d-block">
                                            <li class="title"><a href="#">Popular Products</a></li>
                                         @foreach(\App\Models\Item::popularN(4) as $item)
                                                 <li><a href="/item/{{$item->slug}}">{{$item->name}}</a></li>
                                            @endforeach

                                        </ul>
                                    </li>
                                    <li>

                                        <ul class="menu-banner w-100">
                                            <li>
                                                <a class="p-0" href="shop-left-sidebar.html"><img
                                                        class="img-responsive w-100"
                                                        src="/assets/images/banner/7.jpg" alt=""></a>
                                            </li>
                                            <li>
                                                <a class="p-0" href="shop-left-sidebar.html"><img
                                                        class="img-responsive w-100"
                                                        src="/assets/images/banner/8.jpg" alt=""></a>
                                            </li>
                                            <li>
                                                <a class="p-0" href="shop-left-sidebar.html"><img
                                                        class="img-responsive w-100"
                                                        src="/assets/images/banner/9.jpg" alt=""></a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown "><a href="#">Blogs <i class="pe-7s-angle-down"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="/blog">All Bbogs</a></li>
                                    @foreach(\App\Models\Blog::lastN(8) as $blog)
                                        <li><a href="/blog/{{$blog->slug}}">{{$blog->title}}</a></li>
                                        @endforeach

                                </ul>
                            </li>
                            <li><a href="/gallery">Gallery</a></li>
                            <li><a href="/about">About us</a></li>
                            <li><a href="/contact">Contact us</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Header Action Start -->
                <div class="col col-lg-auto align-self-center pl-0">
                    <div class="header-actions">
                        <a href="/login" class="header-action-btn login-btn" data-bs-toggle="modal"
                           data-bs-target="#loginActive">Sign In</a>
                        <!-- Single Wedge Start -->
                        <a href="#" class="header-action-btn" data-bs-toggle="modal" data-bs-target="#searchActive">
                            <i class="pe-7s-search"></i>
                        </a>
                        <!-- Single Wedge End -->
                        <!-- Single Wedge Start -->
                        <a href="#offcanvas-wishlist" class="header-action-btn offcanvas-toggle">
                            <i class="pe-7s-like"></i>
                        </a>
                        <!-- Single Wedge End -->
                        <a href="#offcanvas-cart"
                           class="header-action-btn header-action-btn-cart offcanvas-toggle pr-0">
                            <i class="pe-7s-shopbag"></i>
                            <span class="header-action-num" id="cartCount">{{\Illuminate\Support\Facades\Session::get('cart')? count(\Illuminate\Support\Facades\Session::get('cart')) : '0'}}</span>
                            <!-- <span class="cart-amount">€30.00</span> -->
                        </a>
                        <a href="#offcanvas-mobile-menu"
                           class="header-action-btn header-action-btn-menu offcanvas-toggle d-lg-none">
                            <i class="pe-7s-menu"></i>
                        </a>
                    </div>
                    <!-- Header Action End -->
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header Area End -->
<div class="offcanvas-overlay"></div>

<!-- OffCanvas Wishlist Start -->
<div id="offcanvas-wishlist" class="offcanvas offcanvas-wishlist">
    <div class="inner">
        <div class="head">
            <span class="title">Wishlist</span>
            <button class="offcanvas-close">×</button>
        </div>
        <div class="body customScroll">
            <ul class="minicart-product-list">
                <li>
                    <a href="single-product.html" class="image"><img src="/assets/images/product-image/1.jpg"
                                                                     alt="Cart product Image"></a>
                    <div class="content">
                        <a href="single-product.html" class="title">Women's Elizabeth Coat</a>
                        <span class="quantity-price">1 x <span class="amount">$21.86</span></span>
                        <a href="#" class="remove">×</a>
                    </div>
                </li>
                <li>
                    <a href="single-product.html" class="image"><img src="/assets/images/product-image/2.jpg"
                                                                     alt="Cart product Image"></a>
                    <div class="content">
                        <a href="single-product.html" class="title">Long sleeve knee length</a>
                        <span class="quantity-price">1 x <span class="amount">$13.28</span></span>
                        <a href="#" class="remove">×</a>
                    </div>
                </li>
                <li>
                    <a href="single-product.html" class="image"><img src="/assets/images/product-image/3.jpg"
                                                                     alt="Cart product Image"></a>
                    <div class="content">
                        <a href="single-product.html" class="title">Cool Man Wearing Leather</a>
                        <span class="quantity-price">1 x <span class="amount">$17.34</span></span>
                        <a href="#" class="remove">×</a>
                    </div>
                </li>
            </ul>
        </div>
        <div class="foot">
            <div class="buttons">
                <a href="wishlist.html" class="btn btn-dark btn-hover-primary mt-30px">view wishlist</a>
            </div>
        </div>
    </div>
</div>
<!-- OffCanvas Wishlist End -->
<!-- OffCanvas Cart Start -->
<div id="offcanvas-cart" class="offcanvas offcanvas-cart">
    <div class="inner">
        <div class="head">
            <span class="title">Cart</span>
            <button class="offcanvas-close">×</button>
        </div>
        <div class="body customScroll">
            <ul class="minicart-product-list">
               @foreach(\App\Models\Cart::myCart() as $cart)

                <li>
                    <a href="/item/{{$cart['slug']}}" class="image"><img src="{{$cart['thumb']}}"
                                                                     alt="{{$cart['name']}}"></a>
                    <div class="content">
                        <a href="/item/{{$cart['slug']}}" class="title">{{$cart['name']}}</a>
                        <span class="quantity-price">{{$cart['quantity']}} x <span class="amount">$USD {{$cart['price']}}</span></span>
                        <a href="#" class="remove">×</a>
                    </div>
                </li>

                @endforeach

            </ul>
        </div>
        <div class="foot">
            <div class="buttons mt-30px">
                <a href="/mycart" class="btn btn-dark btn-hover-primary mb-30px">view cart</a>
                <a href="/checkout" class="btn btn-outline-dark current-btn">checkout</a>
            </div>
        </div>
    </div>
</div>
<!-- OffCanvas Cart End -->

<!-- OffCanvas Menu Start -->
<div id="offcanvas-mobile-menu" class="offcanvas offcanvas-mobile-menu">
    <button class="offcanvas-close"></button>

    <div class="inner customScroll">

        <div class="offcanvas-menu mb-4">
            <ul>
                <li><a href="/"><span class="menu-text">Home</span></a>
                </li>
                <li><a href="#"><span class="menu-text">Shop</span></a>
                    <ul class="sub-menu">
                        <li>
                            <a href="#"><span class="menu-text">Wommens Collection</span></a>
                            <ul class="sub-menu">

                                @foreach(\App\Models\Item::womensN(7) as $item)

                                <li> <a href="/item/{{$item->slug}}">-{{$item->name}}</a></li>
                                @endforeach

                            </ul>
                        </li>
                        <li>
                            <a href="#"><span class="menu-text">Mens Collection</span></a>
                            <ul class="sub-menu">

                                @foreach(\App\Models\Item::mensN(7) as $item)

                                    <li> <a href="/item/{{$item->slug}}">-{{$item->name}}</a></li>
                                @endforeach

                            </ul>
                        </li>
                        <li>
                            <a href="#"><span class="menu-text">Universal Collection</span></a>
                            <ul class="sub-menu">

                                @foreach(\App\Models\Item::universalN(7) as $item)

                                    <li> <a href="/item/{{$item->slug}}">- {{$item->name}}</a></li>
                                @endforeach

                            </ul>
                        </li>

                    </ul>
                </li>
                <li><a href="/blog"><span class="menu-text">Blog</span></a>

                </li>
                <li><a href="/about">About Us</a></li>
                <li><a href="/contact">Contact Us</a></li>
            </ul>
        </div>
        <!-- OffCanvas Menu End -->
        <div class="offcanvas-social mt-auto">
            <ul>
                <li>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-google"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-youtube"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- OffCanvas Menu End -->
