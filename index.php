<?php
session_start();
include("functions.php");
include("db.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Carpintería/Mueblería CARVAL</title>
  <!-- font awesome -->
  <script src="https://kit.fontawesome.com/3c448482ea.js" crossorigin="anonymous"></script>
  <!-- Css -->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/styles.css"/>
  
</head>

<body>
  <!-- navbar -->
  <nav class="navbar">
    <div class="nav-center">
      <!-- logo -->
      <img src="./assets/images/logoCarval.png" class="nav-logo" alt="CARVAL logo">
      <!-- links -->
      <div>
        <button class="toggle-nav">
          <i class="fas fa-bars"></i>
        </button>
        <ul class="nav-links">
          <li>
            <a href="index.php" class="nav-link"> Inicio </a>
          </li>
          <li>
            <a href="products.html" class="nav-link"> Productos </a>
          </li>
          <li>
            <a href="about.html" class="nav-link"> Acerca de </a>
          </li>
        </ul>
      </div>      
      <!-- cart icon -->
      <div class="toggle-container">
          <button class="toggle-cart">
            <i class="fas fa-shopping-cart"></i>
          </button>
          <span class="cart-item-count">1</span>
      </div>
    </div>
  </nav>
  <!-- end of navbar -->
  
  <!-- home screen -->
  <div class="home">
    <div class="banner">
      <h1 class="banner-title">Carpintería Valdebría</h1>
      <button class="banner-btn">Compra online</button>
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
        <?php getPro() ?>
      </div>
      <!-- end of single product -->     
    </div>
    <a href="products.html" class="btn"> Catálogo completo </a>
  </section>
  <!-- end of featured products -->
  <!-- sidebar -->
  <div class="sidebar-overlay">
      <aside class="sidebar">
        <!-- close -->
        <button class="sidebar-close">
          <i class="fas fa-times"></i>
        </button>
        <!-- links -->
        <ul class="sidebar-links">
          <li>
            <a href="index.html" class="sidebar-link">
              <i class="fas fa-home fa-fw"></i>
              home
            </a>
          </li>
          <li>
            <a href="products.html" class="sidebar-link">
              <i class="fas fa-couch fa-fw"></i>
              products
            </a>
          </li>
          <li>
            <a href="about.html" class="sidebar-link">
              <i class="fas fa-book fa-fw"></i>
              about
            </a>
          </li>
        </ul>
      </aside>
    </div>
  <!-- cart -->
  <div class="cart-overlay">
    <div class="cart">
      <button class="close-cart">
        <i class="fas fa-window-close"></i>
      </button>
        <h2>Tu cesta</h2>
        <div class="cart-content">
          <!-- cart item -->
          <article class="cart-item">
            <img
              src="./assets/images/product-1.jpeg" alt="product"
              class="cart-item-img"
              alt="product"
            />
            <div class="cart-item-info">
              <h5 class="cart-item-name">cama de matrimonio</h5>
              <span class="cart-item-price">1299€</span>
              <button class="cart-item-remove-btn">eliminar</button>
            </div>
            <div>
              <button class="cart-item-increase-btn">
                <i class="fas fa-chevron-up"></i>
              </button>
              <span class="cart-item-amount">1</span>
              <button class="cart-item-decrease-btn">
                <i class="fas fa-chevron-down"></i>
              </button>
            </div>
          </article>
          <!-- end of cart item -->         
        </div>
        <div class="cart-footer">
          <h3>total : <span class="cart-total">0 €</span></h3>
          <button class="clear-cart banner-btn">borrar artículos</button>
        </div>
      </button>
    </div>
  </div>
  <!-- end of cart -->
  <!-- Javascript -->
  <script type="text/javascript" src="./app.js"></script> 
</body>

</html>
>