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
                            <h5 class="title"><a href="/item/{{$item->slug}}">{{$item->name}}</a></h5>
                            <p>{{$item->detail}}</p>
                        </div>
                        <div class="box-inner">
                                                                <span class="price">
                                                                    <span class="new">{{$item->price}}</span>
                                                                </span>
                            <div class="actions">

                             </div>
                            <button title="Add To Cart" class=" add-to-cart" itemid="{{$item->id}}">Add
                                To Cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>

         @endforeach

    </div>

@endsection
