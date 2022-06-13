<?php
  session_start();
  include "/Server/data/htdocs/www/vendor/connect.php";
  include "/Server/data/htdocs/www/vendor/function.php";

  if (isset($_POST['product_id'])){
    $added_product = get_product_by_id($_POST['product_id']);
    $added_producta = get_catproduct_by_id($_POST['product_id']);
    $current_cart_value = 0;
      if (!isset($_SESSION['cart_list'])) {
          $_SESSION['cart_list'][] = $added_product;
          $current_cart_value = count($_SESSION['cart_list']);
      }
      $product_check = false;
      if (isset($_SESSION['cart_list'])){
          foreach ($_SESSION['cart_list'] as $value) {
              if ($value['id'] == $added_product['id'] ) {
                  $product_check = true;
              }
          }
          if (!$product_check) {
            $_SESSION['cart_list'][] = $added_product;
        }
          $current_cart_value = count($_SESSION['cart_list']);
      }
      echo $current_cart_value;
  }
  


  