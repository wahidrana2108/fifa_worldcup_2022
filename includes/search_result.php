<?php
    include("db.php");

    if (isset($_POST['input'])) {
        $input = $_POST['input'];

        $get_result = "select * from player where player_name like '%$input%'";
        $run_result = mysqli_query($con, $get_result);       

        if(mysqli_num_rows($run_result)>0){
            while($row_result = mysqli_fetch_array($run_result)){
                $name = $row_result['player_name'];
                echo"
                <table class='table'>
                    <td>$name</td>
                </table>
                ";
            }
        }
        else{
            echo "No customer information found!";
        }
    }
?>