<?php include('server.php') ?>

<!doctype html>
<html lang="en/ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Регистрация с использованием PHP и MySQL</title>
</head>
<body>
    <main>
        <!--Making header for register form-->
        <div class="header">
            <h2>Авторизация</h2>
        </div>
        <!--login form-->
        <form method="post" action="index.php">
            <!--including validation php-->
            <?php include('errors.php'); ?>
            <div class="input-group">
                <label for="username">Логин:</label>
                <input type="text" name="username" id="username" placeholder="Введите логин">
            </div>
            <div class="input-group">
                <label for="password">Пароль:</label>
                <input type="password" name="password" id="password" placeholder="Введите пароль">
            </div>
            <div class="input-group">
                <button type="submit" class="btn" name="login_user">Войти</button>
            </div>
            <p>
                Еще нет аккаунта? <a href="register.php">Регистрация</a>
            </p>
        </form>
    </main>
</body>
</html>