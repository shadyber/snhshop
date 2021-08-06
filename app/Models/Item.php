<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    use HasFactory;
    use Sluggable;
    use SoftDeletes;

    protected $fillable=['name','slug','detail','item_category_id','thumb', 'photo','color','price','user_id','tags','measurement','weight','init_qnt','status','badge'];
    protected $dates = [ 'deleted_at' ];

    public function user(){
        return $this->belongsTo(User::class);
    }

   public function variety(){
        return $this->hasMany(Verity::class);
    }


    public function Category(){
        return $this->belongsTo(ItemCategory::class,'item_category_id');
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

    public static function universalN($n){
        return Item::orderBy('id','desc')->where('item_category_id','LIKE','3')->take($n)->get();
    }

 public static function womensN($n){
        return Item::orderBy('id','desc')->where('item_category_id','LIKE','2')->take($n)->get();
    }
    public static function mensN($n){
        return Item::orderBy('id','desc')->where('item_category_id','LIKE','1')->take($n)->get();
    }

}
