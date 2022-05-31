<?php
session_start();
include($_SERVER['DOCUMENT_ROOT']."/include/functions.php");
include($_SERVER['DOCUMENT_ROOT']."/include/db.php");
$_SERVER['DOCUMENT_ROOT'];

?>

<!DOCTYPE html>
<html lang="es">
<meta charset="utf-8" />

<!-- header -->
<?php
include($_SERVER['DOCUMENT_ROOT']."/templates/header.php");
?>
<!-- end of header -->

<body>
  <!-- navbar -->
  <?php
  include($_SERVER['DOCUMENT_ROOT']."/templates/nav-bar.html");
  ?>
  <!-- end of navbar -->

  <!-- home screen -->
  <div class="home">
    <div class="banner">
      <h1 class="banner-title">Carpintería Valdebría</h1>
      <button class="banner-btn"><a href="$_SERVER['DOCUMENT_ROOT']/products.php">Compra online</a></button>
    </div>
  </div>
  <!-- end of home screen -->

  <!-- featured products -->
  <section class="section featured">
    <div class="title">
      <span></span>
      <h2>Destacados</h2>
      <span></span>
    </div>
    <div class="section-center featured-center">
      <!-- single product -->
      <div class="products-center">
        <?php getFeaturedProducts() ?>
      </div>
      <!-- end of single product -->
    </div>
    <a href="products.php" class="btn"> Catálogo completo </a>
  </section>
  <!-- end of featured products -->

  <!-- sidebar -->
  <?php
  include($_SERVER['DOCUMENT_ROOT']."/templates/sidebar.html");
  ?>
  <!-- end of sidebar -->

  <!-- cart -->
  <?php
  include($_SERVER['DOCUMENT_ROOT']."/templates/cart.html");
  ?>
  <!-- end of cart -->

  <!-- footer -->
  <?php
  include($_SERVER['DOCUMENT_ROOT']."/templates/footer.html");
  ?>
  <!-- end of footer -->

  <!-- Javascript -->
  <script type="text/javascript" src="./JavaScript/app.js"></script>
</body>

</html>