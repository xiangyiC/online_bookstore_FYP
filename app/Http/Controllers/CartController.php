<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Category;
use App\Models\Book;
use App\Models\Stationery;
use App\Models\myCart;
Use Session;
use Auth;

class CartController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function add_cart(){
        $r=request();
        if(myCart::where('ISBN',$r->ISBN)->where('user_ID',Auth::id())->exists()){
            $cart=myCart::where('ISBN',$r->ISBN)->where('user_ID',Auth::id())->increment('quantity', $r->quantity);
            Session::flash('success',"Product quantity in your cart is updated!");
        }else{

            $addCart=myCart::Create([
                
                'user_ID'=>Auth::id(),
                'order_ID'=>'',
                'ISBN'=>$r->ISBN,
                'quantity'=>$r->quantity,
                'type'=>$r->type,

            ]);

            if ($addCart->wasRecentlyCreated) {
                Session::flash('success',"Product was added into your cart!");
                // user just created in the database; it didn't exist before.
            } else {
                Session::flash('error',"Product added failed!");
                // user already existed and was pulled from database.
            }
        }

        

        $this->cartItem();
        return redirect()->back();
    }

    public function showMyCart(){

        $book_count = DB::table('my_carts')->where('type','=','book')->where('my_carts.user_ID', '=', Auth::id())->count();
        $stationery_count = DB::table('my_carts')->where('type','=','stationery')->where('my_carts.user_ID', '=', Auth::id())->count();
        Session()->put('book_count', $book_count);//assign value to session variable
        Session()->put('stationery_count', $stationery_count);
            
            $my_cart=myCart::all()->where('user_ID',Auth::id())->where('order_ID','');
            $this->cartItem();
            
            return view('my_cart',compact('my_cart'));
            
            //return view('my_cart',compact('books','stationeries'));

    }

    public static function cartItem(){
        $cartItem = 0;
        $book_num=0;
        $stationery_num=0;

        $noItem=DB::table('my_carts')
        ->leftjoin('books', 'books.book_ISBN','=','my_carts.ISBN')
        ->where('type','=','book')
        ->select(DB::raw('COUNT(*) as count_item'))
        ->where('my_carts.order_ID', '=', '')// if '' means haven't make payment
        ->where('my_carts.user_ID', '=', Auth::id())// item match with current login user
        ->groupBy('my_carts.user_ID')
        ->first();
        if($noItem){
            $book_num=$noItem->count_item;
        }

        $stationeryItem=DB::table('my_carts')
        ->leftjoin('stationeries', 'stationeries.stationery_ISBN','=','my_carts.ISBN')
        ->where('type','=','stationery')
        ->select(DB::raw('COUNT(*) as counts'))
        ->where('my_carts.order_ID', '=', '')// if '' means haven't make payment
        ->where('my_carts.user_ID', '=', Auth::id())// item match with current login user
        ->groupBy('my_carts.user_ID')
        ->first();
        if($stationeryItem){
            $stationery_num=$stationeryItem->counts;
        }

        $cartItem=$book_num + $stationery_num;
        Session()->put('cartItem', $cartItem);//assign value to session variable
        //return response()->json(['count'=>$cartItem]);
        return $cartItem;
     
    }

    public function update_cart(){
        $r=request();
        $ISBN = $r->ISBN;
        $quantity = $r->quantity;

        if(Auth::check()){

            if(myCart::where('ISBN',$ISBN)->where('user_ID',Auth::id())->exists()){
                $cart=myCart::where('ISBN',$ISBN)->where('user_ID',Auth::id())->first();
                $cart->quantity=$quantity;
                $cart->update();
            }
        }
        
    }

    public function delete_cart($ISBN){

        if(Auth::check()){

            if(myCart::where('ISBN',$ISBN)->where('user_ID',Auth::id())->exists()){
                $cart=myCart::where('ISBN',$ISBN)->where('user_ID',Auth::id())->first();
                $cart->delete();
                return redirect()->route('show_my_cart');
            }
        }
    }

    public function checkout(){

        $book_count = DB::table('my_carts')->where('type','=','book')->count();
        $stationery_count = DB::table('my_carts')->where('type','=','stationery')->count();
        Session()->put('book_count', $book_count);//assign value to session variable
        Session()->put('stationery_count', $stationery_count);
            //more than one raw
            $books=DB::table('my_carts')
            ->leftjoin('books', 'books.book_ISBN','=','my_carts.ISBN')
            ->select('my_carts.quantity as cartQTY', 'my_carts.id as cid', 'books.*')
            ->where('my_carts.order_ID','=','')//if '' means haven't make payment
            ->where('my_carts.user_ID','=',Auth::id())//item match with current login user
            ->where('type','=','book')
            ->get();

            $stationeries=DB::table('my_carts')
            ->leftjoin('stationeries', 'stationeries.stationery_ISBN','=','my_carts.ISBN')
            ->select('my_carts.quantity as cartQTY', 'my_carts.id as cid','stationeries.*')
            ->where('my_carts.order_ID','=','')//if '' means haven't make payment
            ->where('my_carts.user_ID','=',Auth::id())//item match with current login user
            ->where('type','=','stationery')
            ->get();
            $this->cartItem();
            return view('checkout',compact('books','stationeries'));

    }

    
}
