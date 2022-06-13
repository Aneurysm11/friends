<?php

    $connect = mysqli_connect('localhost', 'root', 'Ekaterina11102001', 'friends');

    if (!$connect) {
        die('Error connect to DataBase');
    }