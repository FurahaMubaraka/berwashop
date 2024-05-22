<?php
include 'connection.php';
session_start();
if(!isset($_SESSION['login'])){
    header('location: ../login/login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container-fluid bg-light">
        <div class="row">
            <div class="col-2 bg-secondary p-4" style="min-height: 100vh;">
                <h2 class="text-white text-center"><?php echo $_SESSION['login']; ?></h2>
                <ul class="list-unstyled my-2 ms-2 mt-5">
                    <li class="list-items  mt-5"><a href="../welcome/welcome.php" class="btn btn-outline-light col-12">Dashboard</a></li>
                    <li class="list-items my-3"><a href="../shopkeeper/shopkeeper.php" class="btn btn-outline-light col-12">Shopkeeper</a></li>
                    <li class="list-items my-3"><a href="../product/product.php" class="btn btn-outline-light col-12">Product</a></li>
                    <li class="list-items my-3"><a href="../productin/productin.php" class="btn btn-outline-light col-12">ProductIn</a></li>
                    <li class="list-items my-3"><a href="../productout/productout.php" class="btn btn-outline-light col-12">Product Out</a></li>
                    <li class="list-items mt-5 p-5"></li>
                    <li class="list-items mt-5 p-4"></li>
                    <li class="list-items mt-5"><a href="../login/logout.php" class="btn btn-dark col-12">Logout</a></li>
                </ul>
            </div>
            <div class="col-10 p-3">
                