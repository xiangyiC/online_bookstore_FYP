<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable=['category_ID','product','category_name', 'category_type'];
    public function book(){
        return $this->hasMany('App\Models\Book');
    }

    public function stationery(){
        return $this->hasMany('App\Models\Stationery');
    }
}
