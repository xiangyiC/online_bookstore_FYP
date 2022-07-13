<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Category;
use App\Models\Stationery;
Use Session;

class StationeryController extends Controller
{

    public function add_stationery(){
        $r=request();
        $image=$r->file('stationeryImage');
        $image->move('images',$image->getClientOriginalName()); // images is the location
        $imageName=$image->getClientOriginalName();

        $add_stationery=Stationery::firstOrCreate([
            
            'stationery_ISBN'=> $r->stationeryISBN,
            'stationery_title'=> $r->stationeryTitle,
            'stationery_price'=> $r->stationeryPrice,
            'stationery_quantity'=> $r->stationeryQuantity,
            'stationery_publisher'=> $r->stationeryPublisher,
            'stationery_description'=> $r->stationeryDescription,
            'stationery_category_ID'=> $r->stationeryCategoryID,
            'stationery_image'=>$imageName,
        ]);

        if ($add_stationery->wasRecentlyCreated) {
            Session::flash('success',"Stationery was created sucessfully!");
            // user just created in the database; it didn't exist before.
        } else {
            Session::flash('error',"Stationery already exists!");
            // user already existed and was pulled from database.
        }

        //$categories=Category::all()->where('product','stationery');
        //$stationeries=Stationery::all();
        //return view('admin_add_stationery',compact('categories'));
        return redirect()->route('admin_stationery_list');
    }

    public function view_stationery(){
        $stationery_list=DB::table('stationeries')
        ->leftjoin('categories','categories.category_ID','=','stationeries.stationery_category_ID')
        ->select('stationeries.*','categories.category_name as categoryName', 'categories.category_type as categoryType')
        ->get();
        return view('admin_stationery_list')->with('stationeries',$stationery_list);
    }

    public function delete_stationery($stationery_ISBN){
        $delete_stationery = DB::table('stationeries')->where('stationery_ISBN', $stationery_ISBN);
        $delete_stationery->delete();
        Session::flash('success',"Stationery was deleted successfully!");
        return redirect()->route('admin_stationery_list');
    }

    public function edit_stationery($stationery_ISBN){
        $stationeries=Stationery::all()->where('stationery_ISBN',$stationery_ISBN);
        return view('admin_edit_stationery')->with('stationeries',$stationeries)->with('category_ID',Category::all()->where('product','stationery'));
    }

    public function update_stationery(){
        $r=request();
        if($r->file('stationeryImage')!=''){
            $image=$r->file('stationeryImage');        
            $image->move('images',$image->getClientOriginalName());                   
            $imageName=$image->getClientOriginalName(); 
            $stationery=DB::table('stationeries')->where('stationery_ISBN', $r->stationeryISBN)
            ->update(['stationery_image'=>$imageName]);
        }    
        
        $stationery=DB::table('stationeries')->where('stationery_ISBN', $r->stationeryISBN)
        ->update(['stationery_title' => $r->stationeryTitle, 'stationery_price' =>$r->stationeryPrice,'stationery_quantity' =>$r->stationeryQuantity,'stationery_publisher' =>$r->stationeryPublisher,'stationery_Description' =>$r->stationeryDescription,'stationery_category_ID' =>$r->stationeryCategoryID]); 
        
        return redirect()->route('admin_stationery_list');
    }
}
