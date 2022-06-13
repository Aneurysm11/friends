<?php
   session_start(); 
   include "/Server/data/htdocs/www/vendor/function.php";

?>
<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;700;800;900&display=swap" rel="stylesheet">
    <title>Описание товара</title>
    <link rel="stylesheet" href="/assets/css/page.css">
    <link rel="stylesheet" href="/assets/css/header.css">
    <link rel="stylesheet" href="/assets/css/footer.css">
    <link rel="stylesheet" href="/assets/css/foot_page.css">
    <link rel="stylesheet" href="/assets/css/catalog.css">
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
             <?php 
               include "/Server/data/htdocs/www/vendor/connect.php";

               if (isset($_GET['id'])) {
                  $query = "SELECT * FROM `products` WHERE id=" . $_GET['id'];
                  $req = mysqli_query($connect, $query);
                  $product = mysqli_fetch_assoc($req);
                  
                  if (empty($product)){
                     printf("Страница не найдена");
                  }
               }
             ?>
           <div class="discription">
           <div class="warr__title">Описание товара "<?php echo  $product['product_name'];?>" </div>
              <div class="warr__suptitle">
                  <div class="wsupone"><a href="/index.php">Главная</a></div>
                  <div class="wsuptwo"><hr class="hrw" width="30px" color="#000000" size="3px"></div>
                  <div class="wsupthree"><p><?php echo $product['product_name'];?></p></div>
              </div>
              <div class="discr">
                 <div class="discr_block_image">
                    <img class="descr__img" src="<?php echo $product['image']?>">
                 </div>
                 <div class="discr_block">
                     <div class="d__block">
                        <div class="pr_name">
                           <?php echo $product['product_name']?>
                        </div>
                     </div>
                     <div class="d__block">
                        <div class="pr_disc">
                           <?php echo $product['product_description']?>
                        </div>
                     </div>
                     <div class="d__block">
                        <div class="disc_price">
                           <p class="new_price"><?php echo $product['price']?>₽</p>
                        </div>
                        <div class="kolvopr">
                        <p class="kolvo">В наличии:  <?php echo $product['balance']?>шт.</p>
                        </div>
                        <div class="m">
                        <?php if($product['balance'] > 0): ?>
                            <a href="/pages//cart.php?product_id=<?=$product['id']?>" class="button">Добавить в корзину</a>
                            <?php else: ?>
                              <a href="#" class="buttonnon">Товара нет в наличии</a>
                              <?php endif; ?>
                     </div>
                     </div>
                 </div>
              </div>
           </div>
          
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
</html>