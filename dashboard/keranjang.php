<?php
require '../koneksi.php';
$nama = $_POST['nama_keranjang'];
$harga = $_POST['harga_keranjang'];
$gambar = $_POST['gambar_keranjang'];
$qty = $_POST['qty'];

$cek = mysqli_query($conn,"SELECT * FROM keranjang WHERE nama_keranjang = $nama");

$query_sql = "INSERT INTO keranjang (nama_keranjang, harga_keranjang, gambar_keranjang, qty)
            VALUES ('$nama','$harga','$gambar','$qty')";

if (mysqli_query($conn, $query_sql)) {
    header("refresh:0;sudahLogin.php");
} else {
    echo "
    <script>
    alert ('Barang Sudah Ada di Keranjang!');
    </script>";
    header("refresh:0;sudahLogin.php");
}

?>