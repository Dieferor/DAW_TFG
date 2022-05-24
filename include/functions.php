<?php

$db = mysqli_connect("localhost","root","","carval_db");

function getRealUserIp()
{
  switch (true) {
    case (!empty($_SERVER['HTTP_X_REAL_IP'])):
      return $_SERVER['HTTP_X_REAL_IP'];
    case (!empty($_SERVER['HTTP_CLIENT_IP'])):
      return $_SERVER['HTTP_CLIENT_IP'];
    case (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])):
      return $_SERVER['HTTP_X_FORWARDED_FOR'];
    default:
      return $_SERVER['REMOTE_ADDR'];
  }
}

function getFeaturedProducts()
{

  global $db;
  $get_products = "SELECT * FROM products WHERE `product_featured` is true";

  $run_products = mysqli_query($db, $get_products);

  while ($row_products = mysqli_fetch_array($run_products)) {
    $pro_id = $row_products['product_id'];

    $pro_title = $row_products['product_title'];

    $pro_price = $row_products['product_price'];

    $pro_img = $row_products['product_img'];

    echo "        
        <article class='product'>
          <div class='img-container'>
          <a href='single-product.php?pro_id=$pro_id'><img src='./assets/images/$pro_img' alt='product' class='product-img'></a>
            <button class='basket-btn' data-id='$pro_id'>
              <i class='fas fa-shopping-cart'></i>
              añadir a la cesta
            </button>            
          </div>
          <footer>
            <h5><a class='product-name' href='single-product.php?pro_id=$pro_id' >$pro_title</a></h5>
            <span class='product-price'>$pro_price €</span>
          </footer>          
        </article>        
        ";
  }
}

function getAllProducts()
{
  global $db;
  $get_products = "SELECT * FROM products";
  $run_products = mysqli_query($db, $get_products);

  while ($row_products = mysqli_fetch_array($run_products)) {
    $pro_id = $row_products['product_id'];

    $pro_title = $row_products['product_title'];

    $pro_price = $row_products['product_price'];

    $pro_img = $row_products['product_img'];

    echo "
  <article class='product'>
    <div class='product-container'>
      <a href='single-product.php?pro_id=$pro_id' ><img src='./assets/images/$pro_img' alt='product' class='product-img'></a>      
      <div class='product-icons'>
        <a href='single-product.php?pro_id=$pro_id' class='product-icon'>
          <i class='fas fa-search'></i>
        </a>
        <button class='product-cart-btn product-icon' data-id='$pro_id'>
          <i class='fas fa-shopping-cart'></i>
        </button>
      </div>
    </div>
    <footer>
      <h5><a class='product-name' href='single-product.php?pro_id=$pro_id' >$pro_title</a></h5>
      <span class='product-price'>$pro_price</span>
    </footer>
  </article>
  ";
  }
}

function getSingularProduct(){

}
