<?= $this->extend('user/templates/default2') ?>

<?= $this->section('content') ?>
<!--PreLoader-->
<div class="loader">
    <div class="loader-inner">
        <div class="circle"></div>
    </div>
</div>
<!--PreLoader Ends-->

<!-- hero area -->
<div class="hero-area hero-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 offset-lg-2 text-center">
                <div class="hero-text">
                    <div class="hero-text-tablecell">
                        <p class="subtitle">Fresh & Organic</p>
                        <h1>Best Seasonal Crop</h1>
                        <div class="hero-btns">
                            <!-- <a href="shop.html" class="boxed-btn">Fruit Collection</a>s -->
                            <a href="#contact" class="bordered-btn">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end hero area -->

<!-- about section -->
<div id="about" class="abt-section mb-50 pt-80 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="w-70 h-70">
                    <img style="height:500px !important; width:500px !important; margin-top:30px !important;" class="img-fluid" src="<?= base_url('public/assets2/img/about.jpg'); ?>" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="abt-text">
                    <p class="top-sub">Since Year 2022</p>
                    <h2>We are <span class="orange-text">Kisan Seva</span></h2>
                    <p class="text-justify">Providing information on sowing and pre-harvest activities upto harvest. Helping farming communities to adopt cutting-edge technology to create sustainable benifits - Such as weather alerts, Best farming practices, Advice on taking care of pest attacks and there cattle, Better use of fertilizers and manure, Irrigation techniques.</p>
                    <p class="text-justify">Increasing awarness regarding Government Schems and Policies for the benifits of the farmers.</p>
                    <a href="about" class="boxed-btn mt-4">know more</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end about section -->

<!-- features list section -->
<div class="list-section pt-80 pb-80">
    <div class="container ">
        <div class="row">
            <div class="col-lg-12 col-md-6 mb-4 mb-lg-0">
                <div class="align-items-center text-center">

                    <!-- <h2>We are <span class="orange-text">Kisan Seva</span></h2> -->
                    <h2 class="text-center">Feeding the <span class="orange-text">World</span>, caring for the <span class="orange-text">Earth</span>.</h2>
                    <a href="#" style=" margin:25px; display:inline-block; color: #fff; font-size: 18px; text-decoration: none; padding: 15px 50px; background: #66bb6a; border-radius: 5px;">Join the revolution</a>

                    <!-- <div class="list-icon">
                        <i class="fas fa-shipping-fast"></i>
                    </div>
                    <div class="content">
                        <h3>Free Shipping</h3>
                        <p>When order over $75</p>
                    </div> -->
                </div>
            </div>
            <!-- <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <div class="list-box d-flex align-items-center">
                    <div class="list-icon">
                        <i class="fas fa-phone-volume"></i>
                    </div>
                    <div class="content">
                        <h3>24/7 Support</h3>
                        <p>Get support all day</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="list-box d-flex justify-content-start align-items-center">
                    <div class="list-icon">
                        <i class="fas fa-sync"></i>
                    </div>
                    <div class="content">
                        <h3>Refund</h3>
                        <p>Get refund within 3 days!</p>
                    </div>
                </div>
            </div> -->
        </div>

    </div>
</div>
<!-- end features list section -->

<!-- product section -->
<div class="product-section mt-150 mb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="section-title">
                    <h3>What we <span class="orange-text">Offer</span></h3>
                    <p style="font-size: 18px;">Here’s To Those Who Work In Acres, Not In Hours.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 text-center">
                <div style="padding-bottom: 77px;" class="single-product-item pb-100">
                    <div class="product-image">
                        <img src="<?= base_url('public/assets2/img/products/product-img-1.jpg'); ?>" alt="">
                    </div>
                    <h3 style="color: orange; font-size: 25px; font-weight:400;">Weather Forcast</h3>
                    <p style="padding:0px 40px;" class="text-justify">By providing future weather predictions & suggestions based on previous year weather data. Sending alerts to the user regarding extream weather conditions.</p>
                    <!-- <ul style="text-align:left;">
                        <li>Future weather predictions.</li>
                        <li>Previous year weather data.</li>
                        <li>Alerts regarding weather conditions.</li>
                    </ul> -->

                </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center">
                <div style="padding-bottom: 100px;" class="single-product-item">
                    <div class="product-image">
                        <img src="<?= base_url('public/assets2/img/products/product-img-2.jpg'); ?>" alt="">
                    </div>
                    <h3 style="color: orange; font-size: 25px; font-weight:400;">Tools & Technology</h3>
                    <p style="padding:0px 40px;" class="text-justify">By providing affordable or on rent agriculture equipment, Low cost maintenance facilities for machine.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center">
                <div class="single-product-item">
                    <div class="product-image">
                        <img src="<?= base_url('public/assets2/img/products/product-img-3.jpg'); ?>" alt="">
                    </div>
                    <h3 style="color: orange; font-size: 25px; font-weight:400;">Awarness on Govt. Policies</h3>
                    <p style="padding:0px 40px;" class="text-justify">Help in understanding the government policies and subscideries for the benifits of the farmer. Providing the price of the goods set by the government and other awarness on other issues.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end product section -->

