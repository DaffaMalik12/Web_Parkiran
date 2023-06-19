<?php
include "../koneksi.php";
if(isset($_POST['id_user'])){
    $edit="UPDATE user SET username='$_POST[username]', password='$_POST[password]' WHERE id_user='$_POST[id_user]'";
    $hasil=mysqli_query($koneksi, $edit);
    if($hasil){
        echo"<script>alert('Data berhasil diedit');window.location.href='halaman_user.php';</script>";
    }
}   
