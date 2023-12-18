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
    return view('apps.home');
});
Route::get('/login', function () {
    return view('apps.login');
});
Route::get('/register', function () {
    return view('apps.register');
});
Route::get('/cart', function () {
    return view('apps.cart');
});
Route::get('/dashboard', function () {
    return view('dashboard.home');
});


