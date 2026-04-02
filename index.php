<?php
echo "<!DOCTYPE html>
<html lang='ru'>
<head>
    <meta charset='UTF-8'>
    <title>Лабораторная работа №13</title>
</head>
<body>
    <h1>Лабораторная работа №13</h1>
    <p>Объектно-ориентированное программирование</p>";

class Worker
{
    public $name;
    public $age;
    public $salary;
}

$worker1 = new Worker();
$worker1->name = "Иван";
$worker1->age = 25;
$worker1->salary = 50000;

$worker2 = new Worker();
$worker2->name = "Мария";
$worker2->age = 30;
$worker2->salary = 60000;

echo "<h2>Информация о работниках</h2>";
echo "Работник 1: " . $worker1->name . ", возраст: " . $worker1->age . ", зарплата: " . $worker1->salary . "<br>";
echo "Работник 2: " . $worker2->name . ", возраст: " . $worker2->age . ", зарплата: " . $worker2->salary . "<br>";

echo "</body></html>";
?>
