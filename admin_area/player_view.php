<?php
    if(!isset($_SESSION['admin_email'])){
        echo "<script>window.open('login.php','_self')</script>";
    }
    else{
?>
  <!-- new order list start -->
  <div class="card border-primary mt-5 col-md-10">
    <h5 class="card-header text-center text-light"  style="background-color: rgb(82, 127, 250);"><i class="fa-solid fa-list pe-3"></i></i>Players</h5>
    <div class="card-body">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Country</th>
                    <th scope="col">Name</th>
                    <th scope="col">Height(cm)</th>
                    <th scope="col">Age</th>
                    <th scope="col">Position</th>
                    <th scope="col">Points</th>
                    <th scope="col">Photo</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $i = 0;
                
                    $get_player = "select * from player";
                    $run_player  = mysqli_query($con,$get_player);

                    while($row_player = mysqli_fetch_array($run_player)){
                        $player_id = $row_player['player_id'];
                        $player_name = $row_player['player_name'];
                        $con_id = $row_player['con_id'];
                        $cat_id = $row_player['cat_id'];
                        $player_height = $row_player['player_height'];
                        $player_age = $row_player['player_age'];
                        $player_rating = $row_player['player_rating'];
                        $player_img = $row_player['player_img'];
                        $i++;
                ?>
                <tr>
                    <td><?php echo $player_id; ?></td>
                    <td><?php  
                           $get_con = "select * from country where con_id='$con_id'";
                           $run_con = mysqli_query($con,$get_con);
                           $row_con = mysqli_fetch_array($run_con);
                           $con_title = $row_con['con_name'];
                           echo $con_title;
                        ?>
                    </td>
                    <td><?php echo $player_name; ?></td>
                    <td><?php echo $player_height; ?></td>
                    <td><?php echo $player_age; ?></td>
                    <td><?php
                            $get_cat = "select * from category where cat_id='$cat_id'";
                            $run_cat = mysqli_query($con,$get_cat);
                            $row_cat = mysqli_fetch_array($run_cat);
                            $cat_title = $row_cat['cat_title'];
                            echo $cat_title;
                         ?>
                    </td>
                    <td><?php echo $player_rating; ?></td>
                    <td><img src="player_img/<?php echo $player_img; ?>" alt="N/A" height="50px" width="50px"></td>
                    <td><a href="index.php?player_edit=<?php echo $player_id; ?>" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i> Edit</a></td>
                    <td><a href="index.php?player_delete=<?php echo $player_id; ?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Delete</a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<!-- new order list end -->
<?php } ?>