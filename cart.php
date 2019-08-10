<?php
include("includes/db.php");
include("Functions/functions.php");
?>
<?php

if (isset($_GET['pro_id'])) {

    $product_id = $_GET['pro_id'];

    $get_product = "select * from products where product_id='$product_id'";

    $run_product = mysqli_query($con, $get_product);

    $row_product = mysqli_fetch_array($run_product);

    $p_cat_id = $row_product['p_cat_id'];

    $pro_title = $row_product['product_title'];

    $pro_price = $row_product['product_price'];

    $pro_desc = $row_product['product_desc'];

    $pro_img1 = $row_product['product_img1'];

    $pro_img2 = $row_product['product_img2'];

    $pro_img3 = $row_product['product_img3'];

    $get_p_cat = "select * from product_categories where p_cat_id='$p_cat_id'";

    $run_p_cat = mysqli_query($con, $get_p_cat);

    $row_p_cat = mysqli_fetch_array($run_p_cat);

    $p_cat_title = $row_p_cat['p_cat_title'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perfect Decoration</title>
    <!-- Bootsrap CSS Library-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- JQuery Library-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- Font Awesome CSS Library-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="Styles/custom.css">

    <style>
        #content #cart .table tbody tr td img {
            width: 50px;
        }

        #content #cart .table tbody tr td input {
            width: 40px;
            text-align: right;
        }

        #content #cart .table tbody tr td {
            vertical-align: middle;
        }

        #content #cart .table tfoot {
            font-size: 18px;
        }

        #content #order-summary table {
            margin-top: 20px;
        }

        #content #order-summary table td {
            color: #999999;
        }

        #content #order-summary table tr.total td,
        #content #order-summary table tr.total th {
            font-size: 18px;
            color: #555555;
            font-weight: 700;
        }
    </style>
</head>

