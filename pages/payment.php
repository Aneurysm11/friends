<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;700;800;900&display=swap" rel="stylesheet">
    <title>Оплата</title>
    <link rel="stylesheet" href="/assets/css/page.css">
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
              <div class="warr__title">Оплата</div>
              <div class="warr__suptitle">
                  <div class="wsupone"><a href="/index.php">Главная</a></div>
                  <div class="wsuptwo"><hr class="hrw" width="30px" color="#000000" size="3px"></div>
                  <div class="wsupthree"><p>Оплата</p></div>
              </div>
              <div class="w__text">
                 <p class="wtext">
                 <?php 
                    session_start();
                    include "/Server/data/htdocs/www/vendor/connect.php";

                    $result = mysqli_query($connect, "SELECT * FROM `payment`");
                    $warran = mysqli_fetch_assoc($result);
                    echo $warran['text'];
                 ?>
                 </p>
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