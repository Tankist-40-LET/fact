<?php
session_start();
unset($_SESSION['login']);
unset($_SESSION['pass']);
unset($_COOKIE['user']);
setcookie('close', '', time() + -3600);
session_unset();
header('location: signup.php');