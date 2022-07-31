<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use DB;
use App\Models\OrderItem;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(){
        $orders = OrderItem::select(DB::raw("COUNT(*) as count"))
        ->whereYear('created_at',date('Y'))
        ->groupBy(DB::raw("Month(created_at)"))
        ->pluck('count');
        $months=OrderItem::select(DB::raw("Month(created_at) as month"))
        ->whereYear('created_at',date('Y'))
        ->groupBy(DB::raw("Month(created_at)"))
        ->pluck('month');

        $datas = array(0,0,0,0,0,0,0,0,0,0,0,0);
        foreach($months as $index => $month){
            $datas[$month-1]=$orders[$index];
        }

        $sales = OrderItem::select(DB::raw("SUM(subtotal) as total"))
        ->whereYear('created_at',date('Y'))
        ->groupBy(DB::raw("Month(created_at)"))
        ->pluck('total');

        $totals = array(0,0,0,0,0,0,0,0,0,0,0,0);
        foreach($months as $index => $month){
            $totals[$month-1]=$sales[$index];
        }

        $books = OrderItem::select(DB::raw("COUNT(ISBN) as ID"))
        ->where('ISBN','=','B%')
        ->whereYear('created_at',date('Y'))
        ->groupBy(DB::raw("Month(created_at)"))
        ->pluck('ID');

        $stationeries = OrderItem::select(DB::raw("COUNT(ISBN) as ID"))
        ->where('ISBN','=','S%')
        ->whereYear('created_at',date('Y'))
        ->groupBy(DB::raw("Month(created_at)"))
        ->pluck('ID');

        return view("admin_dashboard",compact('datas','totals','books','stationeries'));
    }
}
