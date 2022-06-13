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
    <link rel="stylesheet" href="assets/css/reg_log.css">
</head>
<body>
<!-- Форма регистрации -->
<div class="registr">
<form action="" method="post" enctype="multipart/form-data">
<div class="login_pas">
    <label>Фамилия:</label>
    <input type="text" name="last_name" placeholder="Введите вашу фамилию">
</div>
<div class="login_pas">
    <label>Имя:</label>
    <input type="text" name="first_name" placeholder="Введите ваше имя">
</div>
<div class="login_pas">
    <label>Отчество:</label>
    <input type="text" name="middle_name" placeholder="Введите ваше отчество">
</div>
<div class="login_pas">
    <label>Логин:</label>
    <input type="text" name="login">
</div>
<div class="login_pas">
    <label>Пароль:</label>
    <input type="password" name="password">
</div>
<div class="login_pas">
    <label>Подтверждение</br>пароля:</label>
    <input type="password" name="password_confirm">
</div>
<div class="login_pas">
    <label>Адрес электронной</br>почты:</label>
    <input type="text" name="email" placeholder="Введите ваш адрес электронной почты">
</div>
    <button type="submit">Зарегистрироваться</button>
    <p>
        У вас уже есть аккаунт? <a href="/login.php">Авторизироваться</a>
    </p>
    <!-- Вывод сообщения, если пароли не совпадают -->
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