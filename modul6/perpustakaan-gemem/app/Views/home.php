<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="<?= base_url('/') ?>">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('buku') ?>">Buku</a>
            </li>
        </ul>
        <ul class="navbar-nav">
            <?php if (session()->get('logged_in')): ?>
                <li class="nav-item">
                    <span class="nav-link">Hello, <?= session()->get('username') ?></span>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-outline-secondary mx-2" href="<?= base_url('logout') ?>">Logout</a>
                </li>
            <?php else: ?>
                <li class="nav-item">
                    <a class="nav-link btn btn-outline-primary mx-2" href="<?= base_url('login') ?>">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-success mx-2" href="<?= base_url('register') ?>">Register</a>
                </li>
            <?php endif; ?>
        </ul>
    </div>
</nav>

<!-- Jumbotron Section -->
<div class="jumbotron text-center d-flex align-items-center justify-content-center" style="height: 620px; background: url('/image.png') no-repeat center center; background-size: cover;">
    <div class="container"> 
        <?php if (session()->get('logged_in')): ?>
            <h1 class="text-white"><strong>Selamat Datang <?= session()->get('username') ?> di Perpustakaan Gemem</strong></h1>
            <p class="lead text-white">Dunia Penuh Buku untuk Di Jelajahi</p>
        <?php else: ?>
            <h1 class="text-white"><strong>Selamat Datang di Perpustakaan Gemem</strong></h1>
            <p class="lead text-white">Dunia Penuh Buku untuk Di Jelajahi</p>
            <a href="<?= base_url('login') ?>" class="btn btn-primary my-2">Login</a>
            <a href="<?= base_url('register') ?>" class="btn btn-success my-2">Register</a>
        <?php endif; ?>
    </div>
</div>
<?= $this->endSection() ?>