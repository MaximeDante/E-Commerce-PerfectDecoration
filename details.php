<?php
include("includes/header.php");
?>
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
                    <li aria-current="page" class="breadcrumb-item active">Shop</li>
                    <li class="breadcrumb-item">
                        <a href="shop.php?p_cat=<?php echo $p_cat_id; ?>"><?php echo $p_cat_title; ?></a>
                    </li>
                    <li class="breadcrumb-item active"> <?php echo $pro_title; ?> </li>
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

                    <div class="col-lg-6">
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
                                        <img src="Images/<?php echo $pro_img1; ?>" alt="slider1" class="img-fluid" height="50px">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="Images/<?php echo $pro_img2; ?>" alt="slider2" class="img-fluid">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="Images/<?php echo $pro_img3; ?>" alt="slider3" class="img-fluid">
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
                    <div class="col-lg-6">
                        <!-- col-sm-6 Begin -->
                        <div class="box">
                            <!-- box Begin -->
                            <h1 class="text-center"><?php echo $pro_title; ?> </h1>


                            <?php add_cart(); ?>
                           
                            <div class="container-fliud">
                                <form action="details.php?add_cart=<?php echo $product_id; ?>" class="form-horizontal" method="post">
                                    <!-- form-horizontal Begin -->
                                    <div class=" align-content-center">
                                        <!-- form-group Begin -->
                                        <label for="" class="">Products Quantity</label>


                                        <!-- col-md-7 Begin -->
                                        <select name="product_qty" id="" class="form-control">
                                            <!-- select Begin -->
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select><!-- select Finish -->



                                    </div><!-- form-group Finish -->

                                    <div class="">
                                        <!-- form-group Begin -->
                                        <label class="">Product Size</label>



                                        <select name="product_size" class="form-control">
                                            <!-- form-control Begin -->

                                            <option >Select a Size</option>
                                            <option>Small</option>
                                            <option>Medium</option>
                                            <option>Large</option>

                                        </select><!-- form-control Finish -->


                                    </div><!-- form-group Finish -->

                                    <p class="price"> R <?php echo $pro_price; ?></p>

                                    <p class="text-center buttons"><button class="btn btn-primary i fa fa-shopping-cart"> Add to cart</button></p>

                                </form><!-- form-horizontal Finish -->
                            </div>

                        </div><!-- box Finish -->


                    </div><!-- col-sm-6 Finish -->

                </div>
                <div class="box" id="details">
                    <!-- box Begin -->

                    <h4>Product Details</h4>

                    <p>

                        <?php echo $pro_desc; ?>
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
            </div>



        </div> <!-- row end -->
    </div> <!-- container ends -->
</div> <!-- content ends -->
<?php
include("includes/footer.php");
?>
</body>

</html>