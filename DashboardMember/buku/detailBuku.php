<?php 
require "../../config/config.php";
$idBuku = $_GET["id"];
$query = queryReadData("SELECT * FROM buku WHERE id_buku = '$idBuku'");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Detail Buku || Member</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/de8de52639.js" crossorigin="anonymous"></script>
  <style>
    body {
      background-color: #f8f9fa;
    }
    .detail-wrapper {
      max-width: 550px;
      margin: auto;
    }
    .card {
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }
    .cover-img {
      width: 100%;
      height: 300px;
      object-fit: contain;
      background-color: #fff;
      border-top-left-radius: 12px;
      border-top-right-radius: 12px;
    }
    .footer {
      background-color: #f8f9fa;
      padding: 1rem 0;
      border-top: 1px solid #dee2e6;
    }
  </style>
</head>
<body>


<nav class="navbar fixed-top bg-body-tertiary shadow-sm">
  <div class="container-fluid p-3">
    <a class="navbar-brand" href="#"><img src="../../assets/logoo.png" alt="logo" width="120px"></a>
    <a class="btn btn-outline-primary" href="../dashboardMember.php">Dashboard</a>
  </div>
</nav>


<div class="container mt-5 pt-5 detail-wrapper">
  <h2 class="mb-4 text-center fw-bold">Detail Buku</h2>
  <div class="card bg-white">
    <?php foreach ($query as $item): ?>
      <img src="../../imgDB/<?= $item["cover"]; ?>" class="cover-img" alt="cover buku">
      <div class="card-body">
        <h4 class="card-title text-center"><?= $item["judul"]; ?></h4>
        <p class="text-muted text-center"><?= $item["buku_deskripsi"]; ?></p>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item"><strong>ID Buku:</strong> <?= $item["id_buku"]; ?></li>
        <li class="list-group-item"><strong>Kategori:</strong> <?= $item["kategori"]; ?></li>
        <li class="list-group-item"><strong>Pengarang:</strong> <?= $item["pengarang"]; ?></li>
        <li class="list-group-item"><strong>Penerbit:</strong> <?= $item["penerbit"]; ?></li>
        <li class="list-group-item"><strong>Tahun Terbit:</strong> <?= $item["tahun_terbit"]; ?></li>
        <li class="list-group-item"><strong>Jumlah Halaman:</strong> <?= $item["jumlah_halaman"]; ?></li>
      </ul>
      <div class="card-body d-flex justify-content-between">
        <a href="daftarBuku.php" class="btn btn-outline-danger"><i class="fa-solid fa-xmark"></i> Batal</a>
        <a href="../formPeminjaman/pinjamBuku.php?id=<?= $item["id_buku"]; ?>" class="btn btn-success"><i class="fa-solid fa-book"></i> Pinjam</a>
      </div>
    <?php endforeach; ?>
  </div>
</div>


<footer class="footer mt-5">
  <div class="container-fluid d-flex justify-content-between align-items-center">
    <p class="mt-2 mb-0">Created by <span class="text-primary">Kelompok 1</span> © 2025</p>
    <p class="mt-2 mb-0">versi 1.0</p>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
