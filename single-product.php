<?php
session_start();

include("./include/db.php");
include("./include/functions.php");
?>

<?php

$product_id = @$_GET['pro_id'];

$get_product = "select * from products where `product_id`='$product_id'";

$run_product = mysqli_query($db, $get_product);

$check_product = mysqli_num_rows($run_product);

if ($check_product == 0) {

  echo "<script> window.open('index.php','_self') </script>";
} else {

  $row_product = mysqli_fetch_array($run_product);

  $pro_id = $row_product['product_id'];

  $pro_title = $row_product['product_title'];

  $pro_price = $row_product['product_price'];

  $pro_desc = $row_product['product_desc'];

  $pro_img = $row_product['product_img'];

  $pro_url = $row_product['product_url'];

?>

  <!DOCTYPE html>
  <html lang="en">

  <!-- header -->
  <?php
  include("./templates/header.html");
  ?>
  <!-- end of header -->

  <body>
    <!-- navbar -->
    <?php
    include("./templates/nav-bar.html");
    ?>
    <!-- end of navbar-->

    <!-- page hero -->
    <section class="page-hero">
      <div class="section-center">
        <h3 class="page-hero-title">Inicio / <?= $pro_title ?></h3>
      </div>
    </section>
    <!-- end of page hero -->

    <!-- product info -->
    <section class="single-product section">
      <div class="section-center single-product-center">
        <img src="./assets/images/<?= $pro_img ?>" class="single-product-img img" alt="" />
        <article class="single-product-info">
          <div>
            <h2 class="single-product-title"><?= $pro_title ?></h2>
            <p class="single-product-company text-slanted">by marcos</p>
            <span class="single-product-price"><?= $pro_price ?> €</span>
            <div class="single-product-colors">
              <span class="product-color"></span>
              <span class="product-color product-color-red"></span>
            </div>
            <p class="single-product-desc">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id,
              modi? Minima libero doloremque necessitatibus! Praesentium
              recusandae quod nesciunt animi voluptatem!
            </p>
            <button class="addToCartBtn btn" data-id="id">Añadir al carrito</button>
          </div>
        </article>
      </div>
    </section>

    <!-- sidebar -->
    <?php
    include("./templates/sidebar.html");
    ?>
    <!-- end of sidebar -->

    <!-- cart -->
    <?php
    include("./templates/cart.html");
    ?>
    <!-- end of cart -->

    <!-- footer -->
    <?php
    include("./templates/footer.html");
    ?>
    <!-- end of footer -->

    <!-- Javascript -->
    <script type="text/javascript" src="./JavaScript/app.js"></script>
  </body>

  </html>

<?php } ?>