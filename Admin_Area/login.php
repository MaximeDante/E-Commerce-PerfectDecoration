<?php

session_start();
include("includes/db.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perfect Decoration Admin Page</title>
    <!-- Latest compiled and minified CSS -->
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
    <link rel="stylesheet" href="Styles/login.css">

</head>

<body>

    <div class="container">
        <div class="card card-login mx-auto text-center bg-dark">
            <div class="card-header mx-auto bg-dark">
                <span> <img src="admin_images/Capture.jpg" class="w-75" alt="Logo"> </span><br />
                <span class="logo_title mt-5"> Admin Login </span>
                <!--            <h1>--><?php //echo $message
                                        ?>
                <!--</h1>-->

            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" name="admin_email" class="form-control" placeholder="Email Address">
                    </div>

                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" name="admin_pass" class="form-control" placeholder="Password">
                    </div>

                    <div class="form-group">
                        <input type="submit" name="admin_login" value="Login" class="btn btn-outline-danger float-right login_btn">
                    </div>

                </form>
            </div>
        </div>
    </div>

</body>

</html>


<?php

if (isset($_POST['admin_login'])) {

    $admin_email = mysqli_real_escape_string($con, $_POST['admin_email']);

    $admin_pass = mysqli_real_escape_string($con, $_POST['admin_pass']);

    $get_admin = "select * from admins where admin_email='$admin_email' AND admin_pass='$admin_pass'";

    $run_admin = mysqli_query($con, $get_admin);

    $count = mysqli_num_rows($run_admin);

    if ($count == 1) {

        $_SESSION['admin_email'] = $admin_email;

        echo "<script>alert('Logged in. Welcome Back')</script>";

        echo "<script>window.open('index.php?dashboard','_self')</script>";
    } else {

        echo "<script>alert('Email or Password is Wrong !')</script>";
    }
}

?>