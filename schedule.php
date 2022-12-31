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
    <link rel="stylesheet" href="includes/schedule-style.css">
    <script src="https://kit.fontawesome.com/fedd93fc11.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- navbar start -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="admin_area/images/logo.png" style="height: 60px;" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item <?php if($active=='Home') echo"activePage"; ?>"><a class="nav-link active text-light" aria-current="page" href="index.php">Home</a></li>
                    <li class="nav-item <?php if($active=='Players') echo"activePage"; ?>"><a class="nav-link active text-light" aria-current="page" href="players.php">Players</a></li>
                    <li class="nav-item <?php if($active=='Teams') echo"activePage"; ?>"><a class="nav-link active text-light" aria-current="page" href="team.php">Teams</a></li>
                    <li class="nav-item <?php if($active=='Rankings') echo"activePage"; ?>"><a class="nav-link active text-light" aria-current="page" href="rankings.php">Rankings</a></li>
                    <li class="nav-item <?php if($active=='Sponsors') echo"activePage"; ?>"><a class="nav-link active text-light" aria-current="page" href="sponsors.php">Sponsors</a></li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle active text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Schedule</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="schedule.php#match-date">Match By Date</a></li>
                            <li><a class="dropdown-item" href="schedule.php#match-group">Match By Group</a></li>
                        </ul>
                    </li>
                    <li class="nav-item <?php if($active=='Contact') echo"activePage"; ?>"><a class="nav-link active text-light" aria-current="page" href="contact.php">Contact Us</a></li>
                    <li class="nav-item <?php if($active=='My Account') echo"activePage"; ?>"><a class="nav-link active text-light" aria-current="page" href="customer_area/my_account.php?view_account">My Account</a></li>
                </ul>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 ms-auto mb-lg-0">                            
                        <?php 
                        if(!isset($_SESSION['customer_email'])){
                            echo "<li class='nav-item dropdown'><a class='nav-link active text-light' href='#' role='button' data-bs-toggle='dropdown' aria-expanded='false'><img src='customer_area/customer_images/user.png' id='dp' alt=''></a>";
                        }
                        else{
                            $customer_session = $_SESSION['customer_email'];
                            $get_customer = "select * from customers where customer_email='$customer_session'";
                            $run_customer = mysqli_query($con,$get_customer);
                            $row_customer = mysqli_fetch_array($run_customer);
                            $customer_image = $row_customer['customer_image'];
                            echo "<li class='nav-item dropdown'><a class='nav-link active text-light' href='#' role='button' data-bs-toggle='dropdown' aria-expanded='false'><img src='customer_area/customer_images/$customer_image' id='dp' alt=''></a>";
                        }
                        ?>                                                                
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <?php
                                        if(!isset($_SESSION['customer_email'])){
                                            echo "<h6 class='dropdown-item'>Welcome</h6>";
                                        }
                                        else{
                                            $get_customer = "select * from customers where customer_email='$customer_session'";
                                            $run_customer = mysqli_query($con,$get_customer);
                                            $row_customer = mysqli_fetch_array($run_customer);
                                            $customer_name = $row_customer['customer_name'];
                                            echo"<h6 class='dropdown-item'>$customer_name</h6>";
                                        }
                                    ?>
                                </li>
                                <li class="nav-item">
                                    <?php
                                        if(!isset($_SESSION['customer_email'])){
                                            echo "<a href='customer_area/login.php' class='dropdown-item'>Login</a>";
                                        }
                                        else{
                                            echo "<a href='customer_area/my_account.php?view_account' class='dropdown-item'>My Account</a>";
                                        }
                                    ?>
                                </li>
                                <li class="nav-item">
                                    <?php                           
                                    if(!isset($_SESSION['customer_email'])){                      
                                            echo "<a href='customer_area/registration.php' class='dropdown-item'>Register</a>";
                                            }else{
                                            echo " <a href='customer_area/logout.php' class='dropdown-item'>Log Out</a> ";
                                            }                          
                                    ?>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <form class="d-flex mt-1 ms-md-5" role="search">
                                <input class="form-control me-2 .col-md-4" type="search" placeholder="Search " aria-label="Search">
                                <button class="btn btn-outline-success" type="submit"><i class="fas fa-search"></i></button>
                            </form>
                        </li>
                        
                    ?>
                </ul>
            </div>
        </div>
    </nav>
    <!-- navbar end -->





    

    

