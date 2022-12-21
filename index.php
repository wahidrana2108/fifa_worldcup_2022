<?php
    $active='Live Score';
    include("includes/header.php");
?>
    <!-- carousel end -->
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="true">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <?php 
                $get_slides = "select * from slider LIMIT 0,3";
                $run_slides = mysqli_query($con,$get_slides);
                while($row_slides=mysqli_fetch_array($run_slides)){
                    $slide_name = $row_slides['slide_name'];
                    $slide_image = $row_slides['slide_image'];                              
                    echo "                               
                    <div class='carousel-item active'>
                        <img src='admin_area/banner_img/$slide_image' class='d-block w-100' style='height: 550px;'>
                    </div>
                ";
            }
            ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    <!-- carousel end -->

    <!-- index content start -->
    <div class="container pt-5" id="match-group">
        <h4 class="text-light text-center">Final Match</h4>
        <div class="row row-cols-1 row-cols-md-1 row-cols-lg-1">
            <div class="col">
                <div class="card m-auto h-100 pt-1 pb-1 ps-2 pe-2 bg-light" style="max-width: 40rem;">
                    <div class=""></div>
                    <div class="d-flex justify-content-between">
                        <h6>FIFA World Cup 2022</h6>
                        <h6>Full Time</h6>
                    </div><br>
                    <div class="d-flex justify-content-between ps-4 pe-4">
                        <div class="home-flag">
                            <img src="https://world-cup.codsfli.com/flag/QAT.png" alt="Qatar" class="" style="width: 80px;">
                            <h5 class="text-center pt-2">Qatar</h3>
                        </div>
                        <span class="dot d-flex align-items-center justify-content-center" style="font-size: 1.5rem;">3</span>
                        <span class="vs" style="font-size: 2rem;">VS</span>
                        <span class="dot d-flex align-items-center justify-content-center" style="font-size: 1.5rem;">3</span>
                        <div class="away-flag">
                            <img src="https://world-cup.codsfli.com/flag/ECU.png" alt="Ecuador" class="" style="width: 80px;">
                            <h5 class="text-center pt-2">Ecuador</h3>
                        </div>
                    </div><br>

                    <div class="d-flex justify-content-center">
                        <h6 class="text-success ">Argentina won in Penalty by 4-0 with France</h6>
                    </div><br>

                    <div class="d-flex justify-content-between">
                        <h6 class="month">Nov Sun 20</h6>
                        <h6 class="match-time">10:00 PM</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8 col-sm-10 m-auto pt-4">
            <iframe width="100%" scrolling="no" height="400" marginheight="0" marginwidth="0" src="https://www.youtube.com/embed/_p2Qe6wzNro" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>  
    </div>
    <!-- index content end -->

<?php
    include("includes/footer.php");
?>