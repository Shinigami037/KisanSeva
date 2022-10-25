<?= $this->extend('user/templates/default2') ?>

<?= $this->section('content') ?>
<!--PreLoader-->
<div class="loader">
    <div class="loader-inner">
        <div class="circle"></div>
    </div>
</div>
<!--PreLoader Ends-->


<section style="background-image:url('public/assets2/img/weather.jpg'); background-repeat:no-repeat; background-size:cover;" class="vh-100">
    <div class="container py-5 h-100">

        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-12 col-lg-10 col-xl-4">
                <div style=" opacity:1;" class="container">
                    <form action="#" class="find-location">
                        <input type="text" placeholder="Find your location...">
                        <input type="submit" value="Find">
                    </form>
                </div>

                <div style="background:rgba(255,255,255,0.4);" class="card shadow-0">
                    <div class="card-body p-4">

                        <h1 style="font-weight:800; color:white;" class="mb-1 sfw-normal"><?php echo $user[0]; ?></h1>
                        <p style="font-size:20px;" class="mb-2">Current temperature: <strong><?php echo $user[1]; ?>°C</strong></p>
                        <p style="font-size:20px;">Humidity: <strong><?php echo $user[2]; ?></strong></p>
                        <p style="font-size:20px;">Cloud Cover <strong><?php if ($user[3] == 0) {
                                                                            echo "Sunny";
                                                                        } else {
                                                                            echo "Cloudy";
                                                                        } ?></strong></p>
                        <div class="d-flex flex-row align-items-center">
                            <!-- <p style="font-size:20px;" class="mb-0 me-4">Scattered Clouds</p> -->
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>
</section>


<?= $this->endSection() ?>