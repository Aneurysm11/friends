<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700;800;900&display=swap" rel="stylesheet">
    <title>Контакты</title>
    <link rel="stylesheet" href="/assets/css/page.css">
    <link rel="stylesheet" href="/assets/css/contacts.css">
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
          <div class="warr__title">Контакты</div>
              <div class="warr__suptitle">
                  <div class="wsupone"><a href="/index.php">Главная</a></div>
                  <div class="wsuptwo"><hr class="hrw" width="30px" color="#000000" size="3px"></div>
                  <div class="wsupthree"><p>Контакты</p></div>
              </div>
              <div class="cont">
                  <div class="map">
                       <a class="dg-widget-link" 
                       href="http://2gis.ru/petrozavodsk/profiles/70000001018538340,70000001040438961,
                       11259527349404335,11259528350033048,11259528349703226,70000001033950491,
                       70000001052450334,70000001039797852/center/34.339828491210945,
                       61.78286408233296/zoom/13?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=bigMap">
                       Посмотреть на карте Петрозаводска</a>
                       <script 
                          charset="utf-8" 
                          src="https://widgets.2gis.com/js/DGWidgetLoader.js">
                       </script>
                       <script charset="utf-8">
                       new DGWidgetLoader({"width":540,"height":500,"borderColor":"#a3a3a3","pos":
                       {"lat":61.78286408233296,"lon":34.339828491210945,"zoom":12}
                       ,"opt":{"city":"petrozavodsk"},"org":[{"id":"70000001018538340"},
                       {"id":"70000001040438961"},{"id":"11259527349404335"},
                       {"id":"11259528350033048"},{"id":"11259528349703226"},{"id":"70000001033950491"},
                       {"id":"70000001052450334"},{"id":"70000001039797852"}]});
                       </script>
                       <noscript style="color:#c00;font-size:16px;font-weight:bold;">
                       Виджет карты использует JavaScript. Включите его в настройках вашего браузера.
                       </noscript>
                  </div>
                  <div class="cont_info">
                      <!-- Основной адрес -->
                      <div class="address">
                          <p class="info_title">Наш адрес:</p>
                          <p class="add">185000, г. Петрозаводск, ул. Ровио, д. 20</p>
                      </div>
                      <!-- Филиалы -->
                      <div class="branch">
                          <p class="info_title">Филиалы:</p> 
                          <p class="branch_add">185030, г. Петрозаводск, пр. Александра Невского, д. 56</p>
                          <p class="branch_add">185035, г. Петрозаводск, пр. Ленина, д. 36</p>
                          <p class="branch_add">185035, г. Петрозаводск, ул. Андропова, д. 9</p>
                          <p class="branch_add">184014, г. Петрозаводск, Берёзовая аллея, д. 25</p>
                          <p class="branch_add">185016, г. Петрозаводск, Бульвар Интернационалистов, д. 13</p>
                          <p class="branch_add">185001, г. Петрозаводск, пр. Первомайский, д. 36</p>
                          <p class="branch_add">185031, г. Петрозаводск, пр. Октябрьский, д. 13</p>
                      </div>
                      <!-- Телефон -->
                      <div class="phone">
                          <p class="info_title">Телефон:</p>
                          <p class="phones">8 (921) 228-29-90</p>
                      </div>
                      <div class="socialnetworks">
                          <p class="info_title">Социальные сети:</p>
                          <a  href="https://vk.com/kareliazoo"><p class="socn">Группа интернет-магазина VK</p></a>
                          <a  href="https://vk.com/vernye_druzja"><p class="socn">Зооцентр ВЕРНЫЕ ДРУЗЬЯ VK</p></a>
                          <a  href="https://vk.com/veterinarnaya_apteka"><p class="socn">Ветеринарна аптека ВЕРНЫЕ ДРУЗЬЯ VK</p></a>
                      </div>
                      <div class="online_store">
                          <p class="info_title">Интернет-магазин</p>
                          <a href="https://karelia-zoo.ru/"><p class="onlstore">Karelia-zoo</p></a>
                      </div>
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