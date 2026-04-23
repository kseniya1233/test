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

echo "</body></html>";
?>
