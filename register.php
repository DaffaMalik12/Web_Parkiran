<?php
include "koneksi.php";

$nama_user = $_POST["nama_user"];
$username = $_POST["username"];
$password = $_POST["password"];
$level = $_POST["level"];



$mysql = "INSERT INTO user VALUES
(0, '$nama_user', NULL, '$username', '$password', '$level')";

mysqli_query($koneksi,$mysql);


echo"<script>alert('Selamat, User telah terdaftar');window.location.href='halaman admin/penambahan_user.php';</script>";

mysqli_close($koneksi);
?>