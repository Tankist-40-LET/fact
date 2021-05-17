<?php
require_once 'rb.php';

$db = [
	'dsn' => 'mysql:host=localhost:3307;dbname=fact',
	'user' => 'root',
	'pass' => '',
];
R::setup($db['dsn'], $db['user'], $db['pass']);

try
{
	$pdo = new PDO('mysql:host=localhost:3307;dbname=fact', 'root', '');
	$pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo -> exec('SET NAMES "utf8"');
}
catch(PDOException $e)
{
	$output='Невозможно подключиться к серверу баз данных:'.
	include 'error.html.php';
	exit();
}