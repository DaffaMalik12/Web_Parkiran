<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Link CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Link Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Oswald:wght@200;400&family=Pacifico&family=Roboto+Mono:wght@300&display=swap" rel="stylesheet">

     <!-- Link Font Awesome -->
     <link rel="stylesheet" type="text/css" href="fontawesome-free/css/all.min.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Page User</title>
  </head>
  <body>

    <!-- Koneksi Database -->
    <?php
    session_start();
    include "../koneksi.php";
    $select = "SELECT * FROM user";
    $hasil = mysqli_query($koneksi, $select);
    $data = mysqli_fetch_array($hasil);
    ?>

  <div class="row">
        <div class="col-md-3 bg-warning">
            <h1>PARKIRAN</h1>
            <div class="gambar">
                <img src="./img/user.png" alt="">
            </div>
            <div class="welcome">
            <h2>Welcome <?php echo $_SESSION['nama_user']; ?></h2>
            </div>
            <a href="" style="text-decoration: none; color:black;"><div class="kotak0">
                <h3>Edit</h3>
            </div></a>
            <a href="" style="text-decoration: none; color:black;"><div class="kotak1">
                <h3>LT 1</h3>
            </div></a>
            <a href="" style="text-decoration: none; color:black;"><div class="kotak2">
                <h3>LT 2</h3>
            </div></a>

            <div class="keluar">
            <a href="../login.php" style="color: black;"><i class="fa-solid fa-right-from-bracket"></i></a></div>
        </div>

        <div class="col-md-9">
            <br><br><br><br><br><br><br><br><br>
            <div class="seats-container bg-secondary" >
                <!-- Tempatkan elemen kursi di sini -->
            </div>
            <button id="btn-book">Simpan</button>
        </div>
    </div>
    <script src="script.js"></script>
    

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>
