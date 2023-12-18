<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>{{ env('APP_NAME') }} - {{ $title }}</title>
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <!-- <link rel="stylesheet" type="text/css" href="style-dashboard.css"> -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
          rel="stylesheet" />
        <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="icon" href="{{ asset('images/logo.png') }}">
        @yield('css')
      </head>
<body>
    <nav>
      <ul class="leftNav">
        <li><a href="/"><img src="{{ asset('images/white_logo.png') }}" alt="logo" class="logo" /></a></li>
        <h1 class="garisLogo">|</h1>
        <h1 class="subLogo">{{ $title }}</h1>
    </ul>
        
        <ul>
          <li>
            <p>Hi,
              
            </p>
          </li>
          <li class="dropdown">
            <a href="/cart" class="keranjang"><i class='bx bx-cart keranjang'></i></a>
            <p id="jumlah" class="jumlah">
              {{-- <?php echo $jumlah; ?> --}}
            </p>
            {{-- <ul class="dropdown-content">\
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
            </ul> --}}
          </li>
          <li><a href="/login">LOGOUT</a></li>
        </ul>
      </nav>
    
    @yield('content')  
    <footer>
        <p>&#169 Dyala Muhammad 2023.</p>
    </footer>

    @yield('script')
</body>
</html>