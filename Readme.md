# E-commerce Website
    ## Title: Perfect Decoration
<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
    <a class="navbar-brand" href="index.php?dashboard">Admin Area</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div id="navbarNavDropdown" class="navbar-collapse collapse">
        <ul class="  nav navbar-nav mr-auto side-nav">

            <!-- nav navbar-nav side-nav begin -->
            <li>
                <!-- li begin -->
                <a href="index.php?dashboard">
                    <!-- a href begin -->

                    <i class="fa fa-fw fa-dashboard"></i> Dashboard

                </a><!-- a href finish -->

            </li><!-- li finish -->
            <li>
                <!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#products">
                    <!-- a href begin -->

                    <i class="fa fa-fw fa-tag"></i> Products
                    <i class="fa fa-fw fa-caret-down"></i>

                </a><!-- a href finish -->

                <ul id="products" class="collapse">
                    <!-- collapse begin -->
                    <li>
                        <!-- li begin -->
                        <a href="index.php?insert_product"> Insert Product </a>
                    </li><!-- li finish -->
                    <li>
                        <!-- li begin -->
                        <a href="index.php?view_products"> View Products </a>
                    </li><!-- li finish -->
                </ul><!-- collapse finish -->

            </li><!-- li finish -->
            <li>
                <!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#p_cat">
                    <!-- a href begin -->

                    <i class="fa fa-fw fa-edit"></i> Products Categories
                    <i class="fa fa-fw fa-caret-down"></i>

                </a><!-- a href finish -->

                <ul id="p_cat" class="collapse">
                    <!-- collapse begin -->
                    <li>
                        <!-- li begin -->
                        <a href="index.php?insert_p_cat"> Insert Product Category </a>
                    </li><!-- li finish -->
                    <li>
                        <!-- li begin -->
                        <a href="index.php?view_p_cats"> View Products Categories </a>
                    </li><!-- li finish -->
                </ul><!-- collapse finish -->

            </li><!-- li finish -->

            <li>
                <!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#cat">
                    <!-- a href begin -->

                    <i class="fa fa-fw fa-book"></i> Categories
                    <i class="fa fa-fw fa-caret-down"></i>

                </a><!-- a href finish -->

                <ul id="cat" class="collapse">
                    <!-- collapse begin -->
                    <li>
                        <!-- li begin -->
                        <a href="index.php?insert_cat"> Insert Category </a>
                    </li><!-- li finish -->
                    <li>
                        <!-- li begin -->
                        <a href="index.php?view_cats"> View Categories </a>
                    </li><!-- li finish -->
                </ul><!-- collapse finish -->

            </li><!-- li finish -->

            <li>
                <!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#slides">
                    <!-- a href begin -->

                    <i class="fa fa-fw fa-gear"></i> Slides
                    <i class="fa fa-fw fa-caret-down"></i>

                </a><!-- a href finish -->

                <ul id="slides" class="collapse">
                    <!-- collapse begin -->
                    <li>
                        <!-- li begin -->
                        <a href="index.php?insert_slide"> Insert Slide </a>
                    </li><!-- li finish -->
                    <li>
                        <!-- li begin -->
                        <a href="index.php?view_slides"> View Slides </a>
                    </li><!-- li finish -->
                </ul><!-- collapse finish -->

            </li><!-- li finish -->

            <li>
                <!-- li begin -->
                <a href="index.php?view_customers">
                    <!-- a href begin -->
                    <i class="fa fa-fw fa-users"></i> View Customers
                </a><!-- a href finish -->
            </li><!-- li finish -->
            <li>
                <!-- li begin -->
                <a href="index.php?view_orders">
                    <!-- a href begin -->
                    <i class="fa fa-fw fa-book"></i> View Orders
                </a><!-- a href finish -->
            </li><!-- li finish -->

            <li>
                <!-- li begin -->
                <a href="index.php?view_payments">
                    <!-- a href begin -->
                    <i class="fa fa-fw fa-money"></i> View Payments
                </a><!-- a href finish -->
            </li><!-- li finish -->
            <li>
                <!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#users">
                    <!-- a href begin -->

                    <i class="fa fa-fw fa-users"></i> Users
                    <i class="fa fa-fw fa-caret-down"></i>

                </a><!-- a href finish -->

                <ul id="users" class="collapse">
                    <!-- collapse begin -->
                    <li>
                        <!-- li begin -->
                        <a href="index.php?insert_user"> Insert User </a>
                    </li><!-- li finish -->
                    <li>
                        <!-- li begin -->
                        <a href="index.php?view_users"> View Users </a>
                    </li><!-- li finish -->
                    <li>
                        <!-- li begin -->
                        <a href="index.php?user_profile=<?php echo $admin_id; ?>"> Edit User Profile </a>
                    </li><!-- li finish -->
                </ul><!-- collapse finish -->

            </li><!-- li finish -->

            <li>
                <!-- li begin -->
                <a href="logout.php">
                    <!-- a href begin -->
                    <i class="fa fa-fw fa-power-off"></i> Log Out
                </a><!-- a href finish -->
            </li><!-- li finish -->


        </ul>
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                    <i class="fa fa-user"></i> Maxime <b class="caret"></b>
                </a>

                <ul class="dropdown-menu">
                    <li>
                        <!-- li begin -->
                        <a href="index.php?user_profile=<?php echo $admin_id; ?>">
                            <!-- a href begin -->

                            <i class="fa fa-fw fa-user"></i> Profile

                        </a><!-- a href finish -->
                    </li><!-- li finish -->
                    <li>
                        <!-- li begin -->
                        <a href="index.php?view_products">
                            <!-- a href begin -->

                            <i class="fa fa-fw fa-envelope"></i> Products

                            <span class="badge">7</span>

                        </a><!-- a href finish -->
                    </li><!-- li finish -->
                    <li>
                        <!-- li begin -->
                        <a href="index.php?view_customers">
                            <!-- a href begin -->

                            <i class="fa fa-fw fa-users"></i> Customers

                            <span class="badge">7</span>

                        </a><!-- a href finish -->
                    </li><!-- li finish -->

                    <li>
                        <!-- li begin -->
                        <a href="index.php?view_cats">
                            <!-- a href begin -->

                            <i class="fa fa-fw fa-gear text-center"></i> PCategories

                            <span class="badge">7</span>

                        </a><!-- a href finish -->
                    </li><!-- li finish -->
                    <li class="dropdown-divider"></li>

                    <li>
                        <!-- li begin -->
                        <a href="logout.php">
                            <!-- a href begin -->

                            <i class="fa fa-fw fa-power-off"></i> Log Out

                        </a><!-- a href finish -->
                    </li><!-- li finish -->

                </ul>

            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/login') }}"></a>
            </li>
        </ul>
    </div>

    <!-- collapse navbar-collapse navbar-ex1-collapse begin -->


</nav>