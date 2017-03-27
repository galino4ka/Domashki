<?php
/*
Создайте html-форму. Сделайте на форме два поля ввода Date 1 и Date 2. Через поля ввода будут передаваться даты в формате 'год-месяц-день'.
Добавьте на форму два элемента типа radio. Задайте элементы label для этих кнопок: dd.mm.YY и YY.mm.dd соответственно. Радио кнопки будут отвечать за формат даты, в котором будут выводится даты пользователю на экран.
Данные, которые передаются формой либо через адресную строку, необходимо проверять на корректность (валидировать) на сервере. Валидацию можно проводить единожды и затем использовать для решения задач.
*/
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
	
</head>
<body>
	<form method ="post" action="#">
	Date1:
	<input type="text" name="Date1" value=""><br><br>
	Date2:
	<input type="text" name="Date2" value=""><br>
	<label><input type="radio" checked name="format" value="dmy"/>dd.mm.YY</label> 
	<label><input type="radio" name="format" value="ymd"/>YY.mm.dd</label><br>
	<input type="submit" value="Отправить">
	</form>
</body>
 -->

<?php
//---------------------------------------------------------------------
/*
1. Пользователь вводит число, а скрипт определяет високосный ли год. Сделать проверку на формат и количество введенных значений. Если есть ошибка - уведомить об этом пользователя.

function visokosny($year) {
	if ($year % 400 == 0 || $year % 4 == 0 && $year % 100 != 0) {
		return "високосный";
	}
	else {
		return "не високосный";
	}
}
if (!empty($_POST)) {
	$format = $_POST["format"];
	$date1 = $_POST["Date1"];
	
	if (strlen($date1) != 8 || $date1{2} != '.' || $date1{5} != '.') {
		echo "Неверно введена дата";
		die;
	}
	if ($format == "dmy")
		list ($day, $month, $year) = explode ('.', $date1);
	else
		list ($year, $month, $day) = explode ('.', $date1);
	$year = date("Y", mktime(0,0,0,$month,$day,$year));
	echo visokosny($year) . "<br>";
}
*/
//------------------------------------------------------------------
/*
2. Пользователь передает две даты. Первую дату запишите в переменную $date1, а вторую в $date2. Сравните, какая из введенных дат больше. С помощью функций explode и mktime переведите большую дату в формат timestamp. По этому timestamp узнайте день недели (словом, латиницей) и выведите его на экран.

$date1 = $_POST["Date1"];
$date2 = $_POST["Date2"];
list ($day, $month, $year) = explode ('.', $date1);
$timestamp1 = mktime(0, 0, 0, $month, $day, $year);

list ($day, $month, $year) = explode ('.', $date2);
$timestamp2 = mktime(0,0,0,$month,$day,$year);
if ($timestamp1 > $timestamp2) {
	echo date("l", $timestamp1);
}
else {
	echo date("l", $timestamp2);	
}
*/
//------------------------------------------------------------------
/*
3. В поле вводится дата. Прибавьте к этой дате 1 год 2 месяца и 3 дня. Отнимите от этой даты 5 дней. Результат преобразуйте ее в выбранный формат и отобразите на экране.

$date1 = $_POST["Date1"];
list ($day, $month, $year) = explode ('.', $date1);
$timestamp1 = mktime(0, 0, 0, $month+2, $day+3-5, $year+1);
echo date("d-m-Y", $timestamp1);
*/
//------------------------------------------------------------------
/*
4. С помощью адресной строки передайте GET-параметр date, который хранит год (4 числа). Посчитайте сколько воскресений в введенном году приходится на первое число месяца.

$date1 = $_GET["date"];
$result = 0;
for ($i=0; $i<12; $i++) {
	$t = mktime(0, 0, 0, $i, 1, $date1);
	$day = date("l", $t);
	if ($day == 'Sunday') {
		$result++;
	}
}
echo $result;
*/
//------------------------------------------------------------------
/*
5. С помощью адресной строки передайте GET-параметр date, который хранит год (4 числа). Найдите все пятницы 13-е в этом году. Результат выведите в виде списка дат.

$date1 = $_GET["date"];
for ($i=0; $i<12; $i++) {
	$t = mktime(0, 0, 0, $i, 13, $date1);
	$day = date("l", $t);
	if ($day == 'Friday') {
		echo date("d-m-Y", $t)."<br>";
	}
}
*/
//-----------------------------------------------------------------
/*
6. Дан GET-параметр date, в который вводится год. Узнайте, какой это будет год по восточному календарю. Результат выведите на экран.

$date1 = $_GET["date"];
$kalendar = ['Собака', 'Свинья', 'Крыса', 'Бык', 'Тигр', 'Кролик', 'Дракон', 'Змея', 'Лошадь', 'Коза', 'Обезьяна', 'Петух'];
$i = ($date1+10) % 12;
echo $kalendar[$i]."  $date1";
*/
//-----------------------------------------------------------------
/*
7. Пользователь в форму вводит дату, например, 2017-01-01. Найдите количество дней, часов, минут, секунд, прошедших с 2017-01-01 23:59:59 до настоящего момента.

$date1 = $_POST["Date1"];
list ($day, $month, $year) = explode ('.', $date1);
$timestamp1 = mktime(0, 0, 0, $month, $day, $year);
$timestamp2 = time();
$sek = $timestamp2 - $timestamp1;
$minut = floor($sek / 60);
$hour = floor($minut / 60);
$day = floor($hour / 24);
echo "$day дней, $hour часов, $minut минут, $sek секунд";
*/
//-----------------------------------------------------------------
/*
8. Пользователь в форму вводит дату. Узнайте какой день недели был 100 лет назад.

$date1 = $_POST["Date1"];
list ($day, $month, $year) = explode ('.', $date1);
$timestamp1 = mktime(0, 0, 0, $month, $day, $year-100);
echo date("l", $timestamp1);
*/
//-----------------------------------------------------------------
/*
9. Создайте html-форму. Добавьте на форму 4 элемента с типом checkbox, сгруппированных с помощью элемента fieldset. Чекбоксы должны иметь названия: html, css, php, javascript. Названия чекбоксам задаются с помощью элемента label. Спросите у пользователя, какие из языков он знает: html, css, php, javascript. Выведите на экран те языки, которые знает пользователь. Если пользователь не отметил ни один язык — выведите на экран сообщение об этом.

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form method="post" action="">
		<fieldset>
			<p>Какие языки вы знаете:</p>
		   <label><input type="checkbox" name="html" value="">html<Br></label>
		   <label><input type="checkbox" name="css" value="">css<Br></label>
		   <label><input type="checkbox" name="php" value="">php<Br></label> 
		   <label><input type="checkbox" name="javascript" value="">javascript</p></label>
		   <input type="submit" value="Отправить">
		</fieldset>
	</form>
</body>
</html>

<?php

if (!empty($_POST)) {
	foreach ($_POST as $key => $value) {
		echo $key."  ";
	}
}
else {
	echo "Вы не знаете языков";
}
*/
//------------------------------------------------------------------
/*
10. Создайте html-форму. Спросите у пользователя знает ли он PHP с помощью двух radio-кнопок. Выведите результат на экран. Сделайте так, чтобы по умолчанию один из вариантов был уже отмечен.
*/
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form method ="post">
		<p>Знаете ли вы PHP:</p>
		<label><input type="radio" checked name="php" value="Да"/>Да</label> 
		<label><input type="radio" name="php" value="Нет"/>Нет</label><br>
		<input type="submit" value="Отправить">
	</form>
