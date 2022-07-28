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
                    <h1>Shopping Cart</h1>
                    <nav class="d-flex align-items-center">
                        <a href="<?= base_url('index'); ?>">Home<span class="lnr lnr-arrow-right"></span></a>
                        <a href="category">Cart</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================Cart Area =================-->
    <section class="cart_area">
        <div class="container">
            <div class="cart_inner">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Product</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Total</th>
                                <th scope="col">Action</th>
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
                                            <div class="d-flex">
                                                <img src="<?= base_url('public/uploads/' . $value['image']); ?>">
                                            </div>
                                            <div class="media-body">
                                                <p><?php echo ($value['name']); ?></p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <h5>$<?php echo ($value['product_price']); ?></h5>
                                    </td>
                                    <td>
                                        <div class="product_count">
                                            <!-- <h5></h5> -->
                                            <input type="number" name="<?php echo ($value['product_id']); ?>" id="qty" min="1" value="<?php echo ($value['product_quantity']); ?>" class="input-text qty">
                                            <!-- <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;" class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button> -->
                                            <!-- <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value--;return false;" class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button> -->
                                        </div>
                                    </td>
                                    <td>
                                        <h5>$<?php echo ($value['product_price'] * $value['product_quantity']); ?></h5>
                                    </td>
                                    <td>
                                        <!-- <a class="gray_btn" href="#">Update</a> -->
                                        <button type="button" class="btn btn-danger" id="btn" value="<?php echo ($value['product_id']); ?>">Delete</button>

                                    </td>
                                </tr>
                                <?php $count += ($value['product_price'] * $value['product_quantity']); ?>
                            <?php endforeach; ?>

                            <tr>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>
                                    <h5>Subtotal</h5>
                                </td>
                                <td>
                                    <h5>$<?php echo ($count); ?></h5>
                                </td>
                            </tr>
                            <tr class="out_button_area">
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>
                                    <div class="checkout_btn_inner d-flex align-items-center">
                                        <a class="gray_btn" href="<?= base_url('category') ?>">Continue Shopping</a>
                                        <?php if (!empty($items)) { ?>
                                            <a class="primary-btn" href="<?= base_url('checkout/' . $value['cart_id']) ?>">Proceed to checkout</a>
                                        <?php } ?>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!--================End Cart Area =================-->

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