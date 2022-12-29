<?php
    
include('includes/header.php');

    if(isset($_SESSION['customer_email'])){
      
      $customer_session = $_SESSION['customer_email'];
      $get_customer = "select * from customers where customer_email='$customer_session'";
      $run_customer = mysqli_query($con,$get_customer);
      $row_customer = mysqli_fetch_array($run_customer);
      $customer_image = $row_customer['customer_image'];
      $customer_name = $row_customer['customer_name'];
      $customer_email = $row_customer['customer_email'];
      $customer_contact = $row_customer['customer_contact'];
      $customer_country = $row_customer['customer_country'];
      echo" 
        <div class='container text-light text-center mt-5'>
            <div class='row'>
                <div class='col-md-4'>
                    <h4>$customer_name</h4>
                    <img src='customer_images/$customer_image' class='mt-2 mb-3' height='100px' width='100px' style='border-radius:50%'>
                    <h5><span class='badge rounded-pill text-bg-danger'>normal user</span></h5>
                </div>
                <div class='col-md-8 pt-3'>
                    <div class='card border-dark col-md-12 m-auto'>
                        <h5 class='card-header text-center text-light' style='background-color: rgb(48, 48, 48);'><i class='fa-solid fa-user pe-3'></i></i>Account Details</h5>
                        <div class='card-body text-start bg-dark'>
                            <div class='row'>
                                <div class='col-3'><h6>Name:</h6></div>
                                <div class='col-9'><h6>$customer_name</h6></div>
                            </div>
                            <div class='row'>
                                <div class='col-3'><h6>Email:</h6></div>
                                <div class='col-9'><h6>$customer_email</h6></div>
                            </div>
                            <div class='row'>
                                <div class='col-3'><h6>Contact:</h6></div>
                                <div class='col-9'><h6>$customer_contact</h6></div>
                            </div>
                            <div class='row'>
                                <div class='col-3'><h6>Country:</h6></div>
                                <div class='col-9'><h6>$customer_country</h6></div>
                            </div>
                            

                        </div>
                    </div>
                </div>
                <div class='col-12 m-5'>
                    <div class='container'>
                        <div class='d-flex text-start'>
                            <div class='nav flex-column nav-pills me-3' id='v-pills-tab' role='tablist' aria-orientation='vertical'>
                                <button class='nav-link text-light' id='v-pills-messages-tab' data-bs-toggle='pill' data-bs-target='#v-pills-messages' type='button' role='tab' aria-controls='v-pills-messages' aria-selected='false'><i class='fa-solid fa-pen-to-square'></i> Edit Account</button>
                                <button class='nav-link text-light' id='v-pills-edit-tab' data-bs-toggle='pill' data-bs-target='#v-pills-edit' type='button' role='tab' aria-controls='v-pills-edit' aria-selected='false'><i class='fa-solid fa-user'></i> Edit Password</button>
                                <button class='nav-link text-light' id='v-pills-delete-tab' data-bs-toggle='pill' data-bs-target='#v-pills-delete' type='button' role='tab' aria-controls='v-pills-delete' aria-selected='false'><i class='fa-solid fa-trash'></i> Delete Account</button>
                            </div>
                            <div class='tab-content mt-2' id='v-pills-tabContent'>
                                <div class='tab-pane fade' id='v-pills-messages' role='tabpanel' aria-labelledby='v-pills-messages-tab' tabindex='0'>edit</div>
                                <div class='tab-pane fade' id='v-pills-edit' role='tabpanel' aria-labelledby='v-pills-edit-tab' tabindex='0'>Delete</div>
                                <div class='tab-pane fade' id='v-pills-delete' role='tabpanel' aria-labelledby='v-pills-delete-tab' tabindex='0'>delete account</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        ";
    }
    else{
        echo "<script>window.open('login.php','_self')</script>";
    } 

include('includes/footer.php');
?>















