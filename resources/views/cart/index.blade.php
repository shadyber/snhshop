@extends('layouts.app')
@section('content')
    <section class="sub-bnr" data-stellar-background-ratio="0.5" style="background-position: 0% -70.5px;">
        <div class="position-center-center">
            <div class="container">
                <h4>Shopping Cart</h4>
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Shop</a></li>
                    <li class="active">Shopping Cart</li>
                </ol>
            </div>
        </div>
    </section>



    <div id="content">

        <!-- PAGES INNER -->
        <section class="padding-top-100 padding-bottom-100 pages-in chart-page">
            <div class="container">

                <!-- Payments Steps -->
                <div class="shopping-cart text-center">
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col" class="text-left">Items</th>
                            <th scope="col">Price</th>
                            <th scope="col">Qty</th>
                            <th scope="col">Total</th>
                            <th scope="col">&nbsp;</th>
                        </tr>
                        </thead>
                        <tbody>
                      @foreach(\App\Models\Cart::myCart() as $cart)
                        <tr>
                            <th class="text-left"> <!-- Media Image -->
                                <a href="/item/{{$cart['slug']}}" class="item-img">
                                    <img class="media-object" src="{{$cart['photo']}}" alt="{{$cart['name']}}"> </a>
                                <!-- Item Name -->
                                <div class="media-body">
                                    <span>{{$cart['name']}}</span>
                                    <p>{{$cart['name']}}</p>
                                </div>
                            </th>
                            <td><span class="price"><small>$USD </small>{{$cart['price']}}</span></td>
                            <td>
                                <div class="quantity">
                                    <input type="number" min="1" max="100" step="1" value="{{$cart['quantity']}}" class="form-control qty"><div class="quantity-nav"><div class="quantity-button quantity-up"><i class="fa fa-caret-up"></i></div><div class="quantity-button quantity-down"><i class="fa fa-caret-down"></i></div></div>
                                </div>
                            </td>
                            <td><span class="price"><small>$USD</small> {{$cart['price'] * $cart['quantity']}}</span></td>
                            <td><a href="#."><i class="icon-close"></i></a></td>
                        </tr>
                      @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <!-- PAGES INNER -->
        <section class="padding-top-100 padding-bottom-100 light-gray-bg shopping-cart small-cart">
            <div class="container">

                <!-- SHOPPING INFORMATION -->
                <div class="cart-ship-info margin-top-0">
                    <div class="row">

                        <!-- DISCOUNT CODE -->
                        <div class="col-sm-7">
                            <h6>Discound Code</h6>
                            <form>
                                <input type="text" value="" placeholder="ENTER YOUR CODE IF YOU HAVE ONE">
                                <button type="submit" class="btn btn-small btn-dark">APPLY CODE</button>
                            </form>
                            <div class="coupn-btn"> <a href="#." class="btn">continue shopping</a> <a href="#." class="btn">update cart</a> </div>
                        </div>

                        <!-- SUB TOTAL -->
                        <div class="col-sm-5">
                            <h6>Grand Total</h6>
                            <div class="grand-total">
                                <div class="order-detail">
                                    @php
                                    $subtotal=0;
                                    @endphp
                                    @foreach(\App\Models\Cart::myCart() as $cart)
                                    <p>{{$cart['name']}}<span>$USD  {{$subtotal += $cart['price'] * $cart['quantity']}} </span></p>

                                    @endforeach

                                    <!-- SUB TOTAL -->
                                    <p class="sub-total">SUB TOTAL COST <span>$USD {{$subtotal}}</span></p>

                                    <!--  TOTAL -->
                                    <p class="all-total">TOTAL COST(With 15%) <span> $USD {{$subtotal * 1.15}}</span></p>
                                </div>
                                <a href="#." class="btn margin-top-20">Proceed to checkout</a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