<!-- testimonail-section -->
<div style="background-color: #f5f5f5;" class="testimonail-section mt-50 mb-50 pt-80 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 text-center">
                <div class="testimonial-sliders">
                    <div class="single-testimonial-slider">
                        <div class="client-avater">
                            <img src="<?= base_url('public/assets2/img/avaters/avatar1.png'); ?>" alt="">
                        </div>
                        <div class="client-meta">
                            <h3>Saira Hakim</h3>

                            <p class="testimonial-body">
                                KisanSeva has been attempting to alleviate major issues in India’s fruit and vegetables supply chain over the past several years. The team has managed to get into a clear leadership position in that ecosystem, especially around South Indian cities. With the current round of financing, we expect them to continue to scale rapidly, enter new cities, and enable direct relationships with farmers and shop owners across even more categories.
                            </p>
                            <div class="last-icon">
                                <i class="fas fa-quote-right"></i>
                            </div>
                        </div>
                    </div>
                    <div class="single-testimonial-slider">
                        <div class="client-avater">
                            <img src="<?= base_url('public/assets2/img/avaters/avatar2.png'); ?>" alt="">
                        </div>
                        <div class="client-meta">
                            <h3>David Niph</h3>
                            <p class="testimonial-body">

                                The team at KisanSeva has made impressive progress and demonstrated that they can think and execute at scale. Streamlining the agricultural sector using the latest technology and supply chain, benefits farmers with higher prices and consumers with lower costs. As they scale up nationwide, they will really make a difference and impact on how farmer's market their produce.
                            </p>
                            <div class="last-icon">
                                <i class="fas fa-quote-right"></i>
                            </div>
                        </div>
                    </div>
                    <div class="single-testimonial-slider">
                        <div class="client-avater">
                            <img src="<?= base_url('public/assets2/img/avaters/avatar3.png'); ?>" alt="">
                        </div>
                        <div class="client-meta">
                            <h3>Jacob Sikim</h3>
                            <p class="testimonial-body">
                                At Syngenta we are committed to supporting innovation that improves the livelihood and economic security of farmers across the globe. We have been very impressed by KisanSeva's success in developing a solution that provides improved market access to Indian farmers while at the same time delivering high quality practices across the farm to fork supply chain. We look forward to supporting Ninjacart on this journey, ultimately delivering benefits to numerous farmers and consumers throughout the country.
                            </p>
                            <div class="last-icon">
                                <i class="fas fa-quote-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end testimonail-section -->

<!-- Contact Us -->
<section id="contact" class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center ">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="section-title" style="margin-bottom:40px !important;">
                    <h3>Contact <span class="orange-text">US</span></h3>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
                <div class="card mb-3">
                    <div class="card-body" style="padding:20px;">
                        <form action="registration" method="post" class="row g-3 needs-validation" novalidate>
                            <?= csrf_field() ?>

                            <div class="col-12">
                                <label for="yourName" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" id="yourName" placeholder="Enter Your Name Here" required>
                                <div class="invalid-feedback">Please, enter your name!</div>
                            </div>

                            <div class="col-12">
                                <label for="yourEmail" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Enter Your Email Here" id="yourEmail">
                            </div>

                            <div class="col-12">
                                <label for="yourContact" class="form-label">Contact No.</label>
                                <input type="tel" name="contact" class="form-control" id="yourContact" placeholder="Enter Your Contact No. Here" required>
                                <div class="invalid-feedback">Please, enter your contact number!</div>
                            </div>

                            <div class="col-12">
                                <label for="yourMessage" class="form-label">Message</label>
                                <input type="text-area" name="message" class="form-control" id="yourMessage">
                            </div>

                            <div class="col-lg-12 text-center">
                                <button style="background-color: #F28123; color: #FFF; padding:10px 20px; margin: 20px; border:none; border-radius: 50px;" class="boxed-btn" type="submit">Submit</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end Contact Us -->





<?= $this->endSection() ?>