<?php
require '../koneksi.php';

$id = $_GET ['id'];
$qty = $_GET ['qty'];

$tambah = mysqli_query($conn, "UPDATE keranjang
SET qty = qty - 1 WHERE id = $id");

if ($tambah) {
    header("refresh:0;keranjangLengkap.php");
} else {
    echo "
    <script>
        alert('Barang gagal ditambah')
    </script>".mysqli_error($conn);
    header("keranjangLengkap.php");
}
?>