<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Category;
Use Session;

class BookCategoryController extends Controller
{
    public function add_book_category(){
        $r=request();
        $new_id='B' . date('Ymd'). date('His');

        $add_book_category=Category::firstOrCreate([
            
            'product'=> 'book',
            'category_name' => $r->book_category,
            'category_type' => $r->book_category_type,],[
            'category_ID'=> $new_id, 
        ]);

        if ($add_book_category->wasRecentlyCreated) {
            Session::flash('success',"Book category was created sucessfully!");
            // user just created in the database; it didn't exist before.
        } else {
            Session::flash('error',"Book category already exists!");
            // user already existed and was pulled from database.
        }
        return redirect()->route('admin_book_category_list');
    }

    public function view_book_category(){
        $book_category_list=Category::all()->where('product','book');
        return view('admin_book_category_list')->with('categories',$book_category_list);
    }

    public function delete_book_category($category_ID){
        $delete_category = DB::table('categories')->where('category_ID', $category_ID);
        $delete_category->delete();
        Session::flash('success',"Book category was deleted successfully!");
        return redirect()->route('admin_book_category_list');
    }

    public function edit_book_category($category_ID){
        $book_category_list=Category::all()->where('category_ID',$category_ID);
        return view('admin_edit_book_category')->with('categories',$book_category_list);
    }

    public function update_book_category(){
        $r=request();
        $book_category=DB::table('categories')->where('category_ID', $r->category_ID)
        ->update(['category_name' => $r->book_category, 'category_type' =>$r->book_category_type]); 
        Session::flash('success',"Book category was updated successfully!");

        return redirect()->route('admin_book_category_list');
    }
}
