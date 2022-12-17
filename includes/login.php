<!-- customer register start -->
<div id="content" class="mt-3">
    <div class="container">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Registration</li>
            </ul>
        </div>
  
        <div class="col-md-9 m-auto">
            <div class="card p-4 ">
                <h1 class="text-center">LOGIN</h1>
<form action="index.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Email Address</label>
        <input type="email" class="form-control" name="c_email" required>
    </div>
    <div class="form-group">
        <label>Enter Password</label>
        <input type="password" class="form-control" name="c_pass" required>
    </div>
    <div class="text-center mt-2">
        <button type="submit" name="login" value="login" class="btn btn-primary"><i class="fa-solid fa-right-to-bracket"></i> Login</button>
    </div>
    <small class="fw-bolder"><i>Forgot Password? <a href="customer/customer_register.php">Click here</a></i></small><br>
    <small class="fw-bolder"><i>Don't have an account? <a href="customer/customer_register.php">Click here</a></i></small>
</form>
            </div>
        </div>
  
    </div>
  </div>
  <!-- customer register end -->


<?php 
    if(isset($_POST['login'])){   
        $customer_email = $_POST['c_email'];  
        $customer_pass = $_POST['c_pass'];   
        $select_customer = "select * from customers where customer_email='$customer_email' AND customer_pass='$customer_pass'";    
        $run_customer = mysqli_query($con,$select_customer);    
        $get_ip = getRealIpUser();   
        $check_customer = mysqli_num_rows($run_customer);    
        $select_cart = "select * from cart where ip_add='$get_ip'";    
        $run_cart = mysqli_query($con,$select_cart);   
        $check_cart = mysqli_num_rows($run_cart);    
        if($check_customer==0){    
            echo "<script>alert('Your email or password is wrong!')</script>";      
            exit();   
        }
        
        if($check_customer==1){
            $_SESSION['customer_email']=$customer_email;        
                
        echo "<script>window.open('index.html.php','_self')</script>";
        echo "<script>alert('You are Logged in Successfully!')</script>";          
        }else{        
            $_SESSION['customer_email']=$customer_email; 
        echo "<script>window.open('index.php','_self')</script>";
        echo "<script>alert('You are Logged in Successfully!')</script>";        
        }   
    }
?>