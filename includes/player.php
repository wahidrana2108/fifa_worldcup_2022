<!-- player card start-->

<!-- player card end-->
<?php
    if(!isset($_GET['p_cat'])){
        if(!isset($_GET['cat'])){

            $per_page=15;

            if(isset($_GET['page'])){
                $page = $_GET['page'];
            }
                
            else{
                $page=1;
            }

            $start_from = ($page-1) * $per_page;
            $get_player = "select * from player order by 1 DESC LIMIT $start_from,$per_page";
            $run_player = mysqli_query($con,$get_player);

            while($row_player=mysqli_fetch_array($run_player)){
                $p_id = $row_player['player_id'];
                $p_name = $row_player['player_name'];
                $p_age = $row_player['player_age'];
                $p_cat = $row_player['cat_id'];
                $p_con = $row_player['con_id'];
                $p_rating = $row_player['player_rating'];
                $p_img = $row_player['player_img'];

                echo "
                <div class='col'>
                    <div class='card h-100'>
                        <a href='details.php?p_id=$p_id'><img src='admin_area/player_img/$p_img' class='card-img-top p-3'></a>
                        <div class='card-body'>
                            <h5 class='card-title text-center fw-bolder'>$p_name</h5>
                            <h6 class='card-title text-center fw-bolder'>Position: $p_cat</h6>
                            <h6 class='card-title text-center fw-bolder'>Age: $p_age</h6>
                            <h6 class='card-title text-center fw-bolder'>Country: $p_con</h6>
                            <h6 class='card-title text-center fw-bolder'>Rank: $p_rating/10</h6>
                        </div>
                    </div>
                </div>
                ";
            }
        }
    }
?>