<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ShopController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('shop.index', compact('products'));
    }

    public function checkout()
    {
        // Ambil data keranjang belanja dari session
        $cart = Session::get('cart', []);

        return view('shop.checkout', compact('cart'));
    }

    public function completePurchase()
    {
        // Logika untuk menyelesaikan pembelian
        // Misalnya, menyimpan data pembelian ke database

        // Hapus data keranjang belanja dari session
        Session::forget('cart');

        return redirect('/shop')->with('success', 'Purchase completed successfully!');
    }
}
