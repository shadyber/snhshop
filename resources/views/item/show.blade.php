
<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8" />
    <meta name="author" content="Root System" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SandH Store : Item Detail</title>

    <!-- Custom CSS -->
    <link href="/assets/css/styles.css" rel="stylesheet">

</head>

<body>

<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader"></div>

<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">

    <!-- ============================================================== -->
    <!-- Top header  -->
    <!-- ============================================================== -->
    <!-- Start Navigation -->
    <div class="header header-light dark-text">
        <div class="container">
            <nav id="navigation" class="navigation navigation-landscape">
                <div class="nav-header">
                    <a class="nav-brand" href="#">
                        <img src="/assets/img/logo.png" class="logo" alt="" />
                    </a>
                    <div class="nav-toggle"></div>
                    <div class="mobile_nav">
                        <ul>

                            <li>
                                <a href="/home">
                                    <i class="lni lni-user"></i>
                                </a>
                            </li>
                            <li><a href="/item">Shop</a></li>
                            <li><a href="/gallery">Photo</a></li>
                            <li><a href="/about">About us</a></li>
                            <li><a href="/contact">Contact us</a></li>
                            <li>
                                <a href="#" onclick="openCart()">
                                    <i class="lni lni-shopping-basket"></i><span class="dn-counter">{{\Illuminate\Support\Facades\Session::get('cart')? count(\Illuminate\Support\Facades\Session::get('cart')) : '0'}}</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="nav-menus-wrapper" style="transition-property: none;">
                    <ul class="nav-menu">

                        <li><a href="/">Home</a>

                        </li>

                        <li><a href="javascript:void(0);">Shop</a>
                            <ul class="nav-dropdown nav-submenu">
                                <li><a href="javascript:void(0);">Womens Collection</a>
                                    <ul class="nav-dropdown nav-submenu">
                                        @foreach(\App\Models\Item::womensN(15) as $item)
                                            <li><a href="/item/{{$item->slug}}">{{$item->name}}</a></li>

                                        @endforeach
                                    </ul>
                                </li>

                                <li><a href="javascript:void(0);">Mens Collection</a>
                                    <ul class="nav-dropdown nav-submenu">
                                        @foreach(\App\Models\Item::mensN(15) as $item)
                                            <li><a href="/item/{{$item->slug}}">{{$item->name}}</a></li>

                                        @endforeach
                                    </ul>
                                </li>
                                 <li><a href="javascript:void(0);">Universal Collection</a>
                                    <ul class="nav-dropdown nav-submenu">
                                        @foreach(\App\Models\Item::universalN(15) as $item)
                                            <li><a href="/item/{{$item->slug}}">{{$item->name}}</a></li>

                                        @endforeach
                                    </ul>
                                </li>


                            </ul>
                        </li>



                        <li><a href="/gallery">Photo</a></li>
                        <li><a href="/about">About us</a></li>
                        <li><a href="/contact">Contact us</a></li>

                    </ul>

                    <ul class="nav-menu nav-menu-social align-to-right">
                        <li>
                            <a href="#" onclick="openSearch()">
                                <i class="lni lni-search-alt"></i>
                            </a>
                        </li>
                        <li>
                            <a href="/home">
                                <i class="lni lni-user"></i>
                            </a>
                        </li>

                        <li>
                            <a href="#" onclick="openCart()">
                                <i class="lni lni-shopping-basket"></i><span class="dn-counter">{{\Illuminate\Support\Facades\Session::get('cart')? count(\Illuminate\Support\Facades\Session::get('cart')) : '0'}}</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!-- End Navigation -->
    <div class="clearfix"></div>
    <!-- ============================================================== -->
    <!-- Top header  -->
    <!-- ============================================================== -->

    <!-- ======================= Top Breadcrubms ======================== -->
    <div class="gray py-3">
        <div class="container">
            <div class="row">
                <div class="colxl-12 col-lg-12 col-md-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="/item">Shops</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Detail</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ======================= Top Breadcrubms ======================== -->

    <!-- ======================= Product Detail ======================== -->
    <section class="middle">
        <div class="container">
            <div class="row">

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="sp-loading"><img src="{{$item->thumb}}" alt=""><br>LOADING IMAGES</div>
                    <div class="sp-wrap">

                        @foreach(\App\Models\ItemPhotos::varityPhoto(app('request')->input('verity_id') ?  app('request')->input('verity_id') : $verities->first()->id ) as $photo)
                        <a href="{{$photo->thumb}}"><img src="{{$photo->thumb}}" alt="{{$photo->name}}"></a>
                        @endforeach

                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="prd_details">

                        <div class="prt_01 mb-1"><span class="text-purple bg-light-purple rounded py-1">{{$item->Category->title}}</span></div>
                        <div class="prt_02 mb-3">
                            <h2 class="ft-bold mb-1">{{$item->name}}</h2>
                            <div class="text-left">
                                <div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star"></i>
                                    <span class="small">(412 Reviews)</span>
                                </div>
                                <div class="elis_rty"> <span class="ft-bold theme-cl fs-lg mr-2">$ {{$item->price}} USD</span><span class="ft-regular text-light bg-success py-1 px-2 fs-sm">In Stock</span></div>
                            </div>
                        </div>

                        <div class="prt_03 mb-4">
                           {{$item->detail}}

                        </div>

                        <div class="prt_04 mb-2">
                            <p class="d-flex align-items-center mb-0 text-dark ft-medium">Color:</p>

                            <div class="text-left">
                                @foreach($verities as $verity)

                                <div class="form-check form-option form-check-inline mb-1">
                                    <input class="form-check-input" type="radio" name="verity_selection" id="verity{{$verity->id}}" value="{{$verity->name}}" onchange="page_refresh({{$verity->id}},'{{$verity->item->slug}}');">
                                    <label class="form-option-label rounded-circle" for="verity{{$verity->id}}" >
                                        <span class="form-option-color rounded-circle" style=" background: url({{$verity->thumb ? $verity->thumb : $verity->photo}}) no-repeat; ">
                                          </span>
                                    </label>
                                </div>

                                    @endforeach


                            </div>

                        </div>

                        <div class="prt_04 mb-4">
                            <p class="d-flex align-items-center mb-0 text-dark ft-medium">Size:</p>
                            <div class="text-left pb-0 pt-2">
                                <div class="form-check size-option form-option form-check-inline mb-2">
                                    <input class="form-check-input" type="radio" name="size" id="{{$item->diameter}}" checked="">
                                    <label class="form-option-label" for="28">{{$item->diameter}}d</label>
                                </div>

                                <div class="form-check size-option form-option form-check-inline mb-2">
                                    <input class="form-check-input" type="radio" name="size" id="{{$item->width}}" checked="">
                                    <label class="form-option-label" for="28">{{$item->width}} w</label>
                                </div>

                                <div class="form-check size-option form-option form-check-inline mb-2">
                                    <input class="form-check-input" type="radio" name="size" id="{{$item->height}}" checked="">
                                    <label class="form-option-label" for="28">{{$item->height}} h</label>
                                </div>


                            </div>
                        </div>

                        <div class="prt_05 mb-4">
                            <div class="form-row mb-7">
                                <div class="col-12 col-lg-auto">
                                    <!-- Quantity -->
                                    <select class="mb-2 custom-select">
                                        <option value="1" selected="">1</option>
                                       @for($i=2;$i<$item->init_qnt;$i++)
                                        <option value="{{$i}}">{{$i}}</option>
                                        @endfor
                                    </select>
                                </div>
                                <div class="col-12 col-lg">
                                    <!-- Submit -->
                                    <button type="submit" class="btn btn-block custom-height bg-dark mb-2  add-to-cart" itemid="{{$item->id}}" qnt="getquantity()">
                                        <i class="lni lni-shopping-basket mr-2"></i>Add to Cart
                                    </button>
                                </div>
                                <div class="col-12 col-lg-auto">
                                    <!-- Wishlist -->
                                    <button class="btn custom-height btn-default btn-block mb-2 text-dark" data-toggle="button">
                                        <i class="lni lni-heart mr-2"></i>Wishlist
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="prt_06">
                            <p class="mb-0 d-flex align-items-center">
                                <span class="mr-4">Share:</span>
                                <a class="d-inline-flex align-items-center justify-content-center p-3 gray circle fs-sm text-muted mr-2" href="#!">
                                    <i class="fab fa-twitter position-absolute"></i>
                                </a>
                                <a class="d-inline-flex align-items-center justify-content-center p-3 gray circle fs-sm text-muted mr-2" href="#!">
                                    <i class="fab fa-facebook-f position-absolute"></i>
                                </a>
                                <a class="d-inline-flex align-items-center justify-content-center p-3 gray circle fs-sm text-muted" href="#!">
                                    <i class="fab fa-pinterest-p position-absolute"></i>
                                </a>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======================= Product Detail End ======================== -->

    <!-- ======================= Product Description ======================= -->
    <section class="middle">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-11 col-lg-12 col-md-12 col-sm-12">
                    <ul class="nav nav-tabs b-0 d-flex align-items-center justify-content-center simple_tab_links mb-4" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="description-tab" href="#description" data-toggle="tab" role="tab" aria-controls="description" aria-selected="true">Description</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" href="#information" id="information-tab" data-toggle="tab" role="tab" aria-controls="information" aria-selected="false">Additional information</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" href="#reviews" id="reviews-tab" data-toggle="tab" role="tab" aria-controls="reviews" aria-selected="false">Reviews</a>
                        </li>
                    </ul>

                    <div class="tab-content" id="myTabContent">

                        <!-- Description Content -->
                        <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                            <div class="description_info">

                                {{$item->detail}}
                            </div>
                        </div>

                        <!-- Additional Content -->
                        <div class="tab-pane fade" id="information" role="tabpanel" aria-labelledby="information-tab">
                            <div class="additionals">
                                <table class="table">
                                    <tbody>
                                    <tr>
                                        <th class="ft-medium text-dark">ID</th>
                                        <td>#{{$item->id}}</td>
                                    </tr>
                                    <tr>
                                        <th class="ft-medium text-dark">SKU</th>
                                        <td>SKU{{$item->slug}}</td>
                                    </tr>
                                    <tr>
                                        <th class="ft-medium text-dark">Color</th>
                                        <td> {{$item->color}}</td>
                                    </tr>
                                    <tr>
                                        <th class="ft-medium text-dark">Size</th>
                                        <td>W= {{$item->width}} H={{$item->height}} D={{$item->diameter}}</td>
                                    </tr>
                                    <tr>
                                        <th class="ft-medium text-dark">Price</th>
                                        <td>$ {{$item->price}} USD</td>
                                    </tr>
                                    <tr>
                                        <th class="ft-medium text-dark">Tags</th>
                                        <td> {{$item->tags}}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- Reviews Content -->
                        <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                            <div class="reviews_info">


                                @foreach($item->reviews as $review)
                                <div class="single_rev d-flex align-items-start br-bottom py-3">
                                    <div class="single_rev_thumb"><img src="photo" class="img-fluid circle" width="90" alt="" /></div>
                                    <div class="single_rev_caption d-flex align-items-start pl-3">
                                        <div class="single_capt_left">
                                            <h5 class="mb-0 fs-md ft-medium lh-1">{{$review->user->name}}</h5>
                                            <span class="small">{{$review->created_at->diffForHumans()}}</span>
                                            <p>{{$review->comment}}</p>
                                        </div>
                                        <div class="single_capt_right">
                                            <div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach



                            </div>

                            <div class="reviews_rate">
                                @include('components.flash_message')
                                <form class="row" method="POST" action="/review">
                                    @csrf
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <h4>Submit Rating</h4>
                                    </div>
                                    <input type="hidden" name="item_id" value="{{$item->id}}">
                                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <div class="revie_stars d-flex align-items-center justify-content-between px-2 py-2 gray rounded mb-2 mt-1">
                                            <div class="srt_013">
                                                <div class="submit-rating">
                                                    <input id="star-5" type="radio" name="stars" value="5" />
                                                    <label for="star-5" title="5 stars">
                                                        <i class="active fa fa-star" aria-hidden="true"></i>
                                                    </label>
                                                    <input id="star-4" type="radio" name="stars" value="4" />
                                                    <label for="star-4" title="4 stars">
                                                        <i class="active fa fa-star" aria-hidden="true"></i>
                                                    </label>
                                                    <input id="star-3" type="radio" name="stars" value="3" />
                                                    <label for="star-3" title="3 stars">
                                                        <i class="active fa fa-star" aria-hidden="true"></i>
                                                    </label>
                                                    <input id="star-2" type="radio" name="stars" value="2" />
                                                    <label for="star-2" title="2 stars">
                                                        <i class="active fa fa-star" aria-hidden="true"></i>
                                                    </label>
                                                    <input id="star-1" type="radio" name="stars" value="1" />
                                                    <label for="star-1" title="1 star">
                                                        <i class="active fa fa-star" aria-hidden="true"></i>
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="srt_014">
                                                <input type="hidden" name="stars" value="5">
                                                <h6 class="mb-0">4 Star</h6>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label class="medium text-dark ft-medium">Full Name</label>
                                            <input type="text" class="form-control" name="name" value="{{Auth() ? Auth::user()->name: 'Sign In'}}" readonly />
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label class="medium text-dark ft-medium">Email Address</label>
                                            <input type="email" class="form-control" name="email" value="{{ Auth::user()? Auth::user()->email : 'Sign In first'}}" readonly  />
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label class="medium text-dark ft-medium">Description</label>
                                            <textarea class="form-control" name="comment" required>

                                            </textarea>
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group m-0">
                                            <button class="btn btn-white stretched-link hover-black" type="submit">Submit Review <i class="lni lni-arrow-right"></i></button>
                                        </div>
                                    </div>

                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======================= Product Description End ==================== -->

    <!-- ======================= Similar Products Start ============================ -->
    <section class="middle pt-0">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="sec_title position-relative text-center">
                        <h2 class="off_title">Similar Products</h2>
                        <h3 class="ft-bold pt-3">Matching Products</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="slide_items">
                    @foreach($item->Category->items as $item)
                        <!-- single Item -->
                        <div class="single_itesm">
                            <div class="product_grid card b-0 mb-0">
                                <div class="badge bg-success text-white position-absolute ft-regular ab-left text-upper">
                                    {{$item->badge}}</div>
                                <button class="snackbar-wishlist btn btn_love position-absolute ab-right"><i class="far fa-heart"></i></button>
                                <div class="card-body p-0">
                                    <div class="shop_thumb position-relative">
                                        <a class="card-img-top d-block overflow-hidden" href="/item/{{$item->slug}}"><img class="card-img-top" src="{{$item->thumb}}" alt="{{$item->name}}"></a>
                                        <div class="product-hover-overlay bg-dark d-flex align-items-center justify-content-center">
                                            <div class="edlio">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer b-0 p-3 pb-0 d-flex align-items-start justify-content-center">
                                    <div class="text-left">
                                        <div class="text-center">
                                            <h5 class="fw-bolder fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">{{$item->name}}</a></h5>
                                            <div class="elis_rty"><span class="ft-bold fs-md text-dark">${{$item->price}}</span></div>
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
    </section>
    <!-- ======================= Similar Products Start ============================ -->
