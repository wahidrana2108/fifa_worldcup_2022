<?php
    include("db.php");

    if (isset($_POST['input'])) {
        $input = $_POST['input'];

        $get_result = "select * from player where player_name like '%$input%'";
        $run_result = mysqli_query($con, $get_result);       

        if(mysqli_num_rows($run_result)>0){
            echo"
                    
            <table class='table table-striped-columns'>
                <tbody>
            ";
            while($row_result = mysqli_fetch_array($run_result)){
                $name = $row_result['player_name'];
                echo"
                     <tr>
                        <td class='text-light'>$name</td>
                    </tr>
                ";
            }
            echo"
                </tbody>
            </table>
            ";
        }
        else{
            echo "
            <div class='text-light'>No player information found!</div>
            ";
        }
    }
?>