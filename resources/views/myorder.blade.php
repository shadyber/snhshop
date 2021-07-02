@extends('layouts.app')
@section('title','My Orders')
@section('content')
    <div class="container row">

        <div class="col-lg-3 order-lg-first col-md-6 order-md-last mt-md-50px mt-lm-50px" data-aos="fade-up"
             data-aos-delay="200">
            <div class="blog-sidebar mr-20px">

                <!-- Sidebar single item -->
                <div class="sidebar-widget">
                    <h3 class="sidebar-title">Usre Menu</h3>
                    <div class="category-post">
                        <ul>
                            <li><a href="/profile" class="selected">Shipping Address</a></li>
                            <li><a href="/myorders" class=""> My Orders </a></li>
                            <li><a href="#" class="">My Wishlist<span>(5)</span> </a></li>
                            <li><a href="/myaccount" class=""> Account Settings </a></li>

                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-lg-8 order-lg-first col-md-8 order-md-last mt-md-50px mt-lm-50px" data-aos="fade-up"
             data-aos-delay="200">
<ul>
    @foreach($orders as $order)
        
    @endforeach
</ul>


        </div>



    </div>
@endsection
