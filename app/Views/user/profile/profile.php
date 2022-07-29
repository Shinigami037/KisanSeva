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
    <title><?= session('username') ?></title>

    <!-- CSS -->
    <link rel="stylesheet" href="<?= base_url('public/css/linearicons.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('public/css/owl.carousel.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('public/css/font-awesome.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('public/css/themify-icons.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('public/css/nice-select.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('public/css/nouislider.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('public/css/bootstrap.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('public/css/main.css'); ?>">
    <!-- Extra CSS for Profile -->
    <!-- Favicons -->
    <link href="public/assets/img/favicon.png" rel="icon">
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
            <div class="col-xl">
                <div>
                    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                        <img src="public/gifs/hacker.gif" alt="Profile" class="rounded-circle">
                        <h2><?= session('username') ?></h2>
                        <!-- <h3>User</h3> -->
                        <div class="social-links mt-2">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body pt-3">
                        <!-- Bordered Tabs -->
                        <ul class="nav nav-tabs nav-tabs-bordered">

                            <li class="nav-item">
                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                            </li>

                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                            </li>

                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
                            </li>

                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">My Orders</button>
                            </li>

                        </ul>
                        <div class="tab-content pt-2">

                            <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                <h5 class="card-title">Profile Details</h5>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label ">Name</div>
                                    <div class="col-lg-9 col-md-8"><?= $items['customer_name'] ?></div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Address</div>
                                    <div class="col-lg-9 col-md-8"><?= $items['customer_address'] ?></div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Phone</div>
                                    <div class="col-lg-9 col-md-8"><?= $items['customer_phone'] ?></div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Email</div>
                                    <div class="col-lg-9 col-md-8"><?= $items['user_email'] ?></div>
                                </div>

                            </div>

                            <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                                <!-- Profile Edit Form -->
                                <form action="profileupdate" method="post" novalidate>
                                    <?= csrf_field() ?>
                                    <div class="row mb-3">
                                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Name</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="name" type="text" class="form-control" id="userName" value="<?= $items['customer_name'] ?>" required>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="Address" class="col-md-4 col-lg-3 col-form-label">Address</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="address" type="text" class="form-control" id="userAddress" value="<?= $items['customer_address'] ?>" required>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="phone" type="text" class="form-control" id="userPhone" value="<?= $items['customer_phone'] ?>" required>
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <button type="submit" id="btn" class="btn btn-primary">Save Changes</button>
                                    </div>
                                </form>
                                <!-- End Profile Edit Form -->

                            </div>

                            <div class="tab-pane fade pt-3" id="profile-change-password">
                                <!-- Change Password Form -->
                                <form action="profilepassword" method="post">

                                    <div class="row mb-3">
                                        <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="password" type="password" class="form-control" id="currentPassword">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="newpassword" type="password" class="form-control" id="newPassword">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Change Password</button>
                                    </div>
                                </form>
                                <!-- End Change Password Form -->

                            </div>

                            <div class="tab-pane fade pt-3" id="profile-settings">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Order Id</th>
                                            <th scope="col">Purchase Date</th>
                                            <!-- <th scope="col">Total</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($order as $value) : ?>
                                            <tr>
                                                <!-- <input type="hidden" name="p_id" id="p_id" value="" /> -->
                                                <!-- <input type="hidden" name="c_id" id="c_id" value="" /> -->
                                                <td>
                                                    <div class="media">
                                                        <div class="media-body">
                                                            <p><?php echo $value['id']; ?></p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="media">
                                                        <div class="media-body">
                                                            <p><?php echo $value['purchase_date']; ?></p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <!-- <td>
                                                <div class="product_count">
                                                    <p></p>
                                                </div>
                                            </td>
                                            <td>
                                                <h5>$</h5>
                                            </td> -->
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                                <!-- Settings Form -->
                                <!-- <form>

                                    <div class="row mb-3">
                                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Email Notifications</label>
                                        <div class="col-md-8 col-lg-9">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="changesMade" checked>
                                                <label class="form-check-label" for="changesMade">
                                                    Changes made to your account
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="newProducts" checked>
                                                <label class="form-check-label" for="newProducts">
                                                    Information on new products and services
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="proOffers">
                                                <label class="form-check-label" for="proOffers">
                                                    Marketing and promo offers
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="securityNotify" checked disabled>
                                                <label class="form-check-label" for="securityNotify">
                                                    Security alerts
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                    </div>
                                </form>End settings Form -->

                            </div>

                            <!-- End Bordered Tabs -->

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
                var name = $('#userName').val();
                var address = $('#userAddress').val();
                var phone = $('#userPhone').val();
                // console.log(name, address, phone);
                $.ajax({
                    url: "<?= base_url('/profileupdate') ?>",
                    method: "post",
                    data: {
                        name: name,
                        address: address,
                        phone: phone,
                        // action: action,
                    },
                    dataType: 'JSON',
                    success: function(result) {
                        window.location.href = '<?= base_url('userprofile') ?>';
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

    <!-- Js for Proile -->
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