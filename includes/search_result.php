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
                $get_id = "select * from player where player_name = '$name'";
                $run_id = mysqli_query($con, $get_id);
                while($row_id = mysqli_fetch_array($run_id)){
                    $p_id = $row_id['player_id'];
                    echo"
                        <tr>
                            <td class='text-light'><a href='player_profile.php?p_id=$p_id'>$name</a></td>
                        </tr>";
                    }
                
            }
            echo"
                </tbody>
            </table>
            ";
        }
        else{
            echo "
            <div class='text-light'>No player inforamtion found!</div>
            ";
        }
    }
?>