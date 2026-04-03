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
    private $age;
    public $salary;
    
    function __construct($name, $age, $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }
    
    function getName()
    {
        return $this->name;
    }
    
    function getAge()
    {
        return $this->age;
    }
    
    function getSalary()
    {
        return $this->salary;
    }
    
    private function checkAge($age)
    {
        return $age >= 18;
    }
    
    function setAge($age)
    {
        if ($this->checkAge($age)) {
            $this->age = $age;
        } else {
            echo "Вам работать в нашей компании еще рано<br>";
        }
    }
}

$worker1 = new Worker("Иван", 25, 50000);
$worker2 = new Worker("Мария", 30, 60000);

echo "<h2>Информация о работниках</h2>";
echo "Работник 1: " . $worker1->getName() . ", возраст: " . $worker1->getAge() . ", зарплата: " . $worker1->getSalary() . "<br>";
echo "Работник 2: " . $worker2->getName() . ", возраст: " . $worker2->getAge() . ", зарплата: " . $worker2->getSalary() . "<br>";

$sumSalary = $worker1->getSalary() + $worker2->getSalary();
$sumAge = $worker1->getAge() + $worker2->getAge();
echo "<h3>Сумма зарплат: " . $sumSalary . "</h3>";
echo "<h3>Сумма возрастов: " . $sumAge . "</h3>";

echo "<h3>Метод getName: " . $worker1->getName() . "</h3>";
echo "<h3>Метод getAge: " . $worker1->getAge() . "</h3>";
echo "<h3>Метод getSalary: " . $worker1->getSalary() . "</h3>";

echo "<h3>Проверка setAge через checkAge:</h3>";
$worker1->setAge(20);
echo "Возраст после setAge(20): " . $worker1->getAge() . "<br>";
$worker1->setAge(16);
echo "Возраст после setAge(16): " . $worker1->getAge() . "<br>";

echo "</body></html>";
?>
