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
                        $get_result = "select * from player where player_name like '%$input%'";
                        $run_result = mysqli_query($con, $get_result);
                        $count = mysqli_num_rows($run_result); 

                        if($count > 0){
                            echo "<h4 class='text-center bg-dark text-light fw-bolder mb-5 pt-2 pb-2 rounded-2'>Search Result for $input</h4>";
                        }
                        else{
                            echo "<h4 class='text-center bg-dark text-light fw-bolder mb-5 pt-2 pb-2 rounded-2'>Sorry...No search result found for $input</h4>";
                        }

                        echo"
                        <div class='col-md-12'>
                        
                            <div class='row row-cols-1 row-cols-md-5 g-4'>
                        ";
                        while($row_player = mysqli_fetch_array($run_result)){
                            $p_img = $row_player['player_img'];
                            $p_id = $row_player['player_id'];
                            $p_name = $row_player['player_name'];
                            echo "
                                <div class='col'>
                                    <div class='card bg-dark text-light h-100'>
                                        <a href='player_profile.php?p_id=$p_id'><img src='admin_area/player_img/$p_img' class='card-img-top p-3'></a>
                                        <div class='card-body'>
                                            <h5 class='card-title text-center fw-bolder'>$p_name</h5>
                                        </div>
                                    </div>
                                </div>
                            ";
                        }
    
                        echo "
                            </div>
                        </div>
                        ";  
                        
                    }              
                ?>
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