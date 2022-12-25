<?php
$get_country = "select * from country";
$run_country = mysqli_query($con,$get_country);
while($row_country = mysqli_fetch_array($run_country)){
    $con_id = $row_country['con_id'];
    $con_title = $row_country['con_name'];
    $con_cup = $row_country['con_cup'];
    $con_point = $row_country['con_point'];
    $con_img = $row_country['con_img'];

    echo "
        <tr>
            <th class='text-light'>#$con_id</th>
            <td><img src='https://world-cup.codsfli.com/flag/QAT.png' height='50px'></td>
            <td class='text-light'>$con_title</td>
            <td class='text-light ps-4'>$con_cup</td>
            <td class='text-light'>$con_point</td>
            <td class='text-light'><a class='btn btn-success' href='team_details.php?con_id=$con_id'>View Details</a></td>
        </tr>
    ";
}
?>
