<?php
if(isset($_GET['country_edit'])){
    $edit_id = $_GET['country_edit'];
    $get_c = "select * from country where con_id='$edit_id'";
    $run_edit = mysqli_query($con,$get_c);
    $row_edit = mysqli_fetch_array($run_edit);

    $country_id = $row_edit['con_id'];
    $country_title = $row_edit['con_name'];
    $country_cup = $row_edit['con_cup'];
    $country_point = $row_edit['con_point'];
    $country_img = $row_edit['con_img'];

}
?>

<!-- breadcrumb  start -->
<div class="col-md-12 mt-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item" aria-current="page"><h6><i class="fa-solid fa-gauge ps-2 pt-2"></i> Dashboard</h6></li>
            <li class="breadcrumb-item active" aria-current="page"><i class="fa-solid fa-pen pt-2"></i> Edit Country</li>
        </ol>
    </nav>
</div>
<!-- breadcrumb  end -->


<!-- country edit start -->
<div class="container  pt-4 d-flex justify-content-center">
    <div class="col-md-6 ">
        <form method="post" enctype="multipart/form-data">
            <legend class="text-center text-light fw-bolder">Add New Country</legend>
            <div class="form-floating mb-3">
                <input name="c_title" type="text" class="form-control" placeholder="Enter Country Title" value="<?php echo $country_title;?>" required>
                <label>Enter Country Name</label>
            </div>
            <div class="form-floating mb-3">
                <input name="c_cup" type="number" class="form-control" placeholder="World Cup Own" value="<?php echo $country_cup;?>" required>
                <label>Worldcup Owned</label>
            </div>
            <div class="form-floating">
                <input name="c_point" type="number" class="form-control" placeholder="Enter Points" value="<?php echo $country_point;?>" required>
                <label>Enter Points</label>
            </div>
            <div class="mb-3">
                <label class="form-label text-light">Enter Flag Photo</label>
                <input name="c_img" type="file" class="form-control" required>
                <img src="country_img/<?php echo $country_img; ?>" height="50px" width="50px">
            </div>
            <input name="update" value="Update country" type="submit" class="btn btn-primary form-control">
        </form>
    </div>
</div>
<!-- country edit end -->

<?php
    if(isset($_POST['update'])){
        $c_title = $_POST['c_title'];
        $c_cup = $_POST['c_cup'];
        $c_point = $_POST['c_point'];

        $c_img = $_FILES['c_img']['name'];

        $temp_name = $_FILES['c_img']['tmp_name'];

        move_uploaded_file($temp_name,"country_img/$c_img");

        $update_country = "update country set con_name='$c_title',con_cup='$c_cup',con_point='$c_point',con_img='$c_img',date=NOW() where con_id='$country_id'";
        $run_update = mysqli_query($con,$update_country);

        if($run_update){
            echo "<script>alert('Country details Updated Successfully!')</script>";
            echo "<script>window.open('index.php?country_view','_self')</script>";  
        }
    }
?>