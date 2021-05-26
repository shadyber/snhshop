@extends('layouts.app')

@section('title',$item->name.' Detail')
@section('content')


    <section>
        <div class="product-details-area pb-100px">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-12 col-xs-12 mb-lm-30px mb-md-30px mb-sm-30px">
                        <!-- Swiper -->
                        <div class="swiper-container zoom-top swiper-container-initialized swiper-container-horizontal">
                            <div class="swiper-wrapper" id="swiper-wrapper-0d5525b2db087d67" aria-live="polite" style="transform: translate3d(0px, 0px, 0px);">
                                <div class="swiper-slide zoom-image-hover swiper-slide-active" role="group" aria-label="1 / 4" style="width: 456px; position: relative; overflow: hidden;">
                                    <img class="img-responsive m-auto" src="/assets/ images/product-image/zoom-image/1.jpg" alt="">
                                    <img role="presentation" alt="" src="http://localhost/fashions/assets/images/product-image/zoom-image/1.jpg" class="zoomImg" style="position: absolute; top: -67.5122px; left: -1.59649px; opacity: 0; width: 560px; height: 694px; border: none; max-width: none; max-height: none;"></div>
                                <div class="swiper-slide zoom-image-hover swiper-slide-next" role="group" aria-label="2 / 4" style="width: 456px; position: relative; overflow: hidden;">
                                    <img class="img-responsive m-auto" src="/assets/images/product-image/zoom-image/2.jpg" alt="">
                                    <img role="presentation" alt="" src="http://localhost/fashions/assets/images/product-image/zoom-image/2.jpg" class="zoomImg" style="position: absolute; top: 0px; left: 0px; opacity: 0; width: 560px; height: 694px; border: none; max-width: none; max-height: none;"></div>
                                <div class="swiper-slide zoom-image-hover" role="group" aria-label="3 / 4" style="width: 456px; position: relative; overflow: hidden;">
                                    <img class="img-responsive m-auto" src="/assets/images/product-image/zoom-image/3.jpg" alt="">
                                    <img role="presentation" alt="" src="http://localhost/fashions/assets/images/product-image/zoom-image/3.jpg" class="zoomImg" style="position: absolute; top: 0px; left: 0px; opacity: 0; width: 560px; height: 694px; border: none; max-width: none; max-height: none;"></div>
                                <div class="swiper-slide zoom-image-hover" role="group" aria-label="4 / 4" style="width: 456px; position: relative; overflow: hidden;">
                                    <img class="img-responsive m-auto" src="/assets/images/product-image/zoom-image/4.jpg" alt="">
                                    <img role="presentation" alt="" src="http://localhost/fashions/assets/images/product-image/zoom-image/4.jpg" class="zoomImg" style="position: absolute; top: 0px; left: 0px; opacity: 0; width: 560px; height: 694px; border: none; max-width: none; max-height: none;"></div>
                            </div>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                        <div class="swiper-container zoom-thumbs mt-3 mb-3 swiper-container-initialized swiper-container-horizontal swiper-container-free-mode swiper-container-thumbs">
                            <div class="swiper-wrapper" id="swiper-wrapper-bd235510a3f81096ca" aria-live="polite" style="transform: translate3d(0px, 0px, 0px);">
                                <div class="swiper-slide swiper-slide-visible swiper-slide-active swiper-slide-thumb-active" role="group" aria-label="1 / 4" style="width: 101px; margin-right: 10px;">
                                    <img class="img-responsive m-auto" src="/assets/images/product-image/small-image/1.jpg" alt="">
                                </div>
                                <div class="swiper-slide swiper-slide-visible swiper-slide-next" role="group" aria-label="2 / 4" style="width: 101px; margin-right: 10px;">
                                    <img class="img-responsive m-auto" src="/assets/images/product-image/small-image/2.jpg" alt="">
                                </div>
                                <div class="swiper-slide swiper-slide-visible" role="group" aria-label="3 / 4" style="width: 101px; margin-right: 10px;">
                                    <img class="img-responsive m-auto" src="/assets/images/product-image/small-image/3.jpg" alt="">
                                </div>
                                <div class="swiper-slide swiper-slide-visible" role="group" aria-label="4 / 4" style="width: 101px; margin-right: 10px;">
                                    <img class="img-responsive m-auto" src="/assets/images/product-image/small-image/4.jpg" alt="">
                                </div>
                            </div>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-delay="200">
                        <div class="product-details-content quickview-content">
                            <h2>Ardene Microfiber Tights</h2>
                            <div class="pricing-meta">
                                <ul>
                                    <li class="old-price not-cut">$18.90</li>
                                </ul>
                            </div>
                            <div class="pro-details-rating-wrap">
                                <div class="rating-product">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <span class="read-review"><a class="reviews" href="#">( 5 Customer Review )</a></span>
                            </div>
                            <div class="pro-details-color-info d-flex align-items-center">
                                <span>Color</span>
                                <div class="pro-details-color">
                                    <ul>
                                        <li><a class="active-color yellow" href="#"></a></li>
                                        <li><a class="black" href="#"></a></li>
                                        <li><a class="red" href="#"></a></li>
                                        <li><a class="pink" href="#"></a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Sidebar single item -->
                            <div class="pro-details-size-info d-flex align-items-center">
                                <span>Size</span>
                                <div class="pro-details-size">
                                    <ul>
                                        <li><a class="active-size gray" href="#">S</a></li>
                                        <li><a class="gray" href="#">M</a></li>
                                        <li><a class="gray" href="#">L</a></li>
                                        <li><a class="gray" href="#">XL</a></li>
                                    </ul>
                                </div>
                            </div>
                            <p class="m-0">Lorem ipsum dolor sit amet, consect adipisicing elit, sed do eiusmod tempor incidi ut labore
                                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercita ullamco laboris nisi
                                ut aliquip ex ea commodo </p>
                            <div class="pro-details-quality">
                                <div class="cart-plus-minus"><div class="dec qtybutton">-</div>
                                    <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">
                                    <div class="inc qtybutton">+</div></div>
                                <div class="pro-details-cart">
                                    <button class="add-cart" href="#"> Add To
                                        Cart</button>
                                </div>
                                <div class="pro-details-compare-wishlist pro-details-wishlist ">
                                    <a href="wishlist.html"><i class="pe-7s-like"></i></a>
                                </div>
                                <div class="pro-details-compare-wishlist pro-details-compare">
                                    <a href="compare.html"><i class="pe-7s-refresh-2"></i></a>
                                </div>
                            </div>
                            <div class="pro-details-sku-info pro-details-same-style  d-flex">
                                <span>SKU: </span>
                                <ul class="d-flex">
                                    <li>
                                        <a href="#">Ch-256xl</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="pro-details-categories-info pro-details-same-style d-flex">
                                <span>Categories: </span>
                                <ul class="d-flex">
                                    <li>
                                        <a href="#">Fashion.</a>
                                    </li>
                                    <li>
                                        <a href="#">eCommerce</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="pro-details-social-info pro-details-same-style d-flex">
                                <span>Share: </span>
                                <ul class="d-flex">
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
                </div>
            </div>
        </div>
    </section>

@endsection
