<?php
if(isset($_GET['blog_edit'])){
    $edit_id = $_GET['blog_edit'];
    $get_b = "select * from blogs where blog_id='$edit_id'";
    $run_edit = mysqli_query($con,$get_b);
    $row_edit = mysqli_fetch_array($run_edit);

    $blog_id = $row_edit['blog_id'];
    $blog_title = $row_edit['blog_title'];
    $blog_desc = $row_edit['blog_desc'];
    $blog_img = $row_edit['blog_img'];

}
?>



<!-- player Entry start -->
<div class="container  pt-4 d-flex justify-content-center">
    <div class="col-md-6 ">
        <form method="post" enctype="multipart/form-data">
            <legend class="text-center text-light fw-bolder">Add New Blog</legend>
            <div class="form-floating mb-3">
                <input name="b_title" type="text" class="form-control" placeholder="Enter Blog Title" value="<?php echo $blog_title?>" required>
                <label>Enter Blog Name</label>
            </div>
            <div class="form-floating">
                <textarea name="b_desc" class="form-control" placeholder="Enter Blog Description" id="" style="height: 100px" value="<?php echo $blog_desc?>" required><?php echo $blog_desc; ?></textarea>
                <label>Enter Blog Description</label>
            </div>
            <div class="mb-3">
                <label class="form-label text-light">Player Photo</label>
                <input name="b_img" type="file" class="form-control" required>
            </div>
            <input name="update" value="Update Blog" type="submit" class="btn btn-primary form-control">
        </form>
    </div>
</div>
<!-- player Entry end -->

<?php
    if(isset($_POST['update'])){
        $b_title = $_POST['b_title'];
        $b_desc = $_POST['b_desc'];

        $b_img = $_FILES['b_img']['name'];

        $temp_name = $_FILES['b_img']['tmp_name'];

        move_uploaded_file($temp_name,"player_img/$b_img");

        $insert_blog = "update blogs set blog_title='$b_title',blog_desc='$b_desc',blog_img='$b_img',date=NOW() where blog_id='$blog_id'";
        $run_blog = mysqli_query($con,$insert_blog);

        if($run_blog){
            echo "<script>alert('Blog details Updated Successfully!')</script>";
            echo "<script>window.open('index.php?blog_view','_self')</script>";  
        }
    }
?>