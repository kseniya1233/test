<?php
echo "<!DOCTYPE html>
<html lang='ru'>
<head>
    <meta charset='UTF-8'>
    <title>Лабораторная работа №14</title>
</head>
<body>";

class Page
{
    private string $name = "page";
    private string $template = "<div><p>It is a default page</p></div>";
    
    public function render(): void
    {
        echo $this->template;
    }
}

$page = new Page();
$page->render();

echo "</body></html>";
?>
