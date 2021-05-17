<?php 
session_start();

if ( isset($bgcolor) )
	setcookie("bgcolor", $bgcolor, time()+3600);
if ( isset($_POST['action']) and isset($_POST['action']) == 'Set background color' ) {
	setcookie("bgcolor", $bgcolor, time()+3600);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Главная</title>
</head>

<body bgcolor="$bgcolor">	
 <form action='' method='POST'>
 	 What's your favorite background color?
 	<select name='color' id='color'>
 		<option value="white">По умолчанию</option>
	  	<option value="red">Красный</option>
		<option value="blue">Синий</option>
	</select>
 	<input type="submit" name="action" value="Set background color">
 </form>
</body>

</html>
<?php require 'signup.php'; ?>