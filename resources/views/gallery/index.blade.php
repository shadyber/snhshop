@extends('layouts.app')
@section('title','Our Photo Gallery')
@section('content')

    <div class="col-lg-12 col-sm-12 col-xs-12 mb-lm-30px mb-md-30px mb-sm-30px">
        <!-- Swiper -->
        <div class="single-product-gallery mb-30px">
            <div class="single-product-slider-wrapper d-flex flex-wrap">
@foreach($photos as $photo)
                <div class="single-product-slider-item" data-aos="fade-up" data-aos-delay="200">
                    <a href="#"><img class="img-responsive" src="{{$photo->thumb}}" alt="{{$photo->title}}"></a>

                </div>
                @endforeach

               
            </div>
        </div>
    </div>
@endsection
