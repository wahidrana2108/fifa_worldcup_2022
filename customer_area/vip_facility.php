<!-- delete account start -->
<?php
if(isset($_SESSION['customer_email'])){

$customer_session = $_SESSION['customer_email'];
    $get_customer = "select * from customers where customer_email='$customer_session'";
    $run_customer = mysqli_query($con,$get_customer);
    $row_customer = mysqli_fetch_array($run_customer);
    $customer_id = $row_customer['customer_id'];

    echo "
        <div class='col-md-8 text-light m-auto'>
            <div class='card border-dark m-auto'>
                <h5 class='card-header text-center' style='background-color: rgb(48, 48, 48);'><i class='fa-solid fa-snowflake pe-3'></i></i> VIP Privileges</h5>
                <div class='card-body text-start bg-dark'>
                    <h6 class='fw-bolder'>Want to Become a VIP Member?</h6> <br>                                    
                        Please keep in mind that this process is permanent and cannot be reversed. <br>                                    
                        We recommend reviewing your orders before you request to delete your account, so that you can retrieve any files and information you might need in the future. <br>
                        <a href='my_account.php?become_vip' class='btn btn-success mt-3'><i class='fa-solid fa-check'></i> Become a VIP</a> 
                </div>
            </div>
        </div>
    ";
    } 
    ?>
<!-- delete account end -->