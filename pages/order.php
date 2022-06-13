<?php 
   session_start();
   include "/Server/data/htdocs/www/vendor/connect.php"; 
   include "/Server/data/htdocs/www/vendor/list.php"; ?>
<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;700;800;900&display=swap" rel="stylesheet">
    <title>Ваш заказ</title>
    <link rel="stylesheet" href="/assets/css/page.css">
    <link rel="stylesheet" href="/assets//css//reg_log.css">
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
              <div class="warr__title">Оформление заказа</div>
              <div class="warr__suptitle">
                  <div class="wsupone"><a href="/index.php">Главная</a></div>
                  <div class="wsuptwo"><hr class="hrw" width="30px" color="#000000" size="3px"></div>
                  <div class="wsupone"><a href="/pages/cart.php">Корзина</a></div>
                  <div class="wsuptwo"><hr class="hrw" width="30px" color="#000000" size="3px"></div>
                  <div class="wsupthree"><p>Оформление заказа</p></div>
              </div>
              </div>
              <div class="infot"><p>Информация о заказе:</p></div>
              <div class="order__title">
                 <p class="titlest">
                     <?php if (isset($_SESSION['cart_list'])) {
                        echo "Количество товаров:&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;
                        " . count($_SESSION['cart_list']) . " шт.";
                      } ?>
                 </p>
                  <div class="results">
                     <div class="titlest">
                  <p>Общая стоимость:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                     </div>
                     
                     <div class="titlest">
                  <p class="total-pr"><<script>
                     const totalprel = document.querySelector('.total-pr');
                     const a = localStorage.getItem('key');
                     totalprel.innerText = a;
                  </script></p>
                     </div>
                     <div class="titlest"><p>₽</p></div>
                  </div>
                  <div class="change">
                     <a class="linkthree" href="/pages/cart.php">Изменить заказ</a>
                 </div>
              </div>
              <div class="levo">
		<?php if ( isset($_SESSION['cart_list']) ) : ?>
         <div class="aaaa">
         <div class="tov">
			<ul>
				<?php foreach( $_SESSION['cart_list'] as $product ) : ?>
					<li>
               <div class="product_in_order">
                  <div class="qw">
                     <img class="order_img" src="<?php echo $product['image'];?>">
                  </div>
                  <div class="er">
                  <p class="pr_cart_name"><?php echo $product['product_name'];?></p>
                  <p class="pr_cart_price"><?php echo $product['price'];?>₽</p>
                  </div>
               </div>
               </li>
				<?php endforeach; ?>
			</ul>
         </div>
         <div class="registr">
         <div class="infof"><p>Заказчик:</p>
         <div class="infoer">
         <?php
            if (isset($_SESSION['message'])) {
               echo '<p class="msg"> ' . $_SESSION['message'] . '</p>';
            }
            unset ($_SESSION['message']);
         ?>
         </div>
      </div>
         <form action="../vendor/signup.php" method="post" enctype="multipart/form-data">
         <div class="formorder">    
             <label>Фамилия:</label>
             <input type="text" name="last_name" placeholder="Введите вашу фамилию">
         </div>
         <div class="formorder">
             <label>Имя:</label>
             <input type="text" name="first_name" placeholder="Введите ваше имя">
         </div>
         <div class="formorder">
             <label>Отчество:</label>
             <input type="text" name="middle_name" placeholder="Введите ваше отчество">
         </div>
         <div class="formorder">
            <label>Адрес для самовывоза:</label>
            <input type="text" name="addr" list="address" placeholder="Выберите адрес">
         </div>
         <div class="formorder">
             <label>Телефон:</label>
             <input type="text" name="phone" id="phone" placeholder="Введите номер телефона">
         <script>
              $(function(){
              $("#phone").mask("8(999) 999-99-99");
              });
         </script>
         </div>
         <div class="formorder">
             <label>Адрес электронной почты:</label>
             <input type="email" name="email" placeholder="Введите ваш адрес электронной почты">
         </div>
         <div class="formorder">
            <label>Пожелания к заказу:</label>
            <textarea type="text" name="wishes" style="height: 100px; width: 450px; 
                                                       border: 1px solid #AFD275; 
                                                       border-radius: 7px; font-size: 15px; 
                                                       resize: none;" 
            maxlength="200"  placeholder=" Ваши пожелания к заказу (до 200 символов)"></textarea>
         </div>
         <button>Сделать заказ</button>
         </div>
      </div>
   </div>
		<?php endif; ?>
	</form>
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