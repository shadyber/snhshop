<!-- header -->
<header class="sticky">
    <div class="container-full">

        <!-- Logo -->
        <div class="logo"><a href="/"><img class="img-responsive" src="/images/logo.png" alt=""></a></div>
        <nav class="navbar ownmenu navbar-expand-lg">
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="nav">
                    <li class="dropdown active"><a href="/" >Home</a>

                    </li>

                    <li><a href="/about">About </a></li>

                    <!-- MEGA MENU -->
                    <li class="dropdown megamenu"><a href="#." class="dropdown-toggle" data-toggle="dropdown">All
                            Items</a>
                        <div class="dropdown-menu">
                            <div class="row">

                                <!-- Shop Pages -->
                                <div class="col-md-5">
                                    <h6>Categories</h6>
                                    <ul class="col-2-li">
                                       @foreach(\App\Models\ItemCategory::allCategories() as $cat)
                                        <li><a href="/cat/1">{{$cat->title}}</a></li>
                                     @endforeach
                                    </ul>
                                </div>

                                <!-- Shop Pages -->
                                <div class="col-md-3">
                                    <h6>Latest items</h6>
                                    <ul>
                                        <li><a href="/item">All Items</a> </li>
                                        @foreach(\App\Models\Item::lastN(8) as $item)


                                        <li> <a href="/item/{{$item->slug}}"> {{$item->name}}</a>
                                        </li>
                                        @endforeach

                                    </ul>
                                </div>

                                <!-- Top Rate -->
                                <div class="col-md-4">
                                    <h6>Top Rate Products</h6>
                                    <div class="top-rated">
                                        <ul>
                                            <li>
                                                <div class="media-left">
                                                    <div class="cart-img"><a href="#"> <img
                                                                class="media-object img-responsive"
                                                                src="/images/cart-img-1.jpg" alt="..."> </a></div>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="media-heading">Best T-Shirt Design</h6>
                                                    <div class="stars"><i class="fa fa-star"></i> <i
                                                            class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                            class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                                    <span class="price">129.00 USD</span></div>
                                            </li>
                                            <li>
                                                <div class="media-left">
                                                    <div class="cart-img"><a href="#"> <img
                                                                class="media-object img-responsive"
                                                                src="/images/cart-img-2.jpg" alt="..."> </a></div>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="media-heading">Bag Pack for Child</h6>
                                                    <div class="stars"><i class="fa fa-star"></i> <i
                                                            class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                            class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                                    <span class="price">129.00 USD</span></div>
                                            </li>
                                            <li>
                                                <div class="media-left">
                                                    <div class="cart-img"><a href="#"> <img
                                                                class="media-object img-responsive"
                                                                src="/images/cart-img-3.jpg" alt="..."> </a></div>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="media-heading">Bag Pack for Child</h6>
                                                    <div class="stars"><i class="fa fa-star"></i> <i
                                                            class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                            class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                                    <span class="price">129.00 USD</span></div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- MEga Menu Elements -->
                            <div class="mega-menu-elements"><img src="/images/nav-img.png" alt=""> <a href="#."
                                                                                                      class="btn btn-inverse">Shop
                                    Now</a></div>
                        </div>
                    </li>
                    <li><a href="/contact"> contact</a></li>
                    <li><a href="/blog"> Blog</a></li>
                </ul>
            </div>

            <!-- Nav Right -->
            <div class="nav-right">
                <ul class="navbar-right">
                    <!-- USER INFO -->
                    <li><a href="/home"><i class="lnr lnr-user"></i> </a></li>
                    <!-- USER BASKET -->
                    <li><a id="cd-menu-trigger" href="#0"><i class="lnr lnr-cart"></i><span class="c-no">2</span> </a>
                    </li>
                    <!-- SEARCH BAR -->
                    <li><a href="javascript:void(0);" class="search-open"><i class="lnr lnr-magnifier"></i></a>
                        <div class="search-inside animated bounceInUp"><i class="icon-close search-close"></i>
                            <div class="search-overlay"></div>
                            <div class="position-center-center">
                                <div class="search">
                                    <form>
                                        <input type="search" placeholder="Search Shop">
                                        <button type="submit"><i class="icon-"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>
        </nav>
    </div>
    <div class="clearfix"></div>
</header>
