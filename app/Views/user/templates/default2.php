<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

    <!-- title -->
    <title>Kisan Seva</title>
    <!--  -->
    <link rel="stylesheet" href="<?php echo base_url('public/assets3/style.css'); ?>">
    <link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('public/assets3/fonts/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css">
    <!--  -->

    <!-- favicon -->
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url('public/assets2/img/favicon.png'); ?>">
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <!-- fontawesome -->
    <link rel="stylesheet" href="<?php echo base_url('public/assets2/css/all.min.css'); ?>">
    <!-- bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url('public/assets2/bootstrap/css/bootstrap.min.css'); ?>">
    <!-- owl carousel -->
    <link rel="stylesheet" href="<?php echo base_url('public/assets2/css/owl.carousel.css'); ?>">
    <!-- magnific popup -->
    <link rel="stylesheet" href="<?php echo base_url('public/assets2/css/magnific-popup.css'); ?>">
    <!-- animate css -->
    <link rel="stylesheet" href="<?php echo base_url('public/assets2/css/animate.css'); ?>">
    <!-- mean menu css -->
    <link rel="stylesheet" href="<?php echo base_url('public/assets2/css/meanmenu.min.css'); ?>">
    <!-- main style -->
    <link rel="stylesheet" href="<?php echo base_url('public/assets2/css/main.css'); ?>">
    <!-- responsive -->
    <link rel="stylesheet" href="<?php echo base_url('public/assets2/css/responsive.css'); ?>">


    <link href="<?php echo base_url('public/assets/img/apple-touch-icon.png'); ?>" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo base_url('public/assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('public/assets/vendor/bootstrap-icons/bootstrap-icons.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('public/assets/vendor/boxicons/css/boxicons.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('public/assets/vendor/quill/quill.snow.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('public/assets/vendor/quill/quill.bubble.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('public/assets/vendor/remixicon/remixicon.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('public/assets/vendor/simple-datatables/style.css'); ?>" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?php echo base_url('public/assets/css/style.css'); ?>" rel="stylesheet">

</head>

<body>

    <!-- Start Header Area -->

    <!-- End Header Area -->
    <?php echo $this->include('user/templates/header2'); ?>
    <!-- start banner Area -->

    <!-- Body Section start -->
    <?php echo $this->renderSection('content'); ?>
    <!-- Body Section End -->


    <!-- End related-product Area -->

    <!-- start footer Area -->
    <?php echo $this->include('user/templates/footer2'); ?>
    <!-- End footer Area -->
    <!-- jquery -->
    <script src="<?php echo base_url('public/assets2/js/jquery-1.11.3.min.js'); ?>"></script>
    <!-- bootstrap -->
    <script src="<?php echo base_url('public/assets2/bootstrap/js/bootstrap.min.js'); ?>"></script>
    <!-- count down -->
    <script src="<?php echo base_url('public/assets2/js/jquery.countdown.js'); ?>"></script>
    <!-- isotope -->
    <script src="<?php echo base_url('public/assets2/js/jquery.isotope-3.0.6.min.js'); ?>"></script>
    <!-- waypoints -->
    <script src="<?php echo base_url('public/assets2/js/waypoints.js'); ?>"></script>
    <!-- owl carousel -->
    <script src="<?php echo base_url('public/assets2/js/owl.carousel.min.js'); ?>"></script>
    <!-- magnific popup -->
    <script src="<?php echo base_url('public/assets2/js/jquery.magnific-popup.min.js'); ?>"></script>
    <!-- mean menu -->
    <script src="<?php echo base_url('public/assets2/js/jquery.meanmenu.min.js'); ?>"></script>
    <!-- sticker js -->
    <script src="<?php echo base_url('public/assets2/js/sticker.js'); ?>"></script>
    <!-- main js -->
    <script src="<?php echo base_url('public/assets2/js/main.js'); ?>"></script>

    <!-- Vendor JS Files -->
    <script src="<?php echo base_url('public/assets/vendor/apexcharts/apexcharts.min.js'); ?>"></script>
    <script src="<?php echo base_url('public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?php echo base_url('public/assets/vendor/chart.js/chart.min.js'); ?>"></script>
    <script src="<?php echo base_url('public/assets/vendor/echarts/echarts.min.js'); ?>"></script>
    <script src="<?php echo base_url('public/assets/vendor/quill/quill.min.js'); ?>"></script>
    <script src="<?php echo base_url('public/assets/vendor/simple-datatables/simple-datatables.js'); ?>"></script>
    <script src="<?php echo base_url('public/assets/vendor/tinymce/tinymce.min.js'); ?>"></script>
    <script src="<?php echo base_url('public/assets/vendor/php-email-form/validate.js'); ?>"></script>

    <!-- Template Main JS File -->
    <script src="<?php echo base_url('public/assets/js/main.js'); ?>"></script>

    <!--  -->
    <script src="<?php echo base_url('public/assets3/js/jquery-1.11.1.min.js'); ?>"></script>
    <script src="<?php echo base_url('public/assets3/js/plugins.js'); ?>"></script>
    <script src="<?php echo base_url('public/assets3/js/app.js'); ?>"></script>
    <!--  -->

</body>

</html>