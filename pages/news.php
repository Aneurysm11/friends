<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700;800;900&display=swap" rel="stylesheet">
    <title>Новости</title>
    <link rel="stylesheet" href="/assets/css/page.css">
    <link rel="stylesheet" href="/assets//css//news.css">
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
         <?php include "/Server/data/htdocs/www/header.php" ?>
         </div>
      </header>
      <!-- Основная часть -->
      <main class="page">
          <div class="contentW _container">
              <div class="warr__title">Новости</div>
              <div class="warr__suptitle">
                  <div class="wsupone"><a href="/index.php">Главная</a></div>
                  <div class="wsuptwo"><hr class="hrw" width="30px" color="#000000" size="3px"></div>
                  <div class="wsupthree"><p>Новости</p></div>
              </div>
              <?php
                 include "/Server/data/htdocs/www/vendor/function.php";
                 $news = get_news();
              ?>
              <div>
                  <?php foreach($news as $new) :?>
                     <figure class="news">
                        <div class="news_img">
                           <img src="<?=$new['image']?>" class="news__img">
                        </div>
                        <div class="news__content">
                           <div class="news__title">
                              <h1 class="news_name"><?=$new['name']?></h1>
                           </div>
                           <p class="news__desc"><?=$new['short_dis']?></p>
                        </div>
                        <a href="/pages/page_news.php?id=<?php echo $new['id']?>" class="news_full">Подробнее</a>
                     </figure>
                  <?php endforeach; ?>
              </div>
          </div>
      </main>
      <!-- Подвальная часть -->
      <footer class="footer">
         <div class="_container">
            <?php include "/Server/data/htdocs/www/footer.php"?>
         </div>
      </footer>
   </div>
 </body>
</html>