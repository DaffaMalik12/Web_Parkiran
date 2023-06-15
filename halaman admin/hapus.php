<?php
include "../koneksi.php";
$id_user = $_GET['id_user'];
$hapus = "DELETE FROM user where id_user='$id_user'";
// $hasil = mysqli_query($koneksi, "DELETE FROM register where id='$id'");

if(!mysqli_query($koneksi, $hapus))
    die (mysqli_error($koneksi));

echo"<script>alert('Selamat, data telah di hapus');window.location.href='Daftar Tabel.php';</script>";

mysqli_close($koneksi);
?>