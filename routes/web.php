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
});

Route::get('/admin_add_book_category', function () {
    return view('admin_add_book_category');
});

Route::get('/admin_add_stationery_category', function () {
    return view('admin_add_stationery_category');
});