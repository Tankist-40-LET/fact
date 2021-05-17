<?php
session_unset();
session_start();
$login = "user1";
$pass = "123";
$passs = md5($pass);
$passss = md5($_POST['password']);

$_SESSION['login'] = $login;
$_SESSION['pass'] = $passss;

if ( isset($_POST['signup']) and isset($_POST['signup']) == 'Войти' )
{
    if ( $_POST['login'] == $login and $passss == $passs )
    {
        setcookie("user", $login, time()+3600);
        echo "Добро пожаловать, $login <a href='questionnaire.php'>Заполнить анкету</a> или <a href='sendmail.php'>Отправить письмо</a>";
    }
    else
    {
        echo "Не верно введен логин или пароль!";
    }
}
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post" action="">
    <label for="login">Логин:</label>
    <input type="text" name="login" id="login" value="" placeholder="login" required>
    <label for="password">Пароль:</label>
    <input type="password" name="password" id="password" value="" placeholder="password" required>
    <input type="submit" name="signup" value="Войти">
</form>
</body>
</html>
