
<div class="col-lg-12">
    <!-- breadcrumb start -->
    <h2 class="text-center p-2">Dashboard</h2>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page"><i class="fa-solid fa-gauge"></i> Dashboard</li>
        </ol>
    </nav>
    <!-- breadcrumb start -->


    <!-- view details start -->
    <div class="row row-cols-1 row-cols-md-4 g-4 fw-bolder text-light">
        <div class="col ">
          <div class="card border-primary h-100" style="background-color: rgb(80, 115, 212);">
            <div class="row" >
                <div class="col-2 p-3" style="font-size: 5rem;"><i class="fa-solid fa-list ps-5"></i></div>
                <div class="col-10 text-end p-3">
                    <p class="pe-5" style="font-size: 3rem;"><?php echo $count_products; ?></p>
                    <p class="pe-5">Products</p>
                </div>
            </div>
            <div class="card-footer d-flex justify-content-between bg-light text-primary">
                <h5>View Details</i></h5>
                <h5><i class="fa-sharp fa-solid fa-circle-right"></i></h5>
            </div>
          </div>
        </div>
        <div class="col ">
          <div class="card border-success h-100" style="background-color: rgb(51, 177, 82);">
            <div class="row" >
                <div class="col-2 p-3" style="font-size: 5rem;"><i class="fa-solid fa-users ps-5"> </i></div>
                <div class="col-10 text-end p-3">
                    <p class="pe-5" style="font-size: 3rem;"><?php echo $count_customers; ?></p>
                    <p class="pe-5">Customers</p>
                </div>
            </div>
            <div class="card-footer d-flex justify-content-between bg-light text-success">
                <h5>View Details</i></h5>
                <h5><i class="fa-sharp fa-solid fa-circle-right"></i></h5>
            </div>
          </div>
        </div>
        <div class="col ">
          <div class="card border-warning h-100" style="background-color: rgb(247, 183, 47);">
            <div class="row" >
                <div class="col-2 p-3" style="font-size: 5rem;"><i class="fa-solid fa-tag ps-5"></i></div>
                <div class="col-10 text-end p-3">
                    <p class="pe-5" style="font-size: 3rem;"><?php echo $count_product_category; ?></p>
                    <p class="pe-5">Product Categories</p>
                </div>
            </div>
            <div class="card-footer d-flex justify-content-between bg-light text-warning">
                <h5>View Details</i></h5>
                <h5><i class="fa-sharp fa-solid fa-circle-right"></i></h5>
            </div>
          </div>
        </div>
        <div class="col ">
          <div class="card border-danger h-100" style="background-color: rgb(235, 103, 63);">
            <div class="row" >
                <div class="col-2 p-3" style="font-size: 5rem;"><i class="fa-solid fa-cart-shopping ps-5"></i></div>
                <div class="col-10 text-end p-3">
                    <p class="pe-5" style="font-size: 3rem;"><?php echo $count_orders; ?></p>
                    <p class="pe-5">Orders</p>
                </div>
            </div>
            <div class="card-footer d-flex justify-content-between bg-light text-danger">
                <h5>View Details</i></h5>
                <h5><i class="fa-sharp fa-solid fa-circle-right"></i></h5>
            </div>
          </div>
        </div>
        
      </div>
      <!-- view details end -->


      <!-- new order list start -->
        <div class="card border-primary mt-5 col-md-10">
            <h5 class="card-header text-center text-light"  style="background-color: rgb(82, 127, 250);"><i class="fa-solid fa-list pe-3"></i>New Orders</h5>
            <div class="card-body">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col"># Order no:</th>
                            <th scope="col">Customer Email</th>
                            <th scope="col">Invoice NO:</th>
                            <th scope="col">Product ID:</th>
                            <th scope="col">Product Quantity:</th>
                            <th scope="col">Product Size:</th>
                            <th scope="col">Order status:</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $i = 0;
                        
                            $get_order = "select * from pending_orders order by 1 DESC LIMIT 0,5";
                            $run_order = mysqli_query($con,$get_order);

                            while($row_orders = mysqli_fetch_array($run_orders)){
                                $order_id = $row_orders['order_id'];
                                $customer_id = $row_orders['customer_id'];
                                $invoice_no = $row_orders['invoice_no'];
                                $product_id = $row_orders['product_id'];
                                $qty = $row_orders['qty'];
                                $size = $row_orders['size'];
                                $order_status = $row_orders['order_status'];
                                $i++;

                        ?>
                        <tr>

                            <th scope="row" class="ps-5"><?php echo $order_id; ?></th>
                            <td>
                                <?php 
                                    $get_customer = "select * from customers where customer_id='$customer_id'";
                                    $run_customer = mysqli_query($con,$get_customer);
                                    $row_customer = mysqli_fetch_array($run_customer);
                                    $customer_email = $row_customer['customer_email'];
                                    echo $customer_email;
                                ?>
                            </td>
                            <td><?php echo $invoice_no; ?></td>
                            <td><?php echo $product_id; ?></td>
                            <td><?php echo $qty; ?></td>
                            <td><?php echo $size; ?></td>
                            <td><?php echo $order_status; ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

      <!-- new order list end -->


</div>