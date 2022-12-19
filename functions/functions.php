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


function getCat(){
    global $db;
    
    $get_cats = "select * from category";
    $run_cats = mysqli_query($db,$get_cats);

    while($row_cats=mysqli_fetch_array($run_cats)){
        $cat_id = $row_cats['cat_id'];
        $cat_title = $row_cats['cat_title'];

        echo "
        <li class='nav-item'>
            <a class='nav-link active ms-2 me-2 mb-2 ps-3' aria-current='page' href='players.php?cat=$cat_id'>$cat_title</a>
        </li>
        ";

    }
}


function getPCat(){
    global $db;
    
    $get_cats = "select * from category";
    $run_cats = mysqli_query($db,$get_cats);

    while($row_cats=mysqli_fetch_array($run_cats)){
        $cat_id = $row_cats['cat_id'];
        $cat_title = $row_cats['cat_title'];

        echo "
        <li class='nav-item'>
            <a class='nav-link active ms-2 me-2 mb-2 ps-3' aria-current='page' href='players.php?p_cat=$cat_id'>$cat_title</a>
        </li>
        ";

    }
}


function button(){
    global $db;
    
    $per_page=15;

    $query = "select * from player";
    $result = mysqli_query($db,$query);
    $total_records = mysqli_num_rows($result);
    $total_pages = ceil($total_records / $per_page);

    echo"<a class='btn btn-secondary' href='players.php?page=1'>".'First Page'."</a>";
    for($i=1; $i<=$total_pages; $i++){
        echo "
            <a class='btn btn-secondary' href='players.php?page=".$i."'>".$i."</a>
        ";
        }
    echo"<a class='btn btn-secondary' href='players.php?page=$total_pages'>".'Last Page'."</a>";
}


function playerCategory(){
    global $db;
    if(isset($_GET['cat'])){
        $cat_id = $_GET['cat'];
        $get_cat = "select * from category where cat_id='$cat_id'";
        $run_cat = mysqli_query($db,$get_cat);
        $row_cat = mysqli_fetch_array($run_cat);
        $cat_title = $row_cat['cat_title'];
        
        
        $get_cats = "select * from player where cat_id='$cat_id'";
        $run_player = mysqli_query($db,$get_cats);
        $count = mysqli_num_rows($run_player);
        if($count==0){
            echo "
            <div class='sDetails'>
                <h3 class='text-center'>$cat_title</h3>
                <p class='text-center'>No Player Found In This category. </p>
            </div>
            ";
        }
        else{
            echo "
                <div class='sDetails'>
                    <h3 class='text-center'>$cat_title</h3>
                </div>
            ";
        }
        while($row_player=mysqli_fetch_array($run_player)){
            $p_id = $row_player['player_id'];
            $p_name = $row_player['player_name'];
            $p_age = $row_player['player_age'];
            $p_con = $row_player['con_id'];
            $p_rating = $row_player['player_rating'];
            $p_img = $row_player['player_img'];


            $get_con = "select * from country where con_id='$p_con'";
            $run_con = mysqli_query($db,$get_con);
            $row_con = mysqli_fetch_array($run_con);
            $con_title = $row_con['con_name'];


            
            echo "
            <div class='col'>
                <div class='card h-100'>
                    <a href='details.php?p_id=$p_id'><img src='admin_area/player_img/$p_img' class='card-img-top p-3'></a>
                    <div class='card-body'>
                        <h5 class='card-title text-center fw-bolder'>$p_name</h5>
                        <h6 class='card-title text-center fw-bolder'>Position: $cat_title</h6>
                        <h6 class='card-title text-center fw-bolder'>Age: $p_age</h6>
                        <h6 class='card-title text-center fw-bolder'>Country: $con_title</h6>
                        <h6 class='card-title text-center fw-bolder'>Rating: $p_rating/10</h6>
                    </div>
                </div>
            </div>
            ";
        }
    }   
}


?>