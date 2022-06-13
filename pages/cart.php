<?php 
   session_start();
   include "/Server/data/htdocs/www/vendor/connect.php";
   include "/Server/data/htdocs/www/vendor/function.php";

//    Для акций
   if (isset($_GET['delete_id']) && isset($_SESSION['cart_list'])) {
           foreach ($_SESSION['cart_list'] as $key => $value) {
               if ($value['id'] == $_GET['delete_id']) {
                   unset($_SESSION['cart_list'][$key]);
               }
           }
   }
   if (isset($_GET['product_id']) && !empty($_GET['product_id'])) {
       $added_product = get_product_by_id($_GET['product_id']);
       if (!empty($added_product)) {
           if (!isset($_SESSION['cart_list'])) {
               $_SESSION['cart_list'][] = $added_product;
           }
           $product_check = false;
           if (isset($_SESSION['cart_list'])) {
               foreach ($_SESSION['cart_list'] as $value) {
                   if ($value['id'] == $added_product['id']) {
                       $product_check = true;
                   }
               }
           }
           if (!$product_check) {
               $_SESSION['cart_list'][] = $added_product;
           }
       } else {
       }
   }
//    Для основных товаров
if (isset($_GET['delete_id']) && isset($_SESSION['cart_list'])) {
    foreach ($_SESSION['cart_list'] as $key => $value) {
        if ($value['id'] == $_GET['delete_id']) {
            unset($_SESSION['cart_list'][$key]);
        }
    }
}
if (isset($_GET['product_id']) && !empty($_GET['product_id'])) {
$added_producta = get_catproduct_by_id($_GET['product_id']);
if (!empty($added_producta)) {
    if (!isset($_SESSION['cart_list'])) {
        $_SESSION['cart_list'][] = $added_producta;
    }
    $product_check = false;
    if (isset($_SESSION['cart_list'])) {
        foreach ($_SESSION['cart_list'] as $value) {
            if ($value['id'] == $added_producta['id']) {
                $product_check = true;
            }
        }
    }
    if (!$product_check) {
        $_SESSION['cart_list'][] = $added_producta;
    }
} else {
}
}
?>
<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;700;800;900&display=swap" rel="stylesheet">
    <title>Корзина товаров</title>
    <link rel="stylesheet" href="/assets/css/page.css">
    <link rel="stylesheet" href="/assets/css/header.css">
    <link rel="stylesheet" href="/assets/css/footer.css">
    <link rel="stylesheet" href="/assets/css/foot_page.css">
    <link rel="stylesheet" href="/assets/css/order.css">
 </head>
 <body>
  <!-- Главная страница сайта -->
   <div class="wrapper">
       <!-- Шапка -->
      <header class="header">
         <div class="header__container _container">
         <?php include "../header.php" ?>
         </div>
      </header>
      <main class="page">
          <div class="contentW _container">
              <div class="cart__head">
              <div class="warr__title">Корзина</div>
              <div class="warr__suptitle">
                  <div class="wsupone"><a href="/index.php">Главная</a></div>
                  <div class="wsuptwo"><hr class="hrw" width="30px" color="#000000" size="3px"></div>
                  <div class="wsupthree"><p>Корзина</p></div>
              </div>
                 <p class="kolvo_pr">
                     <?php if (isset($_SESSION['cart_list'])) {
                        echo "Товаров в корзине: " . count($_SESSION['cart_list']) . " шт.";
                      } ?>
                 </p>
              </div>
              <?php if (isset($_SESSION['cart_list']) && count($_SESSION['cart_list']) != 0) :?>
                <?php $itog = 0;?>
                <ul class="cartcart">
                    <?php $a = 0;?>
                    <?php foreach($_SESSION['cart_list'] as $product) : ?>
                        <li>
                            <div class="product_in_cart" id="<?php echo $a?>">
                                <img class="pr_cart_image" src="<?php echo $product['image'];?>">
                                <p class="pr_cart_name"><?php echo $product['product_name'];?></p>
                                <p class="bal_cart_name">Остаток товара: <?php echo $product['balance'];?>шт.</p>
                                <div class="itemss counter-wrapper">
                                   <div class="items__control" data-action="minusfive">-5</div>
                                   <div class="items__control" data-action="minus">-1</div>
                                   <div class="item__current" data-counter>1</div>
                                   <div class="items__control" data-action="plus">+1</div>
                                   <div class="items__control" data-action="plusfive">+5</div>
                               </div>
                               <div class="price">
                                <p class="pr_cart_price"><?php echo $product['price'];?></p>
                                <p class="pr_cart_price">₽</p>
                               </div>
                                <!-- нужно чтобы это число выводилось в форме-->
                                <a class="pr_cart_button" href="/pages/cart.php?delete_id=<?php echo $product['id'];?>">Удалить</a>
                                <?php $a=$a+1;?>
                        </li>
                        <?php endforeach; ?>
                        <div class="podval">
                        <div class="itog">
                        <p class="tot_pr">Итоговая сумма: </p>
                        <p id = "tp" class="total-price"><script>calcCart();</script></p><p class="tot_pr">₽</p>
                        </div>
                        <div class="per">
                        <a class="linkone" href="/index.php">Продолжить покупки</a>

                        <a data-order class="linktwo" href="/pages/order.php">Оформить заказ</a>
                        
                        </div>
                        </div>

                </ul>
                <?php else : ?>
                    <div class="empty__cart">
                        <img class="emptycart" src="/assets/images/cart.png">
                        <p class="empty">Ваша корзина</p>
                        <a class="continue_shop" href="/index.php">Продолжить покупки</a>
                    </div>
                    <?php endif; ?> 
          </div>
      </main>
      <!-- Подвальная часть -->
      <footer class="footer">
         <div class="_container">
            <?php include "../footer.php"?>
         </div>
      </footer>
   </div>
 </body>
 
 </script>
</html>