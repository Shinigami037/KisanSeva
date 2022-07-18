<?php
// include 'app\Views\user\home\index.php';
// class check1 extends check
// {
//     //....
// }
// $obj = new check1;
// $obj->check_login();
?>
<!-- Start Header Area -->
<header class="header_area sticky-header">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light main_box">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="index"><img src="<?php echo base_url('img/logo.png'); ?>" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item active"><a class="nav-link" href="index">Home</a></li>
                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Shop</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="category">Shop Category</a></li>
                                <!-- <li class="nav-item"><a class="nav-link" href="single-product">Product Details</a></li> -->
                                <!-- <li class="nav-item"><a class="nav-link" href="checkout">Product Checkout</a></li> -->
                                <li class="nav-item"><a class="nav-link" href="cart">Shopping Cart</a></li>
                                <!-- <li class="nav-item"><a class="nav-link" href="confirmation">Confirmation</a></li> -->
                            </ul>
                        </li>
                        <!-- <li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="blog">Blog</a></li>
									<li class="nav-item"><a class="nav-link" href="single-blog">Blog Details</a></li>
								</ul>
							</li> -->
                        
                        <li class="nav-item"><a class="nav-link" href="login">Login</a></li>
                        <!-- <li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="login">Login</a></li>
									<li class="nav-item"><a class="nav-link" href="tracking">Tracking</a></li>
									<li class="nav-item"><a class="nav-link" href="elements">Elements</a></li>
								</ul>
							</li> -->
                        <li class="nav-item"><a class="nav-link" href="contact">Contact</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="nav-item"><a href="cart" class="cart"><span class="ti-bag"></span></a></li>
                        <li class="nav-item">
                            <button class="search"><span class="lnr lnr-magnifier" id="search"></span></button>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="search_input" id="search_input_box">
        <div class="container">
            <form class="d-flex justify-content-between">
                <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                <button type="submit" class="btn"></button>
                <span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
            </form>
        </div>
    </div>
</header>
<!-- End Header Area -->