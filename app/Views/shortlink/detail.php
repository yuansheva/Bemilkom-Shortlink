<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/shortlinkAssets/css/style.css'); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <!-- Favicons -->
    <link href="<?= base_url('assets/shortlinkAssets/img/bem.png') ?>" rel="icon">


    <title>Shortlink - BEM KM FASILKOM UNSRI</title>
</head>

<body>

    <nav class="navbar navbar-light">
        <div class="container">
            <a class="navbar-brand mb-0" href="https://bemilkomunsri.org/">
                <img src="<?= base_url('assets/shortlinkAssets/img/bem.png'); ?>" width="50px">
                <span id="span1">BEM KM FASILKOM UNSRI </span>
            </a>
            <form class="d-flex">
                <a class="btn btn-outline-danger" style="color:white;" href="/logout">Logout</a>
            </form>
        </div>
    </nav>
    <div class="container">

        <div class="row mt-5  align-items-center justify-content-center">
            <div class="detail-wrap d-flex flex-row 2-100 align-items-center justify-content-between">
                <div class="detail-status d-flex flex-row align-items-center justify-content-start">
                    <p class="text mt-3">Status</p>
                    <button type="button" class="btn-detail2 d-flex flex-row justify-items-center justify-content-center align-items-center rounded-3">
                        <div class="round"></div>
                        <a class="p-detail" href="#">Online</a>
                    </button>
                </div>

                <span class="icon-link-box d-flex flex-row justify-content-center align-items-center">
                    <a href="" onclick="Clipboard()" class="btn badge bg-success float-end" data-bs-toggle="tooltip" title="Copy Link"><i class="fa-solid fa-clipboard"></i>
                    </a>
                    <a href="<?php echo site_url('shortlink/ubah/' . $link['id']) ?>" class="btn badge bg-success float-end tombol-ubah" data-bs-toggle="tooltip" title="Ubah Link">
                        <i class="fa-solid fa-pen"></i>
                    </a>
                    <a href="<?php echo site_url('shortlink/hapus/' . $link['id']) ?>" class="btn badge bg-danger float-end tombol-hapus" data-bs-toggle="tooltip" title="Hapus Link">
                        <i class="fa-solid fa-trash"></i>
                    </a>
                </span>
            </div>
        </div>
    </div>
    </div>

    <div class="container">
        <div class="row mt-5  align-items-center justify-content-center">
            <div class="col-md-6">

                <div class="card" id="card-detail">
                    <div class="card-header">
                        Detail Data Link
                    </div>

                    <div class="card-body">
                        <h5 class="card-title">Shortlink : <span id="nama">bemilkomunsri.org/<?= $link['nama']; ?></span> </h5>
                        <h5 class="card-text"> Link : <?= $link['link']; ?></h5>
                        <div class="round"></div>
                        <a href="/" class="btn-detail d-flex flex-row justify-items-center justify-content-center align-items-center rounded-3">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="<?= base_url('assets'); ?>/shortlinkAssets/js/jquery.min.js"></script>
    <script src="<?= base_url('assets'); ?>/shortlinkAssets/js/sweetalert2.all.min.js"></script>
    <script src="<?= base_url('assets'); ?>/shortlinkAssets/js/custom.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/js/all.min.js"></script>
    <script>
        function Clipboard() {
            var cb = navigator.clipboard;
            var paragraph = document.querySelector('#nama');
            cb.writeText(paragraph.innerText).then(() => alert('Text copied'));
        }
    </script>
</body>

</html>