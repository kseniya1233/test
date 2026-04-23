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
}

class Square extends Figure implements iFigure
{
    private float $a;
}

echo "</body></html>";
?>
