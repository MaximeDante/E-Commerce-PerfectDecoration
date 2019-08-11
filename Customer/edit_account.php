<?php

$customer_session = $_SESSION['customer_email'];

$get_customer = "select * from customers where customer_email='$customer_session'";

$run_customer = mysqli_query($con, $get_customer);

$row_customer = mysqli_fetch_array($run_customer);

$customer_id = $row_customer['customer_id'];

$customer_name = $row_customer['customer_name'];

$customer_email = $row_customer['customer_email'];

$customer_contact = $row_customer['customer_contact'];



?>
<div class="text-center">
    <h1>Edit Your Account </h1>


    <p class="text-muted">

        If you have any questions, feel free to <a href="../contact.php">Contact Us.</a>

    </p>

</div>
<form validate="true" action="" method="post" enctype="multipart/form-data">
    <!-- form Begin -->
    <div class="form-group">
        <label>Customer Name: </label>
        <input type="text" name="c_name" class="form-control" required>

    </div>
    <div class="form-group">
        <label>Customer Email: </label>
        <input type="text" name="c_email" class="form-control" required>

    </div>
    <div class="form-group">
        <label>Customer Number: </label>
        <input type="text" name="c_contact" class="form-control" required>

    </div>
    <div class="text-center">
        <!-- text-center Begin -->

        <button name="update" class="btn btn-primary">
            <!-- btn btn-primary Begin -->

            <i class="fa fa-user-md"></i> Update Now

        </button><!-- btn btn-primary inish -->

    </div><!-- text-center Finish -->
</form>
<?php

if (isset($_POST['update'])) {

    $update_id = $customer_id;

    $c_name = $_POST['c_name'];

    $c_email = $_POST['c_email'];

    $c_address = $_POST['c_address'];

    $c_contact = $_POST['c_contact'];

    $update_customer = "update customers set customer_name='$c_name',customer_email='$c_email',customer_contact='$c_contact' where customer_id='$update_id' ";

    $run_customer = mysqli_query($con, $update_customer);

    if ($run_customer) {

        echo "<script>alert('Your account has been edited, to complete the process, please Relogin')</script>";

        echo "<script>window.open('logout.php','_self')</script>";
    }
}

?>