<?php
include("includes/db.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insert Products</title>
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
    <style>
        .hidden {
            display: none;
        }
    </style>

</head>

<body>
    <div class="row">
        <div class="alert alert-success hidden" id="success-alert">
            <button type="button" class="close">x</button>
            <span class="glyphicon glyphicon-ok"></span> The product has been succesfull added
        </div>
        <div class="col-lg-12">
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-tachometer"></i> Dashboard / Insert Products

                </li>
            </ol>

        </div>

    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="fa fa-money fa-fw"></i> Insert Product

                    </h3>

                </div>
                <div class="card-body">
                    <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
                        <div class="form-group">
                            <div class="container">
                                <div class="row">

                                    <div class="col-md-3">

                                        <label class="control-label">Product Title</label>

                                    </div>
                                    <div class="col-md-6">

                                        <input name="product_title" type="text" class="form-control " required>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="container">
                                <div class="row">

                                    <div class="col-md-3">

                                        <label class="control-label">Product Category</label>

                                    </div>
                                    <div class="col-md-6">

                                        <select name="product_cat" class="form-control">
                                            <option>Select a Category Product </option>
                                            <?php

                                            $get_p_cats = "select * from product_categories";
                                            $run_p_cats = mysqli_query($con, $get_p_cats);

                                            while ($row_p_cats = mysqli_fetch_array($run_p_cats)) {

                                                $p_cat_id = $row_p_cats['p_cat_id'];
                                                $p_cat_title = $row_p_cats['p_cat_title'];

                                                echo "
                                  
                                                  <option value='$p_cat_id'> $p_cat_title </option>
                                  
                                                      ";
                                            }

                                            ?>
                                        </select>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="container">
                                <div class="row">

                                    <div class="col-md-3">

                                        <label class="control-label"> Category</label>

                                    </div>
                                    <div class="col-md-6">

                                        <select name="cat" class="form-control">
                                            <option>Select a Category </option>
                                            <?php

                                            $get_cat = "select * from categories";
                                            $run_cat = mysqli_query($con, $get_cat);

                                            while ($row_cat = mysqli_fetch_array($run_cat)) {

                                                $cat_id = $row_cat['cat_id'];
                                                $cat_title = $row_cat['cat_title'];

                                                echo "
                                  
                                                  <option value='$cat_id'> $cat_title </option>
                                  
                                                      ";
                                            }

                                            ?>
                                        </select>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="container">
                                <div class="row">

                                    <div class="col-md-3">

                                        <label class="control-label">Product Image 1</label>

                                    </div>
                                    <div class="col-md-6">

                                        <input name="product_img1" type="file" class="form-control " required>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="container">
                                <div class="row">

                                    <div class="col-md-3">

                                        <label class="control-label">Product Image 2</label>

                                    </div>
                                    <div class="col-md-6">

                                        <input name="product_img2" type="file" class="form-control ">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="container">
                                <div class="row">

                                    <div class="col-md-3">

                                        <label class="control-label">Product Image 3</label>

                                    </div>
                                    <div class="col-md-6">

                                        <input name="product_img3" type="file" class="form-control ">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="container">
                                <div class="row">

                                    <div class="col-md-3">

                                        <label class="control-label">Product Price</label>

                                    </div>
                                    <div class="col-md-6">

                                        <input name="product_price" type="text" class="form-control " required>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="container">
                                <div class="row">

                                    <div class="col-md-3">

                                        <label class="control-label">Product Keywords</label>

                                    </div>
                                    <div class="col-md-6">

                                        <input name="product_keywords" type="text" class="form-control " required>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="container">
                                <div class="row">

                                    <div class="col-md-3">

                                        <label class="control-label">Product Description</label>

                                    </div>
                                    <div class="col-md-6">

                                        <textarea name="product_desc" cols="19" rows="6" class="form-control"></textarea>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="container">
                                <div class="row">

                                    <div class="col-md-3">

                                        <label class="control-label"> </label>

                                    </div>
                                    <div class="col-md-6">

                                        <input  id="btn" name="submit" value="Insert Products" type="submit" class="btn btn-primary form-control">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>

            </div>

        </div>

    </div>

    <script src="js/tinymce/tinymce.min.js"></script> <!-- Use as a rich text editor plugin for the textarea -->
    <script>
        tinymce.init({
            selector: 'textarea'
        });
    </script>
</body>

</html>

<!-- use to insert products ti the database from the user -->
<?php
if (isset($_POST['submit'])) {

    $product_title = $_POST['product_title'];
    $product_cat = $_POST['product_cat'];
    $cat = $_POST['cat'];
    $product_price = $_POST['product_price'];
    $product_keywords = $_POST['product_keywords'];
    $product_desc = $_POST['product_desc'];

    $product_img1 = $_FILES['product_img1']['name'];
    $product_img2 = $_FILES['product_img2']['name'];
    $product_img3 = $_FILES['product_img3']['name'];

    $temp_name1 = $_FILES['product_img1']['tmp_name'];
    $temp_name2 = $_FILES['product_img2']['tmp_name'];
    $temp_name3 = $_FILES['product_img3']['tmp_name'];

    move_uploaded_file($temp_name1, "product_images/$product_img1");
    move_uploaded_file($temp_name2, "product_images/$product_img2");
    move_uploaded_file($temp_name3, "product_images/$product_img3");

    $insert_product = "insert into products (p_cat_id,cat_id,date,product_title,product_img1,product_img2,product_img3,product_price,product_keywords,product_desc) values
     ('$product_cat','$cat',NOW(),'$product_title','$product_img1','$product_img2','$product_img3','$product_price','$product_keywords','$product_desc')";

    $run_product = mysqli_query($con, $insert_product);

    if ($run_product) {

        echo "
        <script>alert('Product has been inserted sucessfully')</script>
                
            ";
        echo "<script>window.open('insert_product.php','_self')</script>";
    }
}
?>