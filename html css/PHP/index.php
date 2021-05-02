<?php
//1
echo "<strong>1 задача: вывод чисел от 5 до 13</strong><br>";
for ($i=5; $i <= 13; $i++) {

	echo "$i <br>";
}
echo "<br>";

//2

// on while
echo "<strong>2 задача с использованием цикла WHILE</strong><br>";
$num = 1000;
$i = 0;
while ( $num >= 50 ) {
	$num = intdiv($num, 2);
	$i++;
	echo "$i итерация: $num <br>";
}
echo "число итераций цикла WHILE = <strong>$i</strong> <br><br>";

// on for
echo "<strong>2 задача с использованием цикла FOR</strong><br>";
for ( $num = 1000, $i = 1; $num > 50; $i++ ) {
	$num = intdiv($num, 2);
	echo "$i итерация: $num <br>";
}
echo " число итераций цикла FOR = <strong>". $i = $i-1 ."</strong> <br><br>";


$i = $_POST['val'];
if ( isset($_POST['btn']) and $_POST['btn'] == 'Вычислить' ) {
	switch ($i) {
		case '0':
			echo " Результат выполнения: 1,2,3,4,5,6,7,8,9,10";
			break;
		case '1':
			echo " Результат выполнения: 1,2,3,4,5,6,7,8,9";
			break;
		case '2':
			echo " Результат выполнения: 1,2,3,4,5,6,7,8";
			break;
		case '3':
			echo " Результат выполнения: 1,2,3,4,5,6,7";
			break;
		case '4':
			echo " Результат выполнения: 1,2,3,4,5,6";
			break;
		case '5':
			echo " Результат выполнения: 1,2,3,4,5";
			break;
		case '6':
			echo " Результат выполнения: 1,2,3,4";
			break;
		case '7':
			echo " Результат выполнения: 1,2,3";
			break;
		case '8':
			echo " Результат выполнения: 1,2";
			break;
		case '9':
			echo " Результат выполнения: 1";
			break;
		case '10':
			echo " Результат выполнения: 0";
			break;
		
		default:
			echo "<p style='color: red;'>Вы ввели не правильное значение!</p>";
			break;
	}
}
?>

<form action="" method="post">
	<label>Введите значение от 0 до 10</label>
	<input type="text" name="val" value="" required>
	<input type="submit" name="btn" value="Вычислить">
</form>