</body>
</html> -->

<!-- <?php
echo $_POST['php'];
?> -->

<?php
//-------------------------------------------------------------
/*
11. Создайте html-форму. Спросите у пользователя его возраст с помощью нескольких radio-кнопок, сгруппированных элементом fieldset. Варианты ответа сделайте такими: менее 20 лет, 20-25, 26-30, более 30. Результат выдайте на экран в видет “Ваш возраст в диапазоне <n> лет”.
*/
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form method ="post">
	    <fieldset>
			<p>Какой ваш возраст:</p>
			<label><input type="radio" name="age" value="0-20"/>менее 20 лет</label><br>
			<label><input type="radio" name="age" value="20-25"/>20-25</label><br>
			<label><input type="radio" name="age" value="26-30"/>26-30</label><br>
			<label><input type="radio" name="age" value="30+"/>более 30</label><br>
			<input type="submit" value="Отправить">
		</fieldset>
	</form>
</body>
</html>
 -->
<?php
//echo "Ваш возраст в диапазоне ". $_POST['age']. " лет";
?>
<?php
//----------------------------------------------------------
/*
12. Создайте html-форму. Спросите у пользователя его возраст с помощью select. Варианты ответа сделайте такими: менее 20 лет, 20-25, 26-30, более 30.
*/
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form method ="post">
		<p>Какой ваш возраст:</p>
		<select>
		  <option>менее 20 лет</option>
		  <option>20-25</option>
		  <option>26-30</option>
		  <option>более 30</option>
        </select>
        <input type="submit" value="Отправить">
	</form>
</body>
</html> -->

<?php
//---------------------------------------------------------------------------
/*
13. Создайте html-форму. Спросите у пользователя с помощью элемента multiselect, какие из языков он знает: html, css, php, javascript. Выведите на экран те языки, которые знает пользователь.
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form method ="post">
		<p>Какие языки вы знаете:</p>
		<select multiple name="answer[]">
		  <option>html</option>
		  <option>css</option>
		  <option>php</option>
		  <option>javascript</option>
        </select>
        <input type="submit" value="Отправить">
	</form>
</body>
</html>

<?php  
if (!empty($_POST)) {
	$a = implode(" ", $_POST['answer']);
	echo $a. "<br>";
}
?>

<?php
//----------------------------------------------------------------------------
/*
14. Сделайте функцию, которая создаёт html элемент. Функция должна иметь следующие параметры: type, name, value, placeholder. В функцию на вход может попасть только input или textarea. В любом другом случае необходимо вывести предупреждение об ошибке.
*/

function teg($type, $name, $value, $placeholder) {
	$typ = ['button', 'checkbox', 'file', 'hidden', 'image', 'password', 'radio', 'reset', 'submit', 'text'];
	$i = array_search($type, $typ);
	if ($type == 'textarea') {
		echo '<textarea placeholder = "'.$placeholder.'"></textarea>';
	}
	else if ($i >= 0) {
		echo "<input type = '".$type."' name = '".$name."' value = '".$value."'  />";
	}
	else {
		echo "Не верно введены данные";
	}
	return;
}

teg('button', 'name', 'value', 'введите текст');
echo "<br><br>";
//-----------------------------------------------------------------------------
/*
15. Сделайте функцию, которая будет создавать селект. Функция должна принимать многомерный массив, например:
$arr = array(
0=>array('value'=>'php', 'text'=>'Язык PHP'),
1=>array('value'=>'html', 'text'=>'Язык HTML'),
)
*/

$arr = array(0=>array('value'=>'php', 'text'=>'Язык PHP'), 1=>array('value'=>'html', 'text'=>'Язык HTML'),);

function select($arr) {
	echo "<select>";
	for ($i=0; $i<count($arr); $i++) {
		echo "<option value='".$arr[$i]["value"]."'>".$arr[$i]["text"]."</option>";
	}
	echo "</select>";
}
select($arr);

?>


