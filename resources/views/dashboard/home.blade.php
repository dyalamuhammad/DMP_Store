<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar bg-dark navbar-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" width="30"  class="d-inline-block align-text-top">
            DMP Store
          </a>
        </div>
      </nav>
    <h1>Hello, world!</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Gambar</th>
            <th scope="col">Nama</th>
            <th scope="col">Harga</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>
                <img src="" alt="">
                <input type="file" name="gambar1">
            </td>            
            <td>Samsung</td>
            <td>@mdo</td>
            <td>
                <button class="btn btn-dark">Hapus</button>            
            </td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>
                <input type="file">
            </td>            
            <td>Xiaomi</td>
            <td>@fat</td>
            <td>
                <button class="btn btn-dark">Hapus</button>            
            </td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>
                <input type="file">
            </td>            
            <td>Apple</td>
            <td>@twitter</td>
            <td>
                <button class="btn btn-dark">Hapus</button>
            </td>
          </tr>
        </tbody>
      </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>