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
$keranjang = mysqli_query($conn, 'SELECT * FROM keranjang where qty>0');
$jumlah = mysqli_num_rows($keranjang);



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
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
            <h1 class="subLogo">Checkout</h1>
        </ul>

        <ul>
            <li>
                <p>Hi,
                    <?php echo $username; ?>
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
                        <td colspan="2">
                            <h3>Alamat Pengiriman</h3>
                        </td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="alamat">
                        <td>
                            <select name="" id="" class="alamat">
                                <option value="" disabled selected >provinsi</option>
                                <option value="">Jawa Barat</option>
                                <option value="">Jawa Timur</option>
                                <option value="">Jawa Tengah</option>
                            </select>
                        </td>
                        <td><select name="" id="" class="alamat">
                                <option value="" disabled selected >kota</option>
                                <option value="">Depok</option>
                                <option value="">Bandung</option>
                                <option value="">Bogor</option>
                            </select></td>
                        <td><select name="" id="" class="alamat">
                                <option value="" disabled selected >kecamatan</option>
                                <option value="">Gunung Putri</option>
                                <option value="">Cimanggis</option>
                                <option value="">Cinere</option>
                            </select></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>
                            <h3>Produk Yang Dipesan</h3>
                        </td>
                        <td>Harga</td>
                        <td>Jumlah</td>
                    </tr>
                    <tr>
                        <td class="gambar">
                            <img src="../img/<?= $row["gambar_keranjang"]; ?>" alt="" width="100%">
                        </td>
                        <td colspan="2">
                            <?php echo $row["nama_keranjang"]; ?>
                        </td>
                        <td class="harga">
                            Rp
                            <?php echo number_format($row['harga_keranjang'], 0, '.', '.'); ?>
                        </td>
                        <td class="jumlah">
                            <input type="text" value="<?php echo $row['qty']; ?>" id="qty" disabled>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <h3>Metode Pengiriman</h3>
                        </td>
                        <td></td>
                        <td></td>
                    </tr>

                    <form>
                        <tr>
                            <td class="pengiriman">
                                <input type="radio" name="pengiriman" id="" value="JNE EXPRESS">
                                <label for="">JNE</label>
                            </td>
                            <td class="pengiriman">
                                <input type="radio" name="pengiriman" id="" value="JNE EXPRESS">
                                <label for="">JNT</label>
                            </td>
                            <td class="pengiriman">
                                <input type="radio" name="pengiriman" id="" value="JNE EXPRESS">
                                <label for="">DMP Express</label>
                            </td>

                            <td></td>
                        </tr>
                    </form>
                    <tr>
                        <td colspan="2">
                            <h3>Metode Pembayaran</h3>
                        </td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>
                            <input type="radio" name="pembayaran" id="" value="JNE EXPRESS" >
                            <label for="">Transfer Bank</label>
                        </td>
                        <td>
                            <input type="radio" name="pembayaran" id="" value="JNE EXPRESS">
                            <label for="">Go-Pay</label>
                        </td>
                        <td>
                            <input type="radio" name="pembayaran" id="" value="JNE EXPRESS">
                            <label for="">Kartu Kredit</label>
                        </td>
                        <td></td>
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
                        <p>Total Harga</p>
                    </td>
                    <td class="td-tb-total"><b id="total">Rp
                            <?= number_format($total, 0, '.', '.') ?><b></td>
                </tr>
                <tr>
                    <?php
                    if ($jumlah < 1) {
                        echo "
                    ";
                    } else {
                        echo "<td colspan='2'><button class='btn-co' onclick='payment()'>PAY</button></td>";
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
            alert("Pembayaran Berhasil, Terima Kasih sudah berbelanja");
            location.href = '../dashboard/sudahLogin.php'//
        }
    </script>
</body>

</html>