<?php
session_start();
require '../koneksi.php';

if (isset($_SESSION["username"])) {
  // Email pengguna ada dalam sesi
  $username = $_SESSION["username"];
} else {
  header('location: belumLogin.php');
}



$barang = mysqli_query($conn, 'SELECT * FROM barang');
$keranjang = mysqli_query($conn, 'SELECT * FROM keranjang');

$jumlah = mysqli_num_rows($keranjang);


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <!-- <link rel="stylesheet" type="text/css" href="style-dashboard.css"> -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link rel="stylesheet" href="style.css">
  <link rel="icon" href="../img/icon.png">
</head>

<body>
  <nav>
    <ul class="leftNav">
      <li><a href="#"><img src="../img/logo.png" alt="logo" class="logo" /></a></li>
    </ul>
    <ul>
      <li>
        <p>Hi,
          <?php echo $username; ?>
        </p>
      </li>
      <li class="dropdown">
        <a href="../keranjang/keranjangLengkap.php" class="keranjang"><i class='bx bx-cart keranjang'></i></a>
        <p id="jumlah" class="jumlah">
          <?php echo $jumlah; ?>
        </p>
        <ul class="dropdown-content">\
          <?php foreach ($keranjang as $cart): ?>
            <li class="isi-keranjang">
              <img src="../img/<?= $cart['gambar_keranjang'] ?>" alt="">
              <p>
                <?= $cart['nama_keranjang'] ?>
              </p>
              <p>Rp
                <?= number_format($cart['harga_keranjang'], 0, '.', '.') ?>
              </p>
            </li>
            <?php
          endforeach;
          ?>
        </ul>
      </li>
      <li><a href="belumLogin.php">LOGOUT</a></li>
    </ul>
  </nav>
  <div class="container">
    <div class="isian">
      <div class="kumpulan-card">
        <?php foreach ($barang as $row): ?>
          <div class="card">
            <form action="keranjang.php" method="post" id="form1">
              <input type="hidden" name="nama_keranjang" value="<?= $row['nama_barang']; ?>">
              <input type="hidden" name="harga_keranjang" value="<?= $row['harga_barang']; ?>">
              <input type="hidden" name="gambar_keranjang" value="<?= $row['gambar_barang']; ?>">
              <input type="hidden" name="qty" id="qty" value="1">
              <img src="../img/<?= $row['gambar_barang']; ?>" alt="">
              <div class="keterangan">
                <p>
                  <?= $row['nama_barang']; ?>
                </p>
                <p class="harga">Rp
                  <?= number_format($row['harga_barang'], 0, '.', '.'); ?>
                </p>
                <p class="terjual">Terjual 1 rb</p>
                <button class="btn-tambah"><i class='bx bx-cart-add'></i></button>

                <!-- <button class="btn-tambah">Tambah</button> -->
            </form>
          </div>
        </div>
        <?php
        endforeach;
        ?>
    </div>
  </div>
  </div>

  <footer>
    <p>&#169 Dyala Muhammad 2023.</p>
  </footer>



</body>

</html>