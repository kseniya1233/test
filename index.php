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
echo "<h2>Часть 2. Работа с датами</h2>";

// Задание 1
echo "<h3>Задание 1: Timestamp 15.03.2025 10:25:00</h3>";
echo mktime(10, 25, 0, 3, 15, 2025) . "<br>";

// Задание 2
echo "<h3>Задание 2: Разница с 02.10.1990 08:05:59</h3>";
$diff = time() - mktime(8, 5, 59, 10, 2, 1990);
echo $diff . " секунд<br>";

// Задание 3
echo "<h3>Задание 3: Текущая дата</h3>";
echo date("Y.m.d H:i:s") . "<br>";

// Задание 4
echo "<h3>Задание 4: 1 сентября текущего года</h3>";
echo date("Y.m.d", mktime(0, 0, 0, 9, 1, date("Y"))) . "<br>";

// Задание 5
echo "<h3>Задание 5: День недели 02.02.2000</h3>";
$week = ['воскресенье', 'понедельник', 'вторник', 'среда', 'четверг', 'пятница', 'суббота'];
echo $week[date("w", mktime(0, 0, 0, 2, 2, 2000))] . "<br>";

// Задание 6
echo "<h3>Задание 6: Дни недели</h3>";
$week = ['воскресенье', 'понедельник', 'вторник', 'среда', 'четверг', 'пятница', 'суббота'];
echo "Сегодня: " . $week[date("w")] . "<br>";
$date1 = mktime(0, 0, 0, 6, 12, 2016);
echo "12 июня 2016 года: " . $week[date("w", $date1)] . "<br>";
$birthday = mktime(0, 0, 0, 1, 20, 2007);
echo "20 января 2007 года (день рождения): " . $week[date("w", $birthday)] . "<br>";

// Задание 7
echo "<h3>Задание 7: Сравнение дат</h3>";
?>
<form method="post">
    <input type="date" name="date1" required>
    <input type="date" name="date2" required>
    <button type="submit">Сравнить</button>
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $d1 = strtotime($_POST['date1']);
    $d2 = strtotime($_POST['date2']);
    echo ($d1 > $d2) ? $_POST['date1'] : $_POST['date2'];
    echo "<br>";
}

// Задание 8
echo "<h3>Задание 8: Преобразование формата</h3>";
$date = "2025-03-25";
echo date("d-m-Y", strtotime($date)) . "<br>";

// Задание 9
echo "<h3>Задание 9: Операции с датой</h3>";
$date = date_create('2000-02-03');
date_modify($date, '+2 days');
echo "+2 дня: " . date_format($date, 'd.m.Y') . "<br>";
date_modify($date, '+1 month +3 days +1 year');
echo "+1 месяц +3 дня +1 год: " . date_format($date, 'd.m.Y') . "<br>";
$date2 = date_create('2000-02-03');
date_modify($date2, '-3 days');
echo "-3 дня: " . date_format($date2, 'd.m.Y') . "<br>";

// Задание 10
echo "<h3>Задание 10: Дней до Нового Года</h3>";
$newYear = mktime(0, 0, 0, 1, 1, date("Y") + 1);
echo ceil(($newYear - time()) / 86400) . " дней<br>";
?>
