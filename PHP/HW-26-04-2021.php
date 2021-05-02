<?php 
	$name = 'Сергей';
	$age = 19;
	$pi = pi();
	$d = date("Y/m/d H:i:s");
	$hour = date('H');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Первое ДЗ по PHP</title>
</head>
<body>
	<div><?php echo "Меня зовут $name"; ?></div>
	<div><?php echo "Мой возраст $age лет."; ?></div>
	<div><?php echo "Число Пи – математическая константа, которая выражает отношение длины окружности к её диаметру. Равна приблизительно: $pi "; ?></div>
	<div><?php echo "Сегодняшняя дата $d"; ?></div>
<?php 
	if ( $hour >= 20 and $hour < 8 ) {
		echo '<p style="background-color: SlateBlue;"">Применена Ночная тема</p>';
	} elseif ($hour < 20 and $hour >= 8) {
		echo '<p style="background-color: yellow;">Применена дневная тема</p>';
	} else {
		echo "loh";
	}
?> 
</body>
</html>