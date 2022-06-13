<?php 
include "/Server/data/htdocs/www/vendor/connect.php";
function get_product_by_id($id) {
    global $connect;
    $query = "SELECT * FROM `discountonmain` WHERE id=" . $id;
    $req = mysqli_query($connect, $query);
    $resp = mysqli_fetch_assoc($req);
    return $resp;
}
function get_catproduct_by_id($id) {
    global $connect;
    $query = "SELECT * FROM `products` WHERE id=" . $id;
    $req = mysqli_query($connect, $query);
    $resp = mysqli_fetch_assoc($req);
    return $resp;
}
function get_catalog_by_id($cat) {
    global $connect;
    $query = "SELECT * FROM `discountonmain` WHERE id=" . $cat['parrent_id'];
    $req = mysqli_query($connect, $query);
    $resp = mysqli_fetch_assoc($req);
    return $resp;
}
// Получение массива категорий
function get_cat ($connect) {
    if ($result = mysqli_query($connect, "SELECT * FROM `categories`")) {
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
}

function createTree($arr) {
    $parents_arr = array();
    foreach ($arr as $key=>$item) {
        $parents_arr[$item['parrent_id']][$item['id']] = $item;
    }
    $treeElement = $parents_arr[0];
    generateElemTree($treeElement, $parents_arr);
    return $treeElement;
}

function generateElemTree(&$treeElement, $parents_arr) {
    foreach($treeElement as $key=>$item) {
        if (!isset($item['children'])) {
            $treeElement[$key]['children'] = array();
        }
        if (array_key_exists($key, $parents_arr)) {
            $treeElement[$key]['children'] = $parents_arr[$key];
            generateElemTree($treeElement[$key]['children'], $parents_arr);
        }
    }
}

function renderTemplate($path, $arr) {
    $output = '';
    if (file_exists($path)) {
        extract($arr);
        ob_start();
        include $path;
        $output = ob_get_clean();
    }
    return $output;
}
// Функция вывода товаров по категориям
function get_prod_by_category($category_id) {
    global $connect;
    $category_id = mysqli_real_escape_string($connect, $category_id);
    $sql = 'SELECT * FROM `products` WHERE `category` = "' .$category_id.'"';
    $result = mysqli_query($connect, $sql);
    $prod = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $prod;
}
function get_main_category($category_id) {
    global $connect;
    $category_id = mysqli_real_escape_string($connect, $category_id);
    $sql = 'SELECT * FROM `products` WHERE `category` = 
    7 or 8 or 9 or 10 or 11 or 12 or 13 or 14 or 15 or 16 or 17 or 18 ';
    $result = mysqli_query($connect, $sql);
    $all_prod = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $all_prod;
}
function get_stock() {
    global $connect;
    $sql = "SELECT * FROM `discountonmain`";
    $result = mysqli_query($connect, $sql);
    $stock = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $stock;
}
function get_news() {
    global $connect;
    $sql = "SELECT * FROM `news` ORDER BY `news`.`id` DESC";
    $result = mysqli_query($connect, $sql);
    $news = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $news;
}
