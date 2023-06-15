<?php
    if(isset($_GET['input'])){
        if(!isset($_GET['cat_id'])){
            $country_id = $_GET['con_id'];
            $get_player = "select * from player where con_id='$country_id'";
            $run_player = mysqli_query($con,$get_player);
            
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









