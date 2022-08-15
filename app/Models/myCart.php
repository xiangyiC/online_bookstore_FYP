<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class myCart extends Model
{
    use HasFactory;
    protected $fillable=['order_ID', 'user_ID','ISBN','type','quantity'];

    public function books(){
        return $this->belongsTo(Book::class,'ISBN','book_ISBN');
    }

    public function stationeries(){
        return $this->belongsTo(Stationery::class,'ISBN','stationery_ISBN');
    }


    public function user(){
        return $this->belongsTo('App\Models\User');
    }

}
