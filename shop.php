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
                </ol>
            </nav>

        </div> <!-- col 12 ends breadcrumb -->
        <div class="row">
            <!-- row begin -->
            <div class="col-md-3">
                <!-- col 3 begins -->
                <?php
                include("includes/sidebar.php");
                ?>

            </div> <!-- col 3 ends -->
            <div class="col-md-9">
                <!-- col 9 begins -->
                <?php
                if (!isset($_GET['p_cat'])) {

                    if (!isset($_GET['cat'])) {

                        echo "
                    <div class='box'>
                        <h1>Shop</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt eum molestiae nihil magnam ex cumque laudantium dignissimos perspiciatis quisquam soluta dolorem dolore, eius totam quaerat veniam repellendus ipsam eligendi atque.</p>
                    </div>
                    ";
                    }
                }

                ?>
                <div class="row">
                    <!-- row begin -->
                    <?php

                    if (!isset($_GET['p_cat'])) {

                        if (!isset($_GET['cat'])) {

                            $per_page = 6;

                            if (isset($_GET['page'])) {

                                $page = $_GET['page'];
                            } else {

                                $page = 1;
                            }

                            $start_from = ($page - 1) * $per_page;

                            $get_products = "select * from products order by 1 DESC LIMIT $start_from,$per_page";

                            $run_products = mysqli_query($con, $get_products);

                            while ($row_products = mysqli_fetch_array($run_products)) {

                                $pro_id = $row_products['product_id'];

                                $pro_title = $row_products['product_title'];

                                $pro_price = $row_products['product_price'];

                                $pro_img1 = $row_products['product_img1'];

                                echo "
                           
                               <div class='col-md-4 col-sm-6 responsive'>
                               
                                   <div class='product'>
                                   
                                       <a href='details.php?pro_id=$pro_id'>
                                       
                                           <img class='img-fluid' src='Admin_Area/product_images/$pro_img1'>
                                       
                                       </a>
                                       
                                       <div class='text'>
                                       
                                           <h3>
                                           
                                               <a href='details.php?pro_id=$pro_id'> $pro_title </a>
                                           
                                           </h3>
                                       
                                           <p class='price'>

                                               R $pro_price

                                           </p>

                                           <p class='button'>

                                               <a class='btn btn-light' href='details.php?pro_id=$pro_id'>

                                                   View Details

                                               </a>

                                               <a class='btn btn-primary' href='details.php?pro_id=$pro_id'>

                                                   <i class='fa fa-shopping-cart'></i> Add To Cart

                                               </a>

                                           </p>
                                       
                                       </div>
                                   
                                   </div>
                               
                               </div>
                           
                           ";
                            }
                            ?>
                        </div> <!-- row end -->

 
                        <ul class="pagination justify-content-center">  <!-- pagination begins -->
                            <?php

                            $query = "select * from products";

                            $result = mysqli_query($con, $query);

                            $total_records = mysqli_num_rows($result);

                            $total_pages = ceil($total_records / $per_page);

                            echo "
    
                                      <li class='page-item'>
        
                                        <a class='page-link' href='shop.php?page=1'> " . 'First Page' . " </a>
        
                                      </li>
    
                                        ";

                            for ($i = 1; $i <= $total_pages; $i++) {

                                echo "
    
                                  <li class='page-item'>
                                            
                                 <a class='page-link' href='shop.php?page=" . $i . "'> " . $i . " </a>
                                            
                                </li>
    
                                    ";
                            };

                            echo "
    
                                    <li class='page-item'>
                                                    
                                <a class='page-link' href='shop.php?page=$total_pages'> " . 'Last Page' . " </a>
                                                    
                                     </li>
                                                
                                 ";
                        }
                    }
                    ?>

                </ul>    <!-- pagination ends -->

                <?php 
               
               getpcatpro(); 
               
               getcatpro();
               
               ?>  


            </div> <!-- col 9 ends -->


        </div> <!-- row end -->
    </div> <!-- container ends -->
</div> <!-- content ends -->
<?php
include("includes/footer.php");
?>
</body>

</html>