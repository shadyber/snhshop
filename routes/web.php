<?php

use App\Http\Controllers;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Models\Address;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();




Route::group(['middleware' => 'role:admin'], function() {
    Route::resource('/items',App\Http\Controllers\AdminItemController::class);
    Route::resource('/order',App\Http\Controllers\OrderController::class);
    Route::post('/orderstatus',[Controllers\OrderController::class,'updateStatus'])->name('order.status');
    Route::post('/photoupdate', [App\Http\Controllers\AdminItemController::class, 'photoupdate'])->name('photoupdate');
    Route::resource('/itemsphoto',App\Http\Controllers\ItemPhotosController::class);
    Route::get('/about/create',[AboutController::class,'create']);
    Route::get('/about/edit',[AboutController::class,'create']);
    Route::post('/about',[AboutController::class,'store']);
});





Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/gallery', App\Http\Controllers\GalleryController::class);


Route::resource('/item',App\Http\Controllers\ItemController::class);

Route::resource('/shipping',App\Http\Controllers\ShippingInfoController::class);
Route::get('/myorders',[App\Http\Controllers\OrderController::class,'myorders'])->name('myorders');


Route::resource('/cat',App\Http\Controllers\ItemCategoryController::class);

Route::resource('/blog',App\Http\Controllers\BlogController::class);

Route::get('/about', function(){
   return view('about');
});
Route::get('/terms', function(){
    return view('terms');
});
Route::get('/privacy', function(){
    return view('privacy');
});

Route::resource('/address',AddressController::class);


Route::get('/contact', function(){
    return view('contact')->with('address', Address::all()->last());
});

Route::get('/addtocart/{id}',[CartController::class,'addToCart'])->name('addtocart');
Route::get('/multipleaddtocart/{id}/{qnt}',[CartController::class,'addMultipleToCart'])->name('addmultipletocart');

Route::get('/mycart',[CartController::class,'myCart'])->name('mycart');

Route::get('/checkout',[CheckoutController::class,'index'])->name('checkout');


Route::get('/search',[\App\Http\Controllers\SearchController::class,'search'])->name('search');

Route::get('/payments',[\App\Http\Controllers\PaymentController::class,'index'])->name('payments');


Route::get('stripe',  [\App\Http\Controllers\StripePaymentController::class,'stripe'])->name('stripe');
Route::post('stripe',  [\App\Http\Controllers\StripePaymentController::class,'stripePost'])->name('stripe.post');



Route::get('payment',[\App\Http\Controllers\PaymentController::class,'index']);
Route::post('charge', [\App\Http\Controllers\PaymentController::class,'charge']);
Route::get('paymentsuccess',[\App\Http\Controllers\PaymentController::class,'payment_success']);
Route::get('paymenterror', [\App\Http\Controllers\PaymentController::class,'payment_error']);



Route::get('/newapp', function (){
    \Illuminate\Support\Facades\Artisan::call('migrate:fresh');
    \Illuminate\Support\Facades\Artisan::call('db:seed');
    echo 'initialized';
});


Route::get('/restart-server',function (){

    $exitCode = Artisan::call('route:clear');

    echo  $exitCode;
    $exitCode1 = Artisan::call('view:clear');

    echo  $exitCode1;
    $exitCode2 = Artisan::call('config:clear');

    echo  $exitCode2;
    $exitCode3 = Artisan::call('cache:clear');

    echo  $exitCode3;
});
