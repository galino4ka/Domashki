<!-- 2. Спросите у пользователя телефон с помощью формы. Затем сделайте так,
чтобы в другой форме на другой странице​ (поля: имя, фамилия, телефон)
при ее открытии поле телефон было автоматически заполнено.
<form action="" method="GET">
 <input type="text" name="phone">
 <input type="submit">
</form>

Создала 2 файла dz7_index2.php и  dz7_hello2.php -->


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>dz7_index2</title>
</head>
<body>
	<p>Введите свой номер телефона:</p>
	<form action="dz7_hello2.php" method="GET">
		 <input type="text" name="phone">
		 <input type="submit">
	</form>
</body>
</html>