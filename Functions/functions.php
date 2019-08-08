<?php
$db = mysqli_connect("localhost", "root", "", "perfect_decoration");

function getPro()
{
    global $db;

    $get_products = "select * from products order by 1 DESC LIMIT 0,8";

    $run_products = mysqli_query($db, $get_products);

    while ($row_products = mysqli_fetch_array($run_products)) {

        $pro_id = $row_products['product_id'];

        $pro_title = $row_products['product_title'];

        $pro_price = $row_products['product_price'];

        $pro_img1 = $row_products['product_img1'];

        echo "
        <div class='col-md-3'>
        <div class='product'>
            <a href='details.php?pro_id=$pro_id'>
                <img class='img-fluid' src='Admin_Area/product_images/$pro_img1'>
            </a>
            <div class='text'>
                <h3>
                    <a href='details.php?pro_id=$pro_id'>
                    $pro_title
                    </a>
                </h3>
                <p class='price'> R $pro_price</p>
                <p class='button'>
                    <a href='details.php?pro_id=$pro_id' class='btn btn-light'>View Details</a>
                    <a href='details.php?pro_id=$pro_id' class='btn btn-primary'>
                        <i class='fa fa-shopping-cart'>
                            Add to Cart
                        </i>
                    </a>
                </p>
                </div>
            </div>
        </div>     
        
        ";
    }
}
