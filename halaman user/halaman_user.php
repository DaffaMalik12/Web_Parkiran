<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Link CSS -->
    <link rel="stylesheet" href="../style/user.css">

    <!-- Link Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Oswald:wght@200;400&family=Pacifico&family=Risque&family=Roboto+Mono:wght@300&display=swap" rel="stylesheet">

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
    $nama = $_SESSION['nama_user'];
    if(isset($_POST['lokasi'])){
        echo $_POST['lantai'];
        $sql = "UPDATE user SET lokasi=$_POST[lokasi] WHERE `nama_user`='$nama'";
        mysqli_query($koneksi, $sql);
    }
    $select = "SELECT * FROM user";
    $hasil = mysqli_query($koneksi, $select);
    $sudah_parkir = array();
    while ($data = mysqli_fetch_assoc($hasil)) {
        if($data["nama_user"]==$nama){
            $parkiruser=(int)$data['lokasi'];
        }
        else{
            array_push($sudah_parkir, (int)$data['lokasi']);    
        }
    }
        
    ?>

  <div class="row">
        <div class="col-md-3 " style="background-color: #E7D53A;">
            <h1>PARKIRAN</h1>
            <div class="gambar">
                <img src="./img/user.png" alt="">
            </div>
            <div class="welcome">
            <h2>Welcome <?php echo $nama ; ?></h2>
            </div>
            <a href="edit.php?id_user=<?= $_SESSION['id_user'] ?>" style="text-decoration: none; color:black;"><div class="kotak0">
                <h3>Edit</h3>
            </div></a>
            <a href="halaman_user.php" style="text-decoration: none; color:black;"><div class="kotak1">
                <h3>Lokasi Parkir</h3>
            </div></a>

            <a href="history.php" style="text-decoration: none; color:black"><div class="kotak2">
                <h3>History</h3>
            </div></a>

            <div class="keluar">
            <a href="../login.php" style="color: black;"><i class="fa-solid fa-right-from-bracket"></i></a></div>
        </div>

        <div class="col-md-9" style="background-color: #E0C5AB;">
            <br>
            <div class="seats-container bg-secondary" >
                <!-- Tempatkan elemen kursi di sini -->
            </div>
            <form action="" method="post" >
                <input type="hidden" id="lokasi" name="lokasi">
                <input type="hidden" id="lantai" name="lantai">
            <button id="btn-book" type="submit">Simpan</button>
            </form>
        </div>
    </div>
    <script>
        var lantai = 1;
        var larangan = <?= json_encode($sudah_parkir); ?>;
        var parkiruser= <?= json_encode($parkiruser); ?>;
        
    </script>
    <script src="script.js"></script>
    

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>
