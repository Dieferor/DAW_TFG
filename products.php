<?php
session_start();
include("./include/functions.php");
include("./include/db.php");
?>
<!DOCTYPE html>
<html lang="es">

<!-- header -->
<?php
include("./templates/header.php");
?>
<!-- end of header -->

<body>
  <!-- navbar -->
  <?php
  include("./templates/nav-bar.html");
  ?>
  <!-- end of navbar -->

  <!-- page hero -->
  <section class="page-hero">
    <div class="section-center">
      <h3 class="page-hero-title">Inicio / Productos</h3>
    </div>
  </section>
  <!-- end of page hero -->

  <!-- products -->
  <section class="products">
    <!-- filters -->
    <div class="filters">
      <div class="filters-container">
        <!-- search -->
        <form class="input-form">
          <input type="text" class="search-input" placeholder="search..." />
        </form>
        <!-- categories -->
        <h5>Marca</h5>
        <article class="companies">
          <button class="company-btn">todos</button>
          <button class="company-btn">flex</button>
          <button class="company-btn">salgar</button>
        </article>
        <!-- price -->
        <h5>Precio</h5>
        <form class="price-form">
          <input type="range" class="price-filter" min="0" value="50" max="100" />
        </form>
        <span class="price-value">Valor : $80</span>
      </div>
    </div>
    <!-- product list -->
    <div class="products-container">
      <!-- single product -->
      <?php getAllProducts() ?>
      <!-- end of single product -->
    </div>
  </section>
  <!-- end of products -->

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