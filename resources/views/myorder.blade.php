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
                            <li><a href="/home" class="selected">Shipping Address</a></li>
                            <li><a href="/myorders" class=""> My Orders </a></li>
                            <li><a href="#" class="">My Wishlist<span>(5)</span> </a></li>


                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-lg-8 order-lg-first col-md-8 order-md-last mt-md-50px mt-lm-50px" data-aos="fade-up"
             data-aos-delay="200">
<ul>
    @foreach($orders as $order)

        {{dd($order)}}
        <div class="card" style="width: 18rem;">
            <img src="#" class="card-img-top" alt="...">
            <div class="card-body {{$order->status == 'sent' ? 'bg-info' : 'bg-succuss'}}">
                <h5 class="card-title">Order {{$order->created_at}}</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <ul class="list-group list-group-flush">

                @foreach($cart_item=json_decode($order->cart) as $cart)

                    <li class="btn btn-outline-primary pull-right">
                        <a href="/item/{{$cart->slug}}" class="list-inline-item">{{$cart->name}}</a>  X {{$cart->quantity}}
                    </li>
                @endforeach

            </ul>
            <div class="card-body">

            </div>
        </div>

    @endforeach
</ul>


        </div>



    </div>
@endsection
