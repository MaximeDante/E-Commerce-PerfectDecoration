<?php
   $active='Home';
  include("includes/header.php");
?>
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
                <li data-target="#demo" data-slide-to="3"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner">
                <?php
                $get_slides = "select * from slider LIMIT 0,1";
                $run_slides = mysqli_query($con, $get_slides);
                while ($row_slides = mysqli_fetch_array($run_slides)) {
                    $slide_name = $row_slides['slide_name'];
                    $slide_image = $row_slides['slide_image'];
                    echo "
                             <div class='carousel-item active'>
                             <img src='Images/$slide_image'>
                             </div>
                        
                        ";
                }
                $get_slides = "select * from slider LIMIT 1,3";
                $run_slides = mysqli_query($con, $get_slides);
                while ($row_slides = mysqli_fetch_array($run_slides)) {
                    $slide_name = $row_slides['slide_name'];
                    $slide_image = $row_slides['slide_image'];
                    echo "
                             <div class='carousel-item '>
                             <img src='Images/$slide_image'>
                             </div>
                        
                        ";
                }
                ?>
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
                    New Arrivals
                </h2>

            </div>

        </div> <!-- container ends -->
    </div> <!-- box ends -->
</div> <!-- hot ends -->
<div id="content" class="container">
    <!-- latest Porduct Begins -->
    <div class="row">
        <!-- latest Porduct row Begins -->
        <?php
        getPro();
        ?>
    </div> <!-- latest Porduct row ends -->
</div> <!-- latest Porduct ends -->




<?php
include("includes/footer.php");
?>

</body>

</html>