<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{ asset('css/login/style.css') }}">
    <link rel="icon" href="{{ asset('images/logo.png') }}">
  </head>
  <body>
    <div class="contain py-5 d-flex justify-content-center flex-column min-vh-100">
      <img src="{{ asset('images/white_logo.png') }}" alt="logo-dmp" class="logo mx-auto">
      <div class="form mx-auto">
        <h1>LOGIN</h1>
        <form action="login.php" method="post" class="main-box">
          <div class="input-box">
            <label for="username">Username</label>
              <input type="text" name="username" placeholder="Username" required/>
        </div>
        <div class="input-box">
          <label for="password">Password</label>
            <input type="password" name="password" placeholder="Password" required/>
          </div>
          
          
          <div class="daftar">
            <p>Belum Punya Akun? <a href="/register">Daftar</a></p>
          </div>
          <button type="submit">LOGIN</button>
        </form>
      </div>
    </div>
  </body>
</html>
