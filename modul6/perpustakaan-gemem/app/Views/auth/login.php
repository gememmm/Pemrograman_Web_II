<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<style>
    body, html {
        height: 100%;
        margin: 0;
        overflow: hidden;
    }

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

    .content-container {
        position: relative;
    }

    .card {
        background: rgba(255, 255, 255, 0.9); 
        border: none; 
    }
</style>

<div class="background-image"></div>

<div class="container mt-5 content-container">
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <div class="card">
                <div class="card-body">
                    <h3 class="text-center" style="font-weight: bold;">LOGIN</h3>
                    <p class="text-center">Login Terlebih Dahulu!</p>
                    <hr>
                    <?php if (session()->getFlashdata('success')) : ?>
                        <div class="alert alert-success">
                            <?php echo session()->getFlashdata('success'); ?>
                        </div>
                    <?php endif; ?>

                    <?php if (session()->getFlashdata('error')) : ?>
                        <div class="alert alert-danger">
                            <?php echo session()->getFlashdata('error'); ?>
                        </div>
                    <?php endif; ?>

                    <?= validation_list_errors() ?>

                    <?= form_open('login'); ?>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary">Login</button>
                    </div>
                    <div class="text-center mt-2">
                        Belum punya akun? <a href="<?php echo base_url('register'); ?>">Silakan daftar.</a>
                    </div>
                    <?= form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>