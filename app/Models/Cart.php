<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    public static function myCart(){
        if(session()->get('cart')){

            return session()->get('cart');
        }else{
            return [];
        }

    }
}
