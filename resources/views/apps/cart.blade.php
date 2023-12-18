@extends('layouts.app', ['title' => 'Keranjang'])
@section('content')
@section('css')
<link rel="stylesheet" href="{{ asset('css/cart/style.css') }}">
@endsection
    <div class="container">
        <div class="tabel">
            <h3 class='tdk-ada'>Tidak ada barang</h3>

            <table class="tb-keranjang">
                
            </table>
        </div>
        <div class="total">
            <table class="tb-total">
                <tr>
                    <td colspan="2">
                        <h4>Ringkasan Belanja</h4>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p >Total Harga</p>
                    </td>
                    <td class="td-tb-total" ><b id="total">Rp<b></td>
                </tr>
                <tr>
                    <td colspan='2'><button class='btn-co' onclick='payment()'>CHECKOUT</button></td>
                </tr>
            </table>
        </div>
    </div>

@endsection
@section('script')
    <script>
        function payment() {
            const total = document.getElementById('total').innerText;
            console.log(total);
            if (total == 'Rp0') {
                alert("Anda Belom memilih produk");
                location.href='keranjangLengkap.php';

            } else {
                location.href='../payment/payment.php';
            }
        }
        function home() {
            location.href = '../dashboard/sudahLogin.php'
        }
    </script>
@endsection
