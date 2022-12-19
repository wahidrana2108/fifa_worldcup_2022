<?php
    $active='Players';
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
                        if(!isset($_GET['p_cat'])){
                            echo "<h4 class='text-center text-light fw-bolder pb-3'>Player Information</h4>";
                        }
                    }
                ?>
                
                <div class="row row-cols-1 row-cols-md-5 g-4">
                    <?php
                        include("includes/player.php");
                    ?>
                </div>

                <div class="row row-cols-1 row-cols-md-3 g-4 mt-2">
                    <?php 
                        genderCategory();
                        productCategory();
                    ?>
                </div>


                

                <!-- Button Group Start -->
                    <div class='btn-toolbar mt-4 mb-3 d-flex justify-content-center' role='toolbar' aria-label=''>
                        <div class='btn-group me-2' role='group' aria-label=''>
                            
                            <?php button(); ?>
                        </div>
                    </div>
                <!-- Button Group End -->
                

            </div>
        </div>

    </div>
</div>
<!-- product end -->

<?php
    include("includes/footer.php");
?>