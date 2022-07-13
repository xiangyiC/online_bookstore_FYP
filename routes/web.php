<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin', function () {
    return view('admin_layout');
});

Route::get('/admin_dashboard', function () {
    return view('admin_dashboard');
})->name('admin_dashboard');

Route::get('/admin_add_book_category', function () {
    return view('admin_add_book_category');
})->name('admin_add_book_category');

Route::get('/admin_add_stationery_category', function () {
    return view('admin_add_stationery_category');
})->name('admin_add_stationery_category');

Route::get('/admin_add_book', function () {
    return view('admin_add_book',['category_ID'=> App\Models\Category::all()->where('product','book')]);
})->name('admin_add_book');

Route::get('/admin_add_stationery', function () {
    return view('admin_add_stationery', ['categories'=> App\Models\Category::all()->where('product','stationery')]);
})->name('admin_add_stationery');

//Route::get('/admin_add_stationery',[App\Http\Controllers\StationeryController::class,'add'])->name('admin_add_stationery');

Route::post('/add_book_category',[App\Http\Controllers\BookCategoryController::class,'add_book_category'])->name('add_book_category');

Route::get('/admin_book_category_list',[App\Http\Controllers\BookCategoryController::class,'view_book_category'])->name('admin_book_category_list');

Route::post('/add_stationery_category',[App\Http\Controllers\StationeryCategoryController::class,'add_stationery_category'])->name('add_stationery_category');

Route::get('/admin_stationery_category_list',[App\Http\Controllers\StationeryCategoryController::class,'view_stationery_category'])->name('admin_stationery_category_list');

Route::get('/admin_delete_book_category/{category_ID}',[App\Http\Controllers\BookCategoryController::class,'delete_book_category'])->name('admin_delete_book_category');

Route::get('/admin_edit_book_category/{category_ID}',[App\Http\Controllers\BookCategoryController::class,'edit_book_category'])->name('admin_edit_book_category');

Route::post('/admin_update_book_category',[App\Http\Controllers\BookCategoryController::class,'update_book_category'])->name('admin_update_book_category');

Route::get('/admin_delete_stationery_category/{category_ID}',[App\Http\Controllers\StationeryCategoryController::class,'delete_stationery_category'])->name('admin_delete_stationery_category');

Route::get('/admin_edit_stationery_category/{category_ID}',[App\Http\Controllers\StationeryCategoryController::class,'edit_stationery_category'])->name('admin_edit_stationery_category');

Route::post('/admin_update_stationery_category',[App\Http\Controllers\StationeryCategoryController::class,'update_stationery_category'])->name('admin_update_stationery_category');

Route::post('/add_book',[App\Http\Controllers\BookController::class,'add_book'])->name('add_book');

Route::get('/admin_book_list',[App\Http\Controllers\BookController::class,'view_book'])->name('admin_book_list');

Route::get('/admin_delete_book/{book_ISBN}',[App\Http\Controllers\BookController::class,'delete_book'])->name('admin_delete_book');

Route::get('/admin_edit_book/{book_ISBN}',[App\Http\Controllers\BookController::class,'edit_book'])->name('admin_edit_book');

Route::post('/admin_update_book',[App\Http\Controllers\BookController::class,'update_book'])->name('admin_update_book');

Route::get('/admin_profile', function () {
    return view('admin_profile');
})->name('admin_profile');

Route::get('/admin_order_list', function () {
    return view('admin_order_list');
})->name('admin_order_list');

Route::post('/add_stationery',[App\Http\Controllers\StationeryController::class,'add_stationery'])->name('add_stationery');

Route::get('/admin_stationery/{stationery_ISBN}',[App\Http\Controllers\StationeryController::class,'delete_stationery'])->name('admin_delete_stationery');

Route::get('/admin_stationery_list',[App\Http\Controllers\StationeryController::class,'view_stationery'])->name('admin_stationery_list');

Route::get('/admin_edit_stationery/{stationery_ISBN}',[App\Http\Controllers\StationeryController::class,'edit_stationery'])->name('admin_edit_stationery');

Route::post('/admin_update_stationery',[App\Http\Controllers\StationeryController::class,'update_stationery'])->name('admin_update_stationery');

Route::get('/landing', function () {
    return view('landing');
})->name('landing');

Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');

Route::get('/admin_order_details', function () {
    return view('admin_order_details');
})->name('admin_order_details');

//Route::get('/admin_customer_list', function () {
  //  return view('admin_customer_list');
//})->name('admin_customer_list');

Route::get('/admin_customer_list',[App\Http\Controllers\UserController::class,'view_customer'])->name('admin_customer_list');