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
    return view('index');
});
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/checkout', function () {
    return view('checkout');
});
Route::get('/config', function () {
    return view('config');
});
Route::get('/edit_account', function () {
    return view('edit_account');
});

Route::get('/home', function () {
    return view('home');
});
Route::get('/initialize', function () {
    return view('initialize');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/logout', function () {
    return view('logout');
});
Route::get('/my_account', function () {
    return view('my_account');
});
Route::get('/products', function () {
    return view('products');
});
Route::get('/registration', function () {
    return view('registration');
});
Route::get('/view_categories', function () {
    return view('view_categories');
});
Route::get('/view_product', function () {
    return view('view_product');
});
Route::get('/index_admin', function () {
    return view('index_admin');
});
Route::get('/home_admin', function () {
    return view('home_admin');
});
Route::get('/login_admin', function () {
    return view('login_admin');
});







