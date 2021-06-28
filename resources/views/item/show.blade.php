@extends('layouts.app')

@section('title',$item->name.' Detail')
@section('content')
    <section>
        <div class="product-details-area pt-100px pb-100px">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-12 col-xs-12 mb-lm-30px mb-md-30px mb-sm-30px">
                        <!-- Swiper -->
                        <div class="swiper-container zoom-top swiper-container-initialized swiper-container-horizontal">
                            <div class="swiper-wrapper" id="swiper-wrapper-84815180fc86d4d3" aria-live="polite"
                                 style="transform: translate3d(0px, 0px, 0px);">

                                <div class="swiper-slide zoom-image-hover swiper-slide-active" role="group"
                                     aria-label="1 / 4" style="width: 456px; position: relative; overflow: hidden;">
                                    <img class="img-responsive m-auto"
                                         src="{{$item->thumb}}" alt="">
                                    <img role="presentation" alt=""
                                         src="{{$item->thumb}}"
                                         class="zoomImg"
                                         style="position: absolute; top: -100.128px; left: -27.8246px; opacity: 1; width: 560px; height: 694px; border: none; max-width: none; max-height: none;">
                                </div>
                                @foreach($item->itemPhotos as $photo)
                                <div class="swiper-slide zoom-image-hover swiper-slide-next" role="group"
                                     aria-label="2 / 4" style="width: 456px; position: relative; overflow: hidden;">
                                    <img class="img-responsive m-auto"
                                         src="{{$photo->thumb}}" alt="">
                                    <img role="presentation" alt=""
                                         src="{{$photo->photo}}"
                                         class="zoomImg"
                                         style="position: absolute; top: 0px; left: 0px; opacity: 0; width: 560px; height: 694px; border: none; max-width: none; max-height: none;">
                                </div>

                                @endforeach
                            </div>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                        <div
                            class="swiper-container zoom-thumbs mt-3 mb-3 swiper-container-initialized swiper-container-horizontal swiper-container-free-mode swiper-container-thumbs">
                            <div class="swiper-wrapper" id="swiper-wrapper-e34dbd7839f59443" aria-live="polite"
                                 style="transform: translate3d(0px, 0px, 0px);">

                                <div class="swiper-slide swiper-slide-visible swiper-slide-active swiper-slide-thumb-active"
                                    role="group" aria-label="1 / 4" style="width: 101px; margin-right: 10px;">
                                    <img class="img-responsive m-auto"
                                         src="{{$item->photo}}" alt="">
                                </div>

                                @foreach($item->itemPhotos as $photo)
                                 <div class="swiper-slide swiper-slide-visible swiper-slide-next" role="group"
                                     aria-label="2 / 4" style="width: 101px; margin-right: 10px;">
                                    <img class="img-responsive m-auto"
                                         src="{{$photo->photo}}" alt="">
                                </div>

                                @endforeach
                            </div>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-delay="200">
                        <div class="product-details-content quickview-content">
                            <h2>{{$item->name}}</h2>
                            <div class="pricing-meta">
                                <ul>
                                    <li class="old-price not-cut">$ {{$item->price}}</li>
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
                                        <li><a class="active-color {{$item->color}}" href="#"></a></li>

                                    </ul>
                                </div>
                            </div>
                            <!-- Sidebar single item -->
                            <div class="pro-details-size-info d-flex align-items-center">
                                <span>Size</span>
                                <div class="pro-details-size">
                                    <ul>
                                        <li><a class="active-size gray" href="#">{{$item->size}}</a></li>

                                    </ul>
                                </div>
                            </div>
                            <p class="m-0">{{$item->detail}} </p>
                            <div class="pro-details-quality">
                                <div class="cart-plus-minus">
                                    <div class="dec qtybutton">-</div>
                                    <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">
                                    <div class="inc qtybutton">+</div>
                                </div>
                                <div class="pro-details-cart">
                                    <button class="add-to-cart add-cart" href="#" itemid="{{$item->id}}" > Add To
                                        Cart
                                    </button>
                                </div>
                                <div class="pro-details-compare-wishlist pro-details-wishlist ">
                                    <a href="#"><i class="pe-7s-like"></i></a>
                                </div>

                            </div>
                            <div class="pro-details-sku-info pro-details-same-style  d-flex">
                                <span>SKU: {{$item->slug}} </span>
                                <ul class="d-flex">
                                    <li>
                                        <a href="#">{{$item->size}}</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="pro-details-categories-info pro-details-same-style d-flex">
                                <span>Categories: {{$item->category}} </span>
                                <ul class="d-flex">
                                    <li>
                                        <a href="#">Fashion.</a>
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
