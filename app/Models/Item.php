<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;    use Sluggable;
    protected $fillable=['name','slug','detail','item_category_id','thumb', 'photo','color','price','user_id','tags','measurement','weight','init_qnt','status','badge'];

    public function user(){
        return $this->belongsTo(User::class);
    }


    public function Category(){
        return $this->belongsTo(ItemCategory::class);
    }

    public function itemPhotos(){
        return $this->hasMany(ItemPhotos::class);
    }

    public function sluggable(): array
    {
        // TODO: Implement sluggable() method.
        return [
            'slug'=>['source'=>'name']
        ];
    }

    public static function lastN($n){
        return Item::orderBy('id', 'desc')->take($n)->get();
    }

    public static function popularN($n){
        return Item::orderBy('visit', 'desc')->take($n)->get();
    }

}
