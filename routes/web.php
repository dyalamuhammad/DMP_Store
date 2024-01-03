<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VoucherController;
use App\Http\Controllers\ShopController;


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


Route::get('/shop', [ShopController::class, 'index']);
Route::post('/add-to-cart/{product}', [ShopController::class, 'addToCart'])->name('addToCart');
Route::post('/apply-voucher/{voucher}', [ShopController::class, 'applyVoucher'])->name('applyVoucher');
Route::get('/checkout', [ShopController::class, 'checkout'])->name('checkout');
Route::post('/complete-purchase', [ShopController::class, 'completePurchase'])->name('completePurchase');

Route::get('/generate-voucher', [VoucherController::class, 'generateVoucher']);
Route::get('/vouchers', [VoucherController::class, 'index'])->name('voucher.index');



