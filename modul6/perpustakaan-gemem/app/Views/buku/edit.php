<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <?= $title ?>
                </div>
                <div class="card-body">

                    <?php if (session()->getFlashdata('error')) : ?>
                        <div class="alert alert-danger">
                            <?php echo session()->getFlashdata('error'); ?>
                        </div>
                    <?php endif; ?>

                    <?= validation_list_errors() ?>

                    <?= form_open('buku/update/'. $post['id']); ?>
                    <input type="hidden" name="_method" value="PUT">

                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" name="judul" value="<?= $post['judul'];?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="penulis">Penulis</label>
                        <input type="text" name="penulis" value="<?= $post['penulis'];?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="penerbit">Penerbit</label>
                        <input type="text" name="penerbit" value="<?= $post['penerbit'];?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="tahun_terbit">Tahun Terbit</label>
                        <input type="text" name="tahun_terbit" value="<?= $post['tahun_terbit'];?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary">Update</button>
                        <a href="<?= base_url('buku') ?>" class="btn btn-link">Back</a>
                    </div>
                    <?= form_close(); ?>

                </div>

            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>

<?= $this->section('extra-js') ?>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote-bs4.min.js"></script>
<script>
    $(document).ready(function() {
        $('#buku_content').summernote({
            tabsize: 2,
            height: 500
        });
    })
</script>
<?= $this->endSection() ?>