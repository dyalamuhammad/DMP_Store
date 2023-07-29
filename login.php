<?php
require 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];

$query_sql = "SELECT * FROM user
            WHERE username = '$username' AND password = '$password'";

$result = mysqli_query($conn, $query_sql);

if (mysqli_num_rows($result) > 0) {
    header("Location: dashboard/sudahLogin.php");

    session_start();
    $_SESSION["username"] = $username;
} else {
    echo "
    <script>
        alert ('Password atau Username Salah');
        location.href='login.html';
    </script>";
}
?>