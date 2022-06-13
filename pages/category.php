<?php 
session_start();

   include "/Server/data/htdocs/www/vendor/connect.php";
   include "/Server/data/htdocs/www/vendor/function.php";
   include "/Server/data/htdocs/www/vendor/const.php";
   ?>
<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;700;800;900&display=swap" rel="stylesheet">
    <title>Каталог</title>
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
          <div class="warr__title">Каталог</div>
              <div class="warr__suptitle">
                  <div class="wsupone"><a href="/index.php">Главная</a></div>
                  <div class="wsuptwo"><hr class="hrw" width="30px" color="#000000" size="3px"></div>
                  <div class="wsupthree"><p>Каталог</p></div>
              </div>
             <div class="cata">
                <div class="sidebar">
                   <?php
                      echo renderTemplate('/Server/data/htdocs/www/vendor/template.php', ['cats'=>$cats]);
                    ?>
                  </div><a href=""></a>
                  <?php
                       $category_id = $_GET['id'];
                       $prod = get_prod_by_category($category_id);
                       $all_prod = get_main_category($category_id);
                    ?>
                <div class="content"> 
                <?php if($category_id != 1): 
                      foreach ($prod as $pr) : ?>
                   <div class="f">
                      <div class="g">
                         <img class="g_img" src="<?=$pr['image']?>">
                        </div>
                      <div class="h">
                         <div class="i">
                            <p class="i_name"><?=$pr['product_name']?></p>
                         </div>
                         <div class="j">
                            <div class="k">
                               <p class="k_price"><?=$pr['price']?>₽</p>
                            </div>
                            <div class="l"><a href="/pages/pr_dis.php?id= <?=$pr['id']?>" class="button">
                                  Описание товара
                                 </a></div>
                            <div class="m">
                            <?php if($pr['balance'] > 0): ?>
                            <a href="/pages//cart.php?product_id=<?=$pr['id']?>" class="button">Добавить в корзину</a>
                            <?php else: ?>
                              <a href="#" class="buttonnon">Товара нет в наличии</a>
                              <?php endif; ?>
                           </div>
                         </div>
                      </div>
                   </div>
                   <?php endforeach; ?>
                 <?php elseif ($category_id = 1) :
                   foreach ($all_prod as $ap): ?>
                   <div class="f">
                      <div class="g">
                         <img class="g_img" src="<?=$ap['image']?>">
                        </div>
                      <div class="h">
                         <div class="i">
                            <p class="i_name"><?=$ap['product_name']?></p>
                         </div>
                         <div class="j">
                            <div class="k">
                               <p class="k_price"><?=$ap['price']?>₽</p>
                            </div>
                            <div class="l"><a href="/pages/pr_dis.php?id= <?=$ap['id']?>" class="button">
                                  Описание товара
                                 </a></div>
                            <div class="m">
                            <?php if($ap['balance'] > 0): ?>
                            <a href="/pages//cart.php?product_id=<?=$ap['id']?>" class="button">Добавить в корзину</a>
                            <?php else: ?>
                              <a href="#" class="buttonnon">Товара нет в наличии</a>
                              <?php endif; ?>
                           </div>
                         </div>
                      </div>
                   </div>
                <?php endforeach; 
                 endif;?>
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
   <script src="/js//jquery-1.9.0.min.js"></script>
   <script src="/js//jquery.accordion.js"></script>
   <script src="/js//jquery.cookie.js"></script>
 </body>
</html>