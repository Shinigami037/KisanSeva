<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Login</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url('public/assets2/img/favicon.png'); ?>">
    <link href="public/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="public/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="public/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="public/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="public/assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="public/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="public/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="public/assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="public/assets/css/style.css" rel="stylesheet">

</head>

<body>

    <main style="background-image: url('public/assets2/img/registration.jpg'); background-repeat:no-repeat; background-size:cover">
        <div class="container">

            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                            <div class="d-flex justify-content-center py-4">

                                <a href="<?= base_url('index'); ?>">
                                    <h1><span style="color: orange;" class="d-none d-lg-block">Kisan Seva</span></h1>
                                </a>

                            </div><!-- End Logo -->

                            <div style="background: rgba(255, 255, 255, .6)" class="card mb-3">

                                <div class="card-body">

                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Login</h5>
                                    </div>
                                    <?php
                                    if (isset($validation)) {
                                        echo $validation->listErrors();
                                    }
                                    ?>
                                    <?php if (!empty(session()->getFlashdata('fail'))) : ?>
                                        <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
                                    <?php endif ?>
                                    <form class="row login_form" action="login" method="post" id="contactForm" novalidate>
                                        <?= csrf_field() ?>
                                        <div class="col-12">
                                            <label for="yourContact" class="form-label">Contact No.</label>
                                            <div class="input-group has-validation">
                                                <input type="tel" name="contact" class="form-control" id="yourUsername" required>
                                                <div class="invalid-feedback">Please Enter Contact No.</div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label for="yourPassword" class="form-label">Password</label>
                                            <input type="password" name="password" class="form-control" id="yourPassword" required>
                                            <div class="invalid-feedback">Please enter your password!</div>
                                        </div>

                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" type="submit">Login</button>
                                        </div>
                                        <div class="col-12">
                                            <p class="small mb-0">Doesn't have account? <a href="registration">Sign Up</a></p>
                                        </div>
                                    </form>

                                </div>
                            </div>
                            <!-- 
                            <div class="credits">
                                <h4 style="color: black; font-style:italic; font-weight:1000;">Designed by MangoTheGangster</h4>
                            </div> -->

                        </div>
                    </div>
                </div>

            </section>

        </div>
    </main><!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="public/assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="public/assets/vendor/chart.js/chart.min.js"></script>
    <script src="public/assets/vendor/echarts/echarts.min.js"></script>
    <script src="public/assets/vendor/quill/quill.min.js"></script>
    <script src="public/assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="public/assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="public/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="public/assets/js/main.js"></script>

</body>

</html>