<?php
    include("includes/schedule.php");
?>




    <!-- footer start-->
    <div class="navbar-dark bg-dark">
        <div class="container">
            <div class="row justify-content-center mt-3">
                <div class="col-md-3 p-3 m-3">
                    <li class="nav-item"> <a class="nav-link fw-bolder text-light" aria-current="page" href="#"><h4>Pages</h4></a></li>
                    <li class="nav-item"> <a class="nav-link active text-light" aria-current="page" href="index.php">Home</a></li>
                    <li class="nav-item"> <a class="nav-link active text-light" aria-current="page" href="players.php">Players</a></li>
                    <li class="nav-item"> <a class="nav-link active text-light" aria-current="page" href="team.php">Teams</a></li>
                    <li class="nav-item"> <a class="nav-link active text-light" aria-current="page" href="rankings.php">Ranking</a></li>
                    <li class="nav-item"> <a class="nav-link active text-light" aria-current="page" href="sponsors.php">Sponsors</a></li>
                    <li class="nav-item"> <a class="nav-link active text-light" aria-current="page" href="schedule.php">Schedules</a></li>
                </div>
                
                <div class="col-md-3 p-3 m-3">
                    <ul class="nav flex-column">
                        <li class="nav-item"> <a class="nav-link fw-bolder text-light" aria-current="page" href="#"><h4>About Us</h4></a></li>
                        <li class="nav-item"> <a class="nav-link active text-light" aria-current="page" href="#">Author</a></li>
                        <li class="nav-item"> <a class="nav-link active text-light" aria-current="page" href="#">Information</a></li>
                        <li class="nav-item"> <a class="nav-link active text-light" aria-current="page" href="#">Instructor</a></li>
                    </ul>
                </div>

                <div class="col-md-3 p-3 m-3">
                    <div class="">
                        <h4 class="fw-bolder text-light">Contract Us</h4>
                        <h6 class="text-light">fifa2022@support.com</h6>
                        <h6 class="text-light">+09696000123456</h6>
                        <h6 class="text-light">Physical Location</h6>
                        <hr class="text-light">
                        <h4 class="text-light">User Section</h4>
                        <nav class="navbar">
                            <ul class="navbar-nav me-auto mb-2">
                                <li class="nav-item">
                                    <?php
                                        if(!isset($_SESSION['customer_email'])){
                                            echo "<a href='customer_area/login.php' class='dropdown-item active text-light'>Login</a>";
                                        }
                                        else{
                                            echo "<a href='customer_area/myAccount.php' class='dropdown-item active text-light'>My Account</a>";
                                        }
                                    ?>
                                </li>
                                <li class="nav-item">
                                    <?php                           
                                    if(!isset($_SESSION['customer_email'])){                      
                                        echo "<a href='customer_area/registration.php' class='dropdown-item active text-light'>Register</a>";
                                    }else{
                                        echo " <a href='customer_area/logout.php' class='dropdown-item active text-light'>Log Out</a> ";
                                    }                          
                                    ?>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        
        <footer class="text-light text-center"><i class="fa-regular fa-copyright"></i> <small>FIFA World Cup 2022</small></footer><br>
        <hr class="text-light fw-bolder">
    </div>
    <!-- footer end-->

    <!-- scripts start-->
    <script src="js/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/fedd93fc11.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- scripts end-->

    <!-- own carousel js start -->
    <script>
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            loop: true,
            nav: false,
            autoplay: true,
            autoplayTimeout: 3000,
            margin: 10,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                960: {
                    items: 4
                },
                1200: {
                    items: 4
                }
            }
        });
        owl.on('mousewheel', '.owl-stage', function (e) {
            if (e.deltaY > 0) {
                owl.trigger('next.owl');
            } else {
                owl.trigger('prev.owl');
            }
            e.preventDefault();
        });
    </script>
<!-- own carousel js end -->

</body>
</html>