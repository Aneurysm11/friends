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
    <link rel="stylesheet" href="/assets//css//stock.css">
    <link rel="stylesheet" href="/assets/css/header.css">
    <link rel="stylesheet" href="/assets/css/footer.css">
    <link rel="stylesheet" href="/assets/css/foot_page.css">
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
          <div class="warr__title">Акции</div>
              <div class="warr__suptitle">
                  <div class="wsupone"><a href="/index.php">Главная</a></div>
                  <div class="wsuptwo"><hr class="hrw" width="30px" color="#000000" size="3px"></div>
                  <div class="wsupthree"><p>Акции</p></div>
              </div>
             <div class="cata">
                  <?php
                       $stock = get_stock();
                    ?>
                <div class="contentcatalogs">
                  <?php foreach ($stock as $st): ?>
                    <div class="courses-container">
	                   <div class="course">
		                   <div class="course-preview">
                         <img class="img__product" src="<?=$st['image']?>">
		                   </div>
		                   <div class="course-info">
			                   <h6><p class="tt"><?=$st['product_name']?></p></h6>
			                   <h2><p class="oldpricee"><?php echo $st['old_price'] ?>₽</p></h2>
                            <h4><p class="newpricee"><?=$st['price']?>₽</p></h4>
                            <h4><p class="que">Товара в наличии: <?=$st['balance']?>шт.</p></h4>
			                   <a href="/pages/product_description.php?id= <?=$st['id']?>" class="btnn">Описание</a>
                            <a href="/pages//cart.php?product_id=<?php echo $st['id']?>" class="btn">Добавить в корзину</a>
		                   </div>
	                   </div>
                    </div>
                  <?php endforeach; ?>
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