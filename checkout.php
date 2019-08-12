<?php
include("includes/header.php");
?>
<?php
if (!isset($_SESSION['customer_email'])) {

    echo "<script>window.open('register.php','_self')</script>";
} else {

$ip_add = getRealIpUser();

$select_cart = "select * from cart where ip_add='$ip_add'";

$run_cart = mysqli_query($con, $select_cart);

$count = mysqli_num_rows($run_cart);
}

?>
<?php

$total = 0;

while ($row_cart = mysqli_fetch_array($run_cart)) {

    $pro_id = $row_cart['P_id'];

    $pro_size = $row_cart['size'];

    $pro_qty = $row_cart['qty'];

    $get_products = "select * from products where product_id='$pro_id'";

    $run_products = mysqli_query($con, $get_products);

    while ($row_products = mysqli_fetch_array($run_products)) {

        $product_title = $row_products['product_title'];

        $product_img1 = $row_products['product_img1'];

        $only_price = $row_products['product_price'];

        $sub_total = $row_products['product_price'] * $pro_qty;

        $total += $sub_total;

        ?>
        
    <?php }
} ?>
<div id="content">
    <!-- Content begins -->
    <div class="container">
        <!-- container begins -->
        <div class="col-lg-12">
            <!-- col 12 begins -->
            <nav aria-label="breadcrumb">
                <!-- Breadcrumb -->
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="br" href="index.php">Home</a></li>
                    <li aria-current="page" class="breadcrumb-item active">Checkout / Address</li>
                </ol>
            </nav>

        </div> <!-- col 12 ends breadcrumb -->
        <div class="row">
            <div id="checkout" class="col-lg-9">
                <div class="box">
                    <form method="get" action="checkout1.php">
                        <h1>Checkout - Address</h1>
                               
                        <div class="nav flex-column flex-md-row nav-pills text-center"><a href="checkout1.html" class="nav-link flex-sm-fill text-sm-center active"> <i class="fa fa-map-marker"> </i>Address</a><a href="#" class="nav-link flex-sm-fill text-sm-center disabled"> <i class="fa fa-truck"> </i>Delivery Method</a><a href="#" class="nav-link flex-sm-fill text-sm-center disabled"> <i class="fa fa-money"> </i>Payment Method</a><a href="#" class="nav-link flex-sm-fill text-sm-center disabled"> <i class="fa fa-eye"> </i>Order Review</a></div>
                        <div class="content py-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="firstname">Name</label>
                                        <input id="firstname" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="lastname">Surname</label>
                                        <input id="lastname" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <!-- /.row-->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="company">Address</label>
                                        <input id="company" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <!-- /.row-->
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone">Contact</label>
                                        <input id="phone" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input id="email" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <!-- /.row-->
                        </div>
                        <div class="box-footer d-flex justify-content-between"><a href="cart.php" class="btn btn-outline-secondary"><i class="fa fa-chevron-left"></i>Back to Basket</a>
                            <button type="submit" class="btn btn-primary">Continue to Delivery Method<i class="fa fa-chevron-right"></i></button>
                        </div>
                    </form>
                    
                </div>
                <!-- /.box-->
            </div>
            <!-- /.col-lg-9-->
            <div class="col-lg-3">
                <div id="order-summary" class="card">
                    <div class="card-header">
                        <h3>Your Order</h3>
                        <p class="text-muted">Shipping and additional costs are calculated based on the values you have entered.</p>
                    </div>

                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Order subtotal</td>
                                    <th>R<?php echo $total; ?></th>
                                </tr>
                                <tr>
                                    <td>Shipping and handling</td>
                                    <th>R0</th>
                                </tr>

                                <tr class="total">
                                    <td>Total</td>
                                    <th>R<?php echo $total; ?></th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
              

            </div>

        </div>
    </div> <!-- container ends -->

</div> <!-- content ends -->
<?php
include("includes/footer.php");
?>
</body>

</html>
<?php

if (isset($_POST['login'])) {

    $customer_email = $_POST['c_email'];

    $customer_pass = $_POST['c_pass'];

    $select_customer = "select * from customers where customer_email='$customer_email' AND customer_pass='$customer_pass'";

    $run_customer = mysqli_query($con, $select_customer);

    $get_ip = getRealIpUser();

    $check_customer = mysqli_num_rows($run_customer);

    $select_cart = "select * from cart where ip_add='$get_ip'";

    $run_cart = mysqli_query($con, $select_cart);

    $check_cart = mysqli_num_rows($run_cart);

    if ($check_customer == 0) {

        echo "<script>alert('Your email or password is wrong')</script>";

        exit();
    }

    if ($check_customer == 1 and $check_cart == 0) {

        $_SESSION['customer_email'] = $customer_email;

        echo "<script>alert('You are Logged in')</script>";

        echo "<script>window.open('customer/my_account.php?my_orders','_self')</script>";
    } else {

        $_SESSION['customer_email'] = $customer_email;

        echo "<script>alert('You are Logged in')</script>";

        echo "<script>window.open('checkout.php','_self')</script>";
    }
}

?>