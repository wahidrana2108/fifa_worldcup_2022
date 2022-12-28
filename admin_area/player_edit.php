<?php
if(isset($_GET['player_edit'])){
    $edit_id = $_GET['player_edit'];
    $get_p = "select * from player where player_id='$edit_id'";
    $run_edit = mysqli_query($con,$get_p);
    $row_edit = mysqli_fetch_array($run_edit);

    $player_id = $row_edit['player_id'];
    $player_name = $row_edit['player_name'];
    $con_id = $row_edit['con_id'];
    $cat_id = $row_edit['cat_id'];
    $player_height = $row_edit['player_height'];
    $player_age = $row_edit['player_age'];
    $player_rating = $row_edit['player_rating'];
    $player_img = $row_edit['player_img'];
}
$get_cat = "select * from category where cat_id='$cat_id'";
$run_cat = mysqli_query($con,$get_cat);
$row_cat = mysqli_fetch_array($run_cat);
$cat_title = $row_cat['cat_title'];


$get_con = "select * from country where con_id='$con_id'";
$run_con = mysqli_query($con,$get_con);
$row_con = mysqli_fetch_array($run_con);
$con_title = $row_con['con_name'];
?>


<!-- breadcrumb  start -->
<div class="col-md-12 mt-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item" aria-current="page"><h6><i class="fa-solid fa-gauge ps-2 pt-2"></i> Dashboard</h6></li>
            <li class="breadcrumb-item active" aria-current="page"><i class="fa-solid fa-pen pt-2"></i> Edit Player</li>
        </ol>
    </nav>
</div>
<!-- breadcrumb  end -->


<!-- player edit start -->
<div class="container  pt-4 d-flex justify-content-center">
    <div class="col-md-6 ">
        <form method="post" enctype="multipart/form-data">
            <legend class="text-center text-light fw-bolder">Add New Player</legend>
            <div class="form-floating mb-3">
                <input name="p_name" type="text" class="form-control" placeholder="Enter Product Title" value="<?php echo $player_name; ?>" required>
                <label for="">Enter Player Name</label>
            </div>
            <div class="form-floating mb-3">
                <input name="p_age" type="number" class="form-control" placeholder="Enter Age" value="<?php echo $player_age; ?>" required>
                <label for="">Enter Age</label>
            </div>
            <div class="form-floating mb-3">
                <select name="p_con" class="form-select" required>
                    <option selected value="<?php echo $con_id; ?>" disabled><?php echo $con_title; ?></option>
                    <?php
                        $get_con = "select * from country";
                        $run_con = mysqli_query($con,$get_con);

                        while ($row_con = mysqli_fetch_array($run_con)){
                            $con_id = $row_con['con_id'];
                            $con_name = $row_con['con_name'];

                            echo "
                                <option value='$con_id'> $con_name</option>
                            ";
                        }
                    ?>
                </select>
                <label for="">Select Country</label>
            </div>
            <div class="form-floating mb-3">
                <select name="p_cat" class="form-select" required>
                    <option selected value="<?php echo $cat_id; ?>" disabled><?php echo $cat_title; ?></option>
                    <?php
                        $get_cat = "select * from category";
                        $run_cat = mysqli_query($con,$get_cat);

                        while ($row_cat = mysqli_fetch_array($run_cat)){
                            $cat_id = $row_cat['cat_id'];
                            $cat_title = $row_cat['cat_title'];

                            echo "
                                <option value='$cat_id'> $cat_title</option>
                            ";
                        }
                    ?>
                </select>
                <label for="">Preferred Position</label>
            </div>
            <div class="form-floating mb-3">
                <input name="p_height" type="number" min="0" max="210" step="1" pattern="^[-/d]/d*$" class="form-control" placeholder="Enter Height" value="<?php echo $player_height; ?>" required>
                <label for="">Enter Height</label>
            </div>
            <div class="form-floating mb-3">
                <input name="p_rating" type="number" min="0" max="2000" step="1" pattern="^[-/d]/d*$" class="form-control" placeholder="Enter Rating" value="<?php echo $player_rating; ?>" required>
                <label for="">Enter Points</label>
            </div>
            <div class="mb-3">
                <label for="" class="form-label text-light">Player Photo</label>
                <input name="p_img" type="file" class="form-control" aria-describedby="" required>
            </div>
            <input name="update" value="Insert Player" type="submit" class="btn btn-primary form-control">
        </form>
    </div>
</div>
<!-- player edit end -->

<?php
    if(isset($_POST['update'])){
        $p_id = $$_POST['player_id'];
        $p_name = $_POST['p_name'];
        $p_age = $_POST['p_age'];
        $p_con = $_POST['p_con'];
        $p_cat = $_POST['p_cat'];
        $p_height = $_POST['p_height'];
        $p_rating = $_POST['p_rating'];

        $p_img = $_FILES['p_img']['name'];

        $temp_name = $_FILES['p_img']['tmp_name'];

        move_uploaded_file($temp_name,"player_img/$p_img");

        $update_player = "update player set con_id='$p_con',cat_id='$p_cat',date='Now()',player_name='$p_name',player_age='$p_age',player_height='$p_height',player_rating='$p_rating',player_img='$p_img' where player_id='$player_id'";
        $run_update = mysqli_query($con,$update_player);

        if($run_update){
            echo "<script>alert('Player details Updated Successfully!')</script>";
            echo "<script>window.open('index.php?player_view','_self')</script>";  
        }
    }
?>