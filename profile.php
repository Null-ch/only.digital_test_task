<?php
session_start();
if (isset($_SESSION['username'])) {
   header('Location: /');
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Личный кабинет</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
    <div style="text-align: center">
    <div>
    
        <h2 style="margin: 10px 0;">Добро пожаловать, <?= $_SESSION['user']['username'] ?> !</h2>
        <div style="margin-bottom: 15px;">
            <a href="vendor/logout.php" class="logout">Выход</a>
        </div>
    <div>
<div>
<form action="vendor/update.php" method="post">
        <label>Новое имя</label>
        <input type="text" name="newLogin" placeholder="Введите новый логин" style="text-align: center">
        <label>Новый телефон</label>
        <input type="password" name="newPhone" placeholder="Введите новый телефон" style="text-align: center">
        <label>Новая почта</label>
        <input type="password" name="newEmail" placeholder="Введите новую почту" style="text-align: center">
        <label>Новый пароль</label>
        <input type="password" name="password" placeholder="Введите новый пароль" style="text-align: center">
        <button type="submit" >Изменить данные</button>
        <?php
            if (isset($_SESSION['message'])) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
    </form>
</div>
</div>
</body>
</html>