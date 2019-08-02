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
        <nav class="navbar navbar-expand-lg">
            <div class="container"><a href="index.php" class="navbar-brand home"><img src="Images/.jpg" alt="PerferctDecoration logo" class="d-none d-md-inline-block"><img src="Images/.jpg" alt="PerferctDecoration logo" class="d-inline-block d-md-none"><span class="sr-only">PerferctDecoration - go to homepage</span></a>
                <div class="navbar-buttons">
                    <button type="button" data-toggle="collapse" data-target="#navigation" class="btn btn-outline-secondary navbar-toggler"><span class="sr-only">Toggle navigation</span><i class="fa fa-align-justify"></i></button>
                    <button type="button" data-toggle="collapse" data-target="#search" class="btn btn-outline-secondary navbar-toggler"><span class="sr-only">Toggle search</span><i class="fa fa-search"></i></button><a href="basket.html" class="btn btn-outline-secondary navbar-toggler"><i class="fa fa-shopping-cart"></i></a>
                </div>
                <div id="navigation" class="collapse navbar-collapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item"><a href="#" class="nav-link active">Home</a></li>
                        <li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" data-hover="dropdown" data-delay="200" class="dropdown-toggle nav-link">Men<b class="caret"></b></a>
                            <ul class="dropdown-menu megamenu">
                                <li>
                                    <div class="row">
                                        <div class="col-md-6 col-lg-3">
                                            <h5>Clothing</h5>
                                            <ul class="list-unstyled mb-3">
                                                <li class="nav-item"><a href="category.html" class="nav-link">T-shirts</a></li>
                                                <li class="nav-item"><a href="category.html" class="nav-link">Shirts</a></li>
                                                <li class="nav-item"><a href="category.html" class="nav-link">Pants</a></li>
                                                <li class="nav-item"><a href="category.html" class="nav-link">Accessories</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6 col-lg-3">
                                            <h5>Shoes</h5>
                                            <ul class="list-unstyled mb-3">
                                                <li class="nav-item"><a href="category.html" class="nav-link">Trainers</a></li>
                                                <li class="nav-item"><a href="category.html" class="nav-link">Sandals</a></li>
                                                <li class="nav-item"><a href="category.html" class="nav-link">Hiking shoes</a></li>
                                                <li class="nav-item"><a href="category.html" class="nav-link">Casual</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6 col-lg-3">
                                            <h5>Accessories</h5>
                                            <ul class="list-unstyled mb-3">
                                                <li class="nav-item"><a href="category.html" class="nav-link">Trainers</a></li>
                                                <li class="nav-item"><a href="category.html" class="nav-link">Sandals</a></li>
                                                <li class="nav-item"><a href="category.html" class="nav-link">Hiking shoes</a></li>
                                                <li class="nav-item"><a href="category.html" class="nav-link">Casual</a></li>
                                                <li class="nav-item"><a href="category.html" class="nav-link">Hiking shoes</a></li>
                                                <li class="nav-item"><a href="category.html" class="nav-link">Casual</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6 col-lg-3">
                                            <h5>Featured</h5>
                                            <ul class="list-unstyled mb-3">
                                                <li class="nav-item"><a href="category.html" class="nav-link">Trainers</a></li>
                                                <li class="nav-item"><a href="category.html" class="nav-link">Sandals</a></li>
                                                <li class="nav-item"><a href="category.html" class="nav-link">Hiking shoes</a></li>
                                            </ul>
                                            <h5>Looks and trends</h5>
                                            <ul class="list-unstyled mb-3">
                                                <li class="nav-item"><a href="category.html" class="nav-link">Trainers</a></li>
                                                <li class="nav-item"><a href="category.html" class="nav-link">Sandals</a></li>
                                                <li class="nav-item"><a href="category.html" class="nav-link">Hiking shoes</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" data-hover="dropdown" data-delay="200" class="dropdown-toggle nav-link">Ladies<b class="caret"></b></a>
                            <ul class="dropdown-menu megamenu">
                                <li>
                                    <div class="row">
                                        <div class="col-md-6 col-lg-3">
                                            <h5>Clothing</h5>
                                            <ul class="list-unstyled mb-3">
                                                <li class="nav-item"><a href="category.html" class="nav-link">T-shirts</a></li>
                                                <li class="nav-item"><a href="category.html" class="nav-link">Shirts</a></li>
                                                <li class="nav-item"><a href="category.html" class="nav-link">Pants</a></li>
                                                <li class="nav-item"><a href="category.html" class="nav-link">Accessories</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6 col-lg-3">
                                            <h5>Shoes</h5>
                                            <ul class="list-unstyled mb-3">
                                                <li class="nav-item"><a href="category.html" class="nav-link">Trainers</a></li>
                                                <li class="nav-item"><a href="category.html" class="nav-link">Sandals</a></li>
                                                <li class="nav-item"><a href="category.html" class="nav-link">Hiking shoes</a></li>
                                                <li class="nav-item"><a href="category.html" class="nav-link">Casual</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6 col-lg-3">
                                            <h5>Accessories</h5>
                                            <ul class="list-unstyled mb-3">
                                                <li class="nav-item"><a href="category.html" class="nav-link">Trainers</a></li>
                                                <li class="nav-item"><a href="category.html" class="nav-link">Sandals</a></li>
                                                <li class="nav-item"><a href="category.html" class="nav-link">Hiking shoes</a></li>
                                                <li class="nav-item"><a href="category.html" class="nav-link">Casual</a></li>
                                                <li class="nav-item"><a href="category.html" class="nav-link">Hiking shoes</a></li>
                                                <li class="nav-item"><a href="category.html" class="nav-link">Casual</a></li>
                                            </ul>
                                            <h5>Looks and trends</h5>
                                            <ul class="list-unstyled mb-3">
                                                <li class="nav-item"><a href="category.html" class="nav-link">Trainers</a></li>
                                                <li class="nav-item"><a href="category.html" class="nav-link">Sandals</a></li>
                                                <li class="nav-item"><a href="category.html" class="nav-link">Hiking shoes</a></li>
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
                        <li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" data-hover="dropdown" data-delay="200" class="dropdown-toggle nav-link">Template<b class="caret"></b></a>
                            <ul class="dropdown-menu megamenu">
                                <li>
                                    <div class="row">
                                        <div class="col-md-6 col-lg-3">
                                            <h5>Shop</h5>
                                            <ul class="list-unstyled mb-3">
                                                <li class="nav-item"><a href="index.html" class="nav-link">Homepage</a></li>
                                                <li class="nav-item"><a href="category.html" class="nav-link">Category - sidebar left</a></li>
                                                <li class="nav-item"><a href="category-right.html" class="nav-link">Category - sidebar right</a></li>
                                                <li class="nav-item"><a href="category-full.html" class="nav-link">Category - full width</a></li>
                                                <li class="nav-item"><a href="detail.html" class="nav-link">Product detail</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6 col-lg-3">
                                            <h5>User</h5>
                                            <ul class="list-unstyled mb-3">
                                                <li class="nav-item"><a href="register.html" class="nav-link">Register / login</a></li>
                                                <li class="nav-item"><a href="customer-orders.html" class="nav-link">Orders history</a></li>
                                                <li class="nav-item"><a href="customer-order.html" class="nav-link">Order history detail</a></li>
                                                <li class="nav-item"><a href="customer-wishlist.html" class="nav-link">Wishlist</a></li>
                                                <li class="nav-item"><a href="customer-account.html" class="nav-link">Customer account / change password</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6 col-lg-3">
                                            <h5>Order process</h5>
                                            <ul class="list-unstyled mb-3">
                                                <li class="nav-item"><a href="basket.html" class="nav-link">Shopping cart</a></li>
                                                <li class="nav-item"><a href="checkout1.html" class="nav-link">Checkout - step 1</a></li>
                                                <li class="nav-item"><a href="checkout2.html" class="nav-link">Checkout - step 2</a></li>
                                                <li class="nav-item"><a href="checkout3.html" class="nav-link">Checkout - step 3</a></li>
                                                <li class="nav-item"><a href="checkout4.html" class="nav-link">Checkout - step 4</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6 col-lg-3">
                                            <h5>Pages and blog</h5>
                                            <ul class="list-unstyled mb-3">
                                                <li class="nav-item"><a href="blog.html" class="nav-link">Blog listing</a></li>
                                                <li class="nav-item"><a href="post.html" class="nav-link">Blog Post</a></li>
                                                <li class="nav-item"><a href="faq.html" class="nav-link">FAQ</a></li>
                                                <li class="nav-item"><a href="text.html" class="nav-link">Text page</a></li>
                                                <li class="nav-item"><a href="text-right.html" class="nav-link">Text page - right sidebar</a></li>
                                                <li class="nav-item"><a href="404.html" class="nav-link">404 page</a></li>
                                                <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
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
    <div class="container" id="slider">
        <!-- container Begin -->
        <div class="col-md-12">
            <!-- col-md-12 Begin -->
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- container Begin -->

                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                </ul>

                <!-- The slideshow -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="Images/main-slider1.jpg" alt="slider1" width="1100" height="500">
                    </div>
                    <div class="carousel-item">
                        <img src="Images/main-slider1.jpg" alt="slider2" width="1100" height="500">
                    </div>
                    <div class="carousel-item">
                        <img src="Images/main-slider1.jpg" alt="slider3" width="1100" height="500">
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div><!-- container Finish -->
        </div>
    </div> <!-- slider ends -->
    <div class="container" id="advantages">
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-4">
                    <div class="box clickable d-flex flex-column justify-content-center mb-0 h-100">
                        <div class="icon"><i class="fa fa-heart"></i></div>
                        <h3><a href="#">We love our customers</a></h3>
                        <p class="mb-0">We are known to provide best possible service ever</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box clickable d-flex flex-column justify-content-center mb-0 h-100">
                        <div class="icon"><i class="fa fa-tags"></i></div>
                        <h3><a href="#">Best prices</a></h3>
                        <p class="mb-0">You can check that the height of the boxes adjust when longer text like this one is used in one of them.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box clickable d-flex flex-column justify-content-center mb-0 h-100">
                        <div class="icon"><i class="fa fa-thumbs-up"></i></div>
                        <h3><a href="#">100% satisfaction guaranteed</a></h3>
                        <p class="mb-0">Free returns on everything for 3 months.</p>
                    </div>
                </div>
            </div>
            <!-- /.row-->
        </div>
        <!-- /.container-->
    </div> <!-- advantages ends -->
    <div id="hot">
        <!-- hot begins -->
        <div class="box">
            <!-- box begins -->
            <div class="container">
                <!-- container begins -->
                <div class="col-md-12">
                    <h2>
                        Our Latest Products
                    </h2>

                </div>

            </div> <!-- container ends -->
        </div> <!-- box ends -->
    </div> <!-- hot ends -->
    <div id="content" class="container">
        <!-- latest Porduct Begins -->
        <div class="row">
            <!-- latest Porduct row Begins -->
            <div class="col-sm-3">
                <!-- latest Porduct col begins -->
                <div class="product">
                    <a href="details.php">
                        <img class="img-fluid" src="Images/product-2.jpg" alt="Product1">
                    </a>
                    <div class="text">
                        <h3>
                            <a href="details.php">
                                Earings
                            </a>
                        </h3>
                        <p class="price">R100</p>
                        <p class="button">
                            <a href="details.php" class="btn btn-light">View Details</a>
                            <a href="details.php" class="btn btn-primary">
                                <i class=" fa fa-shopping-cart">
                                    Add to Cart
                                </i>
                            </a>
                        </p>
                    </div>
                </div>

            </div> <!-- latest Porduct col ends -->
            <div class="col-sm-3">
                <!-- latest Porduct col begins -->
                <div class="product">
                    <a href="details.php">
                        <img class="img-fluid" src="Images/product-2.jpg" alt="Product1">
                    </a>
                    <div class="text">
                        <h3>
                            <a href="details.php">
                                Earings
                            </a>
                        </h3>
                        <p class="price">R100</p>
                        <p class="button">
                            <a href="details.php" class="btn btn-light">View Details</a>
                            <a href="details.php" class="btn btn-primary">
                                <i class="fa fa-shopping-cart">
                                    Add to Cart
                                </i>
                            </a>
                        </p>
                    </div>
                </div>

            </div> <!-- latest Porduct col ends -->
            <div class="col-sm-3">
                <!-- latest Porduct col begins -->
                <div class="product">
                    <a href="details.php">
                        <img class="img-fluid" src="Images/product-2.jpg" alt="Product1">
                    </a>
                    <div class="text">
                        <h3>
                            <a href="details.php">
                                Earings
                            </a>
                        </h3>
                        <p class="price">R100</p>
                        <p class=" button">
                            <a href="details.php" class="btn btn-light">View Details</a>
                            <a href="details.php" class="btn btn-primary">
                                <i class="fa fa-shopping-cart">
                                    Add to Cart
                                </i>
                            </a>
                        </p>
                    </div>
                </div>

            </div> <!-- latest Porduct col ends -->
            <div class="col-sm-3">
                <!-- latest Porduct col begins -->
                <div class="product">
                    <a href="details.php">
                        <img class="img-fluid" src="Images/product-2.jpg" alt="Product1">
                    </a>
                    <div class="text">
                        <h3>
                            <a href="details.php">
                                Earings
                            </a>
                        </h3>
                        <p class="price">R100</p>
                        <p class="button">
                            <a href="details.php" class="btn btn-light">View Details</a>
                            <a href="details.php" class="btn btn-primary">
                                <i class="fa fa-shopping-cart">
                                    Add to Cart
                                </i>
                            </a>
                        </p>
                    </div>
                </div>

            </div> <!-- latest Porduct col ends -->
            <div class="col-sm-3">
                <!-- latest Porduct col begins -->
                <div class="product">
                    <a href="details.php">
                        <img class="img-fluid" src="Images/product-2.jpg" alt="Product1">
                    </a>
                    <div class="text">
                        <h3>
                            <a href="details.php">
                                Earings
                            </a>
                        </h3>
                        <p class="price">R100</p>
                        <p class="button">
                            <a href="details.php" class="btn btn-light">View Details</a>
                            <a href="details.php" class="btn btn-primary">
                                <i class=" fa fa-shopping-cart">
                                    Add to Cart
                                </i>
                            </a>
                        </p>
                    </div>
                </div>

            </div> <!-- latest Porduct col ends -->
            <div class="col-sm-3">
                <!-- latest Porduct col begins -->
                <div class="product">
                    <a href="details.php">
                        <img class="img-fluid" src="Images/product-2.jpg" alt="Product1">
                    </a>
                    <div class="text">
                        <h3>
                            <a href="details.php">
                                Earings
                            </a>
                        </h3>
                        <p class="price">R100</p>
                        <p class="button">
                            <a href="details.php" class="btn btn-light">View Details</a>
                            <a href="details.php" class="btn btn-primary">
                                <i class="fa fa-shopping-cart">
                                    Add to Cart
                                </i>
                            </a>
                        </p>
                    </div>
                </div>

            </div> <!-- latest Porduct col ends -->
            <div class="col-sm-3">
                <!-- latest Porduct col begins -->
                <div class="product">
                    <a href="details.php">
                        <img class="img-fluid" src="Images/product-2.jpg" alt="Product1">
                    </a>
                    <div class="text">
                        <h3>
                            <a href="details.php">
                                Earings
                            </a>
                        </h3>
                        <p class="price">R100</p>
                        <p class=" button">
                            <a href="details.php" class="btn btn-light">View Details</a>
                            <a href="details.php" class="btn btn-primary">
                                <i class="fa fa-shopping-cart">
                                    Add to Cart
                                </i>
                            </a>
                        </p>
                    </div>
                </div>

            </div> <!-- latest Porduct col ends -->
            <div class="col-sm-3">
                <!-- latest Porduct col begins -->
                <div class="product">
                    <a href="details.php">
                        <img class="img-fluid" src="Images/product-2.jpg" alt="Product1">
                    </a>
                    <div class="text">
                        <h3>
                            <a href="details.php">
                                Earings
                            </a>
                        </h3>
                        <p class="price">R100</p>
                        <p class="button">
                            <a href="details.php" class="btn btn-light">View Details</a>
                            <a href="details.php" class="btn btn-primary">
                                <i class="fa fa-shopping-cart">
                                    Add to Cart
                                </i>
                            </a>
                        </p>
                    </div>
                </div>

            </div> <!-- latest Porduct col ends -->
        </div> <!-- latest Porduct row ends -->
    </div> <!-- latest Porduct ends -->
    <?php
    include("includes/footer.php");
    ?>

</body>

</html>