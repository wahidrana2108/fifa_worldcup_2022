<?php
    include("db.php");

    if (isset($_POST['input'])) {
        $input = $_POST['input'];

        $get_result = "select * from player where player_name like '%$input%'";
        $run_result = mysqli_query($con, $get_result);       

        if(mysqli_num_rows($run_result)>0){
            echo"
                    
            <div class='card bg-dark'>
                <div class='card-body'>
                    <ul class='nav flex-column'>
            ";
            while($row_result = mysqli_fetch_array($run_result)){
                $name = $row_result['player_name'];
                $get_id = "select * from player where player_name = '$name'";
                $run_id = mysqli_query($con, $get_id);
                while($row_id = mysqli_fetch_array($run_id)){
                    $p_id = $row_id['player_id'];
                    $p_img = $row_id['player_img'];
                    echo"
                    <li class='nav-item'>
                    <a class='link-light underline' href='player_profile.php?p_id=$p_id'>$name</a></li>
                    <br>   
                    ";
                    }
                
            }
            echo"
                    </ul>
                </div>
            </div>
            ";
        }
        else{
            echo "
            <div class='text-light'>No player information found!</div>
            ";
        }
    }
?>




                
