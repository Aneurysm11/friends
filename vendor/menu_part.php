<ul style="margin-left: 10px;">
    <?php foreach($cats as $cat) :?>
        <li><a href="/pages/category.php?id= <?php echo $cat['id']; ?>"><?php echo $cat['name']; ?></li>
        <?php if(count($cat['children']) > 0) :?>
            <?php echo renderTemplate('/Server/data/htdocs/www/vendor/menu_part.php', ['cats'=>$cat['children']]); ?>
        <?php endif; ?>
    <?php endforeach; ?>
</ul>