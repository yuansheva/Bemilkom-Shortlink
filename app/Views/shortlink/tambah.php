<?= $this->extend('shortlink/layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row mt-5 align-items-center justify-content-center">
        <div class="col-md-6">
            <div class="card" id="card-tambah">
                <div class="card-header">
                    Form Tambah Data Link
                </div>

                <div class="card-body">
                    <form action="tambahShortlink" method="post">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">bemilkomunsri.org/</span>
                            </div>
                            <input type="text" name="nama" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id="nama" onkeyup="UpperCase()">
                            <div class="invalid-feedback">
                                <?= $validation->getError('nama') ?>
                            </div>
                        </div>
                        <div>
                            <label for="nama">Link (harus menggunakan http:// atau https://)</label>
                            <input type="text" name="link" class="form-control <?= ($validation->hasError('link')) ? 'is-invalid' : ''; ?>" id="link">
                            <div class="invalid-feedback">
                                <?= $validation->getError('link') ?>
                            </div>
                        </div>
                        <div class="row justify-items-center justify-content-center align-items-center">
                            <button type="submit" name="tambah" class="btn-detail mt-2 btn-sm d-flex flex-row justify-items-center justify-content-center align-items-center rounded-3 text-white">Tambah</button>
                        </div>
                    </form>
                </div>

                <div class="row justify-items-right justify-content-right align-items-right">
                    <a href="/" class="btn-detail mt-2 btn-sm  d-flex flex-row justify-items-center justify-content-center align-items-center rounded-3">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>