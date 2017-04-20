<?php
/*
1. Написать функцию ХХХ ​(имя подставьте своё), которая на вход принимает
необязательный параметр - число, по-умолчанию равное 0. Значение параметра
необходимо приводить к числу.
В функции необходимо создать файл (в последующем обращении - открыть
существующий) и записывать значение параметра в файл.
Если файл пустой, то запишется число из параметра.
Если файл не пустой, то к значению в файле необходимо прибавить значение в
параметре и записать в тот же файл. Например, в файле хранится число 5, в
параметре 2, в файл запишется 7.
*/

/*
function myfile($number=0)
{
    $number *=1;
    $file = fopen(".//dz9_1.txt","c+");
    $number += fgets($file) * 1;
    rewind($file);
    fwrite($file, $number);
    fclose($file);

    echo $number;
}
myfile(2);
*/

//--------------------------------------------------------------------------
/*
2. Даны два файла ХХХ​ и YYY.​В файлах записаны тестовые слова (на латинице,
придумайте сами). разделенными пробелами. Необходимо написать функцию,
которая создаст новый три файла:
only_first.txt​: содержащий строки, которые встречаются только в первом файле;
both.txt​: только строки, которые встречаются в обоих файлах;
more_two.txt​: только строки, которые встречаются в каждом файле более двух раз.

*Для этого задания я создала два файла dz9_2.txt и dz9_3.txt.
 */

/*
$a = './/dz9_2.txt';
$b = './/dz9_3.txt';
function createFile($dz9_2, $dz9_3)
{
    $file1 = fopen($dz9_2, "c+");
    $file2 = fopen($dz9_3, "c+");

    $forFile1 = fgets($file1);
    $forFile2 = fgets($file2);
    fclose($file1);
    fclose($file2);

    $newFile1 = fopen(".//only_first.txt", "c+");
    $newFile2 = fopen(".//both.txt", "c+");
    $newFile3 = fopen(".//more_two.txt", "c+");

    fwrite($newFile1, $forFile1);

    $text = $forFile1 . $forFile2;
    fwrite($newFile2, $text);

    $forFile3 = explode(" ", $text);
    $forFile3a = array_unique($forFile3);
    $forFile3b = implode(" ", $forFile3a);
    fwrite($newFile3, $forFile3b);

    fclose($newFile1);
    fclose($newFile2);
    fclose($newFile3);
}
createFile($a, $b);
*/
//------------------------------------------------------------------------------
/*
3. Дан файл со словами. Упорядочить слова по алфавиту и записать в тот же файл.
*Для этого задания я буду использовать файл dz9_2.txt.
 */
/*
$dz9 = fopen(".//dz9_2.txt", "c+");
$forDz9 = fgets($dz9);
$array = explode(" ", $forDz9);
sort($array);
reset($array);
while (list($key, $val) = each($array)) {
    echo "array[" . $key . "] = " . $val . "\n";
}
$newText = implode(" ", $array);
rewind($dz9);
fwrite($dz9, $newText);

fclose($dz9);
*/

//-----------------------------------------------------------------------------
/*
 4. Дан файл. Каждая строка содержит имя, пароль и email, разделенные символами ':'
(двоеточие).
Например:
john:12345:john@gmail.com
kate:12345:kate@gmail.com
test:21345:test@gmail.com
mike:12145:test@gmail.com
Удалить строки с повторами email и строки, в которых совпадают имена (т.е. удалятся
две последних записи).
*Для этого задания я создала файл dz9_4.txt
 */

/*
$dz9 = file(".//dz9_4.txt");
$emails = [];
$names = [];
for ($i = 0; $i < count($dz9); $i++) {
    $dz9[$i] = explode(":", $dz9[$i]);
    $names[] = $dz9[$i][0];
    $emails[] = trim($dz9[$i][2]);
}
$name_counts = array_count_values($names);
$email_counts = array_count_values($emails);

$result = [];
for ($i = 0; $i < count($dz9); $i++) {
    if ($name_counts[$dz9[$i][0]] < 2 && $email_counts[$emails[$i]] < 2) {
        $result[] = implode(":", $dz9[$i]);
    }
}
file_put_contents(".//dz9_4.txt", $result);
*/
//-----------------------------------------------------------------
/*
 5. Написать функцию, которая будет показывать список всех файлов в данной папке в
виде дерева, как показано на ниже (поиск файлов происходит и во всех вложенных
уровнях).
root dir
-- dir 1
-- dir 2
---- dir 2.1
---- dir 2.2
------ dir 2.2.1
---- dir 2.3
 */

function dirFile($dir, $space = "--") {
    $result = "";
    $cdir = scandir($dir);
    foreach ($cdir as $key => $value) {
        if (!in_array($value, array(".", ".."))) {
            if (is_dir($dir . DIRECTORY_SEPARATOR . $value)) {
                $result.= "$space dir $value <br>". dirFile($dir . DIRECTORY_SEPARATOR . $value, $space . "--"). "<br>";
            }
            else {
                $result.= "$space $value <br>";
            }
        }
    }
    return $result;
}
echo dirfile("F:/projects/project1.loc/Domashki");


?>
