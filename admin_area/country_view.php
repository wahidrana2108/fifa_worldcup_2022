<?php
    if(!isset($_SESSION['admin_email'])){
        echo "<script>window.open('login.php','_self')</script>";
    }
    else{
?>

  <!-- breadcrumb  start -->
    <div class="col-md-12 mt-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item" aria-current="page"><h6><i class="fa-solid fa-gauge ps-2 pt-2"></i> Dashboard</h6></li>
                <li class="breadcrumb-item active" aria-current="page"><i class="fa-solid fa-pen pt-2"></i> View Country</li>
            </ol>
        </nav>
    </div>
    <!-- breadcrumb  end -->
  <!-- view country start -->
  <div class="card border-primary mt-5 col-md-10">
    <h5 class="card-header text-center text-light"  style="background-color: rgb(82, 127, 250);"><i class="fa-solid fa-globe pe-3"></i></i>Country</h5>
    <div class="card-body">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Cup Own</th>
                    <th scope="col">Points</th>
                    <th scope="col">Date</th>
                    <th scope="col">Photo</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $i = 0;
                
                    $get_country = "select * from country";
                    $run_country  = mysqli_query($con,$get_country);

                    while($row_country = mysqli_fetch_array($run_country)){
                        $country_id = $row_country['con_id'];
                        $country_title = $row_country['con_name'];
                        $country_cup = $row_country['con_cup'];
                        $country_point = $row_country['con_point'];
                        $country_img = $row_country['con_img'];
                        $date = $row_country['date'];
                        $i++;
                ?>
                <tr>
                    <td><?php echo $country_id; ?></td>
                    <td><?php echo $country_title; ?></td>
                    <td><?php echo $country_cup; ?></td>
                    <td><?php echo $country_point; ?></td>
                    <td><?php echo $date; ?></td>
                    <td><img src="country_img/<?php echo $country_img; ?>" alt="N/A" height="50px" width="50px"></td>
                    <td><a href="index.php?country_edit=<?php echo $country_id; ?>" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i> Edit</a></td>
                    <td><a href="index.php?country_delete=<?php echo $country_id; ?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Delete</a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<!-- view country end -->
<?php } ?>