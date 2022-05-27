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
<style>
    html,
    body {
        background-color: #005045;
    }
</style>

<body>


    <?= $this->renderSection('content'); ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="<?= base_url('assets'); ?>/shortlinkAssets/js/jquery.min.js"></script>
    <script src="<?= base_url('assets'); ?>/shortlinkAssets/js/sweetalert2.all.min.js"></script>
    <script src="<?= base_url('assets'); ?>/shortlinkAssets/js/custom.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/js/all.min.js"></script>
    <script>
        // function UpperCase() {
        //     var x = document.getElementById("nama");
        //     x.value = x.value.replace(/^./, function(letter) {
        //         return letter.toUpperCase();
        //     });
        // }

        function Clipboard() {
            var cb = navigator.clipboard;
            var paragraph = document.querySelector('#nama');
            cb.writeText(paragraph.innerText).then(() => alert('Text copied'));
        }
    </script>
    
</body>

</html>