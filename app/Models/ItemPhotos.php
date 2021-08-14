<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemPhotos extends Model
{
    use HasFactory;

    public function item(){
        return $this->belongsTo(Item::class);
    }
    public function verity(){
        return $this->belongsTo(Verity::class);
    }


    public static function varityPhoto($n){
        return ItemPhotos::orderBy('id', 'desc')->where('item_category_id','LIKE','3')->take($n)->get();
    }
}
