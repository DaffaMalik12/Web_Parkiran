<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/edit_admin.css">
    <title>Document</title>
</head>

<body>
<?php
    session_start();

    // // cek apakah yang mengakses halaman ini sudah login
    // if ($_SESSION['level'] == "") {
    //     header("location:login.php?pesan=gagal");
    // }

    ?>

     <!-- Koneksi Database -->
     <?php
     if(isset($_GET['id_user'])){
        $id_user = $_GET['id_user'];
    include "../koneksi.php";
    $select = "SELECT * FROM user where `id_user`='$id_user'";
    $hasil = mysqli_query($koneksi, $select);
    $buff = mysqli_fetch_array($hasil);
    }
    else{
        header("Location: ..");
    }
    // var_dump($buff)
    ?>
    <div class="header">
        <h2>EDIT DATA</h2> <br>
        <form action="edit2.php" method="post">
            <table width="487" border="0">
                <input type="hidden" name="id_user" value="<?php echo $buff['id_user']; ?>">
                <div class="kolom-edit">
                <tr>
                    <td class="nama_user-2" width="150">nama user :</td>
                    <td width="327"><input class="nama_user" type="text" name="nama_user" value="<?php echo $buff['nama_user']; ?>" /></td>
                </tr>
                <tr>
                    <td class="lokasi-2">lokasi :</td>
                    <td><input class="lokasi" type="text" name="lokasi" value="<?php echo $buff['lokasi'] ; ?>" /></td>
                </tr>
                <tr>
                    <td class="username-2">username :</td>
                    <td><input type="text" class="username" name="username" value="<?php echo $buff['username']; ?>" /></td>
                </tr>
                <tr>
                    <td class="password-2">password :</td>
                    <td><input class="password" type="text" name="password" value="<?php echo $buff['password']; ?>" /></td>
                </tr>
                </div>  
                <tr>
                    <td><input class="button" type="submit" value="submit" /></td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>