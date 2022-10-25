<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

    <!-- title -->
    <title>Store</title>

    <!-- favicon -->
    <link rel="shortcut icon" type="image/png" href="<?= base_url('public/assets2/img/favicon.png'); ?>">
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <!-- fontawesome -->
    <link rel="stylesheet" href="<?= base_url('public/assets2/css/all.min.css'); ?>">
    <!-- bootstrap -->
    <link rel="stylesheet" href="<?= base_url('public/assets2/bootstrap/css/bootstrap.min.css'); ?>">
    <!-- owl carousel -->
    <link rel="stylesheet" href="<?= base_url('public/assets2/css/owl.carousel.css'); ?>">
    <!-- magnific popup -->
    <link rel="stylesheet" href="<?= base_url('public/assets2/css/magnific-popup.css'); ?>">
    <!-- animate css -->
    <link rel="stylesheet" href="<?= base_url('public/assets2/css/animate.css'); ?>">
    <!-- mean menu css -->
    <link rel="stylesheet" href="<?= base_url('public/assets2/css/meanmenu.min.css'); ?>">
    <!-- main style -->
    <link rel="stylesheet" href="<?= base_url('public/assets2/css/main.css'); ?>">
    <!-- responsive -->
    <link rel="stylesheet" href="<?= base_url('public/assets2/css/responsive.css'); ?>">

</head>

<body>

    <!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->

    <!-- header -->
    <?php echo $this->include('user/templates/header2'); ?>
    <!-- end header -->

    <!-- search area -->
    <div class="search-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <span class="close-btn"><i class="fas fa-window-close"></i></span>
                    <div class="search-bar">
                        <div class="search-bar-tablecell">
                            <h3>Search For:</h3>
                            <input type="text" placeholder="Keywords">
                            <button type="submit">Search <i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end search arewa -->

    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p>Fresh and Organic</p>
                        <h1>Shop</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->

    <!-- products -->
    <div class="product-section mt-150 mb-150">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="product-filters">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".tools">Tools&Machinery</li>
                            <li data-filter=".pesticides">Pesticides</li>
                            <li data-filter=".seed">Seed&Fertilizers</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row product-lists">
                <div class="col-lg-4 col-md-6 text-center tools">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="single-product.html"><img src="<?= base_url('public/assets2/img/products/product-img-1.jpg'); ?>" alt=""></a>
                        </div>
                        <h3>Z320R</h3>
                        <p class="product-price"><span>Per piece</span> 85$ </p>
                        <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Buy or Rent</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center tools">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="single-product.html"><img src="<?= base_url('public/assets2/img/products/product-img-2.jpg'); ?>" alt=""></a>
                        </div>
                        <h3>Pick mattock</h3>
                        <p class="product-price"><span>Per piece</span> 70$ </p>
                        <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i>Buy or Rent</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center seed">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="single-product.html"><img src="<?= base_url('public/assets2/img/products/product-img-3.jpg'); ?>" alt=""></a>
                        </div>
                        <h3>Pulses</h3>
                        <p class="product-price"><span>Per Kg</span> 35$ </p>
                        <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center seed">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="single-product.html"><img src="<?= base_url('public/assets2/img/products/product-img-4.jpg'); ?>" alt=""></a>
                        </div>
                        <h3>Manure</h3>
                        <p class="product-price"><span>Per Kg</span> 50$ </p>
                        <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center seed">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="single-product.html"><img src="<?= base_url('public/assets2/img/products/product-img-5.jpg'); ?>" alt=""></a>
                        </div>
                        <h3>pesticides</h3>
                        <p class="product-price"><span>Per Kg</span> 45$ </p>
                        <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center pesticides">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="single-product.html"><img src="<?= base_url('public/assets2/img/products/product-img-6.jpg'); ?>" alt=""></a>
                        </div>
                        <h3>pesticide</h3>
                        <p class="product-price"><span>Per Kg</span> 80$ </p>
                        <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="pagination-wrap">
                        <ul>
                            <li><a href="#">Prev</a></li>
                            <li><a href="#">1</a></li>
                            <li><a class="active" href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">Next</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end products -->


    <!-- footer -->
    <?php echo $this->include('user/templates/footer2'); ?>
    <!-- end footer -->

    <!-- jquery -->
    <script src="<?= base_url('public/assets2/js/jquery-1.11.3.min.js'); ?>"></script>
    <!-- bootstrap -->
    <script src="<?= base_url('public/assets2/bootstrap/js/bootstrap.min.js'); ?>"></script>
    <!-- count down -->
    <script src="<?= base_url('public/assets2/js/jquery.countdown.js'); ?>"></script>
    <!-- isotope -->
    <script src="<?= base_url('public/assets2/js/jquery.isotope-3.0.6.min.js'); ?>"></script>
    <!-- waypoints -->
    <script src="<?= base_url('public/assets2/js/waypoints.js'); ?>"></script>
    <!-- owl carousel -->
    <script src="<?= base_url('public/assets2/js/owl.carousel.min.js'); ?>"></script>
    <!-- magnific popup -->
    <script src="<?= base_url('public/assets2/js/jquery.magnific-popup.min.js'); ?>"></script>
    <!-- mean menu -->
    <script src="<?= base_url('public/assets2/js/jquery.meanmenu.min.js'); ?>"></script>
    <!-- sticker js -->
    <script src="<?= base_url('public/assets2/js/sticker.js'); ?>"></script>
    <!-- main js -->
    <script src="<?= base_url('public/assets2/js/main.js'); ?>"></script>

</body>

</html>