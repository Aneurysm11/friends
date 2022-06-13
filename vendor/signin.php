<?php

    session_start();
    require_once 'connect.php';

    $login = $_POST['login'];
    $password = md5($_POST['password']);
    // Подсчёт числа пользователей с введенным логином и паролем (если они совпадают)
    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
    if (mysqli_num_rows($check_user) > 0) {
    // Успешная авторизация
    $user  = mysqli_fetch_assoc($check_user);
    
    $_SESSION['user'] = [
        "id" => $user['id'],
        "last_name" => $user['last_name'],
        "first_name" => $user['first_name'],
        "middle_name" => $user['middle_name'],
        "email" => $user['email']
    ];
    header('Location: ../profile.php');
} else {
    $_SESSION['message'] = "Неверный логин или пароль";
    header('Location: ../login.php');
}
?>