<!-- 5. Спросите дату рождения пользователя. При следующем заходе на сайт
напишите сколько дней осталось до его дня рождения. Если сегодня день
рождения пользователя — поздравьте его! -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>dz7_index2</title>
</head>
<body>
	<p>Введите свою дату рождения в виде ДД.ММ:</p>
	<form action="" method="GET">
		 <input type="text" name="date">
		 <input type="submit">
	</form>
</body>
</html>


<?php

if (isset($_COOKIE['cooka'])) {
    $date = $_COOKIE['cooka'];
}
if (isset($_GET['date'])) {
	$date = $_GET['date'];
	setcookie ('cooka', $date);
}
if (isset($date)) {
	list ($day, $month) = explode ('.', $date);
	$dr = date('z', mktime(0,0,0,$month,$day));
    $td = date('z', time());
    if ($dr == $td) {
        echo "Поздравляем с Днем Рождения!";
    }
    else if ($dr > $td) {
        $days = $dr-$td;
        echo $days." дней осталось до вашего дня рождения";
    }
    else {
        $tg = date('y', time());
        $day_next_year = date('L', mktime(0,0,0,0,0,$tg+1)) + 365;
        $days = $day_next_year - $td + $dr;
        echo $days." дней осталось до вашего дня рождения";
    }

}


?>
