@extends('layouts.app')
@section('title',$item->name.' Detail')

@section('content')
    <!-- Product Details Area Start -->
    <div class="product-details-area pt-100px pb-100px">
        <div class="container">
            <div class="row">
                <div class="col-md-6 sm-12">
                    <div class="bg-color-red">
                        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            @foreach($item->variety as $variety)
                                <a href="#" class="  {{$loop->first ? 'active' : '' }}" id="v-pills-{{$variety->id}}-tab" data-bs-toggle="pill" data-bs-target="#v-pills-{{$variety->id}}"   role="tab" aria-controls="v-pills-{{$variety->id}}" >
                                    <img src="{{$variety->thumb}}" width="32px" height="32px" class="  rounded-circle" alt="">
                                </a>
                            @endforeach

                        </div>
                        <div class="tab-content" style="min-height:400px;z-index:99999;" id="v-pills-tabContent">
                            @foreach($item->variety as $variety)
                                <div class="tab-pane fade show {{$loop->first ? 'active' : '' }}" id="v-pills-{{$variety->id}}" role="tabpanel" aria-labelledby="v-pills-{{$variety->id}}-tab">

                                    <div id="carouselExampleIndicators{{$variety->id}}" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-indicators">
                                            @foreach(\App\Models\Verity::photos($variety->id) as $photo)

                                                <button type="button" data-bs-target="#carouselExampleIndicators{{$variety->id}}" data-bs-slide-to="{{$photo->id}}" class=" {{$loop->first ? 'active' : ''}}" aria-current="true" aria-label="{{$photo->title}}"></button>
                                            @endforeach
                                        </div>
                                        <div class="carousel-inner bg-gradient-light">
                                            @foreach(\App\Models\Verity::photos($variety->id) as $ph)


                                                <div class="carousel-item {{$loop->first ? 'active' : ''}}">
                                                    <img src="{{$ph->thumb}}" class="d-block w-100" alt="{{$ph->title}}">
                                                </div>
                                            @endforeach


                                        </div>
                                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon color-red" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                            <span class="carousel-control-next-icon color-red" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-delay="200">
                    <div class="product-details-content quickview-content right-column">
                        <h2>{{$item->name}}</h2>
                        <div class="pricing-meta">
                            <ul>
                                <li class="old-price not-cut">${{$item->price}}</li>
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
                            <span class="read-review"><a class="reviews" href="#">( Customer Review )</a></span>
                        </div>
                        <p class="mt-30px mb-0">
                            {{$item->detail}}
                        </p>
                        <div class="pro-details-quality">
                            <div class="cart-plus-minus" onclick="getqnt()">
                                <input class="cart-plus-minus-box" type="text" name="qtybutton" id="qtybutton" value="1" itemid="{{$item->id}}" />
                            </div>
                            <div class="pro-details-cart">
                                <button class="add-cart  add-to-cart" href="#"  itemid="{{$item->id}}" qnt="1"> Add To
                                    Cart</button>
                            </div>

                        </div>
                        <div class="pro-details-sku-info pro-details-same-style  d-flex">
                            <span>SKU: </span>
                            <ul class="d-flex">
                                <li>
                                    <a href="/item/{{$item->slug}}">ITEM0000{{$item->id}}</a>
                                </li>
                            </ul>
                        </div>
                        <div class="pro-details-categories-info pro-details-same-style d-flex">
                            <span>Categories: </span>
                            <ul class="d-flex">
                                <li>
                                    <a href="/cat/{{$item->Category->id}}">{{$item->Category->title}}.</a>
                                </li>

                            </ul>
                            <br>
                            <hr>
                        </div>
                        <!-- Product Configuration -->
                        <div class="product-configuration">
                            @foreach($item->variety as $verity)

                                <a href="#" id="verity{{$verity->id}}"> <img src="{{$verity->thumb}}" alt="{{$verity->title}}" width="32" height="32" class="img-profile img-thumbnail rounded-circle"></a>

                            @endforeach
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


    <!-- product details description area start -->
    <div class="description-review-area pb-100px" data-aos="fade-up" data-aos-delay="200">
        <div class="container">
            <div class="description-review-wrapper">
                <div class="description-review-topbar nav">
                    <a data-bs-toggle="tab" href="#des-details2">Information</a>
                    <a class="active" data-bs-toggle="tab" href="#des-details1">Description</a>
                    <a data-bs-toggle="tab" href="#des-details3">Reviews (0)</a>
                </div>
                <div class="tab-content description-review-bottom">
                    <div id="des-details2" class="tab-pane">
                        <div class="product-anotherinfo-wrapper text-start">
                            <ul>
                                <li><span>Weight</span> {{$item->weght}}</li>
                                <li><span>Dimensions</span>{{$item->size}}</li>
                                <li><span>Materials</span> N/A</li>
                                <li><span>Other Info</span> N/A</li>
                            </ul>
                        </div>
                    </div>
                    <div id="des-details1" class="tab-pane active">
                        <div class="product-description-wrapper">
                            {{$item->detail}}
                        </div>
                    </div>
                    <div id="des-details3" class="tab-pane">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="review-wrapper">
                                    item review

                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="ratting-form-wrapper pl-50">


                                    <h3>Add a Review</h3>
                                    <div class="ratting-form">
                                        @auth
                                            <form action="#">
                                                <div class="star-box">
                                                    <span>Your rating:</span>
                                                    <div class="rating-product">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="rating-form-style">
                                                            <input placeholder="Name" type="text" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="rating-form-style">
                                                            <input placeholder="Email" type="email" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="rating-form-style form-submit">
                                                            <textarea name="Your Review" placeholder="Message"></textarea>
                                                            <button class="btn btn-primary btn-hover-color-primary "
                                                                    type="submit" value="Submit">Submit</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>

                                        @endauth

                                        @guest
                                            <a href="/login"> Login for Comment </a> | or | <a href="/register"> Register for comment</a>
                                        @endguest
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product details description area end -->

    <!-- Related product Area Start -->
    <div class="related-product-area pb-100px">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center mb-30px0px line-height-1">
                        <h2 class="title m-0">Related Products</h2>
                    </div>
                </div>
            </div>
            <div class="new-product-slider swiper-container slider-nav-style-1 small-nav">
                <div class="new-product-wrapper swiper-wrapper">

                    @foreach($item->Category->items as $item)
                        <div class="new-product-item swiper-slide">
                            <!-- Single Prodect -->
                            <div class="product">
                                <div class="thumb">

                                    <a href="/item/{{$item->slug}}" class="image">
                                        <img src="{{$item->thumb}}" alt="Product" />
                                        <img class="hover-image" src="{{$item->thumb}}"
                                             alt="{{$item->names}}" />
                                    </a>

                                    <span class="badges">
                                    <span class="new">{{$item->badge}}</span>
                                </span>
                                    <div class="actions">

                                    </div>
                                    <button title="Add To Cart" class=" add-to-cart" itemid="{{$item->id}}" qnt="1">Add
                                        To Cart</button>
                                </div>
                                <div class="content">
                                <span class="ratings">
                                    <span class="rating-wrap">
                                        <span class="star" style="width: 100%"></span>
                                    </span>
                                    <span class="rating-num">( 0 Review )</span>
                                </span>
                                    <h5 class="title"><a href="/item/{{$item->slug}}">{{$item->name}}
                                        </a>
                                    </h5>
                                    <span class="price">
                                    <span class="new">${{$item->price}}</span>
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
    </div>
    <!-- Related product Area End -->


@endsection

