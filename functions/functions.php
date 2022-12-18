<?php
$db = mysqli_connect("localhost","root","","worldcup_2022");



function getRealIpUser(){
    switch(true){    
            case(!empty($_SERVER['HTTP_X_REAL_IP'])) : return $_SERVER['HTTP_X_REAL_IP'];
            case(!empty($_SERVER['HTTP_CLIENT_IP'])) : return $_SERVER['HTTP_CLIENT_IP'];
            case(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) : return $_SERVER['HTTP_X_FORWARDED_FOR'];
            
            default : return $_SERVER['REMOTE_ADDR'];
    }
}


function dp(){
    global $db;
    $get_users = "select * from customers";
    $run_users = mysqli_query($db,$get_users);
    while($row_users=mysqli_fetch_array($run_users)){
        $customer_image = $row_users['customer_image'];
    }
    echo"$customer_image";
}


?>