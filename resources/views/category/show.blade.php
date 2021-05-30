@extends('layouts.app')

@section('title','Category Show '.$category->title)
@section('content')


    <section class="sub-bnr" data-stellar-background-ratio="0.5" style="background-position: 0% -70.5px;">
        <div class="position-center-center">
            <div class="container">
                <h4>{{$category->title}} Category</h4>
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="/cat">Category</a></li>
                    <li class="active">{{$category->title}}</li>
                </ol>
            </div>
        </div>
    </section>




    <div id="content">

        <!-- Popular Products -->
        <section class="shop-page padding-top-100 padding-bottom-100">
            <div class="container-full">
                <div class="item-fltr">
                    <!-- short-by -->
                    <div class="short-by"> Showing 1–10 of 20 results </div>
                    <!-- List and Grid Style -->
                    <div class="lst-grd"> <a href="#" id="list"><i class="flaticon-interface"></i></a> <a href="#" id="grid"><i class="icon-grid"></i></a>
                        <!-- Select -->
                        <select>
                            <option>Short By: New</option>
                            <option>Short By: New</option>
                            <option>Short By: New</option>
                            <option>Short By: New</option>
                            <option>Short By: New</option>
                        </select>
                    </div>
                </div>

                <!-- Item -->
                <div id="products" class="arrival-block col-item-6 list-group">
                    <div class="row">

                     @foreach($items as $item)
                        <!-- Item -->
                        <div class="item">
                            <div class="img-ser">
                                <!-- Sale -->
                                <div class="on-sale"> {{$item->badge}} </div>
                                <!-- Images -->
                                <div class="thumb"> <img class="img-1" src="{{$item->thumb}}" alt="">
                                    <img class="img-2" src="{{$item->photo}}" alt="">
                                    <!-- Overlay  -->
                                    <div class="overlay">
                                        <div class="position-center-center">
                                            <a class="popup-with-move-anim" href="#qck-view-shop{{$item->id}}">
                                                <i class="icon-eye"></i></a> </div>
                                        <div class="add-crt"><a href="/addtocart/{{$item->id}}"><i class="icon-basket margin-right-10"></i> Add To Cart</a></div>
                                    </div>
                                </div>

                                <!-- Item Name -->
                                <div class="item-name fr-grd"> <a href="#." class="i-tittle">{{$item->name}}</a>
                                    <span class="price"><small>$USD </small><span class="line-through">{{$item->price}}</span>
                                        <small>$USD </small>{{$item->price}}</span>
                                    <a class="deta animated fadeInRight" href="/item/{{$item->slug}}">View Detail</a> </div>
                                <!-- Item Details -->
                                <div class="cap-text">
                                    <div class="item-name"> <a href="#." class="i-tittle">{{$item->name}}</a>
                                        <span class="price"><small>USD </small><span class="line-through">{{$item->price}}</span>
                                            <small>$USD </small>{{$item->price}}</span>
                                        <!-- Stars -->
                                        <div class="stras"> <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-o"></i> <a href="#." class="wsh-list"><i class="icon-heart"></i> ADD TO WISHLIST</a> </div>
                                        <!-- Details -->
                                        <p>{{$item->detail}}</p>

                                        <!-- List Style -->
                                        <ul class="list-style">
                                            <li> Best Shop Products </li>
                                            <li> Color Option </li>
                                            <li> All Sizes </li>
                                            <li> Discounted Prices </li>
                                            <li> Refund Poloicy </li>
                                            <li> New Arrival </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                         @endforeach


                    </div>
                </div>

                <!-- View All Items -->
                <div class="text-center margin-top-30"> <a href="/item" class="btn margin-right-20">View ALl Shop Items</a> </div>


                @foreach($items as $item)
                <!-- Quick View -->
                <div id="qck-view-shop{{$item->id}}" class="zoom-anim-dialog qck-inside mfp-hide">
                    <div class="row">
                        <div class="col-md-6">

                            <!-- Images Slider -->
                            <div class="images-slider">
                                <ul class="slides">
                                    @foreach($item->itemPhotos as $photo)
                                    <li data-thumb="{{$photo->thumb}}" class="flex-active-slide" data-thumb-alt="" style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 1; display: block; z-index: 2;">
                                        <img src="{{$photo->photo}}" alt="" draggable="false">
                                    </li>
                                    @endforeach


                                </ul>

                                <ol class="flex-control-nav flex-control-thumbs"><li>
                                        <img src="{{$item->photo}}" class="flex-active" draggable="false"></li><li>
                                        <img src="{{$item->photo}}" draggable="false"></li><li>
                                        <img src="{{$item->photo}}" draggable="false"></li>
                                </ol>
                                <ul class="flex-direction-nav"><li class="flex-nav-prev">
                                        <a class="flex-prev" href="#">Previous</a>
                                    </li><li class="flex-nav-next"><a class="flex-next" href="#">Next</a></li></ul></div>
                        </div>

                        <!-- Content Info -->
                        <div class="col-md-6">
                            <div class="contnt-info">
                                <h3>{{$item->name}}</h3>
                                <p>
                                    {{$item->detail}}
                                </p>
                                <!-- Btn  -->
                                <div class="add-info">
                                    <div class="quantity">
                                        <input type="number" min="1" max="100" step="1" value="1" class="form-control qty">
                                        <div class="quantity-nav"><div class="quantity-button quantity-up">
                                                <i class="fa fa-caret-up"></i>
                                            </div>
                                            <div class="quantity-button quantity-down"><i class="fa fa-caret-down"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#." class="btn btn-inverse"><i class="icon-heart"></i></a>
                                    <a href="/addtocart/{{$item->id}}" class="btn">ADD TO CART </a> </div>
                            </div>
                        </div>
                    </div>
                </div>

                    @endforeach
            </div>
        </section>

        <!-- About -->
        <section class="small-about">
            <div class="container-full">
                <div class="news-letter padding-top-150 padding-bottom-150">
                    <div class="row">
                        <div class="col-lg-6">
                            <h3>We always stay with our clients and respect their business. We deliver 100% and provide instant response to help them succeed in constantly changing and challenging business world. </h3>
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
                                <input type="email" placeholder="Enter your email address" required="">
                                <button type="submit">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Clients -->
        <section class="clients light-gray-bg padding-top-60 padding-bottom-80">
            <div class="container-full">
                <div class="clients-slide owl-carousel owl-theme owl-loaded">









                    <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1002px, 0px, 0px); transition: all 0s ease 0s; width: 3807.6px;"><div class="owl-item cloned" style="width: 170.4px; margin-right: 30px;"><div> <img src="images/c-mg-2.png" alt=""> </div></div><div class="owl-item cloned" style="width: 170.4px; margin-right: 30px;"><div> <img src="images/c-mg-3.png" alt=""> </div></div><div class="owl-item cloned" style="width: 170.4px; margin-right: 30px;"><div> <img src="images/c-mg-1.png" alt=""> </div></div><div class="owl-item cloned" style="width: 170.4px; margin-right: 30px;"><div> <img src="images/c-mg-2.png" alt=""> </div></div><div class="owl-item cloned" style="width: 170.4px; margin-right: 30px;"><div> <img src="images/c-mg-3.png" alt=""> </div></div><div class="owl-item active" style="width: 170.4px; margin-right: 30px;"><div> <img src="images/c-mg-1.png" alt=""> </div></div><div class="owl-item active" style="width: 170.4px; margin-right: 30px;"><div> <img src="images/c-mg-2.png" alt=""> </div></div><div class="owl-item active" style="width: 170.4px; margin-right: 30px;"><div> <img src="images/c-mg-3.png" alt=""> </div></div><div class="owl-item active" style="width: 170.4px; margin-right: 30px;"><div> <img src="images/c-mg-1.png" alt=""> </div></div><div class="owl-item active" style="width: 170.4px; margin-right: 30px;"><div> <img src="images/c-mg-2.png" alt=""> </div></div><div class="owl-item" style="width: 170.4px; margin-right: 30px;"><div> <img src="images/c-mg-3.png" alt=""> </div></div><div class="owl-item" style="width: 170.4px; margin-right: 30px;"><div> <img src="images/c-mg-1.png" alt=""> </div></div><div class="owl-item" style="width: 170.4px; margin-right: 30px;"><div> <img src="images/c-mg-2.png" alt=""> </div></div><div class="owl-item" style="width: 170.4px; margin-right: 30px;"><div> <img src="images/c-mg-3.png" alt=""> </div></div><div class="owl-item cloned" style="width: 170.4px; margin-right: 30px;"><div> <img src="images/c-mg-1.png" alt=""> </div></div><div class="owl-item cloned" style="width: 170.4px; margin-right: 30px;"><div> <img src="images/c-mg-2.png" alt=""> </div></div><div class="owl-item cloned" style="width: 170.4px; margin-right: 30px;"><div> <img src="images/c-mg-3.png" alt=""> </div></div><div class="owl-item cloned" style="width: 170.4px; margin-right: 30px;"><div> <img src="images/c-mg-1.png" alt=""> </div></div><div class="owl-item cloned" style="width: 170.4px; margin-right: 30px;"><div> <img src="images/c-mg-2.png" alt=""> </div></div></div></div><div class="owl-controls"><div class="owl-nav"><div class="owl-prev" style="display: none;"><i class="fa fa-angle-left"></i></div><div class="owl-next" style="display: none;"><i class="fa fa-angle-right"></i></div></div><div class="owl-dots" style=""><div class="owl-dot active"><span></span></div><div class="owl-dot"><span></span></div></div></div></div>
            </div>
        </section>
    </div>
@endsection
