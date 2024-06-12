<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<style>
    .background-image {
        background-image: url('<?= base_url('/image.png') ?>');
        background-size: cover;
        background-position: center;
        filter: blur(8px);
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
</style>
<div class="background-image"></div>

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

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    DAFTAR BUKU
                    <a href="<?php echo base_url('buku/create'); ?>" class="btn btn-primary btn-sm float-right">Tambah Buku</a>
                </div>
                <div class="card-body">

                    <?php if (session()->getFlashdata('success')) { ?>
                        <div class="alert alert-success">
                            <?php echo session()->getFlashdata('success'); ?>
                        </div>
                    <?php } ?>

                    <?php if (session()->getFlashdata('error')) { ?>
                        <div class="alert alert-danger">
                            <?php echo session()->getFlashdata('error'); ?>
                        </div>
                    <?php } ?>

                    <table class="table table-bordered">
                        <thead class="text-center">
                            <tr>
                                <th scope="col" style="width: 30%;">Judul</th>
                                <th scope="col" style="width: 20%;">Penulis</th>
                                <th scope="col" style="width: 20%;">Penerbit</th>
                                <th scope="col" style="width: 15%;">Tahun Terbit</th>
                                <th scope="col" style="width: 15%;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="text-left">
                            <?php if (!empty($buku) && is_array($buku)) { ?>
                                <?php foreach ($buku as $row) { ?>
                                    <tr>
                                        <td><?= $row['judul']; ?></td>
                                        <td><?= $row['penulis'] ?></td>
                                        <td><?= $row['penerbit'] ?></td>
                                        <td><?= $row['tahun_terbit'] ?></td>
                                        <td>
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');"  
                                                action="<?php echo base_url('buku/destroy/' . $row['id']); ?>" method="POST">  

                                                <input type="hidden" name="{csrf_token}" value="{csrf_hash}">
                                                <input type="hidden" name="_method" value="DELETE"> 

                                                <a href="<?php echo base_url('buku/edit/' . $row['id']); ?>" class="btn btn-primary btn-sm">Edit</a>

                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>  
                                            </form>  
                                        </td>
                                    </tr>

                                <?php } ?>
                            <?php } else { ?>
                                <tr>
                                    <td colspan="4" class="text-center">No post found.</td>
                                </tr>

                            <?php } ?>
                        </tbody>
                    </table>

                    <?= $pager->links(); ?>
                </div>

            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>

<?= $this->section('extra-js') ?>
<script>
    $(document).ready(function() {
        $('.pagination li').addClass('page-item');
        $('.pagination li a').addClass('page-link');
    })
</script>
<?= $this->endSection() ?>