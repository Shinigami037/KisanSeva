<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Inventory</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

</head>

<body>

    <!-- ======= Header ======= -->
    <?php echo $this->include('admin/templates/header'); ?>
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <?php echo $this->include('admin/templates/sidebar'); ?>
    <!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Add Product</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="admin">Home</a></li>
                    <li class="breadcrumb-item">Products</li>
                    <li class="breadcrumb-item active">Product Details</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-6">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Add Product</h5>

                            <?php if (session()->getFlashdata('status')) : ?>
                                <?= session()->getFlashdata('status'); ?>
                            <?php endif ?>

                            <!-- Start Add Product Details Form -->
                            <form action="addproduct" method="post" enctype="multipart/form-data">
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Product Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name='name'>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Select Main Category</label>
                                    <div class="col-sm-10">
                                        <select name="maincat" id="maincategory" class="form-select">
                                            <option value="">Select Main Category</option>
                                            <?php
                                            foreach ($category as $row) {
                                                echo '<option value="' . $row["id"] . '">' . $row["name"] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Select Sub Category</label>
                                    <div class="col-sm-10">
                                        <select name="subcat" id="subcategory" class="form-select">
                                            <option value="">Select Sub Category</option>

                                        </select>
                                    </div>
                                </div>
                                <!-- <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Product Main Category</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name='maincat'>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Product Sub Category</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name='subcat'>
                                    </div>
                                </div> -->
                                <div class="row mb-3">
                                    <label for="inputNumber" class="col-sm-2 col-form-label">Product Price</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" name='price'>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputNumber" class="col-sm-2 col-form-label">Product Image</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name='image' type="file" id="formFile">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputNumber" class="col-sm-2 col-form-label">Product Quantity</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" name='quantity'>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Product Detail</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" name='detail' style="height: 100px"></textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Save Details</label>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">ADD</button>
                                    </div>
                                </div>

                            </form>
                            <!-- End Add Product Details Form -->

                        </div>
                    </div>

                </div>

            </div>
        </section>

    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php echo $this->include('admin/templates/footer'); ?>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script>
        // baseURL variable
        $(document).ready(function() {
            // City change
            $('#maincategory').change(function() {
                var maincategory_id = $('#maincategory').val();
                var action = 'getSub';
                if (maincategory_id != '') {
                    $.ajax({
                        url: "<?= base_url('/action') ?>",
                        method: "post",
                        data: {
                            maincategory_id: maincategory_id,
                            action: action,
                        },
                        dataType: 'JSON',
                        success: function(data) {
                            var html = '<option value="">Select Sub Category</option>';
                            for (var i = 0; i < data.length; i++) {
                                html += '<option value="'+data[i].id+'">'+data[i].name+'</option>';
                            }
                            $('#subcategory').html(html);
                        }
                    });
                } else {
                    $('#subcategory').val('');
                }
            });
        });
    </script>
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