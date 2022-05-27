<?= $this->extend('shortlink/layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row mt-5 align-items-center justify-content-center">
        <div class="col-md-7">
            <div class="text-center mb-3">
                <img src="<?= base_url('/assets/shortlinkAssets/img/bem-polos.png'); ?>" width="170px" alt="">
            </div>
            <div class="text-center mt-3">
                <h3 class="text-light judul">BEMILKOM SHORTLINK</h3>
            </div>
            <div class="text-center mb-3" style="margin-top: -5px;">
                <h3 class="text-light kata">The easiest customizable url shortener, ever.</h3>
            </div>
            <?= form_open_multipart('shortlink/ubahShortlink/' . $link['id']) ?>
            <?= csrf_field(); ?>

            <input type="hidden" name="id" value="<?= $link['id'] ?>">
                <div class="row">
                    <div class="col-2"></div>
                    <div class="form-group col-md-8 mb-3">
                        <input type="url" class="form-control <?= ($validation->hasError('link')) ? 'is-invalid' : ''; ?>" id="link" name="link" value="<?=$link['link']?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('link') ?>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-2 col-md-0"></div>
                    <div class="col-4 col-md-3 mt-2 bem">
                        Bemilkomunsri.org/
                    </div>
                    <div class="col-md-5 col-8">
                        <div class="form-group mb-3">
                            <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id="nama" name="nama" value="<?=$link['nama']?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('nama') ?>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="text-center">
                    <button type="submit" class="btn btn-round my-2 h-float" id="btn-login">
                        Edit Shorten URL!
                    </button>
                </div>

            <?= form_close()?>

            <div class="text-center mt-5 mb-3">
                <a href="/shortlink">Back to Menu</a>
            </div>

        </div>
    </div>
</div>

<?= $this->endSection(); ?>