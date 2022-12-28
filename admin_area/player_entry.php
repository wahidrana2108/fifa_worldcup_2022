<!-- breadcrumb  start -->
<div class="col-md-12 mt-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item" aria-current="page"><h6><i class="fa-solid fa-gauge ps-2 pt-2"></i> Dashboard</h6></li>
            <li class="breadcrumb-item active" aria-current="page"><i class="fa-solid fa-pen pt-2"></i> Player Entry</li>
        </ol>
    </nav>
</div>
<!-- breadcrumb  end -->


<!-- player Entry start -->
<div class="container  pt-4 d-flex justify-content-center">
    <div class="col-md-6 ">
        <form method="post" enctype="multipart/form-data">
            <legend class="text-center text-light fw-bolder">Add New Player</legend>
            <div class="form-floating mb-3">
                <input name="p_name" type="text" class="form-control" placeholder="Enter Product Title" required>
                <label for="">Enter Player Name</label>
            </div>
            <div class="form-floating mb-3">
                <input name="p_age" type="number" class="form-control" placeholder="Enter Age" required>
                <label for="">Enter Age</label>
            </div>
            <div class="form-floating mb-3">
                <select name="p_con" class="form-select" required>
                    <option selected disabled>Select Country</option>
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
                    <option selected disabled>Preferred Position</option>
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
                <input name="p_height" type="number" min="0" max="210" step="1" pattern="^[-/d]/d*$" class="form-control" placeholder="Enter Height(cm)" required>
                <label for="">Enter Height(cm)</label>
            </div>
            <div class="form-floating mb-3">
                <input name="p_rating" type="number" min="0" max="2000" step="1" pattern="^[-/d]/d*$" class="form-control" placeholder="Enter Rating" required>
                <label for="">Enter Points</label>
            </div>
            <div class="mb-3">
                <label for="" class="form-label text-light">Player Photo</label>
                <input name="p_img" type="file" class="form-control" required>
            </div>
            <input name="submit" value="Insert Player" type="submit" class="btn btn-primary form-control">
        </form>
    </div>
</div>
<!-- player Entry end -->

<?php
    if(isset($_POST['submit'])){
        $p_name = $_POST['p_name'];
        $p_age = $_POST['p_age'];
        $p_con = $_POST['p_con'];
        $p_cat = $_POST['p_cat'];
        $p_height = $_POST['p_height'];
        $p_rating = $_POST['p_rating'];

        $p_img = $_FILES['p_img']['name'];

        $temp_name = $_FILES['p_img']['tmp_name'];

        move_uploaded_file($temp_name,"player_img/$p_img");

        $insert_player = "insert into player (con_id,cat_id,date,player_name,player_age,player_height,player_rating,player_img) values ('$p_con','$p_cat',NOW(),'$p_name','$p_age','$p_height','$p_rating','$p_img')";
        $run_player = mysqli_query($con,$insert_player);

        if($run_player){
            echo "<script>alert('Player details added Successfully!')</script>";
            echo "<script>window.open('index.php?player_view','_self')</script>";  
        }
    }
?>