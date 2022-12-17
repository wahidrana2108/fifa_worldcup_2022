<?php
    session_start();

    include("includes/db.php");
    include("functions/functions.php");
?>



<?php 
    if(isset($_GET['pro_id'])){ 
        $product_id = $_GET['pro_id'];
        $get_product = "select * from products where product_id='$product_id'";
        $run_product = mysqli_query($con,$get_product);
        $row_product = mysqli_fetch_array($run_product);
        $p_cat_id = $row_product['p_cat_id'];
        $pro_title = $row_product['product_title'];
        $pro_price = $row_product['product_price'];
        $pro_desc = $row_product['product_desc'];
        $pro_img1 = $row_product['product_img1'];
        $pro_img2 = $row_product['product_img2'];
        $pro_img3 = $row_product['product_img3'];
        $get_p_cat = "select * from products_categories where p_cat_id='$p_cat_id'";
        $run_p_cat = mysqli_query($con,$get_p_cat);
        $row_p_cat = mysqli_fetch_array($run_p_cat);
        $p_cat_title = $row_p_cat['p_cat_title'];
    }
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Pack It All</title>
    <link rel="icon" type="image/x-icon" href="images/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="includes/schedule-style.css">

    <script src="https://kit.fontawesome.com/fedd93fc11.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- temp nav start -->
        <div class="d-flex tempNavBg row">
            <div class="welcome mt-auto col-sm-12 col-md-7">
                <h6 class="text-center">
                    <a class="btn btn-success btn-sm justify-content-left">
                        <?php 
                            if(!isset($_SESSION['customer_email'])){                       
                                echo "Welcome: Guest";                      
                            }else{                        
                                echo "Welcome: " . $_SESSION['customer_email'] . "";                       
                            }                   
                        ?>
                    </a>
                </h6>
            </div>
            <div class="col-sm-12 col-md-5" >
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <?php
                            if(!isset($_SESSION['customer_email'])){
                                echo "<a href='checkout.php' class='nav-link'>My Account</a>";
                            }
                            else{
                                echo "<a href='customer/myAccount.php' class='nav-link'>My Account</a>";
                            }
                        ?>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="cart.php">Go To Cart</a></li>
                    <li class="nav-item">
                        <?php                           
                           if(!isset($_SESSION['customer_email'])){                      
                                echo "<a href='checkout.php' class='nav-link'> Login </a>";
                                }else{
                                echo " <a href='logout.php' class='nav-link'> Log Out </a> ";
                                }                          
                         ?>
                    </li>
                </ul>
            </div>
        </div>

    <!-- temp nav end -->

        <nav class="navbar navbar-expand-lg bg-secondary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="images/logo.png" style="height: 80px;" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item <?php if($active=='Live Score') echo"activePage"; ?>"><a class="nav-link active text-light" aria-current="page" href="index.php">Live Score</a></li>
                        <li class="nav-item <?php if($active=='Players') echo"activePage"; ?>"><a class="nav-link active text-light" aria-current="page" href="players.php">Players</a></li>
                        <li class="nav-item <?php if($active=='Teams') echo"activePage"; ?>"><a class="nav-link active text-light" aria-current="page" href="team.php">Teams</a></li>
                        <li class="nav-item <?php if($active=='Rankings') echo"activePage"; ?>"><a class="nav-link active text-light" aria-current="page" href="index.php">Rankings</a></li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle active text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Schedule</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="schedule.php#match-date">Match By Date</a></li>
                                <li><a class="dropdown-item" href="schedule.php#match-group">Match By Group</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mb-2 ms-auto mb-lg-0">
                        <li class="nav-item">
                            <form class="d-flex mt-1 ms-md-5" role="search">
                                <input class="form-control me-2 .col-md-4" type="search" placeholder="Search in Fifa" aria-label="Search">
                                <button class="btn btn-success" type="submit"><i class="fas fa-search"></i></button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


    