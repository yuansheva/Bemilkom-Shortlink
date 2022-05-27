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
        <div class="row mt-3 align-items-center justify-content-center">
        <div class="flash-data" data-flashdata="<?= session()->getFlashdata('pesan'); ?>"></div>
        </div>
    </div>

    <div class="row mt-3 align-items-center justify-content-center" id="main-content">
        <div class="col-md-6">
            <div class="d-inline-block text-center">
                <h2 class="text-center daftar">Daftar Link</h2>
            </div>

            <div class="d-inline-block text-center">
                <div class="list-button-box d-flex flex-row align-items-right ">
                    <div class="d-inline-block w-100">
                        <button type="button" class="btn-tambah d-flex flex-row align-items-center justify-content-right w-100 rounded-pill mb-3" type="submit">
                            <span>
                                <img src="<?= base_url('/assets/shortlinkAssets/img/add.png'); ?>">
                            </span>
                            <span class="p-add">
                                <a href="shortlink/tambah">Tambah Link
                                </a>
                            </span>
                        </button>
                    </div>
                </div>
            </div>

            <?php if (empty($link)) : ?>
                <div class="alert alert-danger" role="alert">
                    data Link tidak ditemukan
                </div>
            <?php else : ?>
                <ul class="list-group bg-transparent">
                    <?php foreach ($link as $k) : ?>
                        <li class="list-group-item border-0 bg-transparent">
                            <div class="list-link d-flex flex-col">
                                <div class="link d-flex flex-row p-4 ">

                                    <span>
                                        <button type="button" class="btn-detail d-flex flex-row justify-items-center justify-content-center align-items-center rounded-3">
                                            <div class="round"></div>
                                            <a class="p-detail" href="<?= base_url('shortlink/detail/' . $k['id']) ?>">Details</a>
                                        </button>
                                    </span>

                                    <span>
                                        <a class="link-address" id="nama" href="<?= base_url($k['nama']); ?>">bemilkomunsri.org/<?= $k['nama']; ?></a>

                                    </span>

                                    <span class="icon-link-box d-flex flex-row justify-content-center align-items-center">
                                    </span>

                                </div>
                            </div>

                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
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