<body>
    <header class="header mb-5">
        <!--
      *** TOPBAR ***
      _________________________________________________________
      -->
        <div id="top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offer mb-3 mb-lg-0"><a href="#" class="btn btn-success btn-sm">Welcome</a><a href="#" class="ml-1"> <?php items(); ?> Items In Your Cart | Total Price: <?php total_price(); ?></a></div>
                    <div class="col-lg-6 text-center text-lg-right">
                        <ul class="menu list-inline mb-0">
                            <li class="list-inline-item"><a href="#" data-toggle="modal" data-target="#login-modal">Login</a></li>
                            <li class="list-inline-item"><a href="register.php">Register</a></li>
                            <li class="list-inline-item"><a></a>
                                <?php

                                if (!isset($_SESSION['customer_email'])) {

                                    echo "<a href='register.php'>Account</a>";
                                } else {

                                    echo "<a href='customer/my_account.php?my_orders'>My Account</a>";
                                }

                                ?>
                            </li>
                            <li class="list-inline-item"><a href="about_us.php">Abous US</a></li>

                        </ul>
                    </div>
                </div>
            </div>
            <div id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true" class="modal fade">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Customer login</h5>
                            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-body">
                            <form action="cart.php" method="post">
                                <div class="form-group">
                                    <input name="c_email" id="email-modal" type="text" placeholder="email" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input name="c_pass" id="password-modal" type="password" placeholder="password" class="form-control">
                                </div>
                                <p class="text-center">
                                    <button name="login" class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
                                </p>
                            </form>
                            <p class="text-center text-muted">Not registered yet?</p>
                            <p class="text-center text-muted"><a href="register.html"><strong>Register now</strong></a>! It is easy and done in 1 minute and gives you access to special discounts and much more!</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- *** TOP BAR END ***-->


        </div> <!-- top bar ends -->
        <nav class="navbar navbar-expand-lg ">
            <div class="container">
                <a class="navbar-brand home" href="index.php">
                    <img src="Images/Logo.jpg">
                </a>
                <div class="navbar-buttons">
                    <button type="button" data-toggle="collapse" data-target="#navigation" class="btn btn-outline-secondary navbar-toggler"><span class="sr-only">Toggle navigation</span><i class="fa fa-align-justify"></i></button>
                    <button type="button" data-toggle="collapse" data-target="#search" class="btn btn-outline-secondary navbar-toggler"><span class="sr-only">Toggle search</span><i class="fa fa-search"></i></button><a href="basket.html" class="btn btn-outline-secondary navbar-toggler"><i class="fa fa-shopping-cart"></i></a>
                </div>
                <div id="navigation" class="collapse navbar-collapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item"><a href="index.php" class="nav-link active">Home</a></li>
                        <li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" data-hover="dropdown" data-delay="200" class="dropdown-toggle nav-link">Weddings<b class="caret"></b></a>
                            <ul class="dropdown-menu megamenu">
                                <li>
                                    <div class="row">
                                        <div class="col-md-6 col-lg-3">
                                            <h5>Men</h5>
                                            <ul class="list-unstyled mb-3">
                                                <li class="nav-item"><a href="shop.php" class="nav-link">Decor</a></li>

                                            </ul>
                                        </div>
                                        <div class="col-md-6 col-lg-3">
                                            <h5>Woman</h5>
                                            <ul class="list-unstyled mb-3">
                                                <li class="nav-item"><a href="shop.php" class="nav-link">Decor</a></li>

                                            </ul>
                                        </div>
                                        <div class="col-md-6 col-lg-3">
                                            <h5>Accessories</h5>
                                            <ul class="list-unstyled mb-3">
                                                <li class="nav-item"><a href="shop.php" class="nav-link">Decor</a></li>

                                            </ul>
                                        </div>

                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" data-hover="dropdown" data-delay="200" class="dropdown-toggle nav-link">Birthday<b class="caret"></b></a>
                            <ul class="dropdown-menu megamenu">
                                <li>
                                    <div class="row">
                                        <div class="col-md-6 col-lg-3">
                                            <h5>Men</h5>
                                            <ul class="list-unstyled mb-3">
                                                <li class="nav-item"><a href="shop.php" class="nav-link">Decor</a></li>

                                            </ul>
                                        </div>
                                        <div class="col-md-6 col-lg-3">
                                            <h5>Women</h5>
                                            <ul class="list-unstyled mb-3">
                                                <li class="nav-item"><a href="shop.php" class="nav-link">Decor</a></li>

                                            </ul>
                                        </div>
                                        <div class="col-md-6 col-lg-3">
                                            <h5>Kids</h5>
                                            <ul class="list-unstyled mb-3">
                                                <li class="nav-item"><a href="shop.php" class="nav-link">Decor</a></li>

                                            </ul>

                                        </div>
                                        <div class="col-md-6 col-lg-3">
                                            <div class="banner"><a href="#"><img src="img/banner.jpg" alt="" class="img img-fluid"></a></div>
                                            <div class="banner"><a href="#"><img src="img/banner2.jpg" alt="" class="img img-fluid"></a></div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" data-hover="dropdown" data-delay="200" class="dropdown-toggle nav-link">Party supplies<b class="caret"></b></a>
                            <ul class="dropdown-menu megamenu">
                                <li>
                                    <div class="row">
                                        <div class="col-md-6 col-lg-3">
                                            <h5>Party Decor</h5>
                                            <ul class="list-unstyled mb-3">
                                                <li class="nav-item"><a href="shop.php" class="nav-link">Decor</a></li>

                                            </ul>
                                        </div>
                                        <div class="col-md-6 col-lg-3">
                                            <h5>Tableware</h5>
                                            <ul class="list-unstyled mb-3">
                                                <li class="nav-item"><a href="shop.php" class="nav-link">Decor</a></li>

                                            </ul>
                                        </div>
                                        <div class="col-md-6 col-lg-3">
                                            <h5>Glasware</h5>
                                            <ul class="list-unstyled mb-3">
                                                <li class="nav-item"><a href="shop.php" class="nav-link">Decor</a></li>

                                            </ul>
                                        </div>
                                        <div class="col-md-6 col-lg-3">
                                            <h5>Balloons</h5>
                                            <ul class="list-unstyled mb-3">
                                                <li class="nav-item"><a href="blog.html" class="nav-link">Decor</a></li>

                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <div class="navbar-buttons d-flex justify-content-end">
                        <!-- /.nav-collapse-->
                        <div id="search-not-mobile" class="navbar-collapse collapse"></div><a data-toggle="collapse" href="#search" class="btn navbar-btn btn-primary d-none d-lg-inline-block"><span class="sr-only">Toggle search</span><i class="fa fa-search"></i></a>
                        <div id="basket-overview" class="navbar-collapse collapse d-none d-lg-block"><a href="basket.html" class="btn btn-primary navbar-btn"><i class="fa fa-shopping-cart"></i><span><?php items(); ?> items in your cart</span></a></div>
                    </div>
                </div>
            </div>
        </nav> <!-- navbar ends -->
        <div id="search" class="collapse">
            <div class="container">
                <form role="search" class="ml-auto">
                    <div class="input-group">
                        <input type="text" placeholder="Search" class="form-control">
                        <div class="input-group-append">
                            <button type="button" class="btn btn-primary"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div> <!-- search ends -->
    </header> <!-- Header ends -->
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
                        <li aria-current="page" class="breadcrumb-item active">Cart</li>
                    </ol>
                </nav>

            </div> <!-- col 12 ends breadcrumb -->
            <div class="row">
                <!-- row begins -->
                <div id="cart" class="col-lg-9">
                    <!-- col 9 begins -->
                    <div class="box">
                        <form method="post" action="cart.php" enctype="multipart/form-data">
                            <h1>Shopping cart</h1>
                            <?php

                            $ip_add = getRealIpUser();

                            $select_cart = "select * from cart where ip_add='$ip_add'";

                            $run_cart = mysqli_query($con, $select_cart);

                            $count = mysqli_num_rows($run_cart);

                            ?>
                            <p class="text-muted">You currently have <?php echo $count; ?> item(s) in your cart.</p>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th colspan="2">Product</th>
                                            <th>Quantity</th>
                                            <th>Unit price</th>
                                            <th>Size</th>
                                            <th colspan="1">Delete</th>
                                            <th colspan="2">Sub Total</th>
                                        </tr>
                                    </thead>


                                    <tbody>
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
                                                <tr>
                                                    <td>
                                                        <a href="#"><img class="img-fluid" src="Admin_Area/product_images/<?php echo $product_img1; ?>" alt="product1"></a>
                                                    </td>
                                                    <td>
                                                        <a href="details.php?pro_id=<?php echo $pro_id; ?>"> <?php echo $product_title; ?> </a>
                                                    </td>
                                                    <td>
                                                        <?php echo $pro_qty; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $only_price; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $pro_size; ?>
                                                    </td>
                                                    <td>
                                                        <input type="checkbox" name="remove[]" value="<?php echo $pro_id; ?>">
                                                    </td>
                                                    <td>
                                                        $<?php echo $sub_total; ?>
                                                    </td>
                                                </tr>

                                            <?php }
                                        } ?>

                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th colspan="5">Total</th>
                                            <th colspan="2">R<?php echo $total; ?></th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.table-responsive-->
                            <div class="box-footer d-flex justify-content-between flex-column flex-lg-row">
                                <div class="left"><a href="index.php" class="btn btn-outline-secondary"><i class="fa fa-chevron-left"></i> Continue shopping</a></div>
                                <div class="right">
                                    <button type="submit" name="update" value="Update cart" class="btn btn-outline-secondary"><i class="fa fa-refresh"></i> Update cart</button>
                                    <a href="checkout.php" class="btn btn-primary">

                                        Proceed To checkout <i class="fa fa-chevron-right"></i>

                                    </a>
                                </div>
                            </div>
                        </form>

                    </div> <!-- box ends -->
                    <?php

                    function update_cart()
                    {

                        global $con;

                        if (isset($_POST['update'])) {

                            foreach ($_POST['remove'] as $remove_id) {

                                $delete_product = "delete from cart where p_id='$remove_id'";

                                $run_delete = mysqli_query($con, $delete_product);

                                if ($run_delete) {

                                    echo "<script>window.open('cart.php','_self')</script>";
                                }
                            }
                        }
                    }

                    echo @$up_cart = update_cart();

                    ?>

                    <div class="container">
                        <div class="row same-height-row">
                            <div class="col-md-12">
                                <div class="box same-height">
                                    <h3 class="text-center">Related products </h3>
                                </div>
                            </div>

                            <?php

                            $get_products = "select * from products order by rand() LIMIT 0,4";

                            $run_products = mysqli_query($con, $get_products);

                            while ($row_products = mysqli_fetch_array($run_products)) {

                                $pro_id = $row_products['product_id'];

                                $pro_title = $row_products['product_title'];

                                $pro_img1 = $row_products['product_img1'];

                                $pro_price = $row_products['product_price'];

                                echo "
                      
                       <div class='col-md-3 col-sm-6'>
                       
                           <div class='product same-height'>
                           
                               <a href='details.php?pro_id=$pro_id'>
                               
                                   <img class='img-fluid' src='Admin_Area/product_images/$pro_img1'>
                               
                               </a>
                               
                               <div class='text'>
                               
                                   <h3> <a href='details.php?pro_id=$pro_id'> $pro_title </a> </h3>
                                   
                                   <p class='price'> $ $pro_price </p>
                               
                               </div>
                           
                           </div>
                       
                       </div>
                      
                            ";
                            }
                            ?>

                        </div>
                    </div>

                </div> <!-- col 9 ends -->
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
                    <div class="box">
                        <div class="box-header">
                            <h4 class="mb-0">Coupon code</h4>
                        </div>
                        <p class="text-muted">If you have a coupon code, please enter it in the box below.</p>
                        <form>
                            <div class="input-group">
                                <input type="text" class="form-control"><span class="input-group-append">
                                    <button type="button" class="btn btn-primary"><i class="fa fa-gift"></i></button></span>
                            </div>
                            <!-- /input-group-->
                        </form>
                    </div>

                </div>



            </div> <!-- row ends -->
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