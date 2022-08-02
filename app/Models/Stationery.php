<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stationery extends Model
{
    use HasFactory;
    protected $fillable=['stationery_ISBN','stationery_title','stationery_price','stationery_quantity','stationery_publisher','stationery_image','stationery_description','stationery_category_ID'];
    public function category(){
        return $this->belongsTo('App\Models\Category');
    }

    public function myCart(){
        return $this->hasMany('App\Models\myCart');
    }
}
