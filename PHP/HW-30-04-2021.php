<?php
//2
$arr2 = array(
	'one' => array('a', 'b', 'c', 'd', 'e'),
	'two' => array('a', 'b', 'c', 'd', 'e'),
	'three' => array('a', 'b', 'c', 'd', 'e')
);
echo "<h2>Элементы начинающиеся с буквы A</h2>";
print_r($arr2);
echo "<br>";
foreach ( $arr2 as $key => $alphabet ) {
  foreach ( $alphabet as $elements ) {
    if ( mb_substr($elements, 0, 1) === "a" )
      echo $elements . "<br>";
  }
}

//3
$arr3 = array(
	'10' => array('11', '12', '13'),
	'20' => array('21', '22', '23', '24'),
	'30' => array('31', '32', '33', '34', '35')
);

echo "<h2>Поздсчет элементов</h2>";
print_r($arr3);
echo "<br>";
echo "Общее количество элементов массива: " . count($arr3, COUNT_RECURSIVE).
	 "<br> Количество элементов в 1 измерении: " . count($arr3['10']) . 
	 "<br> Количество элементов в 2 измерении: " . count($arr3['20']) .
	 "<br> Количество элементов в 3 измерении: " . count($arr3['30']) . "";

?>
<!DOCTYPE html>
<html>
<head>
	<title>30.04.2021</title>
</head>
<body>
	<form action="" method="POST" style="margin-top: 5%;">
		<div>
			<input type="text" name="val" value="<?php $val; ?>" autofocus required>
			<input type="submit" name="action" value="Заполнить">
		</div>
	</form>
<?php
//1
if ( isset($_POST['action']) and isset($_POST['action']) == 'Заполнить' ) {

	$val = $_POST['val'];
	for( $i = 0; $i < $val; $i ++ ) {
    	$arr1[] = mt_rand(1, 99);
		echo "$arr1[$i]<br>";
		if ( $arr1[$i] % 2 == 0 ) {
			echo "<strong>($arr1[$i])</strong><br>";
		}
	}
}
?>
</body>
</html>