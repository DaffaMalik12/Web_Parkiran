<?php
include "../koneksi.php";
if(isset($_POST['id_user'])){
    $edit="UPDATE user SET nama_user='$_POST[nama_user]', username='$_POST[username]', password='$_POST[password]', lokasi='$_POST[lokasi]' WHERE id_user='$_POST[id_user]'";
    $hasil=mysqli_query($koneksi, $edit);
    if($hasil){
        echo"<script>alert('Data berhasil diedit');window.location.href='Daftar Tabel.php';</script>";
    }
}