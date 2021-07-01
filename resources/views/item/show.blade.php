@extends('layouts.app')

@section('title',$item->name.' Detail')
@section('content')

    <div class="container mt-1 mb-5">
        <div class="card">
            <div class="row">
                <div class="col-md-6 border-end">
                    <div class="d-flex flex-column justify-content-center">
                        <div class="main_image">
                            <img src="{{$item->photo}}" id="main_product_image" width="100%">
                        </div>
                        <div class="thumbnail_images">
                            <ul id="thumbnail">

                                <li><img onclick="changeImage(this)" src="{{$item->photo}}" width="70"></li>
                                @foreach($item->itemPhotos as $photo)
                                <li>
                                    <img onclick="changeImage(this)" src="{{$photo->thumb}}" width="70"></li>
                                @endforeach
                                      </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="p-3 right-side">
                        <div class="d-flex justify-content-between align-items-center">
                            <h3>{{$item->name}}</h3> <span class="heart"><i class='bx bx-heart'></i></span>
                        </div>
                        <div class="mt-2 pr-3 content">
                            <p>{{$item->detail}}</p>
                        </div>
                        <h3>$ {{$item->price}}</h3>
                        <div class="ratings d-flex flex-row align-items-center">
                            <div class="d-flex flex-row"> <i class='bx bxs-star'></i> <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bx-star'></i>
                            </div> <span>{{0}} reviews</span>
                        </div>
                        <div class="mt-5"> <span class="fw-bold">Color</span>
                            <div class="colors">

                                <div class="pro-details-color-info d-flex align-items-center">

                                    <div class="pro-details-color">
                                        <ul>

    @foreach(explode(',', $item->color) as $color)

        <li class="bg-{{$color}}"><a class="{{$color}}" href="#"></a></li>


    @endforeach




                                        </ul>
                                        <hr>
                                        <span>Size</span>
                                        <ul>
                                         {{$item->size}}
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>



                    </div>
                    <button title="Add To Cart" class="btn btn-lg btn-primary btn-hover-dark add-to-cart" itemid="{{$item->id}}">Add
                        To Cart</button>
                </div>
            </div>
        </div>
    </div>



<section>
    <h1>Related Products</h1>
    <div class="new-product-slider swiper-container slider-nav-style-1 small-nav">
        <div class="new-product-wrapper swiper-wrapper">
            @foreach(\App\Models\Item::lastN(8) as $item)
                <div class="new-product-item swiper-slide">
                    <!-- Single Prodect -->
                    <div class="product">
                        <div class="thumb">
                            <a href="/item/{{$item->slug}}" class="{{$item->name}} image">
                                <img src="{{$item->thumb}}" alt="{{$item->name}} photo" />
                                <img class="hover-image" src="{{$item->thumb}}"
                                     alt="{{$item->name}}" />
                            </a>
                            <span class="badges">
                                                    <span class="new">{{$item->badge}}</span>
                                                </span>
                            <div class="actions">
                                <a href="#" class="action wishlist" title="Wishlist"><i
                                        class="pe-7s-like"></i></a>
                                <a href="#" class="action quickview" data-link-action="quickview{{$item->id}}"
                                   title="Quick view" data-bs-toggle="modal"
                                   data-bs-target="#quickModal{{$item->id}}"><i class="pe-7s-search"></i></a>

                            </div>
                            <button title="Add To Cart" class=" add-to-cart" itemid="{{$item->id}}">Add
                                To Cart</button>
                        </div>
                        <div class="content">
                                                <span class="ratings">
                                                    <span class="rating-wrap">
                                                        <span class="star" style="width: 100%"></span>
                                                    </span>
                                                    <span class="rating-num">( 5 Review )</span>
                                                </span>
                            <h5 class="title"><a href="/item/{{$item->slug}}">{{$item->name}}
                                </a>
                            </h5>
                            <span class="price">
                                                    <span class="new">$ {{$item->price}}</span>
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
</section>
@endsection
@section('js')
    <script>
        function changeImage(element) {

            var main_prodcut_image = document.getElementById('main_product_image');
            main_prodcut_image.src = element.src;


        }
    </script>
@endsection


@section('css')

    <link rel="stylesheet" href="/assets/css/detail.css"/>
    @endsection



