<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function address(){
        return $this->hasOne(ShippingInfo::class,'id');
    }

    
    public function user(){
        return $this->hasOne(User::class,'id');
    }
}
