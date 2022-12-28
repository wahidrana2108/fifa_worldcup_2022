<!-- player Entry start -->
<div class="container  pt-4 d-flex justify-content-center">
    <div class="col-md-6 ">
        <form method="post" enctype="multipart/form-data">
            <legend class="text-center text-light fw-bolder">Add New Blog</legend>
            <div class="form-floating mb-3">
                <input name="b_title" type="text" class="form-control" placeholder="Enter Blog Title" required>
                <label>Enter Blog Name</label>
            </div>
            <div class="form-floating">
                <input name="b_desc" type="text" class="form-control" placeholder="Enter Blog Description" required>
                <label>Enter Blog Description</label>
            </div>
            <div class="mb-3">
                <label class="form-label text-light">Player Photo</label>
                <input name="b_img" type="file" class="form-control" required>
            </div>
            <input name="submit" value="Insert Blog" type="submit" class="btn btn-primary form-control">
        </form>
    </div>
</div>
<!-- player Entry end -->

<?php
    if(isset($_POST['submit'])){
        $b_title = $_POST['b_title'];
        $b_desc = $_POST['b_desc'];

        $b_img = $_FILES['b_img']['name'];

        $temp_name = $_FILES['b_img']['tmp_name'];

        move_uploaded_file($temp_name,"player_img/$b_img");

        $insert_blog = "insert into blogs (blog_title,blog_desc,blog_img,date) values ('$b_title','$b_desc','$b_img',NOW())";
        $run_blog = mysqli_query($con,$insert_blog);

        if($run_blog){
            echo "<script>alert('Blog details added Successfully!')</script>";
            echo "<script>window.open('index.php?blog_view','_self')</script>";  
        }
    }
?>