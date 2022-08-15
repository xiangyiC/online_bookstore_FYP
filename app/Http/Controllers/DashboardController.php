<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use DB;
use App\Models\OrderItem;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index(){
        $orders = Order::select(DB::raw("COUNT(*) as count"))
        ->whereYear('created_at',date('Y'))
        ->groupBy(DB::raw("Month(created_at)"))
        ->pluck('count');
        $months=Order::select(DB::raw("Month(created_at) as month"))
        ->whereYear('created_at',date('Y'))
        ->groupBy(DB::raw("Month(created_at)"))
        ->pluck('month');

        $datas = array(0,0,0,0,0,0,0,0,0,0,0,0);
        foreach($months as $index => $month){
            $datas[$month-1]=$orders[$index];
        }

        $sales = Order::select(DB::raw("SUM(order_amount) as total"))
        ->whereYear('created_at',date('Y'))
        ->groupBy(DB::raw("Month(created_at)"))
        ->pluck('total');

        $totals = array(0,0,0,0,0,0,0,0,0,0,0,0);
        foreach($months as $index => $month){
            $totals[$month-1]=$sales[$index];
        }

        $sales_sum = Order::sum('order_amount');
        $order_sum = Order::count();

        Session()->put('sales_sum', $sales_sum);
        Session()->put('order_sum', $order_sum);
        
        $order_current_month = DB::table('orders')
                ->whereMonth('created_at', Carbon::now()->month)
                ->count();
        $sales_current_month = Order::whereMonth('created_at',  Carbon::now()->month)->sum('order_amount');
        
        Session()->put('sales_current_month', $sales_current_month);
        Session()->put('order_current_month', $order_current_month);

        return view("admin_dashboard",compact('datas','totals'));
        //return view("admin_dashboard",compact('datas','totals','books','stationeries'));
    }
}
