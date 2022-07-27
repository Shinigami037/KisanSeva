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

    <!-- =============================================CSS============================================= -->
    <link rel="stylesheet" href="<?= base_url('public/css/linearicons.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('public/css/owl.carousel.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('public/css/themify-icons.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('public/css/font-awesome.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('public/css/nice-select.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('public/css/nouislider.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('public/css/bootstrap.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('public/css/main.css'); ?>">
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
                    <h1>Checkout</h1>
                    <nav class="d-flex align-items-center">
                        <a href="index">Home<span class="lnr lnr-arrow-right"></span></a>
                        <a href="single-product">Checkout</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================Checkout Area =================-->
    <section class="checkout_area section_gap">
        <div class="container">

            <div class="billing_details">
                <div class="row">
                    <div class="col-lg-8">
                        <h3>Billing Details</h3>
                        <form class="row contact_form" action="#" method="post" novalidate>
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" id="first" name="name" placeholder="Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Name'">
                                <!-- <span class="placeholder" data-placeholder="First name"></span> -->
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" id="number" name="number" placeholder="Phone Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone Number'">
                                <!-- <span class="placeholder" data-placeholder="Phone number"></span> -->
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" id="email" name="compemailany" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'">
                                <!-- <span class="placeholder" data-placeholder="Email Address"></span> -->
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="add1" name="add1" placeholder="Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Address'">
                                <!-- <span class="placeholder" data-placeholder="Address"></span> -->
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-4">
                        <div class="order_box">
                            <h2>Your Order</h2>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Product</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $count = 0; ?>
                                    <?php foreach ($items as $value) : ?>
                                        <tr>
                                            <input type="hidden" name="p_id" id="p_id" value="<?php echo $value['product_id']; ?>" />
                                            <input type="hidden" name="c_id" id="c_id" value="<?php echo $value['cart_id']; ?>" />
                                            <td>
                                                <div class="media">
                                                    <div class="media-body">
                                                        <p><?php echo ($value['name']); ?></p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="product_count">
                                                    <p><?php echo ($value['product_quantity']); ?></p>
                                                </div>
                                            </td>
                                            <td>
                                                <h5>$<?php echo ($value['product_price'] * $value['product_quantity']); ?></h5>
                                            </td>
                                        </tr>
                                        <?php $count += ($value['product_price'] * $value['product_quantity']); ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                            <ul class="list list_2">
                                <li><a>Subtotal <span>$<?php echo ($count); ?></span></a></li>
                                <li><a>Shipping <span>Free Shipping</span></a></li>
                                <li><a>Total <span>$<?php echo ($count); ?></span></a></li>
                            </ul>
                            <div class="payment_item active">
                                <div class="radion_btn">
                                    <input type="radio" id="f-option6" name="selector" required>
                                    <label for="f-option6">Cash On Delivery</label>
                                    <div class="check"></div>
                                </div>
                                <p>Pay on the time of Delivery.</p>
                            </div>
                            <div class="creat_account">
                                <input type="checkbox" id="f-option4" name="selector" required>
                                <label for="f-option4">I’ve read and accept the </label>
                                <a href="#">terms & conditions*</a>
                            </div>
                            <a class="primary-btn" href="<?= base_url('confirmation') ?>">Proceed to Buy</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Checkout Area =================-->

    <!-- start footer Area -->
    <?php echo $this->include('user/templates/footer'); ?>
    <!-- End footer Area -->


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