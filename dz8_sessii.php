<?php
//1. Запишите в сессию время захода пользователя на сайт. При обновлении страницы
//выводите сколько секунд назад пользователь зашел на сайт.

//session_start ();
//if (!isset($_SESSION['time'])) {
//    $_SESSION['time']  =  time();
//}
//echo time() - $_SESSION['time'];
//echo "<br />";

//2. Спросите у пользователя email с помощью формы. Затем сделайте так, чтобы в
//другой форме (имя, фамилия, пароль, email) при ее открытии поле email было
//автоматически заполнено. *Для другой формы я создала файл dz8_email.php.
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>dz8_sessii</title>
</head>
<body>
	<p>Введите email:</p>
	<form action="dz8_email.php" method="GET">
		 <input type="text" name="email">
		 <input type="submit">
	</form>
</body>
</html>

<!--3. Сделайте счетчик обновления страницы пользователем. Данные храните в сессии.-->
<!--Скрипт должен выводить на экран количество обновлений. При первом заходе на-->
<!--страницу он должен вывести сообщение о том, что вы еще не обновляли страницу.-->

<?php
session_start();
if (!isset($_SESSION['update'])) {
    $_SESSION['update']=0;
    echo "Вы еще не обновляли страницу!";
}
else {
    echo "Вы обновили эту страницу ".$_SESSION['update']++." раз. ";
}
echo "<br />";
?>

<!--4. Сделайте две страницы: index.php и form.php. При заходе на index спросите с-->
<!--помощью формы город и возраст пользователя. На form.php сделайте форму с-->
<!--полями 'Name', 'Age', 'City'. При заходе на form.php сделайте так, чтобы поля 'Age' и-->
<!--'City' уже были заполнены. *Для этой задачи я буду использовать те же два файла dz8_sessii.php и dz8_email.php. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>dz8_sessii</title>
</head>
<body>
<form action="dz8_email.php" method="GET">
    <p>Введите название вашего города:</p>
    <input type="text" name="city">
    <p>Введите ваш возраст:</p>
    <input type="text" name="age">
    <input type="submit">
</form>
</body>
</html>













