<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Category;
use App\Models\Book;
use App\Models\Stationery;
use App\Models\myCart;
use App\Models\Order;
use App\Models\OrderItem;
Use Session;
use Auth;
use Stripe;

class OrderController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function payment_post(Request $request)
    {
    try{
	Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
                "amount" => $request->sub*100,
                "currency" => "MYR",
                "source" => $request->stripeToken,
                "description" => "This payment is testing purpose of southern online",
        ]);
           
        $addCart=Order::Create([
            'order_amount'=>$request->sub,
            'user_ID'=>Auth::id(),
            'payment_status'=>'done',
            'order_status'=>'pending',
            'customer_name'=>$request->name,
            'customer_phoneNo'=>$request->phone,
            'street'=>$request->street,
            'city'=>$request->city,
            'state'=>$request->state,
            'zip_code'=>$request->zip_code,

        ]);

        $orderID=DB::table('orders')->where('user_ID','=', Auth::id())->orderBy('created_at', 'desc')->first();

        //create order items
        $cartitems=myCart::where('user_id',Auth::id())->get();
        
        foreach($cartitems as $item){
            $orderItem = new OrderItem();
            $orderItem->order_ID = $orderID->id;
            $orderItem->ISBN =$item->ISBN;
            $orderItem->quantity = $item->quantity;
            if($item->type == "book"){
                $orderItem->price = $item->books->book_price;
                $orderItem->subtotal = $item->books->book_price*$item->quantity;
                $orderItem->type='book';
            }   
            
            if($item->type == "stationery"){
                $orderItem->price = $item->stationeries->stationery_price;
                $orderItem->subtotal = $item->stationeries->stationery_price*$item->quantity;
                $orderItem->type='stationery';
            }  

            $orderItem -> save();

            //update product quantity
            if($item->type == "book"){
             
                $book=DB::table('books')->where('book_ISBN', $item->ISBN)
                ->decrement('book_quantity', $item->quantity);
            } 
            
            if($item->type == "stationery"){
         
                $book=DB::table('stationeries')->where('stationery_ISBN', $item->ISBN)
                ->decrement('stationery_quantity', $item->quantity);
            }
          
        }

        //delete cart items after order
        $cart=myCart::where('user_id',Auth::id())->get();
        myCart::destroy($cart);

        return redirect()->route('order_list');

        }catch(\Stripe\Exception\CardException $e) {
            Session::flash('error',"A payment error occurred: {$e->getError()->message}");
            return redirect()->route('to_checkout');
           
          } catch (\Stripe\Exception\InvalidRequestException $e) {
            Session::flash('error',"An invalid request occurred.");
            return redirect()->route('to_checkout');
          } catch (Exception $e) {
            Session::flash('error',"Transaction Failed.");
            return redirect()->route('to_checkout');
          }
    }
    
    public function admin_view(){
        $viewOrder=DB::table('orders')->orderBy('created_at', 'desc')->get();
        return view('admin_order_list')->with('orders', $viewOrder);
    }

    public function customer_view(){
        $order=DB::table('orders')->where('user_ID','=', Auth::id())->orderBy('created_at', 'desc')->get();
        return view('order_list')->with('orders', $order);
    }

    public function admin_order_detail($id){

        $orders=Order::all()->where('id',$id);
        $orderItems=OrderItem::all()->where('order_ID',$id);
        return view('admin_order_details',compact('orderItems','orders'));
    }

    public function order_details($id){
        $orders=Order::all()->where('id',$id);
        $orderItems=OrderItem::all()->where('order_ID',$id);
        return view('order_details',compact('orderItems','orders'));
    }

    public function update_order_status(){
        $r=request();
        $book_category=DB::table('orders')->where('id', $r->order_ID)
        ->update(['order_status' => $r->status]);
        return redirect()->back();
        
    }

    public function delete_order($order_ID){
        $order = DB::table('orders')->where('id', $order_ID);
        $order->delete();
        Session::flash('success',"Order was deleted successfully!");
        return redirect()->route('admin_order_list');
    }

}
