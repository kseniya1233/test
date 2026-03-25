<?php
echo "<!DOCTYPE html>
<html lang='ru'>
<head>
    <meta charset='UTF-8'>
    <title>Лабораторная работа №11</title>
</head>
<body>
    <h1>Лабораторная работа №11</h1>
    <p>Работа с файлами в PHP</p>";

echo "<h2>Часть 1</h2>";

// Задание 1
echo "<p><strong>Задание 1:</strong> Создать файл test.txt и записать 'Привет, мир!'</p>";
$file = fopen("test.txt", "w");
fwrite($file, "Привет, мир!");
fclose($file);
echo "<p>Результат: Файл test.txt создан</p>";

// Задание 2
echo "<p><strong>Задание 2:</strong> Считать данные из test.txt</p>";
$content = file_get_contents("test.txt");
echo "<p>Результат: Содержимое файла: " . htmlspecialchars($content) . "</p>";

// Задание 3
echo "<p><strong>Задание 3:</strong> Переименовать test.txt в mir.txt</p>";
rename("test.txt", "mir.txt");
echo "<p>Результат: Файл переименован в mir.txt</p>";

// Задание 4
echo "<p><strong>Задание 4:</strong> Создать папку folder и переместить mir.txt</p>";
if (!is_dir("folder")) {
    mkdir("folder");
}
rename("mir.txt", "folder/mir.txt");
echo "<p>Результат: Папка folder создана, файл mir.txt перемещен</p>";

// Задание 5
echo "<p><strong>Задание 5:</strong> Создать копию world.txt</p>";
copy("folder/mir.txt", "folder/world.txt");
echo "<p>Результат: Копия world.txt создана</p>";

// Задание 6
echo "<p><strong>Задание 6:</strong> Определить размер world.txt</p>";
$size = filesize("folder/world.txt");
echo "<p>Результат: Размер файла: " . $size . " байт (" . round($size/1024, 2) . " Кбайт)</p>";

// Задание 7
echo "<p><strong>Задание 7:</strong> Удалить файл world.txt</p>";
unlink("folder/world.txt");
echo "<p>Результат: Файл world.txt удален</p>";

// Задание 8
echo "<p><strong>Задание 8:</strong> Проверить существование файлов</p>";
echo "<p>Результат:<br>";
echo "world.txt: " . (file_exists("folder/world.txt") ? "существует" : "не существует") . "<br>";
echo "mir.txt: " . (file_exists("folder/mir.txt") ? "существует" : "не существует") . "</p>";

echo "<h2>Часть 2</h2>";

// Задание 1
echo "<p><strong>Задание 1:</strong> Создать папку test</p>";
mkdir("test");
echo "<p>Результат: Папка test создана</p>";

// Задание 2
echo "<p><strong>Задание 2:</strong> Переименовать test в www</p>";
rename("test", "www");
echo "<p>Результат: Папка переименована в www</p>";

// Задание 3
echo "<p><strong>Задание 3:</strong> Удалить папку www</p>";

function deleteFolder($dir) {
    if (!is_dir($dir)) return;
    $items = scandir($dir);
    foreach ($items as $item) {
        if ($item == '.' || $item == '..') continue;
        $path = $dir . '/' . $item;
        if (is_dir($path)) {
            deleteFolder($path);
        } else {
            unlink($path);
        }
    }
    rmdir($dir);
}

if (is_dir("www")) {
    deleteFolder("www");
    echo "<p>Результат: Папка www удалена со всем содержимым</p>";
} else {
    echo "<p>Результат: Папка www уже удалена</p>";
}

// Задание 4
echo "<p><strong>Задание 4:</strong> Создать папки из массива</p>";
mkdir("test");
$folders = ["folder1", "folder2", "folder3", "images", "docs"];
foreach ($folders as $folder) {
    mkdir("test/" . $folder);
}
echo "<p>Результат: Созданы папки: " . implode(", ", $folders) . "</p>";

// Задание 5
echo "<p><strong>Задание 5:</strong> Вывести все .jpg файлы</p>";
$jpgFiles = glob("*.jpg");
echo "<p>Результат: ";
if (count($jpgFiles) > 0) {
    foreach ($jpgFiles as $file) {
        echo basename($file) . " ";
    }
} else {
    echo "Файлов .jpg не найдено";
}
echo "</p>";

echo "</body></html>";
?>
