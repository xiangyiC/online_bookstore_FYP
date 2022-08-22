<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\User;
Use Session;

class UserController extends Controller
{
    public function view_customer(){
        $view_customer=User::all()->where('role_as','0');
        return view('admin_customer_list')->with('customers',$view_customer);
    }

    public function delete_customer($id){
        $customer = DB::table('users')->where('id', $id);
        $customer->delete();
        Session::flash('success',"User was deleted successfully!");
        return redirect()->route('admin_customer_list');
    }
}
