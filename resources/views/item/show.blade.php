@extends('layouts.app')
@section('content')
    <section class=" padding-top-100 padding-bottom-100">
        <div class="container">

            <!-- SHOP DETAIL -->
            <div class="shop-detail">
                <div class="row">

                    <!-- Popular Images Slider -->
                    <div class="col-md-7">

                        <!-- Images Slider -->
                        <div class="images-slider">
                            <ul class="slides">
                                <li data-thumb="{{$item->thumb}}" class="" data-thumb-alt="" style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;">
                                    <img class="img-responsive" src="{{$item->photo}}" alt="" draggable="false">
                                </li>
                                @foreach($item->itemPhotos as $photo)
                                <li data-thumb="{{$photo->thumb}}" data-thumb-alt="" style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;">
                                    <img class="img-responsive" src="{{$photo->photo}}" alt="" draggable="false">
                                </li>
                                @endforeach

                            </ul>

                            <ul class="flex-direction-nav">
                                <li class="flex-nav-prev">
                                    <a class="flex-prev" href="#">Previous</a></li>
                                <li class="flex-nav-next"><a class="flex-next" href="#">Next</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- COntent -->
                    <div class="col-md-5">
                        <h4>{{$item->name}}</h4>
                        <div class="rating-strs"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></div>
                        <span class="price"><small>$</small>{{$item->price}}</span>
                        <ul class="item-owner">
                            <li>Brand:<span> SANDShop</span></li>
                            <li>Category:<span> <a href="#">{{$item->category_id}}</a></span></li>
                        </ul>

                        <!-- Item Detail -->

                        <p>{{$item->detail}}</p>

                        <!-- Short By -->
                        <div class="some-info">
                            <ul class="row margin-top-30">
                                <li class="col-md-6">

                                    <!-- Quantity -->
                                    <div class="quinty">
                                        <button type="button" class="quantity-left-minus" data-type="minus" data-field=""> <span>-</span> </button>
                                        <input type="number" id="quantity" name="quantity" class="form-control input-number" value="1">
                                        <button type="button" class="quantity-right-plus" data-type="plus" data-field=""> <span>+</span> </button>
                                    </div>
                                </li>

                                <!-- ADD TO CART -->
                                <li class="col-md-6"> <a href="#." class="btn">ADD TO CART</a> </li>

                                <!-- LIKE -->
                                <li class="col-md-6"> <a href="#." class="like-us"><i class="icon-heart"></i> ADD TO WISHLIST </a> </li>
                            </ul>

                            <!-- INFOMATION -->
                            <div class="inner-info">
                                <h5>Share this item with your friends</h5>
                                <!-- Social Icons -->
                                <ul class="social_icons">
                                    <li><a href="#."><i class="icon-social-facebook"></i></a></li>
                                    <li><a href="#."><i class="icon-social-twitter"></i></a></li>
                                    <li><a href="#."><i class="icon-social-tumblr"></i></a></li>
                                    <li><a href="#."><i class="icon-social-youtube"></i></a></li>
                                    <li><a href="#."><i class="icon-social-dribbble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
