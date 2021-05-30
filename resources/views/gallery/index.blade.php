@extends('layouts.app')
@section('title','Our Photo Gallery')
@section('content')

    <div class="col-lg-12 col-sm-12 col-xs-12 mb-lm-30px mb-md-30px mb-sm-30px">
        <!-- Swiper -->
        <div class="single-product-gallery mb-30px">
            <div class="single-product-slider-wrapper d-flex flex-wrap">
                <div class="single-product-slider-item" data-aos="fade-up" data-aos-delay="200">
                    <a href="#"><img class="img-responsive" src="/assets/images/product-image/1.jpg" alt="slider-item-img"></a>
                </div>
                <div class="single-product-slider-item swiper-slide" data-aos="fade-up" data-aos-delay="400">
                    <a href="#"><img class="img-responsive" src="/assets/images/product-image/2.jpg" alt="slider-item-img"></a>
                </div>
                <div class="single-product-slider-item swiper-slide" data-aos="fade-up" data-aos-delay="200">
                    <a href="#"><img class="img-responsive" src="/assets/images/product-image/3.jpg" alt="slider-item-img"></a>
                </div>
                <div class="single-product-slider-item swiper-slide" data-aos="fade-up" data-aos-delay="400">
                    <a href="#"><img class="img-responsive" src="/assets/images/product-image/4.jpg" alt="slider-item-img"></a>
                </div>
            </div>
        </div>
    </div>
@endsection
