<?php
    if(!isset($_SESSION['admin_email'])){
        echo "<script>window.open('login.php','_self')</script>";
    }
    else{
?>

<?php 
        if(isset($_GET['player_delete'])){
            $delete_id = $_GET['player_delete'];
            $player_delete = "delete from player where player_id='$delete_id'";
            $run_delete = mysqli_query($con,$player_delete);
            if($run_delete){
                echo "<script>alert('Player Deleted Successfully!')</script>";
                echo "<script>window.open('index.php?player_view','_self')</script>";
            }
        }
?>

<?php } ?>