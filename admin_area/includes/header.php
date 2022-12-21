<?php
    session_start();
    include("includes/db.php");
    include("functions/functions.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Fifa Worldcup</title>
    <link rel="icon" type="image/x-icon" href="admin_area/images/logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
    <script src="https://kit.fontawesome.com/fedd93fc11.js" crossorigin="anonymous"></script>
    <style>
        #dp{
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }
    </style>
</head>

<body>
    <!-- navbar start -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Admin Area</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="fa-solid fa-user"></i> User
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="index.php?user_profile"><i class="fa-solid fa-user"></i> Profile</a></li>
                        <li><a class="dropdown-item" href="index.php?view_products"><i class="fa-solid fa-message"></i> Products<span class="badge text-bg-secondary">4</span></a></li>
                        <li><a class="dropdown-item" href="index.php
                          ?view_customers"><i class="fa-solid fa-user-group"></i> Customers<span class="badge text-bg-secondary">4</span></a></li>
                        <li><a class="dropdown-item" href="index.php?view_cats"><i class="fa-solid fa-gear"></i> Product Catagories<span class="badge text-bg-secondary">4</span></a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="logout.php"><i class="fa-solid fa-power-off"></i> Log Out</a></li>
                      </ul>
                    </li>
                    <li class="nav-item ps-5"></li>
                    <li class="nav-item ps-5"></li>
                    <li class="nav-item ps-5"></li>
                  </ul>
            </div>

        </div>
    </nav>
    <!-- navbar end -->


    <!-- side navbar end -->
    <div class="col-md-2">
        <ul class="navbar-nav navbar-dark bg-dark mb-2 ps-3">
            <li class="nav-item <?php if($active=='Live Score') echo"activePage"; ?>"><a class="nav-link active text-light" aria-current="page" href="#">Dashboard</a></li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle active text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Products</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Insert Products</a></li>
                    <li><a class="dropdown-item" href="#">View Products</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle active text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Products Category</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Insert Products Category</a></li>
                    <li><a class="dropdown-item" href="#">View Products Categories</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle active text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Category</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Insert Category</a></li>
                    <li><a class="dropdown-item" href="#">View Categories</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle active text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Slides</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Insert Slide</a></li>
                    <li><a class="dropdown-item" href="#">View Slides</a></li>
                </ul>
            </li>
            <li class="nav-item <?php if($active=='Live Score') echo"activePage"; ?>"><a class="nav-link active text-light" aria-current="page" href="#">View customers</a></li>
            <li class="nav-item <?php if($active=='Live Score') echo"activePage"; ?>"><a class="nav-link active text-light" aria-current="page" href="#">View Orders</a></li>
            <li class="nav-item <?php if($active=='Live Score') echo"activePage"; ?>"><a class="nav-link active text-light" aria-current="page" href="#">View Payments</a></li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle active text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Users</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Insert User</a></li>
                    <li><a class="dropdown-item" href="#">View Users</a></li>
                    <li><a class="dropdown-item" href="#">Edit User Profile</a></li>
                </ul>
            </li>
            <li class="nav-item <?php if($active=='Live Score') echo"activePage"; ?>"><a class="nav-link active text-light" aria-current="page" href="#">Log Out</a></li>

        </ul>
    </div>
    <!-- side navbar end -->
