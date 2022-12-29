<?php
        if(isset($_GET['p_id'])){
            $p_id = $_GET['p_id'];
            $get_player = "select * from player where player_id='$p_id'";
            $run_player = mysqli_query($con,$get_player);
            While($row_player = mysqli_fetch_array($run_player)){
                $player_id = $row_player['player_id'];
                $player_name = $row_player['player_name'];
                $player_age = $row_player['player_age'];
                $player_height = $row_player['player_height'];
                $player_rating = $row_player['player_height'];
                $player_img = $row_player['player_img'];
                $con_id = $row_player['con_id'];
                $cat_id = $row_player['cat_id'];

                $get_con = "select * from country where con_id='$con_id'";
                $run_con = mysqli_query($con,$get_con);
                $row_con = mysqli_fetch_array($run_con);
                $player_country = $row_con['con_name'];
                $country_img = $row_con['con_img'];

                $get_cat = "select * from category where cat_id='$cat_id'";
                $run_cat = mysqli_query($con,$get_cat);
                $row_cat = mysqli_fetch_array($run_cat);
                $player_category = $row_cat['cat_title'];



                echo "
                <div class='row'>
                    <div class='col-sm-12 col-md-6 row text-light'>
                        <div class='col-4'><img src='admin_area/player_img/$player_img' width='100%'></div>
                        <div class='col-8'>
                            <h4>$player_name</h4>
                            <h6>FIFA 22 Career Mode Rating</h6>
                            <div class='row'>
                                <img class='col-2' src='admin_area/country_img/$country_img' height='50px'>
                                <h5 class='col-10'>$player_country</h5>
                            </div>
                        </div>
                        <div class='col-sm-12 col-md-8 mt-4 mb-5'>
                            <div class='card bg-dark text-center'>
                                <div class='card-header fw-bolder' style='background-color: rgb(48, 48, 48);'> FIFA 22 Ranking </div>
                                <div class='card-body'>
                                    <nav class='nav flex-column'>
                                        <ul class='navbar-nav'>
                                            <li class='nav-item' style='background-color: rgb(48, 48, 48);'> <a href='#' class='nav-link ms-5 me-5' aria-current='page'>Fastest Strikers(#)</a> </li> <br>
                                            <li class='nav-item' style='background-color: rgb(48, 48, 48);'> <a href='#' class='nav-link ms-5 me-5' aria-current='page'>Wonderkids(#)</a> </li> <br>
                                            <li class='nav-item' style='background-color: rgb(48, 48, 48);'> <a href='#' class='nav-link ms-5 me-5' aria-current='page'>Young Offensive Beast(#)</a> </li> <br>
                                            <li class='nav-item' style='background-color: rgb(48, 48, 48);'> <a href='#' class='nav-link ms-5 me-5' aria-current='page'>Faster Bundesliga Players(#)</a> </li> <br>
                                            <li class='nav-item' style='background-color: rgb(48, 48, 48);'> <a href='#' class='nav-link ms-5 me-5' aria-current='page'>Best Striker(#)</a> </li> <br>
                                            <li class='nav-item' style='background-color: rgb(48, 48, 48);'> <a href='#' class='nav-link ms-5 me-5' aria-current='page'>Strongest Bundesliga Players(#)</a> </li>
                                        </ul>
                                    </nav>
                                </div>
                              </div>
                        </div>
                    </div>
                
                    <div class='col-sm-12 col-md-6 text-light'>
                        <div class='col-sm-12 col-md-8'>
                            <div class='card bg-dark text-center'>
                                <div class='card-header fw-bolder' style='background-color: rgb(48, 48, 48);'>$player_name</div>
                                <div class='card-body'>
                                    <nav class='nav flex-column'>
                                        <ul class='navbar-nav'>
                                            <div class='row'>
                                                <div class='col text-start ps-5'>Height</div>
                                                <div class='col text-end pe-5'>$player_height cm</div>
                                            </div><br>
                                            <div class='row'>
                                                <div class='col text-start ps-5'>Weight94 </div>
                                                <div class='col text-end pe-5'>100 kg</div>
                                            </div><br>
                                            <div class='row'>
                                                <div class='col text-start ps-5'>Age</div>
                                                <div class='col text-end pe-5'>$player_age</div>
                                            </div><br>
                                            <div class='row'>
                                                <div class='col text-start ps-5'>Positions</div>
                                                <div class='col text-end pe-5'>$player_category</div>
                                            </div><br>
                                            <div class='row'>
                                                <div class='col text-start ps-5'>Points</div>
                                                <div class='col text-end pe-5'>$player_rating</div>
                                            </div><br>
                                            <div class='row'>
                                                <div class='col text-start ps-5'>Value</div>
                                                <div class='col text-end pe-5'>$10000</div>
                                            </div><br>
                                            <div class='row'>
                                                <div class='col text-start ps-5'>Country</div>
                                                <div class='col text-end pe-5'>$player_country</div>
                                            </div>
                                        </ul>
                                    </nav>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
                ";
            }
        }
    ?>