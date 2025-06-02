<?php
session_start();

if(!isset($_SESSION["signIn"]) ) {
    header("Location: ../../sign/member/sign_in.php");
    exit;
}

require "../../config/config.php";
// query read semua buku
$buku = queryReadData("SELECT * FROM buku");
//search buku
if(isset($_POST["search"]) ) {
    $buku = search($_POST["keyword"]);
}
//read buku informatika
if(isset($_POST["informatika"]) ) {
$buku = queryReadData("SELECT * FROM buku WHERE kategori = 'informatika'");
}
//read buku bisnis
if(isset($_POST["bisnis"]) ) {
$buku = queryReadData("SELECT * FROM buku WHERE kategori = 'bisnis'");
}
//read buku filsafat
if(isset($_POST["filsafat"]) ) {
$buku = queryReadData("SELECT * FROM buku WHERE kategori = 'filsafat'");
}
//read buku novel
if(isset($_POST["novel"]) ) {
$buku = queryReadData("SELECT * FROM buku WHERE kategori = 'novel'");
}
//read buku sains
if(isset($_POST["sains"]) ) {
$buku = queryReadData("SELECT * FROM buku WHERE kategori = 'sains'");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/de8de52639.js" crossorigin="anonymous"></script>
    <title>Daftar Buku || Member</title>
    <style>
        body {
            background-color: #f8f9fa;
        }
        .navbar {
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        }
        .filter-kategori {
            margin-top: 80px; /* Ruang di bawah navbar fixed */
            padding: 15px;
            background-color: #fff;
            border-bottom: 1px solid #dee2e6;
        }
        .nav-link {
            cursor: pointer;
        }
        .search-form {
            padding: 15px;
            background-color: #fff;
            border-bottom: 1px solid #dee2e6;
        }
        .card {
            border: none;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.08);
            transition: transform 0.2s ease-in-out;
        }
        .card:hover {
            transform: scale(1.02);
        }
        .card-img-top {
            max-height: 400px; /* Sesuaikan tinggi maksimal */
            object-fit: cover;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }
        .card-body {
            padding: 1rem;
        }
        .card-title {
            font-size: 1rem;
            margin-bottom: 0.5rem;
        }
        .list-group-item {
            font-size: 0.9rem;
            padding: 0.5rem 1rem;
            border: none;
        }
        .btn-detail {
            border-radius: 5px;
            padding: 0.6rem 1rem;
            font-size: 0.9rem;
            transition: background-color 0.3s ease;
        }
        .btn-success:hover {
            background-color: #218838;
        }
        .footer {
            background-color: #f8f9fa;
            padding: 1rem 0;
            text-align: center;
            border-top: 1px solid #dee2e6;
            position: static;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <nav class="navbar fixed-top bg-body-tertiary shadow-sm">
        <div class="container-fluid p-3">
            <a class="navbar-brand" href="#">
                <img src="../../assets/logoo.png" alt="logo" width="120px">
            </a>
            <div class="d-flex">
                <a class="btn btn-outline-secondary ms-2" href="../dashboardMember.php">Dashboard</a>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="filter-kategori">
            <ul class="nav nav-pills justify-content-center">
                <li class="nav-item">
                    <form action="" method="post">
                        <button class="nav-link <?php if(!isset($_POST['informatika']) && !isset($_POST['bisnis']) && !isset($_POST['filsafat']) && !isset($_POST['novel']) && !isset($_POST['sains'])) echo 'active'; ?>" type="submit">Semua</button>
                    </form>
                </li>
                <li class="nav-item">
                    <form action="" method="post">
                        <button class="nav-link <?php if(isset($_POST['informatika'])) echo 'active'; ?>" type="submit" name="informatika">Informatika</button>
                    </form>
                </li>
                <li class="nav-item">
                    <form action="" method="post">
                        <button class="nav-link <?php if(isset($_POST['bisnis'])) echo 'active'; ?>" type="submit" name="bisnis">Bisnis</button>
                    </form>
                </li>
                <li class="nav-item">
                    <form action="" method="post">
                        <button class="nav-link <?php if(isset($_POST['filsafat'])) echo 'active'; ?>" type="submit" name="filsafat">Filsafat</button>
                    </form>
                </li>
                <li class="nav-item">
                    <form action="" method="post">
                        <button class="nav-link <?php if(isset($_POST['novel'])) echo 'active'; ?>" type="submit" name="novel">Novel</button>
                    </form>
                </li>
                <li class="nav-item">
                    <form action="" method="post">
                        <button class="nav-link <?php if(isset($_POST['sains'])) echo 'active'; ?>" type="submit" name="sains">Sains</button>
                    </form>
                </li>
            </ul>
        </div>

        <div class="search-form mt-3">
            <form action="" method="post" class="d-flex justify-content-end">
                <div class="input-group">
                    <input class="form-control border-end-0 rounded-start" type="text" name="keyword" id="keyword" placeholder="Cari judul atau kategori buku...">
                    <button class="btn btn-outline-secondary border-start-0 rounded-end bg-white" type="submit" name="search"><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
            </form>
        </div>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 mt-4">
            <?php foreach ($buku as $item) : ?>
            <div class="col">
                <div class="card h-100">
                    <img src="../../imgDB/<?= $item["cover"]; ?>" class="card-img-top" alt="coverBuku">
                    <div class="card-body">
                        <h5 class="card-title"><?= $item["judul"]; ?></h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Kategori: <?= $item["kategori"]; ?></li>
                    </ul>
                    <div class="card-body">
                        <a class="btn btn-success btn-sm btn-detail" href="detailBuku.php?id=<?= $item["id_buku"]; ?>">Detail</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

    <footer class="footer bg-light">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <p class="mt-2 mb-0">Created by <span class="text-primary"> Kelompok 1</span> © 2025</p>
            <p class="mt-2 mb-0">versi 1.0</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>