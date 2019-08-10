<?php
session_start();
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <script src="js/jquery-simple-validator.min.js"></script>
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
        input:not([type="file"]).error,
        textarea.error,
        select.error {
            border: 1px solid red !important;
        }

        input:not([type="file"]).no-error,
        textarea.no-error,
        select.no-error {
            border: 1px solid green !important;
        }

        div.error-field {
            color: red;
            font-size: small;
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
                    <div class="col-lg-6 offer mb-3 mb-lg-0"><a href="#" class="btn btn-success btn-sm">
                            <?php

                            if (!isset($_SESSION['customer_email'])) {

                                echo "Welcome: Guest";
                            } else {

                                echo "Welcome: " . $_SESSION['customer_email'] . "";
                            }

                            ?>
                        </a><a href="checkout" class="ml-1"><?php items(); ?> Items In Your Cart | Total Price: <?php total_price(); ?></a></div>
                    <div class="col-lg-6 text-center text-lg-right">
                        <ul class="menu list-inline mb-0">
                            <li class="list-inline-item"><a href="#" data-toggle="modal" data-target="#login-modal">Login</a></li>
                            <li class="list-inline-item"><a href="register.html">Register</a></li>
                            <li class="list-inline-item"><a href="contact.html">Contact</a></li>
                            <li class="list-inline-item"><a href="contact.html">Abous US</a></li>

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
                            <form action="contact.php" method="post">
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
                        <li class="nav-item"><a href="#" class="nav-link active">Home</a></li>
                        <li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" data-hover="dropdown" data-delay="200" class="dropdown-toggle nav-link">Weddings<b class="caret"></b></a>
                            <ul class="dropdown-menu megamenu">
                                <li>
                                    <div class="row">
                                        <div class="col-md-6 col-lg-3">
                                            <h5>Men</h5>
                                            <ul class="list-unstyled mb-3">
                                                <li class="nav-item"><a href="category.html" class="nav-link">Decor</a></li>

                                            </ul>
                                        </div>
                                        <div class="col-md-6 col-lg-3">
                                            <h5>Woman</h5>
                                            <ul class="list-unstyled mb-3">
                                                <li class="nav-item"><a href="category.html" class="nav-link">Decor</a></li>

                                            </ul>
                                        </div>
                                        <div class="col-md-6 col-lg-3">
                                            <h5>Accessories</h5>
                                            <ul class="list-unstyled mb-3">
                                                <li class="nav-item"><a href="category.html" class="nav-link">Decor</a></li>

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
                                                <li class="nav-item"><a href="category.html" class="nav-link">Decor</a></li>

                                            </ul>
                                        </div>
                                        <div class="col-md-6 col-lg-3">
                                            <h5>Women</h5>
                                            <ul class="list-unstyled mb-3">
                                                <li class="nav-item"><a href="category.html" class="nav-link">Decor</a></li>

                                            </ul>
                                        </div>
                                        <div class="col-md-6 col-lg-3">
                                            <h5>Kids</h5>
                                            <ul class="list-unstyled mb-3">
                                                <li class="nav-item"><a href="category.html" class="nav-link">Decor</a></li>

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
                                                <li class="nav-item"><a href="index.html" class="nav-link">Decor</a></li>

                                            </ul>
                                        </div>
                                        <div class="col-md-6 col-lg-3">
                                            <h5>Tableware</h5>
                                            <ul class="list-unstyled mb-3">
                                                <li class="nav-item"><a href="register.html" class="nav-link">Decor</a></li>

                                            </ul>
                                        </div>
                                        <div class="col-md-6 col-lg-3">
                                            <h5>Glasware</h5>
                                            <ul class="list-unstyled mb-3">
                                                <li class="nav-item"><a href="basket.html" class="nav-link">Decor</a></li>

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
        <div class="container-fluid">
            <div class="col-lg-12">
                <nav aria-label="breadcrumb">
                    <!-- Breadcrumb -->
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a class="br" href="index.php">Home</a></li>
                        <li aria-current="page" class="breadcrumb-item active">Contact</li>
                    </ol>
                </nav>
            </div>

            <div id="contact" class="box">
                <h1>Contact</h1>
                <p class="lead">How can we help you? Are you curious about something or you have a problem with our products?</p>
                <p>Please feel free to contact us, anytime you have an enquiry.</p>
                <hr>
                <div class="row">
                    <div class="col-md-4">
                        <h3><i class="fa fa-map-marker"></i>Address</h3>
                        <p>23 station road<br>12 Elvis Court<br>kenilworth<br>Cape Town<br><strong>South Africa</strong></p>
                    </div>
                    <!-- /.col-sm-4-->
                    <div class="col-md-4">
                        <h3><i class="fa fa-phone"></i> Call center</h3>
                        <p class="text-muted">Standard rates apply for the calls</p>
                        <p><strong>+27 61 0711289</strong></p>
                    </div>
                    <!-- /.col-sm-4-->
                    <div class="col-md-4">
                        <h3><i class="fa fa-envelope"></i> Electronic support</h3>
                        <p class="text-muted">Please feel free to write an email to us.</p>
                        <p><strong><a href="mailto:">perfectdecoration@gmail.com</a></strong></p>
                    </div>
                    <!-- /.col-sm-4-->
                </div>
                <!-- /.row-->
                <hr>
                <div>
                    <h3 class="text-center">Or, get in touch with us</h3>
                    <p class="text-center text-muted">Complete the form below and send us a message</p>
                </div>
                <hr>
                <h2>Contact form</h2>
                <form validate="true" action="contact.php" method="post" id="contact">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="firstName">Name </label>
                                <input id="name" type="text" class="form-control" name="name" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="lastName">Surname </label>
                                <input id="surname" type="text" class="form-control" name="surname" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Email </label>
                                <input id="email" type="text" class="form-control" name="email" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="subject">Subject </label>
                                <input id="subject" type="text" class="form-control" name="subject" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="message">Message </label>
                                <textarea id="message" class="form-control" name="message" required></textarea>
                            </div>
                        </div>
                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send message</button>
                        </div>
                    </div>
                    <!-- /.row-->
                </form>
                <?php

                if (isset($_POST['submit'])) {

                    /// Admin receives message with this ///

                    $sender_name = $_POST['name'];

                    $sender_surname = $_POST['surname'];

                    $sender_email = $_POST['email'];

                    $sender_subject = $_POST['subject'];

                    $sender_message = $_POST['message'];

                    $receiver_email = "maximekanyinda@gmail.com";

                    mail($receiver_email, $sender_name, $sender_subject, $sender_message, $sender_email);

                    /// Auto reply to sender with this ///

                    $email = $_POST['email'];

                    $subject = "Welcome to our website";

                    $msg = "Thanks for sending us message. This is auto generated reply, our customer service will get back to you as soon as possible";

                    $from = "maximekanyinda@gmail.com";

                    mail($email, $subject, $msg, $from);

                    echo "<h2 class='text-center'> Your message has sent sucessfully </h2>";
                }

                ?>
            </div>

            <!-- /.col-md-9-->
        </div>
    </div>
    </div>
    <?php
    include("includes/footer.php");
    ?>




    <script>
        $(document).ready(function() {
            $("#contact").validate();
        });
    </script>
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