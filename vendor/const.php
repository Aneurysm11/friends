<?php
  $cats = get_cat($connect);
  $cats = createTree($cats);
?>
