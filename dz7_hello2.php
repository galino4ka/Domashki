<?php
if (isset($_GET["phone"]))
{
	setcookie("phon", $_GET["phone"]);
	$phone = $_GET["phone"];
}
else
{
	if (isset($_COOKIE["phon"])) 
	$phone = $_COOKIE["phon"];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>dz7_hello2</title>
</head>
<body>
	<form action="" method="GET"> 
   		 <p>Ваш номер телефона</p>
		 <input type="text" name="phone" value= <?php  echo $phone ?> />
		 <p>Введите ваше имя</p>
		 <input type="text" name="name">
		 <p>Введите вашу фамилию</p>
		 <input type="text" name="surname">
		 <input type="submit">
	</form>

	<a href="dz7_index.php">Назад</a>
</body>
</html>
