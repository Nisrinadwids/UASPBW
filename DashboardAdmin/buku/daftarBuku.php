<?php
require "../../config/config.php";
$buku = queryReadData("SELECT * FROM buku");

// mengaktifkan tombol search engine
if(isset($_POST["search"]) ) {
    //buat variabel dan ambil apa saja yg diketikkan user di dalam input dan kirimkan ke function search.
    $buku = search($_POST["keyword"]);

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/de8de52639.js" crossorigin="anonymous"></script>
    <title>Kelola buku || Admin</title>
    <style>
        body {
            background-color: #f8f9fa; /* Warna latar belakang body */
        }
        .navbar {
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05); /* Efek bayangan navbar */
        }
        .search-form {
            margin-top: 80px; /* Berikan ruang di bawah navbar fixed */
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
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
         height: 500px; /* Sesuaikan tinggi gambar */
        object-fit: cover; /* Agar gambar mengisi area tanpa distorsi */
        border-top-left-radius: 4px;
        border-top-right-radius: 4px;
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
        .btn-action {
            border-radius: 5px;
            padding: 0.6rem 1rem;
            font-size: 0.9rem;
            transition: background-color 0.3s ease;
        }
        .btn-success:hover {
            background-color: #218838;
        }
        .btn-danger:hover {
            background-color: #c82333;
        }
        .footer {
            background-color: #f8f9fa;
            padding: 1rem 0;
            text-align: center;
            border-top: 1px solid #dee2e6;
            position: fixed; /* Jika ingin footer tetap di bawah */
            bottom: 0; /* Jika ingin footer tetap di bawah */
            width: 100%; /* Jika ingin footer tetap di bawah */
        }
    </style>
</head>
<body>
    <nav class="navbar fixed-top navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="../../assets/logoo.png" alt="logo" width="120px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../dashboardAdmin.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-success" href="tambahBuku.php">Tambah Buku</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid p-4">
        <div class="search-form">
            <form action="" method="post" class="d-flex justify-content-end mb-3">
                <div class="input-group">
                    <input class="form-control border-end-0 rounded-start" type="text" name="keyword" id="keyword" placeholder="Cari data buku...">
                    <button class="btn btn-outline-secondary border-start-0 rounded-end bg-white" type="submit" name="search"><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
            </form>
        </div>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 mt-3">
            <?php foreach ($buku as $item) : ?>
            <div class="col">
                <div class="card h-100">
                    <img src="../../imgDB/<?= $item["cover"]; ?>" class="card-img-top" alt="coverBuku">
                    <div class="card-body">
                        <h5 class="card-title"><?= $item["judul"]; ?></h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Kategori: <?= $item["kategori"]; ?></li>
                        <li class="list-group-item">ID Buku: <?= $item["id_buku"]; ?></li>
                    </ul>
                    <div class="card-body d-flex justify-content-around">
                        <a class="btn btn-success btn-sm btn-action" href="updateBuku.php?idReview=<?= $item["id_buku"]; ?>" id="review">Edit</a>
                        <a class="btn btn-danger btn-sm btn-action" href="deleteBuku.php?id=<?= $item["id_buku"]; ?>" onclick="return confirm('Yakin ingin menghapus data buku ? ');">Delete</a>
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