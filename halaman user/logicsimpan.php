<?php
include "../koneksi.php";
if(isset($_POST['lokasi'])){
        echo $_POST['lantai'];
        $sql = "UPDATE user SET lokasi=$_POST[lokasi] WHERE `nama_user`='$_POST[nama]'";
        mysqli_query($koneksi, $sql);
        unset($_POST['lokasi']);
}
echo"<script>alert('Data berhasil diedit');window.location.href='halaman_user.php';</script>";