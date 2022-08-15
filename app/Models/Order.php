<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable=['order_amount','user_ID','payment_status', 'order_status', 'customer_name', 'customer_phoneNo','street','city','state','zip_code'];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function myCart(){
        return $this->hasMany('App\Models\myCart');
    }

}
