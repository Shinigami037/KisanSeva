<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Data</title>
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
            <h1>Data Tables</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="admin">Home</a></li>
                    <li class="breadcrumb-item">Tables</li>
                    <li class="breadcrumb-item active">Data</li>
                    <?php echo "<pre>";
                    print_r($name[0]['name']);
                    echo "</pre>" ?>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card" style="overflow-x: auto;">
                        <div class="table table-responsive" >
                            <h5 class="card-title">Datatables</h5>
                            <!-- <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p> -->
                            
                            <!-- Table with stripped rows -->
                            <table class="table table-striped w-100" >
                                <thead>
                                    <tr>
                                        <th class="text-left">#</th>
                                        <th class="text-left">Name</th>
                                        <th class="text-left">Main Category</th>
                                        <th class="text-left">Sub Category</th>
                                        <th class="text-left">Price</th>
                                        <th class="text-left">Quantity</th>
                                        <th class="text-left">Detail</th>
                                        <th class="text-left">Image</th>
                                        
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php foreach ($name as $key => $value): ?>
                                        <tr>
                                            
                                            <form method="post" id="the-form" enctype="multipart/form-data">
                                                <td><?php echo ($value['id']);  ?></td>
                                                <td><?php echo ($value['name']); ?></td>
                                                <td><input type="text" class="form-control" name="category" value="<?php echo ($value['category']); ?>"></td>
                                                <td><input type="text" class="form-control" name="sub_category" value="<?php echo ($value['sub_category']); ?>"></td>

                                                <td><input type="number" class="form-control" name="price" value="<?php echo ($value['price']); ?>"></td>
                                                <td><input type="number" class="form-control" name="quantity" value="<?php echo ($value['quantity']); ?>"></td>
                                                <td><input type="text" class="form-control" name="detail" value="<?php echo ($value['detail']); ?>"></td>
                                                <td><?php echo ($value['image']);  ?></td>
                                                <!-- <td><button type="submit" formaction="products-update.php" class="form-control">Update</button></td> -->
                                                <!-- <td><button type="submit" formaction="" class="form-control">Delete</button></td> -->
                                            </form>
                                        </tr>
                                    <?php endforeach; ?>
                                            
                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php echo $this->include('admin/templates/footer'); ?>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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