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
          <?php
                 include "/Server/data/htdocs/www/vendor/function.php";
                 if (isset($_GET['id'])) {
                  $query = "SELECT * FROM `news` WHERE id=" . $_GET['id'];
                  $req = mysqli_query($connect, $query);
                  $news = mysqli_fetch_assoc($req);
                  
                  if (empty($news)){
                     printf("Страница не найдена");
                  }
               }
              ?>
              <div class="warr__title"><?php echo $news['name']; ?></div>
              <div class="warr__suptitle">
                  <div class="wsupone"><a href="/index.php">Главная</a></div>
                  <div class="wsuptwo"><hr class="hrw" width="30px" color="#000000" size="3px"></div>
                  <div class="wsupthree"><a href="/pages//news.php">Новости</a></div>
                  <div class="wsuptwo"><hr class="hrw" width="30px" color="#000000" size="3px"></div>
                  <div class="wsupthree"><p><?php echo $news['name']; ?></p></div>
              </div>
              <div class="newsnews">
                     <div class="news_descr_img">
                       <img src="<?=$news['image']?>" class="news__img">
                     </div>
                     <div class="news_desc_content">
                       <div class="news__title">
                         <h1 class="news_name"><?=$news['name']?></h1>
                       </div>
                       <p class="news_desc_desc"><?=$news['full_dis']?></p>
                     </div>
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