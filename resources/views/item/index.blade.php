@extends('layouts.app')
@section('content')

    <!-- Content -->
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
                <div id="products" class="arrival-block col-item-4 list-group">
                    <div class="row">
                        @foreach($items as $item)
                        <!-- Item -->
                        <div class="item">
                            <div class="img-ser">
                                <!-- Sale -->
                                <div class="on-sale"> {{$item->badge}} </div>
                                <!-- Images -->
                                <div class="thumb">
                                    <img class="img-1" src="{{$item->thumb}}" alt="{{$item->name}}">
                                    <img class="img-2" src="{{$item->photo}}" alt="{{$item->name}}">
                                    <!-- Overlay  -->
                                    <div class="overlay">
                                        <div class="position-center-center">
                                            <a class="popup-with-move-anim" href="#qck-view-shop">
                                                <i class="icon-eye"></i></a>
                                        </div>
                                        <div class="add-crt">
                                            <a href="#."><i class="icon-basket margin-right-10"></i> Add To Cart</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Item Name -->
                                <div class="item-name fr-grd"> <a href="/item/{{$item->slug}}" class="i-tittle"> {{$item->name}}</a>
                                    <span class="price"><small>$</small><span class="line-through">{{$item->prices}}</span> <small>$USD</small>{{$item->price}}</span>
                                    <a class="deta animated fadeInRight" href="/item/{{$item->slug}}">View Detail</a> </div>
                                <!-- Item Details -->
                                <div class="cap-text">
                                    <div class="item-name"> <a href="/item/{{$item->slug}}" class="i-tittle">{{$item->name}}</a>
                                        <span class="price"><small>$USD </small><span class="line-through">{{$item->price}}</span> <small>$ETB</small>{{$item->price}}</span>
                                        <!-- Stars -->
                                        <div class="stras">
                                            <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>

                                            <a href="#." class="wsh-list"><i class="icon-heart"></i> ADD TO WISHLIST</a> </div>
                                        <!-- Details -->
                                        <p>Phasellus lacinia fermentum bibendum. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>

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
                <div class="text-center margin-top-30"> <a href="#." class="btn margin-right-20">View ALl Shop Items</a> </div>

                <!-- Quick View -->
                <div id="qck-view-shop" class="zoom-anim-dialog qck-inside mfp-hide">
                    <div class="row">
                        <div class="col-md-6">

                            <!-- Images Slider -->
                            <div class="images-slider">
                                <ul class="slides">
                                    <li data-thumb="images/item-img-1-1.jpg"> <img src="images/item-img-1-1.jpg" alt=""> </li>
                                    <li data-thumb="images/item-img-1-1-1.jpg"> <img src="images/item-img-1-1-1.jpg" alt=""> </li>
                                    <li data-thumb="images/item-img-1-1.jpg"> <img src="images/item-img-1-1.jpg" alt=""> </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Content Info -->
                        <div class="col-md-6">
                            <div class="contnt-info">
                                <h3>Mid Rise Skinny Jeans</h3>
                                <p>This is dummy copy. It is not meant to be read. It has been placed here solely to demonstrate the look and feel of finished, typeset text. Only for show. He who searches for meaning here will be sorely disappointed. <br>
                                    <br>
                                    These words are here to provide the reader with a basic impression of how actual text will appear in its final presentation. </p>

                                <!-- Btn  -->
                                <div class="add-info">
                                    <div class="quantity">
                                        <input type="number" min="1" max="100" step="1" value="1" class="form-control qty">
                                    </div>
                                    <a href="#." class="btn btn-inverse"><i class="icon-heart"></i></a> <a href="#." class="btn">ADD TO CART </a> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
