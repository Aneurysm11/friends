<h2>Категории товаров</h2>
<?php if(isset($cats)) :?>
    <?php echo renderTemplate('/Server/data/htdocs/www/vendor/menu_part.php', ['cats'=>$cats]); ?> 
<?php endif; ?>