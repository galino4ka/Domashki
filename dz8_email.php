<!--2. Спросите у пользователя email с помощью формы. Затем сделайте так, чтобы в-->
<!--другой форме (имя, фамилия, пароль, email) при ее открытии поле email было-->
<!--автоматически заполнено. *Для другой формы я создала файл dz8_email.php.-->

<?php
/*
$email = '';
session_start();
if (isset($_GET["email"]))
{
    $_SESSION["email"] = $_GET["email"];
}
if (isset($_SESSION["email"]))
{
    $email = $_SESSION["email"];
}
*/
?>

<!--<!DOCTYPE html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <title>dz8_email</title>-->
<!--</head>-->
<!--<body>-->
<!--<form action="" method="GET">-->
<!--    <p>Ваш email:</p>-->
<!--    <input type="text" name="email" value=--><?php //echo $email ?><!-->
<!--    <p>Имя Фамилия</p>-->
<!--    <input type="text" name="name">-->
<!--    <input type="text" name="surname">-->
<!--    <p>Введите ваш пароль</p>-->
<!--    <input type="text" name="password">-->
<!--    <input type="submit">-->
<!--</form>-->
<!--</body>-->
<!--</html>-->

<!--4. Сделайте две страницы: index.php и form.php. При заходе на index спросите с-->
<!--помощью формы город и возраст пользователя. На form.php сделайте форму с-->
<!--полями 'Name', 'Age', 'City'. При заходе на form.php сделайте так, чтобы поля 'Age' и-->
<!--'City' уже были заполнены. *Для этой задачи я буду использовать те же два файла dz8_sessii.php и dz8_email.php. -->

<?php
$city = '';
$age = '';
session_start();
if (isset($_GET["city"]))
{
    $_SESSION["city"] = $_GET["city"];
}
if (isset($_SESSION["city"]))
{
    $city = $_SESSION["city"];
}
if (isset($_GET["age"]))
{
    $_SESSION["age"] = $_GET["age"];
}
if (isset($_SESSION["age"]))
{
    $age = $_SESSION["age"];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>dz8_sessii</title>
</head>
<body>
<form action="dz8_email.php" method="GET">
    <p>Ваше имя:</p>
    <input type="text" name="name">
    <p>Ваш город:</p>
    <input type="text" name="city" value=<?php echo $city ?>>
    <p>Ваш возраст:</p>
    <input type="text" name="age" value=<?php echo $age ?>>
    <input type="submit">
</form>
</body>
</html>
