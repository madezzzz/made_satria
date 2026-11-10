<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "apkkasir";

$koneksi = mysqli_connect($host,$user,$pass,$db);

if (!$koneksi) {
    die("gagal terhubung dengan database:".mysqli_connect_error());
}
?>