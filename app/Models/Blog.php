<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    use Sluggable;

    protected $fillable=['title','detail','slug','tags','photo','user_id','blog_category_id'];


    public function user(){
        return $this->belongsTo(User::class);
    }


    public function category(){
        return $this->belongsTo(BlogCategory::class);
    }
    public function comments(){
        return $this->hasMany(BlogComment::class);
    }


    public static function lastN($n){
        return Blog::orderBy('id', 'desc')->take($n)->get();
    }



    public function sluggable(): array
    {
        // TODO: Implement sluggable() method.
        return [
            'slug'=>['source'=>'title']
        ];
    }


}
