<?php
include("includes/db.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Confirm Payment</title>
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
</head>

<body>
    <div class="container">
        <div class="row">

            <div class="col-lg-12">
                <div class="box">
                    <h1 class="text-center"> Please confirm The payment</h1>

                    <form action="" method="post" enctype="multipart/form-data">
                        <!-- form Begin -->

                        <div class="form-group">
                            <!-- form-group Begin -->

                            <label> Invoice No: </label>

                            <input type="text" class="form-control" name="invoice_no" required>

                        </div><!-- form-group Finish -->

                        <div class="form-group">
                            <!-- form-group Begin -->

                            <label> Amount Received: </label>

                            <input type="text" class="form-control" name="amount_sent" required>

                        </div><!-- form-group Finish -->

                        <div class="form-group">
                            <!-- form-group Begin -->

                            <label> Select Payment Mode: </label>

                            <select name="payment_mode" class="form-control">
                                <!-- form-control Begin -->

                                <option> Select Payment Mode </option>
                                <option> Back Code </option>
                                <option> Paypall </option>
                                <option> Cash on delivery </option>
                                <option> Western Union </option>

                            </select><!-- form-control Finish -->

                        </div><!-- form-group Finish -->

                        <div class="form-group">
                            <!-- form-group Begin -->

                            <label> Transaction / Reference ID: </label>

                            <input type="text" class="form-control" name="ref_no" required>

                        </div><!-- form-group Finish -->

                        <div class="form-group">
                            <!-- form-group Begin -->

                            <label> Paypall / Payoneer / Western Union Code: </label>

                            <input type="text" class="form-control" name="code" required>

                        </div><!-- form-group Finish -->

                        <div class="form-group">
                            <!-- form-group Begin -->

                            <label> Payment Date: </label>

                            <input type="text" class="form-control" name="date" required>

                        </div><!-- form-group Finish -->

                        <div class="text-center">
                            <!-- text-center Begin -->

                            <button class="btn btn-primary btn-lg" name="confirm_payment">
                                <!-- tn btn-primary btn-lg Begin -->

                                <i class="fa fa-user-md"></i> Confirm Payment

                            </button><!-- tn btn-primary btn-lg Finish -->

                        </div><!-- text-center Finish -->

                    </form><!-- form Finish -->
                    <?php

                    if (isset($_POST['confirm_payment'])) {

                        $update_id = $_GET['update_id'];

                        $invoice_no = $_POST['invoice_no'];

                        $amount = $_POST['amount_sent'];

                        $payment_mode = $_POST['payment_mode'];

                        $ref_no = $_POST['ref_no'];

                        $code = $_POST['code'];

                        $payment_date = $_POST['date'];

                        $complete = "Complete";

                        $insert_payment = "insert into payments (invoice_no,amount,payment_mode,ref_no,code,payment_date) values ('$invoice_no','$amount','$payment_mode','$ref_no','$code','$payment_date')";

                        $run_payment = mysqli_query($con, $insert_payment);

                        $update_customer_order = "update customer_orders set order_status='$complete' where order_id='$update_id'";

                        $run_customer_order = mysqli_query($con, $update_customer_order);

                        $update_pending_order = "update pending_orders set order_status='$complete' where order_id='$update_id'";

                        $run_pending_order = mysqli_query($con, $update_pending_order);

                        if ($run_pending_order) {

                            echo "<script>alert('The status of the order has been changed')</script>";

                            echo "<script>window.open('index.php?view_orders','_self')</script>";
                        }
                    }

                    ?>

                </div>
            </div>





        </div>
    </div>
    </div>
    </div>


</body>

</html>