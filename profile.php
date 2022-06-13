<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: login.php');
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
<!-- Профиль -->
<form >
    <h2 style="margin: 10px 0; text-align:center;">
        <?= $_SESSION['user']['last_name']?>
        <?= $_SESSION['user']['first_name']?>
        <?= $_SESSION['user']['middle_name']?>
    </h2>
    <a href="#" style="text-align:center;"><?= $_SESSION['user']['email'] ?></a>
    <a href="vendor/logout.php" class="logout">Выход</a>
</form>
</body>
</html>