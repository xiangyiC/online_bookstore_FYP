<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\User;
Use Session;

class UserController extends Controller
{
    public function view_customer(){
        $view_customer=User::all();
        return view('admin_customer_list')->with('customers',$view_customer);
    }
}
