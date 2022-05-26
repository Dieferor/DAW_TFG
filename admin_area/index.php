<?php

session_start();

include("includes/db.php");

if (!isset($_SESSION['admin_email'])) {
    echo "<script>window.open('login.php','_self')</script>";
} else {

?>

    <?php

    $admin_session = $_SESSION['admin_email'];

    $get_admin = "select * from admins  where admin_email='$admin_session'";

    $run_admin = mysqli_query($db, $get_admin);

    $row_admin = mysqli_fetch_array($run_admin);

    $admin_id = $row_admin['admin_id'];

    $admin_name = $row_admin['admin_name'];

    $admin_email = $row_admin['admin_email'];

    $get_products = "SELECT * FROM products";
    $run_products = mysqli_query($db, $get_products);
    $count_products = mysqli_num_rows($run_products);

    $get_customers = "SELECT * FROM customers";
    $run_customers = mysqli_query($db, $get_customers);
    $count_customers = mysqli_num_rows($run_customers);

    ?>


    <!DOCTYPE html>
    <html>

    <head>

        <title>Admin Panel</title>

        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/style.css" rel="stylesheet">
        <script src="https://kit.fontawesome.com/3c448482ea.js" crossorigin="anonymous"></script>
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">


    </head>

    <body>

        <div id="wrapper">
            <!-- wrapper Starts -->

            <?php include("includes/sidebar.php");  ?>

            <div id="page-wrapper">
                <!-- page-wrapper Starts -->

                <div class="container-fluid">
                    <!-- container-fluid Starts -->

                    <?php

                    if (isset($_GET['dashboard'])) {

                        include("dashboard.php");
                    }

                    if (isset($_GET['insert_product'])) {

                        include("insert_product.php");
                    }

                    if (isset($_GET['view_products'])) {

                        include("view_products.php");
                    }

                    if (isset($_GET['delete_product'])) {

                        include("delete_product.php");
                    }

                    if (isset($_GET['edit_product'])) {

                        include("edit_product.php");
                    }

                    if (isset($_GET['view_customers'])) {

                        include("view_customers.php");
                    }

                    if (isset($_GET['delete_customer'])) {

                        include("delete_customer.php");
                    }


                    if (isset($_GET['insert_admin'])) {

                        include("insert_admin.php");
                    }

                    if (isset($_GET['view_users'])) {

                        include("view_users.php");
                    }


                    if (isset($_GET['delete_admin'])) {

                        include("delete_admin.php");
                    }

                    if (isset($_GET['edit_admin'])) {

                        include("edit_admin.php");
                    }

                    if (isset($_GET['edit_term'])) {

                        include("edit_term.php");
                    }

                    if (isset($_GET['insert_manufacturer'])) {

                        include("insert_manufacturer.php");
                    }

                    if (isset($_GET['view_manufacturers'])) {

                        include("view_manufacturers.php");
                    }

                    if (isset($_GET['delete_manufacturer'])) {

                        include("delete_manufacturer.php");
                    }

                    if (isset($_GET['edit_manufacturer'])) {

                        include("edit_manufacturer.php");
                    }

                    ?>

                </div><!-- container-fluid Ends -->

            </div><!-- page-wrapper Ends -->

        </div><!-- wrapper Ends -->

        <script src="js/jquery.min.js"></script>

        <script src="js/bootstrap.min.js"></script>


    </body>


    </html>

<?php } ?>