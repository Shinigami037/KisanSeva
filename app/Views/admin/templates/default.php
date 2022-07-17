<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Admin</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?php echo base_url('public/assets/img/favicon.png'); ?>" rel="icon">
    <link href="<?php echo base_url('public/assets/img/apple-touch-icon.png'); ?>" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="<?php echo site_url('https://fonts.gstatic.com'); ?>" rel="preconnect">
    <link href="<?php echo site_url('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i'); ?>" rel="stylesheet">

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

    <!-- ======= Header ======= -->
    <?php echo $this->include('admin/templates/header'); ?>
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <?php echo $this->include('admin/templates/sidebar'); ?>
    <!-- End Sidebar-->

    <!-- Start #Main -->
    <?php echo $this->renderSection('content'); ?>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php echo $this->include('admin/templates/footer'); ?>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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

</body>

</html>