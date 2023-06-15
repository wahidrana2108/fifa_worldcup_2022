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
                    if(isset($_GET['input'])){
                        $input = $_GET['input'];
                        $get_player = "select * from player where con_id='%$input%'";
                        $run_player = mysqli_query($con,$get_player);
                        $row_player = mysqli_fetch_array($run_player);

                        if(!isset($_GET['cat'])){
                            echo "<h4 class='text-center text-light fw-bolder mb-5'>Search Result for $input</h4>";
                        }
                        else{
                            echo "<h4 class='text-center text-light fw-bolder mb-5'>No search result found for $input</h4>";
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