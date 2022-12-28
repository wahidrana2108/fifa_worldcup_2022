<?php
    $active='Live Score';
    include("includes/header.php");
?>

<!-- customer register start -->
<div id="content" class="mt-3">
    <div class="container">
        <div class="col-md-12">
            <!-- breadcrumb  start -->
            <div class="col-md-12 mt-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item text-light" aria-current="page"><h6><i class="fa-solid fa-home ps-2 pt-2"></i> Home</h6></li>
                        <li class="breadcrumb-item text-light active" aria-current="page"><i class="fa-solid fa-address-card pt-2"></i> Registration</li>
                    </ol>
                </nav>
            </div>
            <!-- breadcrumb  end -->
        </div>
  
        <div class="col-md-9 m-auto">
            <div class="card p-4 ">
                <h1 class="text-center">Register a new account</h1>
                <form action="registration.php" method="post" enctype="multipart/form-data">
  
                    <div class="form-group">

                        <label>Full Name</label>
  
                        <input type="text" class="form-control" name="c_name" required>
  
                    </div>
  
                    <div class="form-group">
  
                        <label>Email Address</label>
  
                        <input type="email" class="form-control" name="c_email" required>
  
                    </div>
  
                    <div class="form-group">
  
                        <label>Choose Password</label>
  
                        <input type="password" class="form-control" name="c_pass" required>
  
                    </div>
  
  
                    <div class="form-group">
  
                        <label>Select Country</label>
  
                        <input type="text" class="form-control" name="c_country" required>
  
                    </div>
  
                    
                    <div class="form-group">
  
                        <label>Your Contract</label>
  
                        <input type="number" class="form-control" name="c_contact" required>
  
                    </div>
  
                    <div class="form-group pt-2">
  
                        <label>Your Recent Photo</label>
  
                        <input type="file" class="form-control" name="c_image" required>
  
                    </div>
  
  
                    <div class="text-center mt-2">
  
                        <button type="submit" name="register" class="btn btn-primary">Register</button>
  
                    </div>
  
                </form>
            </div>
        </div>
  
    </div>
  </div>
  <!-- customer register end -->

<?php
    include("includes/footer.php");
?>


<?php
  if(isset($_POST['register'])){
      $c_name = $_POST['c_name'];
      $c_email = $_POST['c_email'];
      $c_pass = $_POST['c_pass'];
      $c_country = $_POST['c_country'];
      $c_contact = $_POST['c_contact'];
      $c_image = $_FILES['c_image']['name'];
      $c_image_tmp = $_FILES['c_image']['tmp_name'];
      $c_ip = getRealIpUser();

      move_uploaded_file($c_image_tmp,"customer_images/$c_image");

      $insert_customer = "insert into customers (customer_name,customer_email,customer_pass,customer_country,customer_contact,customer_image,customer_ip) values ('$c_name','$c_email','$c_pass','$c_country','$c_contact','$c_image','$c_ip')";
      $run_customer = mysqli_query($con,$insert_customer);
      if($insert_customer){
          $_SESSION['customer_email']=$c_email;
          echo "<script>alert('You have been Registered successfully!')</script>";
          echo "<script>window.open('index.php','_self')</script>";
      }
      else{
          $_SESSION['customer_email']=$c_email;
          echo "<script>alert('You have been Registered successfully!')</script>";
          echo "<script>window.open('index.php','_self')</script>";
      }
  }
?>