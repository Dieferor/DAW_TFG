<?php


if (!isset($_SESSION['admin_email'])) {

    echo "<script>window.open('login.php','_self')</script>";
} else {


?>

    <?php

    if (isset($_GET['edit_manufacturer'])) {

        $edit_manufacturer = $_GET['edit_manufacturer'];

        $get_manufacturer = "select * from manufacturers where manufacturer_id='$edit_manufacturer'";

        $run_manufacturer = mysqli_query($db, $get_manufacturer);

        $row_manufacturer = mysqli_fetch_array($run_manufacturer);

        $m_id = $row_manufacturer['manufacturer_id'];

        $m_title = $row_manufacturer['manufacturer_title'];
    }


    ?>

    <div class="row">
        <!-- 1 row Starts -->

        <div class="col-lg-12">
            <!-- col-lg-12 Starts -->

            <ol class="breadcrumb">
                <!-- breadcrumb Starts -->

                <li class="active">

                    <i class="fa fa-dashboard"></i> Bandeja de entrada / Editar Proveedor

                </li>

            </ol><!-- breadcrumb Ends -->

        </div><!-- col-lg-12 Ends -->

    </div><!-- 1 row Ends -->


    <div class="row">
        <!-- 2 row Starts -->

        <div class="col-lg-12">
            <!-- col-lg-12 Starts -->

            <div class="panel panel-default">
                <!-- panel panel-default Starts -->

                <div class="panel-heading">
                    <!-- panel-heading Starts -->

                    <h3 class="panel-title">
                        <!-- panel-title Starts -->

                        <i class="fa-solid fa-table"></i> </i> Editar Proveedor

                    </h3><!-- panel-title Ends -->

                </div><!-- panel-heading Ends -->

                <div class="panel-body">
                    <!-- panel-body Starts -->

                    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                        <!-- form-horizontal Starts -->

                        <div class="form-group">
                            <!-- form-group Starts -->

                            <label class="col-md-3 control-label"> Nombre </label>

                            <div class="col-md-6">

                                <input type="text" name="manufacturer_name" class="form-control" value="<?php echo $m_title; ?>">

                            </div>

                        </div><!-- form-group Ends -->

                        <div class="form-group">
                            <!-- form-group Starts -->

                            <label class="col-md-3 control-label"> </label>

                            <div class="col-md-6">

                                <input type="submit" name="update" class="form-control btn btn-primary" value=" Actualizar proveedor ">

                            </div>

                        </div><!-- form-group Ends -->

                    </form><!-- form-horizontal Ends -->

                </div><!-- panel-body Ends -->

            </div><!-- panel panel-default Ends -->

        </div><!-- col-lg-12 Ends -->

    </div><!-- 2 row Ends -->

    <?php

    if (isset($_POST['update'])) {

        $manufacturer_name = $_POST['manufacturer_name'];

        $update_manufacturer = "update manufacturers set manufacturer_title='$manufacturer_name' where manufacturer_id='$m_id'";

        $run_manufacturer = mysqli_query($db, $update_manufacturer);

        if ($run_manufacturer) {

            echo "<script>alert('Manufacturer Has Been Updated')</script>";

            echo "<script>window.open('index.php?view_manufacturers','_self')</script>";
        }
    }

    ?>

<?php } ?>