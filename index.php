<?php
echo "Задание 1<br>";
$arr = ['a', 'b', 'c', 'd', 'e'];
$result = array_map('strtoupper', $arr);
echo "Исходный массив: " . implode(", ", $arr) . "<br>";
echo "После array_map: " . implode(", ", $result) . "<br><br>";

echo "Задание 2<br>";
$arr = ['a', 'b', 'c', 'd', 'e'];
$lastIndex = count($arr) - 1;
echo "Массив: " . implode(", ", $arr) . "<br>";
echo "Последний элемент: " . $arr[$lastIndex] . "<br><br>";

echo "Задание 3<br>";
$arr = [1, 2, 3, 4, 5];
if (in_array(3, $arr)) {
    echo "В массиве есть элемент со значением 3<br><br>";
} else {
    echo "В массиве нет элемента со значением 3<br><br>";
}

echo "Задание 4<br>";
$arr1 = [1, 2, 3];
$arr2 = ['a', 'b', 'c'];
$result = array_merge($arr1, $arr2);
echo "Первый массив: " . implode(", ", $arr1) . "<br>";
echo "Второй массив: " . implode(", ", $arr2) . "<br>";
echo "Объединенный массив: " . implode(", ", $result) . "<br><br>";

echo "Задание 5<br>";
$arr = [1, 2, 3, 4, 5];
$result = array_slice($arr, 1, 3);
echo "Исходный массив: " . implode(", ", $arr) . "<br>";
echo "Переделаный массив: " . implode(", ", $result) . "<br><br>";

echo "Задание 6<br>";
$arr = ['a' => 1, 'b' => 2, 'c' => 3];
$keys = array_keys($arr);
$values = array_values($arr);
echo "Исходный массив: ";
print_r($arr);
echo "<br>";
echo "Ключи: " . implode(", ", $keys) . "<br>";
echo "Значения: " . implode(", ", $values) . "<br><br>";

echo "Задание 7<br>";
$keys = ['a', 'b', 'c'];
$values = [1, 2, 3];
$result = array_combine($keys, $values);
echo "Массив ключей: " . implode(", ", $keys) . "<br>";
echo "Массив значений: " . implode(", ", $values) . "<br>";
echo "Результат array_combine: ";
print_r($result);
echo "<br><br>";

echo "Задание 8<br>";
$arr = ['a', '-', 'b', '-', 'c', '-', 'd'];
$position = array_search('-', $arr);
echo "Массив: " . implode(", ", $arr) . "<br>";
echo "Позиция первого элемента '-': " . $position . "<br><br>";

echo "Задание 9<br>";
$arr = ['3' => 'a', '1' => 'c', '2' => 'e', '4' => 'b'];
echo "Исходный массив: ";
print_r($arr);
echo "<br>";

$temp = $arr;
asort($temp);
echo "asort (по значениям, ключи сохраняются): ";
print_r($temp);
echo "<br>";

$temp = $arr;
arsort($temp);
echo "arsort (по значениям обратно, ключи сохраняются): ";
print_r($temp);
echo "<br>";

$temp = $arr;
rsort($temp);
echo "rsort (по значениям обратно, ключи сбрасываются): ";
print_r($temp);
echo "<br>";

$temp = $arr;
sort($temp);
echo "sort (по значениям, ключи сбрасываются): ";
print_r($temp);
echo "<br>";

$temp = $arr;
krsort($temp);
echo "krsort (по ключам обратно): ";
print_r($temp);
echo "<br>";

$temp = $arr;
ksort($temp);
echo "ksort (по ключам): ";
print_r($temp);

echo "<br><br>";

echo "Задание 10<br>";
$str = "1234567890";
$digits = str_split($str);
$sum = array_sum($digits);
echo "Строка: $str<br>";
echo "Массив цифр: " . implode(", ", $digits) . "<br>";
echo "Сумма цифр: $sum<br><br>";

echo "Задание 11<br>";
$arr = array_fill(0, 10, 'x');
echo "Массив из 10 букв 'x': " . implode(", ", $arr) . "<br><br>";

echo "Задание 12<br>";
$arr1 = [1, 2, 3, 4, 5];
$arr2 = [3, 4, 5, 6, 7];
$intersection = array_intersect($arr1, $arr2);
echo "Первый массив: " . implode(", ", $arr1) . "<br>";
echo "Второй массив: " . implode(", ", $arr2) . "<br>";
echo "Общие элементы: " . implode(", ", $intersection) . "<br>";
echo "Общие элементы (с ключами): ";
print_r($intersection);
echo "<br>";
?>

