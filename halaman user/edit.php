<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/edit.css">
    <title>EDIT DATA</title>
</head>
<body>
<?php
    if (isset($_GET['id_user'])) {
        $id_user = $_GET['id_user'];
        include "../koneksi.php";
        $select = "SELECT * FROM user where `id_user`='$id_user'";
        $hasil = mysqli_query($koneksi, $select);
        $buff = mysqli_fetch_array($hasil);
    } else {
        header("Location: ..");
    }
    ?>

    <div class="container">
        <div class="kotak">
            <h1>EDIT DATA</h1> 
            <form action="edit2.php" method="post">
                <input type="hidden" name="id_user" value="<?php echo $buff['id_user']; ?>">
                <div class="input-group" style="margin-left: 10px; margin-top:20px;">
                <span class="input-group-text" id="inputGroup-sizing-default">Username</span><br>
                <input type="text" name="username" value="<?php echo $buff['username']; ?>" style="width:270px"> <br><br>
                <span class="input-group-text" id="inputGroup-sizing-default">Password</span><br>
                <input type=password name="password" value="<?php echo $buff['password']; ?>" style="width:270px">
                <input type="submit" value="submit" style="margin-top: 20px; margin-left:100px; width:80px;" />
                </div>
        </form>
        
        </div>
    </div>


</body>
</html>