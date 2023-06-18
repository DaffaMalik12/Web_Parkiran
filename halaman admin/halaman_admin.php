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

    //  cek apakah yang mengakses halaman ini sudah login
    if ($_SESSION['level'] == "") {
        header("location:login.php?pesan=gagal");
    }
    ?>

    <!-- Koneksi Database -->
    <?php
    include "../koneksi.php";
    $bulan = ((int)date("m")) - 1;
    $listbulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
    $hari = (int)date("d");
    $tanggal = "$hari $listbulan[$bulan]";
    $select = "SELECT * FROM data_parkir";
    $hasil = mysqli_query($koneksi, $select);
    $datapengunjung = array();
    while ($buff = mysqli_fetch_assoc($hasil)) {
        $datapengunjung[$buff["tanggal"]] = $buff["jumlah"];
    }
    $jumlahminggu = 0;
    for ($i = $hari - 7; $i < $hari; $i++) {
        $jumlahminggu += $datapengunjung["$i $listbulan[$bulan]"];
    }
    $jumlahbulan = 0;
    for ($i = 1; $i <= $hari; $i++) {
        $jumlahbulan += $datapengunjung["$i $listbulan[$bulan]"];
    }
    ?>



    <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><i class="fa-solid fa-user" style="width: 20px;"></i> Welcome <?php echo $_SESSION['nama_user']; ?></a>
            <form action="" method="get" class="d-flex ms-auto"> <input type="hidden" name="username" value="Daftar Tabel">
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
                    <a class="nav-link text-white" href="penambahan_user.php"><i class="fa-solid fa-file-contract me-2"></i>User</a>
                    <hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="About.php"><i class="fa-solid fa-address-card me-2"></i> About</a>
                    <hr class="bg-secondary">
                </li>
            </ul>
        </div>
        <div class="col-md-10 p-5 pt-4">
            <h3><i class="fa-solid fa-gauge me-2"></i> DASHBOARD</h3>
            <hr>

            <div class="row text-white">
                <div class="card bg-info ms-2" style="width: 17rem;">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa-solid fa-door-open"></i>
                        </div>
                        <h5 class="card-title">Masuk Hari ini</h5>
                        <div class="display-4"><?php echo $datapengunjung[$tanggal]; ?></div>
                        <a href="">
                            <p class="card-text text-white">Lihat Detail <i class="fa-solid fa-arrow-right ms-1"></i></p>
                        </a>
                    </div>
                </div>

                <div class="card bg-success ms-2" style="width: 17rem;">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa-solid fa-door-open"></i>
                        </div>
                        <h5 class="card-title">Masuk Minggu ini</h5>
                        <div class="display-4"><?php echo $jumlahminggu ?></div>
                        <a href="">
                            <p class="card-text text-white">Lihat Detail <i class="fa-solid fa-arrow-right ms-1"></i></p>
                        </a>
                    </div>
                </div>

                <div class="card bg-danger ms-2" style="width: 17rem;">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa-solid fa-door-open"></i>
                        </div>
                        <h5 class="card-title">Masuk Bulan ini</h5>
                        <div class="display-4"><?php echo $jumlahbulan ?></div>
                        <a href="">
                            <p class="card-text text-white">Lihat Detail <i class="fa-solid fa-arrow-right ms-1"></i></p>
                        </a>
                    </div>
                </div>

                <div class="card mt-3">
                    <div class="card-header" style="background-color: grey;">
                        <p" style="color: black;">GRAFIK</p>
                    </div>
                    <div class="card-body" style="height: 300px;">
                        <canvas id="chart"></canvas>
                    </div>
                </div>
            </div>
        </div>



    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Script Js -->
    <script src="admin.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('chart');

        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Masuk Hari ini', 'Masuk Minggu Ini', 'Masuk Bulan ini', 'Total'],
                datasets: [{
                    label: '# of Votes',
                    data: [80, 490, 870, 1440],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>

</html>