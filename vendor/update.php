<?php

session_start();
require_once 'connect.php';

$id = $_SESSION['user']['id'];

if (isset($_POST)) {
    if (isset($_POST['newLogin'])) {
        $login = $_POST['newLogin'];
        $result = mysqli_query($connect, "UPDATE users SET username = '$login' WHERE ID='$id'");
    }
    
    if (isset($_POST['newPhone'])) {
        $phone = $_POST['newPhone'];
        $result = mysqli_query($connect, "UPDATE users SET username = '$phone' WHERE ID='$id'");
    }
    if (isset($_POST['newEmail'])) {
        $email= $_POST['newEmail'];
        $result = mysqli_query($connect, "UPDATE users SET username = '$email' WHERE ID='$id'");
    }
    if (isset($_POST['password'])) {
        $password = md5($_POST['password']);
        $result = mysqli_query($connect, "UPDATE users SET username = '$password' WHERE ID='$id'");
    }
    
    if ($result) {
        $_SESSION['message'] = 'Данные обновлены';
        header('Location: ../profile.php');
    }
}
  
        
