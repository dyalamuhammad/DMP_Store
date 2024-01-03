<?php

namespace App\Http\Controllers;
use App\Models\Voucher;
use Carbon\Carbon;
use Illuminate\Http\Request;

class VoucherController extends Controller
{
    

    public function generateVoucher()
    {
        $voucher = new Voucher();
        $voucher->code = uniqid();
        $voucher->amount = 10000;
        $voucher->expires_at = Carbon::now()->addMonths(3);
        $voucher->save();

        return redirect()->route('voucher.index')->with('success', 'Voucher has been generated successfully.');
    }

    public function index()
    {
        $vouchers = Voucher::all();
        return view('voucher.index', compact('vouchers'));
    }

}
