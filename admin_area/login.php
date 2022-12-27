<?php
    session_start();
    include('includes/db.php'); 
    include('includes/header.php'); 
?>

<style>
    body{
        background-color: #e6e9f1;
        margin: 0;
        padding: 0;
    }

    .resize{
        border: 3px solid gray;
        border-radius: 10px;
        background-color: #dddddf;
        position: absolute;
        top: 25%;
        left: 35%;
        box-shadow: 10px 10px 10px #888888;
    }
</style>

    <div class="col-md-3 resize p-5">
        <h1 class="text-center">Admin Login</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>Email Address</label>
                <input type="email" class="form-control" name="admin_email" required>
            </div>
            <div class="form-group">
                <label>Enter Password</label>
                <input type="password" class="form-control" name="admin_pass" required>
            </div>
            <div class="text-center mt-2">
                <button type="submit" name="admin_login" value="admin_login" class="btn btn-primary"><i class="fa-solid fa-right-to-bracket"></i> Login</button>
            </div>
        </form>
    </div>

<?php include('includes/footer.php'); ?>


<?php 
    if(isset($_POST['admin_login'])){
        $admin_email = mysqli_real_escape_string($con,$_POST['admin_email']);
        $admin_pass = mysqli_real_escape_string($con,$_POST['admin_pass']);
        $get_admin = "select * from admins where admin_email='$admin_email' AND admin_pass='$admin_pass'";
        $run_admin = mysqli_query($con,$get_admin);
        $count = mysqli_num_rows($run_admin);

        if($count==1){
            $_SESSION['admin_email']=$admin_email;
            echo "<script>window.open('index.php?dashboard','_self')</script>";
            echo "<script>alert('Logged in, Welcome Back!')</script>";
        }
        else{
            echo "<script>alert('Use Not Matched!')</script>";
        }
    }
?>


