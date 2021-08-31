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


                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-lg-8 order-lg-first col-md-8 order-md-last mt-md-50px mt-lm-50px" data-aos="fade-up"
             data-aos-delay="200">
<div class="row">

    @foreach($orders as $order)


        <div class="card col-md-4 offset-1" >
            <img src="/assets/images/icons/{{$order->status}}.png" class="card-img-top" alt="...">
            <div class="card-body {{($order->status == 'sent') ? 'bg-info' : 'bg-succuss'}}">
                <h5 class="card-title">Order_{{$order->id}} </h5>

                <p class="card-text">Payment: <span class="label badge-info"><b>  {{$order->payment->payment_status}}</b></span> </p>
            </div>
            <ul class="list-group list-group-flush">

                @foreach($cart_item=json_decode($order->cart) as $cart)

                    <li class="">
                        <a href="/item/{{$cart->slug}}" class="">{{$cart->name}}</a>  X {{$cart->quantity}}
                    </li>
                @endforeach

            </ul>
            <div class="card-body">
                {{$order->created_at->diffForHumans()}}
            </div>
        </div>

    @endforeach
</div>


        </div>



    </div>
@endsection
