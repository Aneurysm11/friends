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
    <link rel="stylesheet" href="/assets/css/catalog.css">
    <link rel="stylesheet" href="/assets/css/header.css">
    <link rel="stylesheet" href="/assets/css/footer.css">
    <link rel="stylesheet" href="/assets/css/foot_page.css">
    <link rel="stylesheet" href="/assets/css/orderyep.css">
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
            <img class="imgyep" src="/assets/images/yepyep.png">
          <p class="yeptitle">Спасибо за заказ!</p>
          <p class="yeptext">Ваш заказ успешно оформлен.
                      Информация о заказе</br>отправлена на адрес Вашей
                     электронной почты. В ближайшее</br>время с вами 
                     свяжется наш менеджер.</p>
         <div class="yepl">
         <a class="yeplink" href="/pages/catalog.php">Продолжить покупки</a>
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