<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable=['book_ISBN','book_title','book_price','book_quantity','book_publisher','book_image','book_author','book_pages','book_language','book_format','book_description','category_ID'];
    public function category(){
        //return $this->belongsTo(Category::class,'category_ID','category_ID');
        return $this->belongsTo('App\Models\Category');
    }

    public function myCart(){
        return $this->hasMany('App\Models\myCart');
    }
}
