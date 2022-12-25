<?php
    include("includes/header.php");
    include("functions/functions.php");
?>


<?php
    if(isset($_GET['$con_id'])){
        $get_player = "select * from player where player_id='con_id'";
        $run_player = mysqli_query($con,$get_player);
        while($row_player = mysqli_fetch_array($run_player)){
            $player_id = $row_player['player_id'];
            $player_name = $row_player['player_name'];
        }
    }
?>


<?php echo $player_name; ?>

<?php
    include("includes/footer.php");
?>