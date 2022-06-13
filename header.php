<a href="/index.php" class="header__logo">Верные</br>друзья</a>
<nav class="header__menu menu">
   <ul class="menu__list">
      <li class="menu__item">
         <a href="/pages/stock.php" class="menu__link">Акции</a>
      </li>
      <li class="menu__item">
         <a href="/pages/catalog.php" class="menu__link">Каталог</a>
      </li>
      <li class="menu__item">
         <a href="/pages//aboutCompany.php" class="menu__link">О компании</a>
      </li>
      <li class="menu__item">
         <a href="/pages//news.php" class="menu__link">Новости</a>
      </li>
      <li class="menu__item">
         <a href="/pages//contacts.php" class="menu__link">Контакты</a>
      </li>
      <li class="menu__item">
         <a href="/pages/cart.php" onclick="calcCart()" style="margin-left: -30px;" class="menu__link"><img class="header__img" src="/assets//images/shop.svg"></a>
      </li>
      <li>
      <div class="cart_c">
            Товаров в корзине: <span id="cart_count"> 
            <?php if (isset($_SESSION['cart_list'])) {
                        echo " " . count($_SESSION['cart_list']);
                      } ?>
            </span>
         </div>
      </li>
   </ul>
</nav>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="/js//jquery-1.9.0.min.js"></script>
<script src="/js/main.js"></script>
<script src="/js/calcCart.js"></script>
