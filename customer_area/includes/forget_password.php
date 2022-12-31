<h1 class="text-center">Recover Password</h1>
<form action="forget_password.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Email Address</label>
        <input type="email" class="form-control" name="c_email" required>
    </div>
    <div class="form-group">
        <label>Contact No</label>
        <input type="text" class="form-control" name="c_contact" required>
    </div>
    <div class="form-group">
        <label>Enter Password</label>
        <input type="password" class="form-control" name="n_pass" required>
    </div>
    <div class="form-group">
        <label>Confirm Password</label>
        <input type="password" class="form-control" name="c_n_pass" required>
    </div>
    <div class="text-center mt-2">
        <button type="submit" name="update_pass" value="login" class="btn btn-primary"><i class="fa-solid fa-right-to-bracket"></i> Submit</button>
    </div>
    <small class="fw-bolder"><i>Back to Login <a href="login.php">Click here</a></i></small><br>
    <small class="fw-bolder"><i>Don't have an account? <a href="registration.php">Click here</a></i></small>
</form>


<?php 
    if(isset($_POST['update_pass'])){   
        $c_email = $_POST['c_email'];  
        $c_contact = $_POST['c_contact'];  
        $n_pass = $_POST['n_pass'];   
        $c_n_pass = $_POST['c_n_pass']; 
          
        $select_customer = "select * from customers where customer_email='$c_email' AND customer_contact='$c_contact'";    
        $run_customer = mysqli_query($con,$select_customer);
        $check_customer = mysqli_num_rows($run_customer);
        $row_customer = mysqli_fetch_array($run_customer);
        $customer_id = $row_customer['customer_id']; 

        $get_ip = getRealIpUser();

        if($n_pass==$c_n_pass){
            if($check_customer==0){
                echo "<script>alert('No User Found!')</script>"; 
                echo "<script>window.open('customer_area/forget_password.php','_self')</script>"; 
            }
            else{

                $update_password = "update customers set customer_pass='$n_pass' where customer_id='$customer_id'";
                $update_pass = mysqli_query($con,$update_password);
                if($update_pass){
                    echo"<script>alert('Password Updated Successfully!')</script>";
                    echo "<script>window.open('customer_area/login.php','self')</script>";
                }
            }
        }
        else{;
            echo "<script>alert('Recheck your password!')</script>";
            echo "<script>window.open('customer_area/forget_password.php','self')</script>";
        }
    }
?>
