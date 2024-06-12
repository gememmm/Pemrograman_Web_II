<?php
    require('Model.php');
    if(isset($_GET['id_peminjaman'])) {
        hapusPeminjaman($_GET['id_peminjaman']);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peminjaman Perpustakaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar bg-primary navbar-expand-lg " data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Perpustakaan Gemem</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="member.php">Member</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="buku.php">Buku</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="peminjaman.php">Peminjaman</a>
            </li>
        </ul>
        </div>
    </div>
</nav>
    <div class="container">
        <h2 class="my-4">Peminjaman</h2>
        <a href="Index.php" class="btn btn-secondary">Kembali</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID Peminjaman</th>
                    <th>Tanggal Peminjaman</th>
                    <th>Tanggal Kembali</th>
                    <th>ID Member</th>
                    <th>ID Buku</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php tampilPeminjaman(); ?>
            </tbody>
        </table>
        <a href="FormPeminjaman.php" class="btn btn-primary">Tambah Peminjaman</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
