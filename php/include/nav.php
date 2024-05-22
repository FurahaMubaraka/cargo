<?php 
include 'connection.php';
session_start();

if(!isset($_SESSION['id'])){
    header('location: ../login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome </title>
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container-fluid bg-primary">
        <div class="row">
            <div class="col-2 p-5 bg-secondary" style="min-height: 97vh;">
                <h3 class="text-white">
                    <?php
                    echo $_SESSION['name'];
                    ?>
                </h3>
                <ul class="list-unstyled my-5">
                    <li class="list-items"><a href="../welcome/welcome.php" class="text-decoration-none btn btn-outline-light my-2 text-dark">Dashboard</a></li>
                    <li class="list-items"><a href="../users/user.php" class="text-decoration-none btn btn-outline-light my-2 text-dark">Users</a></li>
                    <li class="list-items"><a href="../product/product.php" class="text-decoration-none btn btn-outline-light my-2 text-dark">Products</a></li>
                    <li class="list-items"><a href="../import/import.php" class="text-decoration-none btn btn-outline-light my-2 text-dark">Import</a></li>
                    <li class="list-items"><a href="../export/export.php" class="text-decoration-none btn btn-outline-light my-2 text-dark">Export</a></li> 
                    <li class="list-items my-5"><a href="../logout.php" class="text-decoration-none btn btn-primary my-2 text-white">Logout </a></li>
                </ul>
            </div>
            <div class="col-10 p-2 " style="background-color: azure;">
                <div class="row my-5">
                    <div class="col-3">
                        <a href="../users/user.php" class="text-decoration-none">
                            <div class="card bg-info">
                            <div class="card-body">
                                <h5 class="card-title">Users</h5>
                                <?php
                                include 'connection.php';
                                $sql=mysqli_query($conn,"SELECT * FROM users");
                                $df=mysqli_num_rows($sql);
                                ?>
                                <p>This system has <?php echo htmlentities($df);?> active users</p>
                            </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-3">
                        <a href="../product/product.php" class="text-decoration-none">
                            <div class="card bg-info">
                            <div class="card-body">
                                <h5 class="card-title">Products</h5>
                                <?php
                                include 'connection.php';
                                $sql=mysqli_query($conn,"SELECT * FROM products");
                                $df=mysqli_num_rows($sql);
                                ?>
                                <p>This system has <?php echo htmlentities($df);?> active Products</p>
                            </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-3">
                        <a href="../import/import.php" class="text-decoration-none">
                            <div class="card bg-info">
                            <div class="card-body">
                                <h5 class="card-title">Import</h5>
                                <?php
                                include 'connection.php';
                                $sql=mysqli_query($conn,"SELECT * FROM import");
                                $df=mysqli_num_rows($sql);
                                ?>
                                <p>This system has <?php echo htmlentities($df);?> imported product</p>
                            </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-3">
                        <a href="../export/export.php" class="text-decoration-none">
                           <div class="card bg-info">
                            <div class="card-body">
                                <h5 class="card-title">Export</h5>
                                <?php
                                include 'connection.php';
                                $sql=mysqli_query($conn,"SELECT * FROM export");
                                $df=mysqli_num_rows($sql);
                                ?>
                                <p>This system has <?php echo htmlentities($df);?> exported product</p>
                            </div>
                           </div>
                        </a>
                    </div>
                </div>