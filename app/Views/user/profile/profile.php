<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="<?= base_url('public/img/fav.png'); ?>">
    <!-- Author Meta -->
    <meta name="author" content="CodePixar">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Fit Health</title>

    <!--
            CSS
            ============================================= -->
    <link rel="stylesheet" href="<?= base_url('public/css/linearicons.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('public/css/owl.carousel.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('public/css/font-awesome.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('public/css/themify-icons.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('public/css/nice-select.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('public/css/nouislider.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('public/css/bootstrap.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('public/css/main.css'); ?>">

    <script src="//code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>

<body>
    <?php
    include "app/Views/user/session/check_session_user.php";
    class check1 extends check
    {
        //....
    }
    $obj = new check1;
    $obj->check_login();
    ?>
    <!-- Start Header Area -->
    <?php echo $this->include('user/templates/header'); ?>
    <!-- End Header Area -->

    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">

        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>My Profile</h1>
                    <nav class="d-flex align-items-center">
                        <a href="<?= base_url('index'); ?>">Home<span class="lnr lnr-arrow-right"></span></a>
                        <a href="category">Profile</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================Profile Area =================-->
    <section class="section profile">
        <div class="container">
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                        <img src="public/assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                        <h2>Kevin Anderson</h2>
                        <h3>User</h3>
                        <div class="social-links mt-2">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Profile Area =================-->

    <!-- start footer Area -->
    <?php echo $this->include('user/templates/footer'); ?>
    <!-- End footer Area -->

    <script>
        // baseURL variable
        $(document).ready(function() {
            $('#btn').click(function() {
                var id = $('#btn').val();
                var cid = $('#c_id').val();
                console.log(id);
                $.ajax({
                    url: "<?= base_url('/product-delete') ?>",
                    method: "post",
                    data: {
                        pid: id,
                        cid: cid,
                        // action: action,
                    },
                    dataType: 'JSON',
                    success: function(result) {
                        window.location.href = '<?= base_url('cart') ?>';
                        // console.log(result);
                    }
                });
            });
            $('#qty').change(function() {
                var qty = $('#qty').val();
                var pid = $('#p_id').val();
                var cid = $('#c_id').val();
                // console.log(qty,pid,cid);
                $.ajax({
                    url: "<?= base_url('/product-update') ?>",
                    method: "post",
                    data: {
                        qty: qty,
                        pid: pid,
                        cid: cid,
                        // action: action,
                    },
                    dataType: 'JSON',
                    success: function(result) {
                        window.location.href = '<?= base_url('cart') ?>';
                        // console.log(result);
                    }
                });
            });
        });
    </script>

    <script src="<?= base_url('public/js/vendor/jquery-2.2.4.min.js'); ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="<?= base_url('public/js/vendor/bootstrap.min.js'); ?>"></script>
    <script src="<?= base_url('public/js/jquery.ajaxchimp.min.js'); ?>"></script>
    <script src="<?= base_url('public/js/jquery.nice-select.min.js'); ?>"></script>
    <script src="<?= base_url('public/js/jquery.sticky.js'); ?>"></script>
    <script src="<?= base_url('public/js/nouislider.min.js'); ?>"></script>
    <script src="<?= base_url('public/js/jquery.magnific-popup.min.js'); ?>"></script>
    <script src="<?= base_url('public/js/owl.carousel.min.js'); ?>"></script>
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="<?= base_url('public/js/gmaps.min.js'); ?>"></script>
    <script src="<?= base_url('public/js/main.js'); ?>"></script>
</body>

</html>