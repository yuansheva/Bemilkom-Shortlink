<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login - BEM KM FASILKOM UNSRI</title>

    <!-- Custom fonts for this template-->

    <link href="<?= base_url('assets/shortlinkAssets/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->

    <link href="<?= base_url('assets/shortlinkAssets/css/sb-admin-2.min.css'); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/shortlinkAssets/css/style.css'); ?>">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

    <!-- Favicons -->
    <link href="<?= base_url('assets/shortlinkAssets/img/bem.png') ?>" rel="icon">

</head>

<body>
    <div class="container" id="login">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-7">
                <?php if (!empty(session()->getFlashdata('error'))) : ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <?php echo session()->getFlashdata('error'); ?>
                    </div>
                <?php endif; ?>
                <div class="card border-0" id="card-login">
                    <div class="card-header border-0 bg-transparent pb-5">
                        <div class="card-body">
                            <div class="text-center mb-3">
                                <img src="<?= base_url('/assets/shortlinkAssets/img/bem.png'); ?>" width="100" height="110" alt="">
                            </div>
                            <div class="text-center mt-3 mb-3">
                                <h3 class="text-light">LOGIN</h3>
                            </div>
                            <form class="user" method="post" action="login/prosesLogin">

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Enter Email Address..." value="<?= set_value('email'); ?>">
                                </div>

                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-round my-2 h-float" id="btn-login">
                                        Login
                                    </button>
                                </div>

                                <div class="custom-shape-divider-bottom-1650470489">
                                    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                                        <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
                                    </svg>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- Bootstrap core JavaScript-->

        <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
        <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

        <!-- Optional JavaScript;-->
        <script src="<?= base_url('assets'); ?>/js/custom.js"></script>

</body>

</html>