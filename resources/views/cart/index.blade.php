@extends('layouts.app')
@section('title','My Cart')
@section('content')


    <!-- Cart Area Start -->
    <div class="cart-main-area pb-100px">
        <div class="container">
            <h3 class="cart-page-title">Your cart items</h3>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <form action="#">
                        <div class="table-content table-responsive cart-table-content">
                            <table>
                                <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Product Name</th>
                                    <th>Until Price</th>
                                    <th>Qty</th>
                                    <th>Subtotal</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach(\App\Models\Cart::myCart() as $cart)


                                    <tr>
                                    <td class="product-thumbnail">
                                        <a href="/item/{{$cart['slug']}}"><img class="img-responsive ml-15px"
                                                         src="{{$cart['thumb']}}" alt="{{$cart['name']}}" /></a>
                                    </td>
                                    <td class="product-name"><a href="/item/{{$cart['slug']}}">{{$cart['name']}}</a></td>
                                    <td class="product-price-cart"><span class="amount">${{$cart['price']}}</span></td>
                                    <td class="product-quantity">
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" type="text" name="qtybutton" id="qtybutton"
                                                   value="{{$cart['quantity']}}" />
                                        </div>
                                    </td>
                                    <td class="product-subtotal">${{$cart['price'] * $cart['quantity']}}</td>
                                    <td class="product-remove">
                                        <a href="#"><i class="fa fa-pencil"></i></a>
                                        <a href="/removecart/{{$cart['id']}}"><i class="fa fa-times"></i></a>
                                    </td>
                                </tr>
                           @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="cart-shiping-update-wrapper">
                                    <div class="cart-shiping-update">
                                        <a href="/item">Continue Shopping</a>
                                    </div>
                                    <div class="cart-clear">
                                        <button>Update Shopping Cart</button>
                                        <a href="/destroyCart">Clear Shopping Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="row">

                        <div class="col-lg-8 col-md-6 mt-md-30px"></div>
                        <div class="col-lg-4 col-md-12 mt-md-30px">
                            <form method="get" action="/checkout">
                            <div class="grand-totall">
                                <div class="title-wrap">
                                    <h4 class="cart-bottom-title section-bg-gary-cart">Cart Total</h4>
                                </div>

                                <h5>Total products <span> ${{\App\Models\Cart::totalCart()}} </span></h5>
                                <div class="total-shipping">
                                    <h5>Total shipping</h5>
                                    <ul>
                                        <li><input type="checkbox" name="shipping_type" required readonly checked /> Standard <span>$20.00</span></li>
                                    </ul>
                                </div>
                                <h4 class="grand-totall-title">Grand Total <span>${{\App\Models\Cart::totalCart()+20}}</span></h4>
                                <button type="submit" class="btn-block btn-primary">Proceed to Checkout</button>

                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cart Area End -->
@endsection
