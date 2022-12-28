<?php
    if(!isset($_SESSION['admin_email'])){
        echo "<script>window.open('login.php','_self')</script>";
    }
    else{
?>

<?php 
        if(isset($_GET['country_delete'])){
            $delete_id = $_GET['country_delete'];
            $country_delete = "delete from country where con_id='$delete_id'";
            $run_delete = mysqli_query($con,$country_delete);
            if($run_delete){
                echo "<script>alert('Country Deleted Successfully!')</script>";
                echo "<script>window.open('index.php?country_view','_self')</script>";
            }
        }
?>

<?php } ?>