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
    <div class="form-group">
        <!-- form-group Begin -->

        <label> Costumer Address: </label>

        <input type="text" name="c_address" class="form-control"  required>

    </div><!-- form-group Finish -->
    <div class="text-center"><!-- text-center Begin -->
        
        <button name="update" class="btn btn-primary"><!-- btn btn-primary Begin -->
            
            <i class="fa fa-user-md"></i> Update Now
            
        </button><!-- btn btn-primary inish -->
        
    </div><!-- text-center Finish -->
</form>