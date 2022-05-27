<?= $this->extend('shortlink/layout/template'); ?>
<?= $this->section('content'); ?>


<div class="container">

    <div class="row mt-5 align-items-center justify-content-center">

        <div class="col-md-6">
            <div class="card" id="card-ubah">
                <div class="card-header">
                    Form Ubah Data Link
                </div>



                <div class="card-body">
                    <?= form_open_multipart('shortlink/ubahShortlink/' . $link['id']) ?>
                    <?= csrf_field(); ?>
                    <input type="hidden" name="id" value="<?= $link['id'] ?>">

                    <div class="form-group mb-3">
                        <label for="nama">Shortlink</label>
                        <input type="text" name="nama" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id="nama" value="<?= $link['nama'] ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('nama') ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="nama">Link (harus menggunakan http:// atau https://)</label>
                        <input type="text" name="link" class="form-control <?= ($validation->hasError('link')) ? 'is-invalid' : ''; ?>" id="link" value="<?= $link['link'] ?>">
                        <div class="invalid-feedback">
                             <?= $validation->getError('link') ?>
                        </div>
                    </div>
                    <div class="round"></div>
                    <div class="row justify-items-center justify-content-center align-items-center">
                        <button type="submit" name="ubah" class="btn-detail d-flex flex-row justify-items-center justify-content-center align-items-center rounded-3 text-white mt-3">Ubah Data</button>
                    </div>
                    <?= form_close() ?>
                </div>

                <div class="row justify-items-right justify-content-right align-items-right">
                    <a href="<?= site_url(); ?>/shortlink" class="btn-detail btn-sm  d-flex flex-row justify-items-center justify-content-center align-items-center rounded-3">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>