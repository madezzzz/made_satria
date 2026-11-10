<?php
include "koneksi.php";
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';
if(empty($password)){
    header("location: login.php?error=invalid");
    exit;
}
$user_admin = "admin";
$pass_admin = "12345";
if ($username == $user_admin && $password == $pass_admin ){
    echo "login berhasil!";
    echo"<br>Selamat datang admin";
} else {
    header("location: login.php?error=login");
    exit;
}
?>