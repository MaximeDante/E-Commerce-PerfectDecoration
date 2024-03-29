<?php
session_start();
include("includes/db.php");


if (!isset($_SESSION['admin_email'])) {

    echo "<script>window.open('login.php','_self')</script>";
} else {
    $admin_session = $_SESSION['admin_email'];

    $get_admin = "select * from admins where admin_email='$admin_session'";

    $run_admin = mysqli_query($con, $get_admin);

    $row_admin = mysqli_fetch_array($run_admin);

    $admin_id = $row_admin['admin_id'];

    $admin_name = $row_admin['admin_name'];

    $admin_email = $row_admin['admin_email'];

    $admin_image = $row_admin['admin_image'];

    $admin_about = $row_admin['admin_about'];

    $admin_contact = $row_admin['admin_contact'];

    $admin_job = $row_admin['admin_job'];

    $get_products = "select * from products";

    $run_products = mysqli_query($con, $get_products);

    $count_products = mysqli_num_rows($run_products);

    $get_customers = "select * from customers";

    $run_customers = mysqli_query($con, $get_customers);

    $count_customers = mysqli_num_rows($run_customers);

    $get_p_categories = "select * from product_categories";

    $run_p_categories = mysqli_query($con, $get_p_categories);

    $count_p_categories = mysqli_num_rows($run_p_categories);

    $get_pending_orders = "select * from pending_orders";

    $run_pending_orders = mysqli_query($con, $get_pending_orders);

    $count_pending_orders = mysqli_num_rows($run_pending_orders);

    ?>
    !DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Perfect Decoration Admin Page</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <!-- Font Awesome CSS Library-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <!-- Google fonts - Roboto -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700">
        <!-- Custom stylesheet - for your changes-->
        <link rel="stylesheet" href="Styles/custom.css">
    </head>

    <body>

        <div id="wrapper">
            <!-- #wrapper begin -->

            <?php include("includes/sidebar.php"); ?>

            <div id="page-wrapper">
                <!-- #page-wrapper begin -->
                <div class="container-fluid">
                    <!-- container-fluid begin -->

                    <?php

                    if (isset($_GET['dashboard'])) {

                        include("dashboard.php");
                    }
                    if (isset($_GET['insert_product'])) {

                        include("insert_product.php");
                    }
                    if (isset($_GET['view_products'])) {

                        include("view_products.php");
                    }
                    if (isset($_GET['delete_product'])) {

                        include("delete_product.php");
                    }
                    if (isset($_GET['edit_product'])) {

                        include("edit_product.php");
                    }
                    if (isset($_GET['insert_p_cat'])) {

                        include("insert_p_cat.php");
                    }
                    if (isset($_GET['view_p_cats'])) {

                        include("view_p_cats.php");
                    }
                    if (isset($_GET['delete_p_cat'])) {

                        include("delete_p_cat.php");
                    }
                    if (isset($_GET['edit_p_cat'])) {

                        include("edit_p_cat.php");
                    }
                    if (isset($_GET['insert_cat'])) {

                        include("insert_cat.php");
                    }
                    if (isset($_GET['view_cats'])) {

                        include("view_cats.php");
                    }
                    if (isset($_GET['edit_cat'])) {

                        include("edit_cat.php");
                    }
                    if (isset($_GET['delete_cat'])) {

                        include("delete_cat.php");
                    }
                    if (isset($_GET['insert_slide'])) {

                        include("insert_slide.php");
                    }
                    if (isset($_GET['view_slides'])) {

                        include("view_slides.php");
                    }
                    if (isset($_GET['delete_slide'])) {

                        include("delete_slide.php");
                    }
                    if (isset($_GET['edit_slide'])) {

                        include("edit_slide.php");
                    }
                    if (isset($_GET['view_customers'])) {

                        include("view_customers.php");
                    }
                    if (isset($_GET['delete_customer'])) {

                        include("delete_customer.php");
                    }
                    if (isset($_GET['view_orders'])) {

                        include("view_orders.php");
                    }
                    if (isset($_GET['delete_order'])) {

                        include("delete_order.php");
                    }
                    if (isset($_GET['view_payments'])) {

                        include("view_payments.php");
                    }
                    if (isset($_GET['delete_payment'])) {

                        include("delete_payment.php");
                    }
                    if (isset($_GET['view_users'])) {

                        include("view_users.php");
                    }
                    if (isset($_GET['delete_user'])) {

                        include("delete_user.php");
                    }
                    if (isset($_GET['insert_user'])) {

                        include("insert_user.php");
                    }
                    if (isset($_GET['user_profile'])) {

                        include("user_profile.php");
                    }

                    ?>

                </div><!-- container-fluid finish -->
            </div><!-- #page-wrapper finish -->
        </div><!-- wrapper finish -->
    </body>

    </html>
<?php } ?>