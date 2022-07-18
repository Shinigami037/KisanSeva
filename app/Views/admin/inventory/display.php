<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Browse Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style>
        .text-font {
            font-size: 35px;
            font-weight: bolder;
        }

        .height {
            height: 100vh;
        }

        .error {
            color: red;
            font-size: large;

        }

        .success {
            color: green;
            font-size: large;

        }

        .error1 {
            color: red;
            font-size: large;

        }

        .success1 {
            color: green;
            font-size: large;

        }

        .error2 {
            color: red;
            font-size: large;

        }

        .success2 {
            color: green;
            font-size: large;

        }
    </style>

</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-2 bg-dark height">
                <p class="pt-5 pb-5 text-center">
                    <a href="admin.php" class="text-decoration-none"><span class="text-light text-font">Admin</span></a>
                </p>
                <hr class="bg-light ">
                <p class="pt-2 pb-2 text-center">
                    <a href="user-profile.php" class="text-decoration-none"><span class="text-light">Profile</span></a>
                </p>
                <hr class="bg-light ">
                <p class="pt-2 pb-2 text-center">
                    <a href="categories.php" class="text-decoration-none"><span class="text-light">Categories</span></a>
                </p>
                <hr class="bg-light ">
                <p class="pt-2 pb-2 text-center">
                    <a href="subcategories.php" class="text-decoration-none"><span class="text-light">Browse Categories</span></a>
                </p>

                <hr class="bg-light ">
                <p class="pt-2 pb-2 text-center">
                    <a href="products-add.php" class="text-decoration-none"><span class="text-light">Add Products</span></a>
                </p>
                <hr class="bg-light ">
                <p class="pt-2 pb-2 text-center">
                    <a href="products-display.php" class="text-decoration-none"><span class="text-light">Browse Products</span></a>
                </p>
                <hr class="bg-light ">
                <p class="pt-2 pb-2 text-center">
                    <a href="new-user-requests.php" class="text-decoration-none"><span class="text-light">New user requests</span></a>
                </p>
                <hr class="bg-light ">
                <p class="pt-2 pb-2 text-center">
                    <a href="view-users.php" class="text-decoration-none"><span class="text-light">View user</span></a>
                </p>
                <hr class="bg-light ">
                <p class="pt-2 pb-2 text-center">
                    <a href="display-orders.php" class="text-decoration-none"><span class="text-light">View Orders</span></a>
                </p>



            </div>
            <div class="col-sm-10 bg-light">
                <div class="row">
                    <div class="col-sm-2">
                        <p class="text-center pt-5">
                            
                        </p>
                    </div>
                    <div class="col-sm-8">
                        <h1 class="text-center pt-4 pb-2"><strong>Display Products</strong></h1>
                        <hr class="w-25 mx-auto">

                    </div>
                    <div class="col-sm-2">
                        <p class="pt-5 text-center">
                            <a href="logout.php" class="btn btn-outline-primary">Logout</a>
                        </p>

                    </div>

                </div>

                <?php
                // Display the products as pagination with maximum products in a page.
                $limit = 5;
                $page = (isset($_GET['page']) && is_numeric($_GET['page'])) ? $_GET['page'] : 1;
                $paginationStart = ($page - 1) * $limit;

                $db = mysqli_connect('localhost', 'rootuser', 'root', 'fithealth_db');
                $query = "SELECT COUNT(*) AS id FROM product";
                $result = mysqli_query($db, $query);
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                $total = $row['id'];
                $pages = ceil($total / $limit);

                $query1 = "SELECT * FROM product LIMIT $paginationStart,$limit";
                $result1 = mysqli_query($db, $query1);


                ?>
                <div class="container pt-5 pb-5">

                    <div class="table table-responsive">
                        <table class="table table-striped w-200">
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
                                <?php while ($row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC)) { ?>
                                    <tr>
                                        <form method="post" id="the-form" enctype="multipart/form-data">
                                            <input type="hidden" class="form-control" id="id" name="id" value="<?php echo ($row1['id']);  ?>" readonly>
                                            <td><input type="text" class="form-control" name="name" value="<?php echo ($row1['name']); ?>" readonly></td>
                                            <td><input type="text" class="form-control" name="category" value="<?php echo ($row1['category']); ?>"></td>
                                            <input type="hidden" class="form-control" name="sub_category" value="<?php echo ($row1['sub_category']); ?>" readonly>
                                            <td><input type="number" class="form-control" name="price" value="<?php echo ($row1['price']); ?>"></td>
                                            <td><input type="number" class="form-control" name="quantity" value="<?php echo ($row1['quantity']); ?>"></td>
                                            <td><input type="text" class="form-control" name="detail" value="<?php echo ($row1['detail']); ?>"></td>
                                        </form>
                                    </tr>
                                <?php
                                } ?>

                            </tbody>
                        </table>

                    </div>

                </div>
                <span class="error"></span><span class="success"></span>

                <div class="container pt-5">
                    <div class="row">
                        <div class="col-sm-4">

                        </div>
                        <div class="col-sm-4">
                            <nav aria-label="...">
                                <ul class="pagination">
                                    <li class="page-item <?php if ($page <= 1) {
                                                                echo 'disabled';
                                                            } ?>">
                                        <a class="page-link" href="<?php if ($page <= 1) {
                                                                        echo '#';
                                                                    } else {
                                                                        echo "?page=" . $prev;
                                                                    } ?>">Previous</a>
                                    </li>

                                    <?php for ($i = 1; $i <= $pages; $i++) : ?>
                                        <li class="page-item <?php if ($page == $i) {
                                                                    echo 'active';
                                                                } ?>">
                                            <a class="page-link" href="new-user-requests.php?page=<?= $i; ?>"> <?= $i; ?> </a>
                                        </li>
                                    <?php endfor; ?>

                                    <li class="page-item <?php if ($page >= $pages) {
                                                                echo 'disabled';
                                                            } ?>">
                                        <a class="page-link" href="<?php if ($page >= $pages) {
                                                                        echo '#';
                                                                    } else {
                                                                        echo "?page=" . $next;
                                                                    } ?>">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-sm-4">

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>

</html>