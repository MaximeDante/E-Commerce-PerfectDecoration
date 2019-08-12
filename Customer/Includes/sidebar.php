<div class="card sidebar-menu">
    <div class="card-header">
        <h3 class="h4 card-title">Customer section</h3>
    </div>
    <div class="card-title">
    <?php 
        
        $customer_session = $_SESSION['customer_email'];
        
        $get_customer = "select * from customers where customer_email='$customer_session'";
        
        $run_customer = mysqli_query($con,$get_customer);
        
        $row_customer = mysqli_fetch_array($run_customer);
        
        $customer_name = $row_customer['customer_name'];
        
        if(!isset($_SESSION['customer_email'])){
            
        }else{
            
            echo "
            
            <h3 class='h4 card-heading'>Name: $customer_name</h3>
            
            ";
            
        }
        
        ?>
    </div>
    <div class="card-body">
        <ul class="nav nav-pills flex-column">
            <li  class="<?php if(isset($_GET['my_orders'])){ echo "nav-link active"; } ?>">
                <a href="my_account.php?my_orders" class="nav-link ">
                    <i class="fa fa-list"></i> My orders
                </a>
            </li>
           
            <li class="<?php if(isset($_GET['edit_account'])){ echo "nav-link active"; } ?>">
                <a href="my_account.php?edit_account" class="nav-link">
                    <i class="fa fa-wrench"></i> Edit Account
                </a>
            </li>
            <li class="<?php if(isset($_GET['change_pass'])){ echo "nav-link active"; } ?>">
                <a href="my_account.php?change_pass" class="nav-link">
                    <i class="fa fa-user"></i> Change Password
                </a>
            </li>
            <li class="<?php if(isset($_GET['delete_account'])){ echo "nav-link active"; } ?>">
                <a href="my_account.php?delete_account" class="nav-link ">
                    <i class="fa fa-trash"></i> Delete Account
                </a>
            </li>
            <li>
                <a href="logout.php" class="nav-link">
                    <i class="fa fa-toggle-off"></i> Logout
                </a>
            </li>

        </ul>
    </div>
</div>