<?php
require 'koneksi.php';
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];


$query_sql = "INSERT INTO user (username, email, password)
            VALUES ('$username','$email','$password')";

if (mysqli_query($conn, $query_sql)) {
    echo "
    <script>
        alert ('Akun Berhasil Terdaftar');
        location.href='login.html';
    </script>";
} else {
    echo "
    <script>
        alert ('Akun Sudah Ada, Gunakan Email Yang Lain');
        location.href='register.html';
    </script>";
}

?>