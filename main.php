<?php
include ('server.php');?>
<!doctype html>
<html lang="en/ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <main>
        <h2>Welcome to home dear
            <?php
            print_r($_SESSION["username"]);
            ?>
        </h2>
    </main>
</body>
</html>
