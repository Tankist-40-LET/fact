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



if ( isset($_POST['action']) and isset($_POST['action']) == 'Отправить' )
{
    if ( isset($_POST['value']) and isset($_POST['value']) != '' and id == 'true' ) {
        $eBall ++;
    }
    echo "Анкета успешно пройдена! Ваше количество баллов = ". $eBall . "! ";
    if ( $eBall > 15 ) {
        echo "У вас покладистый характер!";
    }elseif ( $eBall < 8 ) {
        echo "Вашим дузьям можно посочувствовать!";
    }else {
        echo "Вы не лишены недостатков, но с вами можно ладить";
    }
}
echo "$eBall";
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
<form action="" method="post">
    <h1>Заполните анкету</h1>
    <div>
        <label>Вопрос 1</label>
        <input type="radio" name="q1" value="Да" checked>
        <input type="radio" id="true" name="q1" value="Нет">
    </div>
    <div>
        <label>Вопрос 2</label>
        <input type="radio" name="q2" value="Да" checked>
        <input type="radio" id="true" name="q2" value="Нет">
    </div>
    <div>
        <label>Вопрос 3</label>
        <input type="radio" id="true" name="q3" value="Да" checked>
        <input type="radio" name="q3" value="Нет">
    </div>
    <div>
        <label>Вопрос 4</label>
        <input type="radio" name="q4" value="Да" checked>
        <input type="radio" id="true" name="q4" value="Нет">
    </div>
    <div>
        <label>Вопрос 5</label>
        <input type="radio" name="q5" value="Да" checked>
        <input type="radio" id="true" name="q5" value="Нет">
    </div>
    <div>
        <label>Вопрос 6</label>
        <input type="radio" name="q6" value="Да" checked>
        <input type="radio" id="true" name="q6" value="Нет">
    </div>
    <div>
        <label>Вопрос 7</label>
        <input type="radio" name="q7" value="Да" checked>
        <input type="radio" id="true" name="q7" value="Нет">
    </div>
    <div>
        <label>Вопрос 8</label>
        <input type="radio" name="q8" value="Да" checked>
        <input type="radio" id="true" name="q8" value="Нет">
    </div>
    <div>
        <label>Вопрос 9</label>
        <input type="radio" id="true" name="q9" value="Да" checked>
        <input type="radio" name="q9" value="Нет">
    </div>
    <div>
        <label>Вопрос 10</label>
        <input type="radio" id="true" name="q10" value="Да" checked>
        <input type="radio" name="q10" value="Нет">
    </div>
    <div>
        <label>Вопрос 11</label>
        <input type="radio" name="q11" value="Да" checked>
        <input type="radio" id="true" name="q11" value="Нет">
    </div>
    <div>
        <label>Вопрос 12</label>
        <input type="radio" name="q12" value="Да" checked>
        <input type="radio" id="true" name="q12" value="Нет">
    </div>
    <div>
        <label>Вопрос 13</label>
        <input type="radio" id="true" name="q13" value="Да" checked>
        <input type="radio" name="q13" value="Нет">
    </div>
    <div>
        <label>Вопрос 14</label>
        <input type="radio" id="true" name="q14" value="Да" checked>
        <input type="radio" name="q14" value="Нет">
    </div>
    <div>
        <label>Вопрос 15</label>
        <input type="radio" name="q15" value="Да" checked>
        <input type="radio" id="true" name="q15" value="Нет">
    </div>
    <div>
        <label>Вопрос 16</label>
        <input type="radio" name="q16" value="Да" checked>
        <input type="radio" id="true" name="q16" value="Нет">
    </div>
    <div>
        <label>Вопрос 17</label>
        <input type="radio" name="q17" value="Да" checked>
        <input type="radio" id="true" name="q17" value="Нет">
    </div>
    <div>
        <label>Вопрос 18</label>
        <input type="radio" name="q18" value="Да" checked>
        <input type="radio" id="true" name="q18" value="Нет">
    </div>
    <div>
        <label>Вопрос 19</label>
        <input type="radio" id="true" name="q19" value="Да" checked>
        <input type="radio" name="q19" value="Нет">
    </div>
    <div>
        <label>Вопрос 20</label>
        <input type="radio" name="q20" value="Да" checked>
        <input type="radio" id="true" name="q20" value="Нет">
    </div>

    <input type="submit" name="action" value="Отправить">
</form>
</body>
</html>