@include('components.footer')



    <!-- Search -->
    <div class="w3-ch-sideBar w3-bar-block w3-card-2 w3-animate-right" style="display:none;right:0;" id="Search">
        <div class="rightMenu-scroll">
            <div class="d-flex align-items-center justify-content-between slide-head py-3 px-3">
                <h4 class="cart_heading fs-md ft-medium mb-0">Search Products</h4>
                <button onclick="closeSearch()" class="close_slide"><i class="ti-close"></i></button>
            </div>

            <div class="cart_action px-3 py-4">
                <form class="form m-0 p-0" method="get" action="/search">
                    <div class="form-group">
                        <input type="text" class="form-control" name="key" placeholder="Product Keyword.." />
                    </div>



                    <div class="form-group mb-0">
                        <button type="button" class="btn d-block full-width btn-dark">Search Product</button>
                    </div>
                </form>
            </div>




        </div>
    </div>

    <!-- Cart -->
    <div class="w3-ch-sideBar w3-bar-block w3-card-2 w3-animate-right" style="display:none;right:0;" id="Cart">
        <div class="rightMenu-scroll">
            <div class="d-flex align-items-center justify-content-between slide-head py-3 px-3">
                <h4 class="cart_heading fs-md ft-medium mb-0">Products List</h4>
                <button onclick="closeCart()" class="close_slide"><i class="ti-close"></i></button>
            </div>
            <div class="right-ch-sideBar">

                <div class="cart_select_items py-2">
                @foreach(\App\Models\Cart::myCart() as $cart)
                    <!-- Single Item -->
                    <div class="d-flex align-items-center justify-content-between br-bottom px-3 py-3">
                        <div class="cart_single d-flex align-items-center">
                            <div class="cart_selected_single_thumb">
                                <a href="/item/{{$cart['slug']}}"><img src="{{$cart['thumb']}}" width="60" class="img-fluid" alt="{{$cart['name']}}" /></a>
                            </div>
                            <div class="cart_single_caption pl-2">
                                <h4 class="product_title fs-sm ft-medium mb-0 lh-1">{{$cart['name']}}</h4>
                                <p class="mb-2"><span class="text-dark ft-medium small">{{$cart['quantity']}}</span>, <span class="text-dark small">verity{{$cart['quantity']}}</span></p>
                                <h4 class="fs-md ft-medium mb-0 lh-1">${{$cart['price']}}</h4>
                            </div>
                        </div>
                        <div class="fls_last"><button class="close_slide gray"><i class="ti-close"></i></button></div>
                    </div>

                    @endforeach
                </div>

                <div class="d-flex align-items-center justify-content-between br-top br-bottom px-3 py-3">
                    <h6 class="mb-0">Subtotal</h6>
                    <h3 class="mb-0 ft-medium"> ${{\App\Models\Cart::totalCart()}}</h3>
                </div>

                <div class="cart_action px-3 py-3">
                    <div class="form-group">
                        <button type="button" class="btn d-block full-width btn-dark">Checkout Now</button>
                    </div>
                    <div class="form-group">
                        <button type="button" class="btn d-block full-width btn-dark-light">Edit or View</button>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>


