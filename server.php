<?php
session_start();

// variable declaration
$username = "";
$email    = "";
$errors = array();
$_SESSION['success'] = "";

// connect to database
$db = mysqli_connect('localhost', 'root', '21071998', 'registration');

// REGISTER USER
if (isset($_POST['reg_user'])) {
    // receive all input values from the form
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

    // form validation: ensure that the form is correctly filled
    if (empty($username)) { array_push($errors, "Заполните поля логин**"); }
    if (empty($email)) { array_push($errors, "Заполните поля почта**"); }
    if (empty($password_1)) { array_push($errors, "Заполните поля пароль**"); }

    if ($password_1 != $password_2) {
        array_push($errors, "Введенные пароли не совподают**");
    }

    // register user if there are no errors in the form
    if (count($errors) == 0) {
        $password = md5($password_1);//encrypt the password before saving in the database
        $query = "INSERT INTO users (username, email, password) 
					  VALUES('$username', '$email', '$password')";
        mysqli_query($db, $query);

        $_SESSION['username'] = $username;
        $_SESSION['success'] = "Вы вошли в систему";
        header('location: main.php');
    }

}

// ...

// LOGIN USER
if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if (empty($username)) {
        array_push($errors, "Заполните полю логин");
    }
    if (empty($password)) {
        array_push($errors, "Заполните полю почта");
    }

    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $results = mysqli_query($db, $query);

        if (mysqli_num_rows($results) == 1) {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "Вы вошли в систему";
            header('location: main.php');
        }else {
            array_push($errors, "Не правильный логин или пароль!");
        }
    }
}
?>