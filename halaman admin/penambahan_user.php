<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Link Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Oswald:wght@200;400&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Link Font Awesome -->
    <link rel="stylesheet" type="text/css" href="fontawesome-free/css/all.min.css">

    <!-- Link CSS -->
    <link rel="stylesheet" href="../style/admin.css">

    <title>Page Admin</title>
</head>

<body>

    <?php
    session_start();

    // cek apakah yang mengakses halaman ini sudah login
    if ($_SESSION['level'] == "") {
        header("location:login.php?pesan=gagal");
    }

    ?>

    <!-- Koneksi Database -->
    <?php
    include "../koneksi.php";
    $select = "SELECT * FROM user";
    $hasil = mysqli_query($koneksi, $select);
    $data = mysqli_fetch_array($hasil);
    ?>


    <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><i class="fa-solid fa-user" style="width: 20px;"></i> Welcome <?php echo $data['nama_user']; ?></a>
            <form class="d-flex ms-auto">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            <div class="icon ms-2">
                <h5>
                    <a href="../login.php"><i class="fa-solid fa-right-from-bracket" data-toggle="tooltip" title="Keluar" style="color: black;"></i></a>
                </h5>
            </div>
        </div>
        </div>
    </nav>

    <div class="row mt-5">
        <div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
            <ul class="nav flex-column ms-3 mb-5">
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="halaman_admin.php"><i class="fa-solid fa-gauge me-1"></i> Dashboard</a>
                    <hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="Daftar Tabel.php"><i class="fa-solid fa-database me-2"></i> Data Tabel</a>
                    <hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#"><i class="fa-solid fa-file-contract me-2"></i>User</a>
                    <hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="About.php"><i class="fa-solid fa-address-card me-2"></i> About</a>
                    <hr class="bg-secondary">
                </li>
            </ul>
        </div>
        <div class="col-md-10 p-5 pt-4">
            <h3><i class="fa-solid fa-file-contract me-2"></i> PENAMBAHAN USER</h3>
            <hr>

            <div class="card text-center mt-3">
                <div class="card-header">
                    Penambahan User
                </div>
                <div class="card-body">
                    <div class="table mt-4" width="496" border="0" align="center">
                        <form action="../register.php" method="post">
                            <table>
                                <div class="input-group mb-4" style="width: 500px;">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Nama_User</span>
                                    <input type="text" name="nama_user"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                </div>
                                <div class="input-group mb-4" style="width: 500px;">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Username</span>
                                    <input type="text" name="username" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                </div>
                                <div class="input-group mb-4" style="width: 500px;">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Password</span>
                                    <input type="Password" name="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                </div>
                                <div class="input-group mb-4" style="width: 500px;">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Level</span>
                                    <input type="text" name="level" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                </div>
                                <div width="100" align="left">
                                    <table>
                                        <td height="68" align="left"><input type="submit" value="submit" /></td>
                                    </table>
                                </div>
                            </table>
                        </form>
                    </div>
                    <div class="card-footer text-muted">

                    </div>
                </div>
            </div>

            <!-- Optional JavaScript; choose one of the two! -->

            <!-- Option 1: Bootstrap Bundle with Popper -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

            <!-- Script Js -->
            <script src="admin.js"></script>
</body>

</html>