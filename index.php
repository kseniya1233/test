<?php
echo "<h1>Лабораторная работа №12</h1>";
echo "<h2>Часть 1. Обработка исключений</h2>";

// Задание 1
echo "<h3>Задание 1: Обработка ошибки открытия файла</h3>";
try {
    $file = fopen("neexistujushiy_fail.txt", "r");
    if (!$file) {
        throw new Exception("Файл не существует");
    }
    fclose($file);
} catch (Exception $ex) {
    echo "Ошибка: " . $ex->getMessage() . "<br>";
    echo "Файл: " . $ex->getFile() . "<br>";
    echo "Строка: " . $ex->getLine() . "<br>";
}

// Задание 2
echo "<h3>Задание 2: Деление на ноль</h3>";
try {
    $a = 10;
    $b = 0;
    $result = $a / $b;
    echo "Результат: " . $result . "<br>";
} catch (DivisionByZeroError $ex) {
    $errorMessage = date("Y-m-d H:i:s") . " - " . $ex->getMessage() . "\n";
    file_put_contents("log.txt", $errorMessage, FILE_APPEND);
    echo "Ошибка: " . $ex->getMessage() . "<br>";
    echo "Сообщение сохранено в log.txt<br>";
}

// Задание 3
echo "<h3>Задание 3: Доступ к несуществующему элементу массива</h3>";
$countries = ['Spain' => 'Madrid', 'Russia' => 'Moscow'];

try {
    $country = "Germany";
    if (!array_key_exists($country, $countries)) {
        throw new Exception("Страна '" . $country . "' не найдена в массиве");
    }
    echo "Столица " . $country . ": " . $countries[$country] . "<br>";
} catch (Exception $ex) {
    echo "Ошибка: " . $ex->getMessage() . "<br>";
}
?>
