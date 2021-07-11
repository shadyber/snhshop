@extends('layouts.app')
@section('title','Shop '.$category->title)
@section('content')
    <section>
        <div class="col-12">
            <!-- Shop Top Area Start -->
            <div class="shop-top-bar d-flex">
                <!-- Left Side start -->
                <p><span>15</span> Product Found of <span>{{count(\App\Models\Item::all())}}</span></p>
                <!-- Left Side End -->
                <div class="shop-tab nav">
                    <a class="active" href="#shop-grid" data-bs-toggle="tab">
                        <i class="fa fa-th" aria-hidden="true"></i>
                    </a>
                    <a href="#shop-list" data-bs-toggle="tab">
                        <i class="fa fa-list" aria-hidden="true"></i>
                    </a>
                </div>
                <!-- Right Side Start -->
                <div class="select-shoing-wrap d-flex align-items-center">
                    <div class="shot-product">
                        <p>Sort By:</p>
                    </div>
                    <div class="shop-select">
                        <select class="shop-sort" style="display: none;">
                            <option data-display="Relevance">Relevance</option>
                            <option value="1"> Name, A to Z</option>
                            <option value="2"> Name, Z to A</option>
                            <option value="3"> Price, low to high</option>
                            <option value="4"> Price, high to low</option>
                        </select>
                        <div class="nice-select shop-sort" tabindex="0"><span class="current">Relevance</span>
                            <ul class="list">
                                <li data-value="Relevance" data-display="Relevance" class="option selected">Relevance
                                </li>
                                <li data-value="1" class="option"> Name, A to Z</li>
                                <li data-value="2" class="option"> Name, Z to A</li>
                                <li data-value="3" class="option"> Price, low to high</li>
                                <li data-value="4" class="option"> Price, high to low</li>
                            </ul>
                        </div>

                    </div>
                </div>
                <!-- Right Side End -->
            </div>
            <!-- Shop Top Area End -->

            <!-- Shop Bottom Area Start -->
            <div class="shop-bottom-area">

                <!-- Tab Content Area Start -->
                <div class="row">
                    <div class="col">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="shop-grid">
                                <div class="row mb-n-30px">
                                    @foreach($items as $item)
                                        <div class="col-md-4 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                             data-aos-delay="200">
                                            <!-- Single Prodect -->
                                            <div class="product">
                                                <div class="thumb">
                                                    <a href="/item/{{$item->slug}}" class="image">
                                                        <img src="{{$item->thumb}}" alt="Product">
                                                        <img class="hover-image" src="{{$item->thumb}}"
                                                             alt="Product">
                                                    </a>
                                                    <span class="badges">
                                                                <span class="new">{{$item->badge}}</span>
                                                            </span>
                                                    <div class="actions">


                                                    </div>
                                                    <button title="Add To Cart" class=" add-to-cart" itemid="{{$item->id}}">Add
                                                        To Cart
                                                    </button>
                                                </div>
                                                <div class="content">
                                                            <span class="ratings">
                                                                <span class="rating-wrap">
                                                                    <span class="star" style="width: 100%"></span>
                                                                </span>
                                                                <span class="rating-num">( 5 Review )</span>
                                                            </span>
                                                    <h5 class="title"><a href="/item/{{$item->slug}}">
                                                            {{$item->name}}
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
                            </div>
                            <div class="tab-pane fade" id="shop-list">
                                @foreach($items as $item)

                                    <div class="shop-list-wrapper">
                                        <div class="row">
                                            <div class="col-md-5 col-lg-5 col-xl-4">
                                                <div class="product">
                                                    <div class="thumb">
                                                        <a href="/item/{{$item->slug}}" class="image">
                                                            <img src="{{$item->thumb}}" alt="{{$item->name}}">
                                                            <img class="hover-image" src="{{$item->thumb}}"
                                                                 alt="Product">
                                                        </a>
                                                        <span class="badges">
                                                                    <span class="new">{{$item->badge}}</span>
                                                                </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-7 col-lg-7 col-xl-8">
                                                <div class="content-desc-wrap">
                                                    <div class="content">
                                                                <span class="ratings">
                                                                    <span class="rating-wrap">
                                                                        <span class="star" style="width: 100%"></span>
                                                                    </span>
                                                                    <span class="rating-num">( 5 Review )</span>
                                                                </span>
                                                        <h5 class="title"><a href="/item/{{$item->slug}}">{{$item->name}}</a></h5>
                                                        <p>{{substr($item->detail,0,100)}}...</p>
                                                    </div>
                                                    <div class="box-inner">
                                                                <span class="price">
                                                                    <span class="new">USD {{$item->price}}</span>
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
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Tab Content Area End -->

                <!--  Pagination Area Start -->
                <div class="load-more-items text-center mt-30px0px" data-aos="fade-up">

                    <a href="/" class="btn btn-lg btn-primary btn-hover-dark m-auto"> Load More <i
                            class="fa fa-refresh ml-15px" aria-hidden="true"></i></a>
                </div>
                <!--  Pagination Area End -->
            </div>
            <!-- Shop Bottom Area End -->
        </div>
    </section>
@endsection
