<?php
    $active='Teams';
    include("includes/header.php");
?>


<!-- product start -->
<div id="content" class="mt-3">
    <div class="container">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Shop</li>
            </ul>
        </div>


        <div class="d-flex">
            <div class="col-md-2 me-1">
                <?php
                    include("includes/sidebar.php");
                ?>

            </div>

            <div class="col-md-10">
                <?php
                    if(!isset($_GET['p_cat'])){
                        if(!isset($_GET['cat'])){
                            echo "<h4 class='text-center text-light fw-bolder mb-5'>Team Players</h4>";
                        }
                    }
                ?>
                
                <div class="col-md-12">
                
                    <div class="row row-cols-1 row-cols-md-5 g-4">
                        <?php teamCountry(); ?>
                    </div>
                </div>

                <div class="row row-cols-1 row-cols-md-5 g-4 mt-2">
                    <?php 
                        playerCategory();
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