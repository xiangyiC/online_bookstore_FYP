<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Category;
Use Session;

class StationeryCategoryController extends Controller
{
    public function add_stationery_category(){
        $r=request();
        $new_id='S' . date('Ymd'). date('His');

        $add_stationery_category=Category::firstOrCreate([
            
            'product'=> 'stationery',
            'category_name' => $r->stationery_category,
            'category_type' => $r->stationery_category_type,],[
            'category_ID'=> $new_id, 
        ]);

        if ($add_stationery_category->wasRecentlyCreated) {
            Session::flash('success',"Stationery category was created sucessfully!");
            // user just created in the database; it didn't exist before.
        } else {
            Session::flash('error',"Stationery category already exists!");
            // user already existed and was pulled from database.
        }
        return view('admin_add_stationery_category');
    }

    public function view_stationery_category(){
        $stationery_category_list=Category::all()->where('product','stationery');
        return view('admin_stationery_category_list')->with('categories',$stationery_category_list);
    }

    public function delete_stationery_category($category_ID){
        $delete_category = DB::table('categories')->where('category_ID', $category_ID);
        $delete_category->delete();
        Session::flash('success',"Stationery category was deleted successfully!");
        return redirect()->route('admin_stationery_category_list');
    }

    public function edit_stationery_category($category_ID){
        $stationery_category_list=Category::all()->where('category_ID',$category_ID);
        return view('admin_edit_stationery_category')->with('categories',$stationery_category_list);
    }

    public function update_stationery_category(){
        $r=request();
        $book_category=DB::table('categories')->where('category_ID', $r->category_ID)
        ->update(['category_name' => $r->stationery_category, 'category_type' =>$r->stationery_category_type]); 

        return redirect()->route('admin_stationery_category_list');
    }
}
