<?php
include('db.php');

function getPro(){

  global $db;
  $get_products = "SELECT * FROM products ";

  $run_products = mysqli_query($db, $get_products);

  while ($row_products = mysqli_fetch_array($run_products)) {
    $pro_id = $row_products['product_id'];

    $pro_title = $row_products['product_title'];

    $pro_price = $row_products['product_price'];

    $pro_img = $row_products['product_img'];

    echo "        
        <article class='product'>
          <div class='img-container'>
            <img src='./assets/images/$pro_img' alt='product' class='product-img'>
            <button class='basket-btn' data-id='$pro_id'>
              <i class='fas fa-shopping-cart'></i>
              añadir a la cesta
            </button>            
          </div>
          <footer>
            <h5 class='product-name'>$pro_title</h5>
            <span class='product-price'>$pro_price €</span>
          </footer>          
        </article>        
        ";
  }
}
