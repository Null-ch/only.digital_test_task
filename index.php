<?php
session_start();

if (isset($_SESSION['user'])) {
    header('Location: profile.php');
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="assets/css/main.css">
    <script src="https://www.google.com/recaptcha/api.js"></script>
</head>
<body>

    <form action="vendor/signin.php" method="post">
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите свой логин">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль">
        <div class="g-recaptcha" data-sitekey="6Lcc9YwlAAAAAKx0KyEW4gwg2qL8sG-_O7g-GmUA"></div>
        <button type="submit" >Войти</button>
        <p>
            У вас нет аккаунта? - <a href="/signup.php">зарегистрироваться</a>!
        </p>
        <?php
            if (isset($_SESSION['message'])) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
    </form>

</body>
</html>