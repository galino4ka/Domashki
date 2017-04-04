<!-- 1. Сделайте две страницы: index.php и hello.php и свяжите их ссылками друг на
друга. При заходе на index.php с помощью формы
<form action="" method="GET">
 <input type="text" name="username">
 <input type="submit">
</form>
спросите у пользователя его имя и запишите в куки. При заходе на hello.php
поприветствуйте пользователя фразой “Hello, %Name%!”.

Создала 2 файла dz7_index.php и  dz7_hello.php -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form method="get" action="dz7_hello.php">
  		<input type="text" name="username">
 		<input type="submit">
	</form>
</body>
</html>


<?php 

// 3. Установите куку​ с именем age.​ Запишите туда случайное число от 10​ до 70​ (с помощью mt_rand). Сделайте так, чтобы эта кука установилась на 3 часа.

setcookie ("age", mt_rand(10, 70), time()+3600*3);

?>

