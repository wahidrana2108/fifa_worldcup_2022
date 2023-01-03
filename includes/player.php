<!-- player card start-->
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


                $get_con = "select * from country where con_id='$p_con'";
                $run_con = mysqli_query($db,$get_con);
                $row_con = mysqli_fetch_array($run_con);
                $con_title = $row_con['con_name'];


                $get_pose = "select * from category where cat_id='$p_cat'";
                $run_pose = mysqli_query($db,$get_pose);
                $row_pose = mysqli_fetch_array($run_pose);
                $pose_title = $row_pose['cat_title'];
                
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
        }
    }
?>
<!-- player card end-->