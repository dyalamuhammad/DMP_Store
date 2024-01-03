<?php
require '../koneksi.php';
$barang = mysqli_query($conn, 'SELECT * FROM barang');
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
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link rel="stylesheet" href="style.css">
  <link rel="icon" href="../img/icon.png">
</head>
<style>
  .leftNav {
    display: flex;
    justify-content: center;
    align-items: center;
    padding-top: 10px;
  }
</style>

<body>
  <nav>
    <ul class="leftNav">
      <li><a href="#"><img src="../img/logo.png" alt="logo" class="logo" /></a></li>
    </ul>
    <ul>
      <li><a href="../index.html">LOGIN</a></li>
    </ul>
  </nav>
  <div class="container">
    <div class="isian">
      <div class="kumpulan-card">
        <?php foreach ($barang as $row): ?>
          <div class="card">
            <img src="../img/<?= $row['gambar_barang']; ?>" alt="">
            <div class="keterangan">
              <p>
                <?= $row['nama_barang']; ?>
              </p>
              <p class="harga">Rp
                <?= number_format($row['harga_barang'],0,'.','.'); ?>
              </p>
              <p class="terjual">Terjual 1 rb</p>
        
              <!-- <button onclick="tambah()" class="btn-tambah">Tambah</button> -->
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
  <script>
    var jumlah = document.getElementById("jumlah").value
    var angka = 0;
    function tambah() {
      alert('Anda Harus Login!');
    }
  </script>
</body>

</html>