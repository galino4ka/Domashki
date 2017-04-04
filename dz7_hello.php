<?php
if (isset($_GET["username"]))
{
	setcookie("test", $_GET["username"]);
	$name = $_GET["username"];
}
else
{
	if (isset($_COOKIE["test"])) 
	$name = $_COOKIE["test"];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>dz7_hello</title>
</head>
<body>
	<h1>Hello <?php echo $name ?></h1>

	<a href="dz7_index.php">Назад</a>
</body>
</html>

