<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Category;
use App\Models\Book;
Use Session;

class BookController extends Controller
{
    public function add_book(){
        $r=request();
        
        $image=$r->file('bookImage');
        $image->move('images',$image->getClientOriginalName()); // images is the location
        $imageName=$image->getClientOriginalName();

        $add_book=Book::firstOrCreate([
            
            'book_ISBN'=> $r->bookISBN,
            'book_title'=> $r->bookTitle,
            'book_price'=> $r->bookPrice,
            'book_quantity'=> $r->bookQuantity,
            'book_publisher'=> $r->bookPublisher,
            'book_author'=> $r->bookAuthor,
            'book_pages'=> $r->bookPages,
            'book_language'=> $r->bookLanguage,
            'book_format'=> $r->bookFormat,
            'book_description'=> $r->bookDescription,
            'category_ID'=> $r->category_ID,
            'book_image'=>$imageName,
        ]);

        if ($add_book->wasRecentlyCreated) {
            Session::flash('success',"Book was created sucessfully!");
            // user just created in the database; it didn't exist before.
        } else {
            Session::flash('error',"Book already exists!");
            // user already existed and was pulled from database.
        }
        return redirect()->route('admin_book_list');
    }

    public function view_book(){
        $book_list=DB::table('books')
        ->leftjoin('categories','categories.category_ID','=','books.category_ID')
        ->select('books.*','categories.category_name as categoryName', 'categories.category_type as categoryType')
        ->get();
        return view('admin_book_list')->with('books',$book_list);
    }

    public function delete_book($book_ISBN){
        $delete_book = DB::table('books')->where('book_ISBN', $book_ISBN);
        $delete_book->delete();
        Session::flash('success',"Book was deleted successfully!");
        return redirect()->route('admin_book_list');
    }

    public function edit_book($book_ISBN){
        $book_list=Book::all()->where('book_ISBN',$book_ISBN);
        return view('admin_edit_book')->with('books',$book_list)->with('category_ID',Category::all()->where('product','book'));
    }

    public function update_book(){
        $r=request();
        if($r->file('bookImage')!=''){
            $image=$r->file('bookImage');        
            $image->move('images',$image->getClientOriginalName());                   
            $imageName=$image->getClientOriginalName(); 
            $stationery=DB::table('books')->where('book_ISBN', $r->bookISBN)
            ->update(['book_image'=>$imageName]);
        }    
        
        $book_category=DB::table('books')->where('book_ISBN', $r->bookISBN)
        ->update(['book_title' => $r->bookTitle, 'book_price' =>$r->bookPrice,'book_quantity' =>$r->bookQuantity,'book_publisher' =>$r->bookPublisher,'book_author' =>$r->bookAuthor,'book_pages' =>$r->bookPages,'book_language' =>$r->bookLanguage,'book_format' =>$r->bookFormat,'book_Description' =>$r->bookDescription,'category_ID' =>$r->categoryID]); 
        
        return redirect()->route('admin_book_list');
    }
}
