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
                        <li class="nav-item"><a href="#" class="nav-link ">Home</a></li>
                        <li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" data-hover="dropdown" data-delay="200" class="dropdown-toggle nav-link active">Men<b class="caret"></b></a>
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
                        <li aria-current="page" class="breadcrumb-item active">Men</li>
                    </ol>
                </nav>

            </div> <!-- col 12 ends breadcrumb -->
            <div class="row">
                <!-- row begin -->
                <div class="col-lg-3 ">
                    <!-- col 3 begins -->
                    <?php
                    include("includes/sidebar.php");
                    ?>

                </div> <!-- col 3 ends -->
                <div class="col-lg-9 ">
                    <div id="productMain" class="row">

                        <div class="col-md-6">
                            <div id="mainImage">
                                <!-- col-sm-6 Begin -->

                                <!-- #mainImage Begin -->
                                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- carousel Begin -->

                                    <!-- Indicators -->
                                    <ul class="carousel-indicators">
                                        <li data-target="#demo" data-slide-to="0" class="active"></li>
                                        <li data-target="#demo" data-slide-to="1"></li>
                                        <li data-target="#demo" data-slide-to="2"></li>
                                    </ul>

                                    <!-- The slideshow -->
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="Images/a1.jpg" alt="slider1" class="img-fluid" >
                                        </div>
                                        <div class="carousel-item">
                                            <img src="Images/a1.jpg" alt="slider2" class="img-fluid" >
                                        </div>
                                        <div class="carousel-item">
                                            <img src="Images/a1.jpg" alt="slider3" class="img-fluid" >
                                        </div>
                                    </div>

                                    <!-- Left and right controls -->
                                    <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                                        <span class="carousel-control-prev-icon"></span>
                                    </a>
                                    <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                                        <span class="carousel-control-next-icon"></span>
                                    </a>
                                </div><!-- carousel Finish -->
                            </div> <!-- mainImage Finish -->
                        </div> <!-- col-sm-6 end -->
                        <div class="col-md-6">
                            <!-- col-sm-6 Begin -->
                            <div class="box">
                                <!-- box Begin -->
                                <h1 class="text-center">M-Dev Polo Shirt </h1>
                                <div class="container-fliud">
                                    <form action="details.php" class="form-horizontal" method="post">
                                        <!-- form-horizontal Begin -->
                                        <div class="row form-group">
                                            <!-- form-group Begin -->
                                            <label for="" class="col-lg-5 ">Products Quantity</label>

                                            <div class="col-lg-7">
                                                <!-- col-md-7 Begin -->
                                                <select name="product_qty" id="" class="form-control">
                                                    <!-- select Begin -->
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select><!-- select Finish -->

                                            </div><!-- col-md-7 Finish -->

                                        </div><!-- form-group Finish -->

                                        <div class="form-group row">
                                            <!-- form-group Begin -->
                                            <label class="col-lg-5 control-label ">Product Size</label>

                                            <div class="col-lg-7">
                                                <!-- col-md-7 Begin -->

                                                <select name="product_size" class="form-control">
                                                    <!-- form-control Begin -->

                                                    <option>Select a Size</option>
                                                    <option>Small</option>
                                                    <option>Medium</option>
                                                    <option>Large</option>

                                                </select><!-- form-control Finish -->

                                            </div><!-- col-md-7 Finish -->
                                        </div><!-- form-group Finish -->

                                        <p class="price">$50</p>

                                        <p class="text-center buttons"><button class="btn btn-primary i fa fa-shopping-cart"> Add to cart</button></p>

                                    </form><!-- form-horizontal Finish -->
                                </div>

                            </div><!-- box Finish -->
                            <div id="thumbs" class="row">
                                <div class="col-lg-4 column">
                                    <a href="#" class="owl-thumb-item"><img src="Images/a1.jpg" alt="" class="img-fluid"></a>

                                </div>
                                <div class="col-lg-4 column">
                                    <a href="#" class="owl-thumb-item"><img src="Images/a1.jpg" alt="" class="img-fluid"></a>

                                </div>
                                <div class="col-lg-4 column">
                                    <a href="#" class="owl-thumb-item"><img src="Images/a1.jpg" alt="" class="img-fluid"></a>

                                </div>
                            </div>

                        </div><!-- col-sm-6 Finish -->

                    </div>
                    <div class="box" id="details">
                        <!-- box Begin -->

                        <h4>Product Details</h4>

                        <p>

                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione praesentium ipsum accusantium facere nulla, beatae vitae consequatur enim et nesciunt possimus doloribus omnis dolorum, ea quibusdam excepturi asperiores, temporibus! Consequatur?

                        </p>

                        <h4>Size</h4>

                        <ul>
                            <li>Small</li>
                            <li>Medium</li>
                            <li>Large</li>
                        </ul>

                        <hr>

                    </div><!-- box Finish -->
                    <div class="container">
                        <div class="row same-height-row">
                            <div class="col-md-12">
                                <div class="box same-height">
                                    <h3>You may also like these products </h3>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6">
                                <div class="product same-height">
                                    <div>
                                        <a href="details.php">
                                            <img class="img-fluid" src="Images/product-2.jpg" alt="Product 6">
                                        </a>
                                    </div>

                                    <div class="text">
                                        <!-- text Begin -->
                                        <h3><a href="details.php">M-Dev Tank Top Women</a></h3>

                                        <p class="price">$40</p>

                                    </div><!-- text Finish -->
                                </div>
                                <!-- /.product-->
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="product same-height">
                                    <div>
                                        <a href="details.php">
                                            <img class="img-fluid" src="Images/product-2.jpg" alt="Product 6">
                                        </a>
                                    </div>

                                    <div class="text">
                                        <!-- text Begin -->
                                        <h3><a href="details.php">M-Dev Tank Top Women</a></h3>

                                        <p class="price">$40</p>

                                    </div><!-- text Finish -->
                                </div>
                                <!-- /.product-->
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="product same-height">
                                    <div>
                                        <a href="details.php">
                                            <img class="img-fluid" src="Images/product-2.jpg" alt="Product 6">
                                        </a>
                                    </div>

                                    <div class="text">
                                        <!-- text Begin -->
                                        <h3><a href="details.php">M-Dev Tank Top Women</a></h3>

                                        <p class="price">$40</p>

                                    </div><!-- text Finish -->
                                </div>
                                <!-- /.product-->
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="product same-height">
                                    <div>
                                        <a href="details.php">
                                            <img class="img-fluid" src="Images/product-2.jpg" alt="Product 6">
                                        </a>
                                    </div>

                                    <div class="text">
                                        <!-- text Begin -->
                                        <h3><a href="details.php">M-Dev Tank Top Women</a></h3>

                                        <p class="price">$40</p>

                                    </div><!-- text Finish -->
                                </div>
                                <!-- /.product-->
                            </div>





                        </div>
                    </div>
                </div>



            </div> <!-- row end -->
        </div> <!-- container ends -->
    </div> <!-- content ends -->
    <?php
    include("includes/footer.php");
    ?>
</body>

</html>