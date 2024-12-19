<?php
session_start();
if (!empty($_POST['username'])) { 

// Cоздайте PHP-файл post.php, который будет принимать формы, сохранять имя пользователя в сессию
$_SESSION['username'] = $username;
echo '$username';
if (!isset($_SESSION['username'])) {
    echo $_SESSION['username'];
    //$_SESSION['count'] = 0;
}

// и перенаправлять браузер обратно на index.php.
    header("Location: index.php"); 
    exit();
} else {
    echo 'Параметр не передан';
}

