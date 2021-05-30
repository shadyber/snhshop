<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\CartController;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/gallery', App\Http\Controllers\GalleryController::class);


Route::resource('/item',App\Http\Controllers\ItemController::class);
Route::resource('/items',App\Http\Controllers\AdminItemController::class);
Route::resource('/itemsphoto',App\Http\Controllers\ItemPhotosController::class);

Route::post('/photoupdate', [App\Http\Controllers\AdminItemController::class, 'photoupdate'])->name('photoupdate');

Route::resource('/cat',App\Http\Controllers\ItemCategoryController::class);

Route::resource('/blog',App\Http\Controllers\BlogController::class);
Route::get('/about', function(){
   return view('about');
});
Route::get('/about/create',[AboutController::class,'create']);
Route::get('/about/edit',[AboutController::class,'create']);
Route::post('/about',[AboutController::class,'store']);

Route::post('/address',[AddressController::class,'store']);
Route::get('/address',[AddressController::class,'create']);

Route::get('/contact', function(){
    return view('contact')->with('address', Address::all()->last());
});

Route::get('/addtocart/{id}',[CartController::class,'addToCart'])->name('addtocart');
Route::get('/mycart',[CartController::class,'myCart'])->name('mycart');
