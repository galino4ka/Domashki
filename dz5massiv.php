<?php
/*На count и range
1. Создайте массив, заполненный числами от 1 до 100.
*/

$arr= range (1, 100);
print_r ($arr);
echo "<br>";
//-----------------------------------------------------
/*
2. Дан массив $arr. Подсчитайте количество элементов этого массива.
*/

$arr= array(1,7,1,4,9,7,56);
echo count($arr);
echo "<br>";

//-----------------------------------------------------
/*
3. Дан массив $arr. Выведите на экран первый и последний элемент данного массива.
*/

$arr= array(1,7,1,4,9,7,56);
echo current($arr). " ";
echo end($arr);
echo "<br>";
//-----------------------------------------------------
/*
На array_sum и array_product

4. Дан массив $arr. С помощью функций array_sum и count найдите среднее арифметическое элементов данного массива.
*/

$arr= array(1,7,1,4,9,7,56);
$sred= array_sum($arr) / count($arr);
echo "$sred<br>";

//----------------------------------------------------
/*
5. Создайте массив, заполненный числами от 1 до 300. Найдите произведение элементов данного массива.
*/

$arr= range (1, 100);
print_r ($arr);
echo "<br>";
echo array_product($arr);
echo "<br>";

//----------------------------------------------------
/*
На array_merge и array_slice

6. Даны два массива: первый с элементами '1', '2', '3', второй с элементами 'a', 'b', 'c'. Сделайте из них массив с элементами '1', '2', '3', 'a', 'b', 'c'.
*/

$arr= ['1', '2', '3'];
$arr2= ['a', 'b', 'c'];
print_r (array_merge ($arr, $arr2));
echo "<br>";

//---------------------------------------------------
/*
7. Даны массив с элементами '1', '2', '3', '4', '5'. С помощью функции array_slice создайте массив $b с элементами '2', '3', '4'.
*/

$arr= ['1', '2', '3', '4', '5'];
$b= array_slice ($arr, 1, -1);
print_r ($b);
echo "<br><br> задача 8 =>  ";

//---------------------------------------------------
/*
На array_keys, array_values, array_combine

8. Дан массив 'green'=>'зеленый', 'blue'=>'голубой', 'red'=>'красный'. Запишите в массив $key английские названия цветов, а в $values – русские.
*/

$arr= ['green'=>'зеленый', 'blue'=>'голубой', 'red'=>'красный'];
$key= array_keys ($arr);
$values= array_values ($arr);
print_r ($key). "";
echo "<br>";
print_r ($values);
echo "<br>";

//---------------------------------------------------
/*
9. Даны два массива: 'green', 'blue', 'red' и ''зеленый', 'голубой', 'красный'. Создайте с их помощью массив 'green'=>'зеленый', 'blue'=>'голубой', 'red'=>'красный'. Используйте функцию array_combine.
*/

$arr3= array_combine ($key, $values);
print_r ($arr3);
echo "<br><br><br>";

//----------------------------------------------------
/*
На array_flip, array_count_values, array_reverse, array_unique

10. Дан массив 'green'=>'зеленый', 'blue'=>'голубой', 'red'=>'красный'. Поменяйте местами ключи и значения.
*/

$arr = ['green'=>'зеленый', 'blue'=>'голубой', 'red'=>'красный'];
$arr2 = array_flip ($arr);
print_r ($arr2);
echo "<br><br><br>";

//----------------------------------------------------
/*
11. Дан массив с элементами '1', '2', '3', '4', '5'. Создайте массив с элементами '5', '4', '3', '2', '1'.
*/

$arr = ['1', '2', '3', '4', '5'];
print_r (array_reverse($arr));
echo "<br><br>";

//---------------------------------------------------
/*
12. Дан массив с элементами 'a', 'b', 'c', 'b', 'a'. Удалите из него повторяющиеся элементы.
*/

$arr = ['a', 'b', 'c', 'b', 'a'];
print_r (array_unique($arr));
echo "<br><br>";

//---------------------------------------------------
/*
13. Дан массив с элементами 'a', 'b', 'c', 'b', 'a'. Подсчитайте сколько раз встречается каждая из букв.
*/

$arr = ['a', 'b', 'c', 'b', 'a'];
print_r (array_count_values($arr));
echo "<br><br>";

//----------------------------------------------------
/*
На сортировку, shuffle и array_rand

14. Дан массив '3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'. Попробуйте на нем различные типы сортировок.
*/

$arr = ['3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'];
ksort($arr);
print_r ($arr);
echo "<br>";
arsort($arr);
print_r ($arr);
echo "<br>";

//----------------------------------------------------
/*
15. Дан массив $arr. Перемешайте его элементы в случайном порядке.
*/
$arr = ['3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'];
shuffle($arr);
print_r ($arr);
echo "<br>";

//-----------------------------------------------------
/*
16. Дан массив с элементами '1', '2', '3', '4', '5'. Выведите на экран случайный элемент данного масссива.
*/

$arr = ['1', '2', '3', '4', '5'];
echo "задача 16= ";
print_r (array_rand($arr));
echo "<br>";

//-----------------------------------------------------
/*
На array_map и array_walk

17. Дан массив с элементами '1', '2', '3', '4', '5'. Создайте новый массив, в котором будут лежать квадратные корни данных элементов.
*/
function kvadrat($n) {
    return sqrt($n);
}
$arr = ['1', '2', '3', '4', '5'];
$b = array_map("kvadrat", $arr);
print_r($b);
echo "<br>";

//-----------------------------------------------------
/*
18. Дан массив с элементами '<b>php</b>', '<i>html</i>'. Создайте новый массив, в котором из элементов будут удалены теги.
*/

$arr = ['<b>php</b>', '<i>html</i>'];
function tag ($n) {
    return strip_tags($n);
}
$b = array_map("tag", $arr);
echo "Массив задачи 18 = ";
print_r ($b);
echo "<br><br>";
//-------------------------------------------------------
/*
19. Дан массив с элементами ' a ', ' b ', ' с '. Создайте новый массив, в котором будут данные элементы без концевых пробелов.
*/

$arr = [' a ', ' b ', ' с '];
$c = array_map("trim", $arr);
echo "Массив задачи 19 = ";
print_r ($c);
echo "<br>";

//-------------------------------------------------------
/*
На array_chunk и array_pad

20. Дан массив с элементами '1', '2', '3'. Сделайте из него массив с элементами '1', '2', '3', '0', '0', '0'.
*/
$arr = ['1', '2', '3'];
$arr2 = array_pad ($arr, 6, 0);
print_r ($arr2);
echo "<br><br>";
//-------------------------------------------------------
/*
21. Создайте массив, заполненный целыми числами от 1 до 20. С помощью функции array_chunk разбейте этот массив на 5 подмассивов ('1', '2', '3', '4'; '5', '6', '7', '8' и т.д.).
*/

$arr = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20'];
print_r(array_chunk($arr, 5));

//-------------------------------------------------------
?>