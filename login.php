<?php
session_start();

if (isset($_SESSION['user'])) {
    header('Location: profile.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/reg_log.css">
</head>
<body>
<!-- Форма авторизации -->
<div class="autoriz">
<form action="vendor/signin.php" method="post">
       <a href="/index.php"><img class="img_arrow" src="/assets/images/arrow_left.png"></a>
       <p class="log_head">Авторизация</p>
    <div class ="login_pass">
       <label class="label">Логин:</label>
       <input class="input_log" type="text" name="login" placeholder="Введите свой логин">
    </div>
    <div class="login_pass">
       <label class="label">Пароль:</label>
       <input class="input_pass" type="password" name="password" placeholder="Введите свой пароль">
    </div>
       <button type="submit">Войти</button>
           <p class="linkR">
               Впервые на сайте? <a href="/register.php">Зарегистрироваться</a>
           </p>
    
    <?php
        if (isset($_SESSION['message'])) {
            echo '<p class="msg"> ' . $_SESSION['message'] . '</p>';
        }
        unset ($_SESSION['message']);
        ?>
</form>
</div>
</body>
</html>