<?php
echo "<!DOCTYPE html>
<html lang='ru'>
<head>
    <meta charset='UTF-8'>
    <title>Лабораторная работа №15</title>
    <style>
        .figure { margin: 10px 0; padding: 10px; border: 1px solid #ccc; border-radius: 5px; }
        .area { color: green; font-weight: bold; }
    </style>
</head>
<body>
    <h1>Лабораторная работа №15</h1>
    <p>Абстрактные классы и интерфейсы</p>";

abstract class Figure
{
    protected float $area;
    protected string $color;
    protected int $sidesCount;
    
    abstract public function infoAbout(): string;
}

interface iFigure
{
    public function getArea(): float;
}

class Rectangle extends Figure implements iFigure
{
    private float $a;
    private float $b;
    
    public function __construct(float $a, float $b)
    {
        $this->a = $a;
        $this->b = $b;
        $this->sidesCount = 4;
    }
    
    public function getArea(): float
    {
        $this->area = $this->a * $this->b;
        return $this->area;
    }
    
    public function infoAbout(): string
    {
        return "Это класс прямоугольника. У него " . $this->sidesCount . " стороны.";
    }
}

class Square extends Figure implements iFigure
{
    private float $a;
    
    public function __construct(float $a)
    {
        $this->a = $a;
        $this->sidesCount = 4;
    }
    
    public function getArea(): float
    {
        $this->area = $this->a * $this->a;
        return $this->area;
    }
    
    public function infoAbout(): string
    {
        return "Это класс квадрата. У него " . $this->sidesCount . " стороны.";
    }
}

class Triangle extends Figure implements iFigure
{
    private float $a;
    private float $b;
    private float $c;
    
    public function __construct(float $a, float $b, float $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
        $this->sidesCount = 3;
    }
    
    public function getArea(): float
    {
        $p = ($this->a + $this->b + $this->c) / 2;
        $this->area = sqrt($p * ($p - $this->a) * ($p - $this->b) * ($p - $this->c));
        return $this->area;
    }
    
    public function infoAbout(): string
    {
        return "Это класс треугольника. У него " . $this->sidesCount . " стороны.";
    }
}

echo "<h2>Создание объектов и вывод информации</h2>";

$rect1 = new Rectangle(5, 10);
$rect2 = new Rectangle(3, 7);

echo "<div class='figure'>";
echo $rect1->infoAbout() . "<br>";
echo "Площадь прямоугольника (5x10): <span class='area'>" . $rect1->getArea() . "</span><br>";
echo "</div>";

echo "<div class='figure'>";
echo $rect2->infoAbout() . "<br>";
echo "Площадь прямоугольника (3x7): <span class='area'>" . $rect2->getArea() . "</span><br>";
echo "</div>";

$square1 = new Square(4);
$square2 = new Square(6);

echo "<div class='figure'>";
echo $square1->infoAbout() . "<br>";
echo "Площадь квадрата (4x4): <span class='area'>" . $square1->getArea() . "</span><br>";
echo "</div>";

echo "<div class='figure'>";
echo $square2->infoAbout() . "<br>";
echo "Площадь квадрата (6x6): <span class='area'>" . $square2->getArea() . "</span><br>";
echo "</div>";

$triangle1 = new Triangle(3, 4, 5);
$triangle2 = new Triangle(5, 5, 6);

echo "<div class='figure'>";
echo $triangle1->infoAbout() . "<br>";
echo "Площадь треугольника (3,4,5): <span class='area'>" . $triangle1->getArea() . "</span><br>";
echo "</div>";

echo "<div class='figure'>";
echo $triangle2->infoAbout() . "<br>";
echo "Площадь треугольника (5,5,6): <span class='area'>" . $triangle2->getArea() . "</span><br>";
echo "</div>";

echo "</body></html>";
?>
