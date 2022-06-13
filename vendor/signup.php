<?php
// Запускаем сессию
session_start();
// Подключение PHPMailer
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;

    require '../PHPMailer-master/src/Exception.php';
    require '../PHPMailer-master/src/PHPMailer.php';
    require '../PHPMailer-master/src/SMTP.php';
// Подключаем сюда файл connect.php
    require_once 'connect.php';

$last_name = $_POST['last_name'];
$first_name = $_POST['first_name'];
$middle_name = $_POST['middle_name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$productss = array();
$k = 0;
foreach( $_SESSION['cart_list'] as $product ) {
    $productss[$k] = [$product['product_name']];
    $k++;
    $productss[$k] = [$product['price']];
    $k++;
}
$pr = json_encode($productss, JSON_UNESCAPED_UNICODE);
$address = $_POST['addr'];
$wish = $_POST['wishes'];
// Проверка на заполнение логина и пароля
if (empty($_POST['last_name']) and empty($_POST['first_name']) and empty($_POST['middle_name']) and empty($_POST['email']) and empty($_POST['phone'])) {
    $_SESSION['message'] = 'Заполните все поля формы';
    header('Location: ../pages/order.php');
    }
// Если поле логин пустое, то
elseif (empty($_POST['last_name'])) {
    $_SESSION['message'] = 'Заполните поле фамилии';
    header('Location: ../pages/order.php');
    }
// Если поле пароля пустое то
elseif (empty($_POST['first_name'])) {
    $_SESSION['message'] = 'Заполните поле имени';
    header('Location: ../pages/order.php');
} 
// Если поле подтверждения пароля пустое, то 
elseif (empty($_POST['middle_name'])) {
    $_SESSION['message'] = 'Заполните поле отчества';
    header('Location: ../pages/order.php');
    }  
elseif (empty($_POST['phone'])) {
    $_SESSION['message'] = 'Заполните поле телефона';
    header('Location: ../pages/order.php');
    }
// Если поле email пустое, то 
elseif (empty($_POST['email'])) {
    $_SESSION['message'] = 'Заполните поле адреса электронной почты';
    header('Location: ../pages/order.php');
    }
else {
    // Внесение записей регистрации в БД
    mysqli_query($connect, "INSERT INTO `orders` 
    (`id`, `last_name`, `first_name`, `middle_name`,
    `phone`, `email`,`address`,`products`, `price`,`wishes`)
    VALUES (NULL, '$last_name', '$first_name', '$middle_name', '$phone', '$email', '$address', '{$pr}', '$price','$wish')");
{
    // Формирование и отправка email
    $mail = new PHPMailer;
    $mail->CharSet = 'UTF-8';
    // Настройки SMTP
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPDebug = 0;
    $mail->Host = 'ssl://smtp.yandex.ru';
    $mail->Port = 465;
    $mail->Username = 'FragileDe@yandex.ru';
    $mail->Password = 'evo.evolution';
    // От кого
    $mail->setFrom('FragileDe@yandex.ru', 'Верные друзья');		 
    // Кому
    $mail->addAddress($email, 'Кому отправлено'); 
    // Тема письма
    $mail->Subject = 'Вы успешно оставили заявку на товар!';
    // Тело письма
    $body = '<p><strong>Уважаемый пользователь! Вы успешно сделали заявку на приобретение товара.
                        В ближайшее время с вами свяжется наш менеджер для уточнения заказа!</strong></p>';
    $mail->msgHTML($body); 
    $mail->send();
}
    header('Location: ../pages/orderyep.php');
}
?>