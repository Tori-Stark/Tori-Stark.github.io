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
Route::get('/portfolio', function () {
    return view('portfolio');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/blogs-all', function () {
    return view('blogs.blog-grid');
});
Route::get('/single-blogs', function () {
    return view('blogs.blog-single');
});
//blogs
Route::get('/blog1', function () {
    return view('blogs.blog1');
});
Route::get('/blog2', function () {
    return view('blogs.blog2');
});
Route::get('/blog3', function () {
    return view('blogs.blog3');
});

