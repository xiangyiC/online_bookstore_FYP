<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class myCart extends Model
{
    use HasFactory;
    protected $fillable=['order_ID', 'user_ID','ISBN','type','quantity'];

    public function book(){
        return $this->belongsTo('App\Models\Book');
    }

    public function stationery(){
        return $this->belongsTo('App\Models\Stationery');
    }


    public function user(){
        return $this->belongsTo('App\Models\User');
    }

}
