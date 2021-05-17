<?php session_start();
$user = $_SESSION['login'];
if( $user == '' )
{
    echo "<a href='signup.php'>Войти</a>"; 
}
else
{
    echo "Вы, $user! <a href='logout.php'>Выйти</a>";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Send Mail</title>
</head>
<body>
<?php
$mail = $_SESSION['login'];
$mail = $_POST['mail'];
$theme = $_POST['theme'];
$text = $_POST['text'];

if (isset($mail) && isset($theme) && isset($text) && $mail != "" && $theme != "" && $text != "") {
    $text = "From $mail
            Theme: $theme
            $text";

    $fp = fopen("mail.txt", "w");

    fwrite($fp, $text);

    fclose($fp);
    echo "Сообщение успешно отправлено";
}
?>
<form action="" method="post">
    <p>
        <label for="mail">eMail:</label>
        <input type="text" name="mail" id="mail" size="30" value="<?php htmlspecialchars($_POST['mail'], ENT_QUOTES); ?>">
    </p>
    <p>
        <label for="theme">Тема письма:</label>
        <input type="text" name="theme" id="theme" size="30" value="">
    </p>
    <p>
        <label for="text">Текст письма:</label>
        <textarea rows="10" cols="20" name="text" id="text"></textarea>
    </p>
    <p>
        <input type="submit" value="Отправить">
    </p>
</form>
</body>
</html>