<?php
    $active='Home';
    include("includes/header.php");
?>
    <!-- carousel end -->
    <div id="banner" class="carousel slide carousel-fade" data-bs-ride="true">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#banner" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#banner" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#banner" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <?php 
                $get_slides = "select * from slider LIMIT 0,3";
                $run_slides = mysqli_query($con,$get_slides);
                while($row_slides=mysqli_fetch_array($run_slides)){
                    $slide_name = $row_slides['slide_name'];
                    $slide_image = $row_slides['slide_image'];                              
                    echo "                               
                    <div class='carousel-item active'> <img src='admin_area/banner_img/$slide_image' class='d-block w-100' style='height: 550px;'></div>
                ";
            }
            ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#banner" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#banner" data-bs-slide="next">
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


    <!-- index content end -->
    <div class="card border-dark mt-5 col-md-8 m-auto">
        <h5 class="card-header text-center text-light"  style="background-color: rgb(48, 48, 48);"><i class="fa-solid fa-chart-simple pe-3"></i>Team Statistics</h5>
        <div class="card-body bg-dark justify-content-between">
            <table class="table table-borderless table-hover">
                <thead>
                    <tr>
                        <th class="text-center"><img src="https://world-cup.codsfli.com/flag/ARG.png" height="40px"></th>
                        <th class="text-center"></th>
                        <th class="text-center" ><img src="https://world-cup.codsfli.com/flag/BRA.png" height="40px"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr class='clickable-row'>
                        <th class="text-center  text-light">0</th>
                        <th class="text-center  text-light">Shot</th>
                        <th class="text-center  text-light" >0</th>
                    </tr>
                    
                    <tr class='clickable-row'>
                        <th class="text-center  text-light">0</th>
                        <th class="text-center  text-light">Shot on target</th>
                        <th class="text-center  text-light" >0</th>
                    </tr>
                    <tr class='clickable-row'>
                        <th class="text-center  text-light">0</th>
                        <th class="text-center  text-light">Possession of the ball</th>
                        <th class="text-center  text-light" >0</th>
                    </tr>
                    <tr class='clickable-row'>
                        <th class="text-center  text-light">0</th>
                        <th class="text-center  text-light">Pass</th>
                        <th class="text-center  text-light" >0</th>
                    </tr>
                    <tr class='clickable-row'>
                        <th class="text-center  text-light">0</th>
                        <th class="text-center  text-light">Statistics fot correct/incorrect passes</th>
                        <th class="text-center  text-light" >0</th>
                    </tr>
                    <tr class='clickable-row'>
                        <th class="text-center  text-light">0</th>
                        <th class="text-center  text-light">Foul</th>
                        <th class="text-center  text-light" >0</th>
                    </tr>
                    <tr class='clickable-row'>
                        <th class="text-center  text-light">0</th>
                        <th class="text-center  text-light">Yellow card</th>
                        <th class="text-center  text-light" >0</th>
                    </tr>
                    <tr class='clickable-row'>
                        <th class="text-center  text-light">0</th>
                        <th class="text-center  text-light">Red card</th>
                        <th class="text-center  text-light" >0</th>
                    </tr>
                    <tr class='clickable-row'>
                        <th class="text-center  text-light">0</th>
                        <th class="text-center  text-light">Offside</th>
                        <th class="text-center  text-light" >0</th>
                    </tr>
                    <tr class='clickable-row'>
                        <th class="text-center  text-light">0</th>
                        <th class="text-center  text-light">Corner</th>
                        <th class="text-center  text-light" >0</th>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
    <!-- index content end -->
    
    <!-- Our latest blogs with owl carousel start -->
    <div class="container mt-5 mb-5">
    <h3 class="text-center text-light">Our Latest Blogs</h3>

    <div class="mt-3">
        <div class="owl-carousel owl-theme">

            <?php
                $get_blog = "select * from blogs";
                $run_blog = mysqli_query($con,$get_blog);
                while($row_blog = mysqli_fetch_array($run_blog)){
                    $blog_id = $row_blog['blog_id'];
                    $blog_title = $row_blog['blog_title'];
                    $blog_desc = $row_blog['blog_desc'];

                    echo "
                    <div class='item'>
                        <div class='card h-100'>
                        <img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSrEfL-hStRy7TalJBLxcd89LICJqVBIbky7Ujd6mqFKA&s' class='card-img-top'> 
                        </div>
                        <h5 class='text-light'>$blog_title</h5>
                    </div>
                    ";
                }
            ?>

        </div>
    </div>
    </div>
    <!-- Our latest blogs with owl carousel end -->
    
    <!-- Our latest news with owl carousel start -->
    <div class="container mt-5 mb-5">
    <h3 class="text-center text-light">Our Latest News</h3>

    <div class="mt-3">
        <div class="owl-carousel owl-theme">
            <?php
                $get_news = "select * from news";
                $run_news = mysqli_query($con,$get_news);
                while($row_news = mysqli_fetch_array($run_news)){
                    $news_id = $row_news['news_id'];
                    $news_title = $row_news['news_title'];
                    $news_desc = $row_news['news_desc'];

                    echo "
                    <div class='item'>
                        <div class='card h-100'>
                        <img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSrEfL-hStRy7TalJBLxcd89LICJqVBIbky7Ujd6mqFKA&s' class='card-img-top'> 
                        </div>
                        <h5 class='text-light'>$news_title</h5>
                    </div>
                    ";
                }
        ?>
        </div>
    </div>
    </div>
    <!-- Our latest news with owl carousel end -->

    <!-- FIFA partners start -->
    <div class="container-fluid">
        <div class="d-flex flex-column align-content-center">
            <div class="row">
                <div class="col d-flex justify-content-center">
                    <h6 class="d-block mx-auto text-center fw-bolder mt-5">FIFA Partners</h6>
                </div>
            </div>
            <div class="row  justify-content-center">
                <div class="col-12 col-lg-3 col-xxl-auto d-flex justify-content-center">
                    <a href="#" class="d-flex ff-mb-0" target="_blank"> <div><img decoding="async" loading="lazy" height="57" width="114" src="https://digitalhub.fifa.com/transform/f8b15d10-2085-44dd-9874-82222d941b6b/Vector-Adidas-new-logo?io=transform:fill,height:57,width:114" alt="Adidas" title="Adidas"></div></a>
                </div>
                <div class="col-12 col-lg-3 col-xxl-auto d-flex justify-content-center">
                    <a href="#" class="d-flex ff-mb-0" target="_blank"> <div><img decoding="async" loading="lazy" height="57" width="114" src="https://cloudinary.fifa.com/m/7b71c2f3185bddfb/original/fwc2022_fp_cocacola-co_lbgr.eps?tx=c_fill,x_57,y_28,g_xy_center,q_auto,w_114,h_57" alt="Coca Cola" title="Coca Cola"></div></a>
                </div>
                <div class="col-12 col-lg-3 col-xxl-auto d-flex justify-content-center">
                    <a href="#" class="d-flex ff-mb-0" target="_blank"><img decoding="async" loading="lazy" height="57" width="114" src="https://cloudinary.fifa.com/m/7ecf457666d9fb6c/original/fwc2022_fp_dalian-wanda-co_lbgr.eps?tx=c_fill,x_57,y_28,g_xy_center,q_auto,w_114,h_57" alt="Wanda group" title="Wanda group"> </a>
                </div>
                <div class="col-12 col-lg-3 col-xxl-auto d-flex justify-content-center">
                    <a href="#" class="d-flex ff-mb-0" target="_blank"><img decoding="async" loading="lazy" height="57" width="114" src="https://cloudinary.fifa.com/m/6954f7d3fd116343/webimage-fwc2022_fp_hyundai-kia-co_lbgr.png?tx=c_fill,g_auto,q_auto,w_114,h_57" alt="Hyundai" title="Hyundai"></a>
                </div>
                <div class="col-12 col-lg-3 col-xxl-auto d-flex justify-content-center">
                    <div><a href="#" class="d-flex ff-mb-0" target="_blank"><img decoding="async" loading="lazy" height="57" width="114" src="https://cloudinary.fifa.com/m/6d3a4cc8e08eeb0f/webimage-fwc2022_fp_qatar-co_lbgr.png?tx=c_fill,g_auto,q_auto,w_114,h_57" alt="Qatar Airways" title="Qatar Airways"></a></div>
                </div>
                <div class="col-12 col-lg-3 col-xxl-auto d-flex justify-content-center">
                    <a href="#" class="d-flex ff-mb-0" target="_blank"><img decoding="async" loading="lazy" height="57" width="114" src="https://digitalhub.fifa.com/transform/aebad5a8-a4ff-467a-81d2-ab34c4843fbe/Vector-Qatar-Energy-logo?io=transform:fill,height:57,width:114" alt="Qatar Energy" title="Qatar Energy"></a>
                </div>
                <div class="col-12 col-lg-3 col-xxl-auto d-flex justify-content-center">
                    <a href="#" class="d-flex ff-mb-0" target="_blank"><img decoding="async" loading="lazy" height="71" width="94" src="https://digitalhub.fifa.com/transform/fdae2bc1-3678-4471-955d-20e4870b924f/visa_94x71?io=transform:fill,height:71,width:94" alt="VISA" title="VISA"></a>
                </div>
            </div>
        </div>
    </div>
    <!-- FIFA partners end -->

<?php
    include("includes/footer.php");
?>