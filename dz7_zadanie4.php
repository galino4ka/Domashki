<!-- 4. Напишите оболочку над cookie. Оболочка должна представлять собой набор
функций: сохранение куки, удаление куки, редактирование куки. -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form method="get" action="">
		<p>Сохраненить или редактировать куки</p>
  		<input type="text" name="namecookie" placeholder="Имя куки">
  		<input type="text" name="valuecookie" placeholder="Значение куки">
 		<p>Удалить куки</p>
 		<input type="text" name="deletecookie">
 		<input type="submit">
 	</form>
</body>
</html>

<?php

$namcooki = $_GET['namecookie'];
$valcooki = $_GET['valuecookie'];
$delcooki = $_GET['deletecookie'];

if(!empty($namcooki) && !empty($valcooki)) {
	save($namcooki, $valcooki);
}

if(!empty($delcooki) && isset($_COOKIE[$delcooki])) {
	delete($delcooki);
}

function save($name, $value) {
	setcookie ($name, $value);
	echo "Вы создали или изменили куку $name<br>";
}

function delete($name) {
	setcookie ($name, "", time()-5);
	echo "Вы удалили куку $name";
}
?>