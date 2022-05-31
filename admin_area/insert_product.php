<?php

if (!isset($_SESSION['admin_email'])) {

  echo "<script>window.open('login.php','_self')</script>";
} else {

?>
  <!DOCTYPE html>

  <html>

  <head>

    <title> Insert Products </title>


    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>
      tinymce.init({
        selector: '#product_desc,#product_features'
      });
    </script>

  </head>

  <body>

    <div class="row">
      <!-- row Starts -->

      <div class="col-lg-12">
        <!-- col-lg-12 Starts -->

        <ol class="breadcrumb">
          <!-- breadcrumb Starts -->

          <li class="active">

            <i class="fa fa-dashboard"> </i> Bandeja de entrada / Añadir producto

          </li>

        </ol><!-- breadcrumb Ends -->

      </div><!-- col-lg-12 Ends -->

    </div><!-- row Ends -->


    <div class="row">
      <!-- 2 row Starts -->

      <div class="col-lg-12">
        <!-- col-lg-12 Starts -->

        <div class="panel panel-default">
          <!-- panel panel-default Starts -->

          <div class="panel-heading">
            <!-- panel-heading Starts -->

            <h3 class="panel-title">

              <i class="fa-solid fa-table"></i></i> Añadir producto

            </h3>

          </div><!-- panel-heading Ends -->

          <div class="panel-body">
            <!-- panel-body Starts -->

            <form class="form-horizontal" method="post" enctype="multipart/form-data">
              <!-- form-horizontal Starts -->

              <div class="form-group">
                <!-- form-group Starts -->

                <label class="col-md-3 control-label"> Nombre </label>

                <div class="col-md-6">

                  <input type="text" name="product_title" class="form-control" required>

                </div>

              </div><!-- form-group Ends -->

              <div class="form-group">
                <!-- form-group Starts -->

                <label class="col-md-3 control-label"> Selecciona un proveedor </label>

                <div class="col-md-6">

                  <select class="form-control" name="manufacturer">
                    <!-- select manufacturer Starts -->

                    <option> Selecciona un proveedor </option>

                    <?php

                    $get_manufacturer = "select * from manufacturers";
                    $run_manufacturer = mysqli_query($db, $get_manufacturer);
                    while ($row_manufacturer = mysqli_fetch_array($run_manufacturer)) {
                      $manufacturer_id = $row_manufacturer['manufacturer_id'];
                      $manufacturer_title = $row_manufacturer['manufacturer_title'];

                      echo "<option value='$manufacturer_id'>
                            $manufacturer_title
                            </option>";
                    }

                    ?>

                  </select><!-- select manufacturer Ends -->

                </div>

              </div><!-- form-group Ends -->

              <div class="form-group">
                <!-- form-group Starts -->

                <label class="col-md-3 control-label"> Imagen </label>

                <div class="col-md-6">

                  <input type="file" name="product_img" class="form-control" required>

                </div>

              </div><!-- form-group Ends -->

              <div class="form-group">
                <!-- form-group Starts -->

                <label class="col-md-3 control-label"> Precio </label>

                <div class="col-md-6">

                  <input type="text" name="product_price" class="form-control" required>

                </div>

              </div><!-- form-group Ends -->

              <div class="form-group">
                <!-- form-group Starts -->

                <label class="col-md-3 control-label"> Descripción </label>

                <div class="col-md-6">

                  <ul class="nav nav-tabs">
                    <!-- nav nav-tabs Starts -->

                    <li class="active">

                      <a data-toggle="tab" href="#description"> Descripción de producto </a>

                    </li>

                  </ul><!-- nav nav-tabs Ends -->

                  <div class="tab-content">
                    <!-- tab-content Starts -->

                    <div id="description" class="tab-pane fade in active">
                      <!-- description tab-pane fade in active Starts -->

                      <br>

                      <textarea name="product_desc" class="form-control" rows="15" id="product_desc"></textarea>

                    </div><!-- video tab-pane fade in Ends -->

                  </div><!-- tab-content Ends -->

                </div>

              </div><!-- form-group Ends -->

              <div class="form-group">
                <!-- form-group Starts -->

                <label class="col-md-3 control-label"></label>

                <div class="col-md-6">

                  <input type="submit" name="submit" value="Añadir producto" class="btn btn-primary form-control">

                </div>

              </div><!-- form-group Ends -->

            </form><!-- form-horizontal Ends -->

          </div><!-- panel-body Ends -->

        </div><!-- panel panel-default Ends -->

      </div><!-- col-lg-12 Ends -->

    </div><!-- 2 row Ends -->

  </body>

  </html>

  <?php

  if (isset($_POST['submit'])) {

    $product_title = $_POST['product_title'];
    $manufacturer_id = $_POST['manufacturer'];
    $product_price = $_POST['product_price'];
    $product_desc = $_POST['product_desc'];

    $product_img = $_FILES['product_img']['name'];

    $temp_name = $_FILES['product_img']['tmp_name'];

    move_uploaded_file($temp_name, "/carval-ecommerce/assets/images/$product_img");

    $insert_product = "insert into products (`product_title`, `product_img`, `product_price`, `product_desc`, `product_featured`, `manufacturer_id`) values ('$product_title','$product_img','$product_price','$product_desc', false, '$manufacturer_id')";

    $run_product = mysqli_query($db, $insert_product);

    if ($run_product) {

      echo "<script>alert('Producto añadido con éxito')</script>";

      echo "<script>window.open('index.php?view_products','_self')</script>";
    } else {
      $e = new \Exception;
      var_dump($e->getTraceAsString());
    }
  }

  ?>

<?php } ?>