<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginactivity;
use App\Http\Controllers\admin;

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
    return view('index');
});

Route::get('/shop', function () {
    return view('shop');
});


Route::get('/Login', function () {
    return view('login');
});

Route::post('/Login1',[loginactivity::class,'check']);


Route::get('/about', function () {
    return view('about');
});

Route::get('/cart', function () {
    return view('cart');
});


Route::get('/shop', function () {
    return view('shop');
});




Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/confirmation', function () {
    return view('confirmation');
});

Route::get('/elements', function () {
    return view('elements');
});



Route::get('/product_details', function () {
    return view('product_details');
});


Route::get('/Register', function () {
    return view('register');
});


Route::post('/Register1',[loginactivity::class,'store']);


Route::get('/Contact', function () {
    return view('contact');
});


Route::get('/Category', function () {
    return view('category');
});


Route::get('/filter', function () {
    return view('filter');
});


Route::get('/blog', function () {
    return view('blog');
});


Route::get('/blog-details', function () {
    return view('blog-details');
});

Route::get('/CHome', function () {
    return view('CHome');
});

Route::get('/AHome', function () {
    return view('AHome');
});


Route::get('/theme2', function () {
    return view('theme2');
});

Route::get('/ACategory', function () {
    return view('ACategory');
});

Route::post('/ACategory1',[admin::class,'store']);


Route::get('/ABrand', function () {
    return view('ABrand');
});

Route::get('/AItem', function () {
    return view('AItem');
});

Route::get('/sessiondelete',function(){
    if(session()->has('sname'))
    {
        session()->pull('sname');
    }
    return view('/index');
});


Route::get('/index', function () {
    return view('index');
});