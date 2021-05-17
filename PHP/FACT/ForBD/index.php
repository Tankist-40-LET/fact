<?php
if (isset($_POST['action']) and $_POST['action'] == 'Удалить')
{
    try {
        $sql = 'DELETE FROM name WHERE id = id';
        $s = $pdo-prepare($sql);
        $s -> bindValue('id', $_POST['id']);
        $s -> execute();
    }
    catch (PDOException $e)
    {
        $error = 'Ошибка при удалении.';
        include 'error.html.php';
        exit();
    }
    header('location .');
    exit();
}

?>
<?php
session_start();
require_once "connection.php";
require_once "rb.php";

    $data = $_POST;
    if(isset($data['do_login']))
    {
        $errmsg = array(); //массив для хранения ошибок 
        $errflag = false; //флаг ошибки

        $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);//имя пользователя
        $password =  filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);//пароль
        
        //проверка имени пользователя
        if($login == '') {
            $errmsg[] = 'Введите логин!'; //ошибка
            $errflag = true; //поднимает флаг в случае ошибки
        }

        //проверка пароля
        if($password == '') {
            $errmsg[] = 'Введите пароль!'; //ошибка
            $errflag = true; //поднимает флаг в случае ошибки
        }

        $user = R::findOne('user', 'login = ?', array($login));
        if ( $user ) 
        {
            $pass = $data['password'];
            $sql = "SELECT password
                    FROM user
                    WHERE login =:login";
            $s = $pdo -> prepare($sql);
            echo $mysqli -> error;
            $s -> bindParam(':login', $login, PDO::PARAM_STR);
            $s -> execute();
            $results = $s -> fetchAll(PDO::FETCH_OBJ);
            if ( $pass == $user -> password)
            {
                //если пароль совпадает, то нужно авторизовать пользователя
                header("location: https://fact.digital/ ");
                setcookie('logged_user', $login, time() + 3600);
                $_SESSION['logged_user'] = $login;
            }else
            {
                $errmsg[] = 'Неверно введен пароль!';
                $errflag = false;
            }
        }
        else
        {
            $errmsg[] = 'Пользователь с таким логином не найден!';
            $errflag = false;
        }

        if( !empty($errmsg) ) {
            echo '<p style="color: red;">'.array_shift($errmsg).' </p><br>';
        } 
    }
    require_once 'bootstrap.php';
?>

<div id="login">

    <div class="container mt-5" style="background-color: #fcedfa">
        <ul class="nav nav-tabs text-center position-relative end-0 justify-content-center align-items-center">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Авторизация</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Регистрация</a>
            </li>
        </ul>
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6 mb-4 mt-4">
                <div id="login-box">
                    <img src="logo.png" class="position-absolute position-center" height="100em">
                    <div class="position-relative start-50" style="max-width: 20em;">
                        <form id="login-form" class="form" action="index.php" method="POST">
                            <label>Логин</label> <span class="after" style="color:red;">*</span>
                            <input type="text" class="form-control mb-3" name="login" id="login" placeholder="Введите логин" value="<?php echo @$data['login']; ?>">
                            <label>Пароль</label> <span class="after" style="color:red;">*</span>
                            <input type="password" class="form-control mb-3" name="password" id="password" placeholder="Введите пароль" value="<?php echo @$data['password']; ?>">
                            <button class="btn btn-success mb-3" name="do_login" type="submit">Войти</button>
                            <a href="#" class="text-center end-0">Забыли пароль</a>
                            <div id="register-link" class="text-right">
                                <p><a href="#">Вы еще не зарегестрированы?</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>