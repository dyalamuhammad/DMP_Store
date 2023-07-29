<?php
session_start();
require '../koneksi.php';

if (isset($_SESSION["username"])) {
    // Email pengguna ada dalam sesi
    $username = $_SESSION["username"];
    
} else {
    header('location: ../dashboard/belumLogin.php');
}

$id = mysqli_query($conn, 'SELECT id FROM user where username = $username');
$qty = 0;
$total = 0;
$keranjang = mysqli_query($conn, 'SELECT * FROM keranjang');
$jumlah = mysqli_num_rows($keranjang);



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" />
    <link rel="icon" href="../img/icon.png">
</head>
<style>

</style>

<body>
    <nav>
        <ul class="leftNav">
            <li><a href="../dashboard/sudahLogin.php"><img src="../img/logo.png" alt="logo" class="logo" /></a></li>
            <h1 class="garisLogo">|</h1>
            <h1 class="subLogo">Keranjang</h1>
        </ul>

        <ul>
            <li>
                <p>Hi,
                    <?php echo $username;?>
                </p>
            </li>
            <li><a href="../dashboard/belumLogin.php">LOGOUT</a></li>
        </ul>
    </nav>
    <div class="container">
        <div class="tabel">
            <?php
            if ($jumlah < 1) {
                echo "
                    <h3 class='tdk-ada'>Tidak ada barang</h3>";
            }
            ?>
            <table class="tb-keranjang">
                <?php while ($row = $keranjang->fetch_array()) {
                    $total += $row['harga_keranjang'] * $row['qty'];
                    ?>
                    <tr>
                        <td class="gambar">
                            <img src="../img/<?= $row["gambar_keranjang"]; ?>" alt="" width="100%">
                        </td>
                        <td class="nama">
                            <?php echo $row["nama_keranjang"]; ?>
                        </td>
                        <td class="harga">
                            Rp
                            <?php echo number_format($row['harga_keranjang'], 0, '.', '.'); ?>
                        </td>
                        <td class="jumlah">
                            <a href="kurangKeranjang.php?qty=<?= $row['qty']; ?>&id=<?= $row['id']; ?>"><i
                                    class='bx bxs-minus-square'></i></a>
                            <input type="text" value="<?php echo $row['qty']; ?>" id="qty" disabled>
                            <a href="tambahKeranjang.php?qty=<?= $row['qty']; ?>&id=<?= $row['id']; ?>"><i
                                    class='bx bxs-plus-square'></i></a>
                        </td>
                        <td class="aksi">
                            <button class="btn-hapus"><a href="hapusKeranjang.php?id=<?= $row['id']; ?>"
                                    onclick="return confirm('Apakah anda akan menghapus data?')">Hapus</a></button>

                        </td>
                    </tr>
                <?php } ?>
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
                    <td class="td-tb-total" ><b id="total">Rp<?= number_format($total, 0, '.', '.') ?><b></td>
                </tr>
                <tr>
                <?php
            if ($jumlah < 1) {
                echo "
                    ";
            } else {
                echo "<td colspan='2'><button class='btn-co' onclick='payment()'>CHECKOUT</button></td>";
            }
            ?>
                    
                </tr>
            </table>
        </div>
    </div>

    <footer>
        <p>&#169 Dyala Muhammad 2023.</p>
    </footer>

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
</body>

</html>