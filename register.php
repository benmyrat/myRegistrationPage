<?php include('server.php') ?>

<!doctype html>
<html lang="en/ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Регистрация с использованием PHP и MySQL</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
    <main>
        <!--Making header for register form-->
        <div class="header">
            <h2>Регистрация</h2>
        </div>
        <!--register form-->
        <form method="post" action="register.php">
            <!--including validation php-->
            <?php include('errors.php'); ?>

            <div class="input-group">
                <label for="username">Логин:</label>
                <input type="text" id="username" name="username" placeholder="Введите имя" value="<?php echo $username; ?>">
            </div>
            <div class="input-group">
                <label for="email">Почта:</label>
                <input type="email" id="email" placeholder="Введите почту" name="email" value="<?php echo $email; ?>">
            </div>
            <div class="input-group">
                <label for="password_1">Пароль:</label>
                <input id="password_1" type="password" name="password_1" placeholder="Введите пароль">
            </div>
            <div class="input-group">
                <label for="password_2">Пароль потверждения:</label>
                <input type="password" id="password_2" name="password_2" placeholder="Потвердите пароль">
            </div>
            <div class="input-group">
                <button type="submit" class="btn" name="reg_user">Зарегистрироваться</button>
            </div>
            <p>
                Уже есть аккаунт? <a href="index.php">Вход</a>
            </p>
        </form>
    </main>
</body>
</html>