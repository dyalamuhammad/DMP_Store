<?php
require '../koneksi.php';

$id = $_GET ['id'];

$hapus = mysqli_query($conn, "DELETE FROM keranjang WHERE id = '$id'");

if ($hapus) {
    header("refresh:0;keranjangLengkap.php");
} else {
    echo "
    <script>
        alert('Barang gagal dihapus')
    </script>" . mysqli_error($conn);
    header("keranjangLengkap.php");
}
?>