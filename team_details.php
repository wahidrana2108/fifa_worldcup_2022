<?php
    $active='Teams';
    include("includes/header.php");
?>


<!-- product start -->
<div id="content" class="mt-3">
    <div class="container">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pt-3">
                    <li class="breadcrumb-item text-light" aria-current="page"><h6><i class="fa-solid fa-home ps-2 pt-2"></i> <a class="text-decoration-none text-light" href="index.php">Home</a></h6></li>
                    <li class="breadcrumb-item text-light active" aria-current="page"><i class="fa-solid fa-users pt-2"></i> Team Members</li>
                </ol>
            </nav>
        </div>


        <div class="d-flex">
            <div class="col-md-2 me-1">
                <?php
                    include("includes/sidebar.php");
                ?>

            </div>

            <div class="col-md-10">

                <?php
                    if(isset($_GET['con_id'])){
                        $country_id = $_GET['con_id'];
                        $get_con = "select * from country where con_id='$country_id'";
                        $run_con = mysqli_query($con,$get_con);
                        $row_con = mysqli_fetch_array($run_con);
                        $con_title = $row_con['con_name'];

                        if(!isset($_GET['cat'])){
                            echo "<h4 class='text-center text-light fw-bolder mb-5'>All players from $con_title</h4>";
                        }
                        else{
                            echo "<h4 class='text-center text-light fw-bolder mb-5'>category from $con_title</h4>";
                        }
                        
                    }
                ?>
                                 
                
                <div class="col-md-12">
                
                    <div class="row row-cols-1 row-cols-md-5 g-4">
                        
                       <?php include("includes/team_details.php")?>


                    </div>
                </div>

                <div class="row row-cols-1 row-cols-md-5 g-4 mt-2">
                    <?php 
                        playerCountryCategory();
                    ?>
                </div>


                

            </div>
        </div>

    </div>
</div>
<!-- product end -->

<?php
    include("includes/footer.php");
?>