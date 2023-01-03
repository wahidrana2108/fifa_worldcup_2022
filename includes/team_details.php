<?php
    if(isset($_GET['con_id'])){
        if(!isset($_GET['cat_id'])){
            $country_id = $_GET['con_id'];
            $get_player = "select * from player where con_id='$country_id'";
            $run_player = mysqli_query($con,$get_player);
            while($row_player = mysqli_fetch_array($run_player)){
                $p_id = $row_player['player_id'];
                $p_title = $row_player['player_name'];
                $cat_id = $row_player['cat_id'];
                $p_age = $row_player['player_age'];
                $p_rating = $row_player['player_rating'];
                $con_id = $row_player['con_id'];
                $p_img = $row_player['player_img'];


                $get_cat = "select * from category where cat_id = '$cat_id'";
                $run_cat = mysqli_query($con,$get_cat);
                $row_cat = mysqli_fetch_array($run_cat);
                $cat_title = $row_cat['cat_title'];


                $get_con = "select * from country where con_id='$con_id'";
                $run_con = mysqli_query($con,$get_con);
                $row_con = mysqli_fetch_array($run_con);
                $con_title = $row_con['con_name'];

                echo "
                    <div class='col'>
                        <div class='card bg-dark text-light h-100'>
                            <a href='player_profile.php?p_id=$p_id'><img src='admin_area/player_img/$p_img' class='card-img-top p-3'></a>
                            <div class='card-body'>
                                <h5 class='card-title text-center fw-bolder'>$p_title</h5>
                            </div>
                        </div>
                    </div>
                ";
            }
        }
        else{
            $category_id = $_GET["cat_id"];
            $get_con_player = "select * from player where cat_id ='$category_id' and con_id = 'country_id'";
            $run_con_player = mysqli_query($con,$get_con_player);
            while($row_con_player = mysqli_fetch_array($run_con_player)){
                $play_id = $row_con_player['player_id'];
                echo "
                    <div class='col'>
                        <div class='card bg-secondary text-light h-100'>
                            <a href='player_profile.php?p_id=$p_id'><img src='admin_area/player_img/$p_img' class='card-img-top p-3'></a>
                            <div class='card-body'>
                                <h5 class='card-title text-center fw-bolder'>$p_title</h5>
                            </div>
                        </div>
                    </div>
                ";
            }
        }





    }
?>