</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->

<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/popper.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/ion.rangeSlider.min.js"></script>
<script src="/assets/js/slick.js"></script>
<script src="/assets/js/slider-bg.js"></script>
<script src="/assets/js/lightbox.js"></script>
<script src="/assets/js/smoothproducts.js"></script>
<script src="/assets/js/snackbar.min.js"></script>
<script src="/assets/js/jQuery.style.switcher.js"></script>
<script src="/assets/js/custom.js"></script>
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->

<script>
    function openWishlist() {
        document.getElementById("Wishlist").style.display = "block";
    }
    function closeWishlist() {
        document.getElementById("Wishlist").style.display = "none";
    }
</script>

<script>
    function openCart() {
        document.getElementById("Cart").style.display = "block";
    }
    function closeCart() {
        document.getElementById("Cart").style.display = "none";
    }

    function openSearch() {
        document.getElementById("Search").style.display = "block";
    }
    function closeSearch() {
        document.getElementById("Search").style.display = "none";
    }

    function page_refresh(vid,slug){
       // alert('/item/'+slug+'?verity_id='+vid);
        document.location='/item/'+slug+'?verity_id='+vid;
    }

    var qnt=1;

    function getqnt(){
        qnt = document.getElementById("qtybutton").value;


    }

    function getquantity(){
        return qnt;
    }

    $( ".add-to-cart" ).click(function() {

        var itemid=$(this).attr("itemid");
        var cbtn=$(this);
        var itemqnt=$(this).attr('qnt')



        $.get("/multipleaddtocart/"+itemid+"/"+qnt, function(data){
            // Display the returned data in browser
            cbtn.animate({
                opacity: 0.25,
                left: "+=5000",
                top: "-=5000",
                height: "toggle"
            }, 50, function() {
                // Animation complete.
            });
            $('#cartCount').html(data);
        });
    });
</script>

</body>
</html>
