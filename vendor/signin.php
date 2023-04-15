<?php

    session_start();
    require_once 'connect.php';
   if (isset($_POST))
   {
    if (isset($_POST['login'])) {
        $login = $_POST['login'];
    }
    
    if (isset($_POST['password'])) {
        $phone = $_POST['password'];
   }
}


    $password = md5($_POST['password']);
    $task = "SELECT * FROM users WHERE phone = '$login' OR email = '$login'  AND password = '$password'";
    $result = mysqli_query($connect, $task); 
    
    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        $_SESSION['user'] = [
            "id" => $user['id'],
            "username" => $user['username'],
            "phone" => $user['phone'],
            "email" => $user['email']
        ];
        header('Location: ../profile.php');
    } else {
        $_SESSION['message'] = 'Не верный логин или пароль';
        header('Location: ../index.php');
    }
    
?>
