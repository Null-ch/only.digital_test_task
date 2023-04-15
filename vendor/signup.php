<?php

session_start();
require_once 'connect.php';
$username = $_POST['username'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];

if ($password != $password_confirm) {
    $_SESSION['message'] = 'Пароли не совпадают';
    header('Location: ../signup.php');
} else {
$password = md5($password);

$task = "SELECT * FROM users WHERE username = '$username' OR phone = '$phone' OR email = '$email'  OR password = '$password'";
$result = mysqli_query($connect, $task); 
$count = mysqli_num_rows($result);

if ($count == 0) {
    mysqli_query($connect, "INSERT INTO `users` (`id`, `username`, `phone`, `email`, `password`) VALUES (NULL, '$username', '$phone', '$email', '$password')");
    $_SESSION['message'] = 'Регистрация прошла успешно!';
    header('Location: ../index.php');
} else {
    $_SESSION['message'] = 'Пользователь с такими данными уже существует';
    header('Location: ../signup.php');
}
}
        

        
