<?php
include("includes/db.php");
include("Functions/functions.php");
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
                    <div class="col-lg-6 offer mb-3 mb-lg-0"><a href="#" class="btn btn-success btn-sm">Welcome</a><a href="#" class="ml-1">4 Items In Your Cart | Total Price: $300</a></div>
                    <div class="col-lg-6 text-center text-lg-right">
                        <ul class="menu list-inline mb-0">
                            <li class="list-inline-item"><a href="#" data-toggle="modal" data-target="#login-modal">Login</a></li>
                            <li class="list-inline-item"><a href="register.html">Register</a></li>
                            <li class="list-inline-item"><a href="contact.html">Contact</a></li>

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
                            <form action="customer-orders.html" method="post">
                                <div class="form-group">
                                    <input id="email-modal" type="text" placeholder="email" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input id="password-modal" type="password" placeholder="password" class="form-control">
                                </div>
                                <p class="text-center">
                                    <button class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
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
                        <div id="basket-overview" class="navbar-collapse collapse d-none d-lg-block"><a href="basket.html" class="btn btn-primary navbar-btn"><i class="fa fa-shopping-cart"></i><span>0 items in your cart</span></a></div>
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
                            <p class="text-muted">You currently have 1 item(s) in your cart.</p>
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
                                        <tr>
                                            <td><a href="#"><img class="img-fluid" src="Images/p1.jpg" alt="product1"></a></td>
                                            <td><a href="#">Assorted HBD Balloons</a></td>
                                            <td>
                                                2
                                            </td>
                                            <td>R50</td>
                                            <td>Large</td>
                                            <td>
                                                <input type="checkbox" name="remove[]">
                                            </td>
                                            <td>
                                                R100
                                            </td>
                                        </tr>

                                    </tbody>
                                    <tbody>
                                        <tr>
                                            <td><a href="#"><img class="img-fluid" src="Images/p1.jpg" alt="product1"></a></td>
                                            <td><a href="#">Assorted HBD Balloons</a></td>
                                            <td>
                                                2
                                            </td>
                                            <td>R50</td>
                                            <td>Large</td>
                                            <td>
                                                <input type="checkbox" name="remove[]">
                                            </td>
                                            <td>
                                                R100
                                            </td>
                                        </tr>

                                    </tbody>
                                    <tbody>
                                        <tr>
                                            <td><a href="#"><img class="img-fluid" src="Images/p1.jpg" alt="product1"></a></td>
                                            <td><a href="#">Assorted HBD Balloons</a></td>
                                            <td>
                                                2
                                            </td>
                                            <td>R50</td>
                                            <td>Large</td>
                                            <td>
                                                <input type="checkbox" name="remove[]">
                                            </td>
                                            <td>
                                                R100
                                            </td>
                                        </tr>

                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th colspan="5">Total</th>
                                            <th colspan="2">$446.00</th>
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

                    </div>
                    <div class="container">
                        <div class="row same-height-row">
                            <div class="col-md-12">
                                <div class="box same-height">
                                    <h3 class="text-center">Related products </h3>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6">
                                <div class="product same-height">
                                    <div>
                                        <a href="details.php">
                                            <img class="img-fluid" src="Images/p1.jpg" alt="Product 6">
                                        </a>
                                    </div>

                                    <div class="text">
                                        <!-- text Begin -->
                                        <h3><a href="details.php">Assorted HBD Balloons</a></h3>

                                        <p class="price">$40</p>

                                    </div><!-- text Finish -->
                                </div>
                                <!-- /.product-->
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="product same-height">
                                    <div>
                                        <a href="details.php">
                                            <img class="img-fluid" src="Images/p1.jpg" alt="Product 6">
                                        </a>
                                    </div>

                                    <div class="text">
                                        <!-- text Begin -->
                                        <h3><a href="details.php">Assorted HBD Balloons</a></h3>

                                        <p class="price">$40</p>

                                    </div><!-- text Finish -->
                                </div>
                                <!-- /.product-->
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="product same-height">
                                    <div>
                                        <a href="details.php">
                                            <img class="img-fluid" src="Images/p1.jpg" alt="Product 6">
                                        </a>
                                    </div>

                                    <div class="text">
                                        <!-- text Begin -->
                                        <h3><a href="details.php">Assorted HBD Balloons</a></h3>

                                        <p class="price">$40</p>

                                    </div><!-- text Finish -->
                                </div>
                                <!-- /.product-->
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="product same-height">
                                    <div>
                                        <a href="details.php">
                                            <img class="img-fluid" src="Images/p1.jpg" alt="Product 6">
                                        </a>
                                    </div>

                                    <div class="text">
                                        <!-- text Begin -->
                                        <h3><a href="details.php">Assorted HBD Balloons</a></h3>

                                        <p class="price">$40</p>

                                    </div><!-- text Finish -->
                                </div>
                                <!-- /.product-->
                            </div>





                        </div>
                    </div>

                </div> <!-- col 9 ends -->
                <div class="col-lg-3">
                    <div id="order-summary" class="card">
                        <div class="card-header">
                            <h3>Order summary</h3>
                            <p class="text-muted">Shipping and additional costs are calculated based on the values you have entered.</p>
                        </div>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Order subtotal</td>
                                        <th>$446.00</th>
                                    </tr>
                                    <tr>
                                        <td>Shipping and handling</td>
                                        <th>$10.00</th>
                                    </tr>
                                    <tr>
                                        <td>Tax</td>
                                        <th>$0.00</th>
                                    </tr>
                                    <tr class="total">
                                        <td>Total</td>
                                        <th>$456.00</th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
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