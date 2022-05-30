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
      <h3 class="page-hero-title">Inicio / Acerca de</h3>
    </div>
  </section>
  <!-- end of page hero -->

  <!-- about -->
  <section class="section section-center">
    <div class="title">
      <span></span>
      <h2>Nuestra historia</h2>
      <span></span>
    </div>
    <p class="about-text">
      Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat
      accusantium sapiente tempora sed dolore esse deserunt eaque excepturi,
      delectus error accusamus vel eligendi, omnis beatae. Quisquam, dicta.
      Eos quod quisquam esse recusandae vitae neque dolore, obcaecati incidunt
      sequi blanditiis est exercitationem molestiae delectus saepe odio
      eligendi modi porro eaque in libero minus unde sapiente consectetur
      architecto. Ullam rerum, nemo iste ex, eaque perspiciatis nisi, eum
      totam velit saepe sed quos similique amet. Ex, voluptate accusamus
      nesciunt totam vitae esse iste.
    </p>
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