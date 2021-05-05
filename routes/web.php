<?php

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

Route::resource('/item',App\Http\Controllers\ItemController::class);
Route::resource('/items',App\Http\Controllers\AdminItemController::class);
Route::resource('/cat',App\Http\Controllers\ItemCategoryController::class);
Route::resource('/blog',App\Http\Controllers\BlogController::class);
Route::get('/about', function(){
   return view('about');
});
Route::get('/about/create',[\App\Http\Controllers\AboutController::class,'create']);
Route::get('/about/edit',[\App\Http\Controllers\AboutController::class,'create']);
Route::post('/about',[\App\Http\Controllers\AboutController::class,'store']);

Route::post('/address',[\App\Http\Controllers\AddressController::class,'store']);
Route::get('/address',[\App\Http\Controllers\AddressController::class,'create']);

Route::get('/contact', function(){
    return view('contact')->with('address',\App\Models\Address::all()->last());
});
