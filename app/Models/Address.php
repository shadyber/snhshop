<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    protected $fillable=['tel','tel2','email','email2','address1','address2'];

    public static function myAddress(){
        return Address::all()->last();
    }
}
