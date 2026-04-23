<?php
echo "<!DOCTYPE html>
<html lang='ru'>
<head>
    <meta charset='UTF-8'>
    <title>Лабораторная работа №15</title>
</head>
<body>";

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
    
    public function __construct()
    {
        $this->sidesCount = 4;
    }
}

class Square extends Figure implements iFigure
{
    private float $a;
    
    public function __construct()
    {
        $this->sidesCount = 4;
    }
}

class Triangle extends Figure implements iFigure
{
    private float $a;
    private float $b;
    private float $c;
    
    public function __construct()
    {
        $this->sidesCount = 3;
    }
}

echo "</body></html>";
?>
