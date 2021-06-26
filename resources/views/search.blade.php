@extends('layouts.app')

@section('title','Search result for '.$key)
@section('content')

    <div class="row">
          @foreach($result as $item)

            <div class="row">
                <div class="col-md-5 col-lg-5 col-xl-4">
                    <div class="product">
                        <div class="thumb">
                            <a href="/item/{{$item->slug}}" class="image">
                                <img src="{{$item->thumb}}" alt="minus">
                                <img class="hover-image" src="{{$item->thumb}}" alt="Product">
                            </a>
                            <span class="badges">

                                                                </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 col-lg-7 col-xl-8">
                    <div class="content-desc-wrap">
                        <div class="content">
                                                                <span class="ratings">
                                                                    <span class="rating-wrap">

                                                                    </span>

                                                                </span>
                            <h5 class="title"><a href="single-product.html">{{$item->name}}</a></h5>
                            <p>{{$item->detail}}</p>
                        </div>
                        <div class="box-inner">
                                                                <span class="price">
                                                                    <span class="new">{{$item->price}}</span>
                                                                </span>
                            <div class="actions">
                                <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="pe-7s-like"></i></a>
                                <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                                <a href="compare.html" class="action compare" title="Compare"><i class="pe-7s-refresh-2"></i></a>
                            </div>
                            <button title="Add To Cart" class=" add-to-cart">Add
                                To Cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>

         @endforeach

    </div>

@endsection
