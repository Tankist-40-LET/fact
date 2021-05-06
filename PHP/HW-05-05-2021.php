<?php
//1
$str1 = 'seventheen';
if (mb_strlen($str1) > 5) {
	$str1_1 = mb_substr($str1, 5, 5, 'UTF-8');
	echo "Задача 1: преобразовано<br>" . $str1_1 . '...' . "<br><br>";
}
else {
	echo "Задача 1: не преобразовано<br>" . $str1 . "<br><br>";
}

//2
$str2 = 'abcabcabc';
$str2_1 = str_replace(array("a", "b", "c"), array("1", "2", "3"), $str2);
echo "Задача 2: замена букв на цифры<br>" . $str2_1 . "<br><br>";

//3
$str3 = 'abc abc abc';
$str3_1 = mb_strrpos($str3, "b");
echo "Задача 3: позиция последней буквы 'б' <br>" . $str3_1 . "<br>";

//4
$str4 = 'Html, CSS, PHP';
$string .= ', ';
$str4 = explode(', ', $str4);
echo "<br>Задача 4: преобразование строки '$str4' в массив<br>";
print_r($str4);
echo "<br><br>";

//5
$str_date_1 = '10-10-2020';
$str_date_2 = '12-10-2021';
$razn = abs(strtotime($str_date_1) - strtotime($str_date_2));
$years = floor($razn / (365*60*60*24));
$months = floor(($razn - $years * 365*60*60*24) / (30*60*60*24));
$days = floor(($razn - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
echo "<br>Задача 5: разница дат $str_date_1 и $str_date_2<br>";
printf("%d years, %d months, %d days\n", $years, $months, $days). "<br>";