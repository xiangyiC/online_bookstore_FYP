<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;
    protected $fillable=['order_ID','ISBN','price','quantity','subtotal','type'];

    public function book(){
        return $this->belongsTo(Book::class,'ISBN','book_ISBN');
    }

    public function stationery(){
        return $this->belongsTo(Stationery::class,'ISBN','stationery_ISBN');
    }


    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
