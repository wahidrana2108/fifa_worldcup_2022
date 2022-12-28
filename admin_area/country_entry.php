<!-- player Entry start -->
<div class="container  pt-4 d-flex justify-content-center">
    <div class="col-md-6 ">
        <form method="post" enctype="multipart/form-data">
            <legend class="text-center text-light fw-bolder">Add New Country</legend>
            <div class="form-floating mb-3">
                <input name="c_title" type="text" class="form-control" placeholder="Enter Country Title" required>
                <label>Enter Country Name</label>
            </div>
            <div class="form-floating mb-3">
                <input name="c_cup" type="number" class="form-control" placeholder="World Cup Own" required>
                <label>Worldcup Owned</label>
            </div>
            <div class="form-floating">
                <input name="c_point" type="number" class="form-control" placeholder="Enter Points" required>
                <label>Enter Points</label>
            </div>
            <div class="mb-3">
                <label class="form-label text-light">Enter Flag Photo</label>
                <input name="c_img" type="file" class="form-control" required>
            </div>
            <input name="submit" value="Insert country" type="submit" class="btn btn-primary form-control">
        </form>
    </div>
</div>
<!-- player Entry end -->

<?php
    if(isset($_POST['submit'])){
        $c_title = $_POST['c_title'];
        $c_cup = $_POST['c_cup'];
        $c_point = $_POST['c_point'];

        $c_img = $_FILES['c_img']['name'];

        $temp_name = $_FILES['c_img']['tmp_name'];

        move_uploaded_file($temp_name,"country_img/$c_img");

        $insert_country = "insert into country (con_name,con_cup,con_point,con_img,date) values ('$c_title','$c_cup','$c_point','$c_img',NOW())";
        $run_country = mysqli_query($con,$insert_country);

        if($run_country){
            echo "<script>alert('country details added Successfully!')</script>";
            echo "<script>window.open('index.php?country_view','_self')</script>";  
        }
    }
?>