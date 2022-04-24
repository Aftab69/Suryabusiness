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
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/pricing', function () {
    return view('pricing');
});
Route::get('/workspaces', function () {
    return view('workspaces');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/blog-details', function () {
    return view('blog-details');
});
Route::get('/contact', function () {
    return view('contact');
});


Route::get('/book-tour', function(){
    return view('booktour');
});