<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Мой сайт</title>
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
</head>
<body>

<?php
$menuItems = [
    'Главная' => '/index.php',
    'О нас' => '/pages/about.php',
    'Контакты' => '/pages/contact.php'
];
?>

<header>
    <nav>
        <ul>
            <?php foreach ($menuItems as $title => $url): ?>
                <li>
                    <a href="<?= $url ?>" <?= ($_SERVER['REQUEST_URI'] == $url) ? 'class="active"' : '' ?>>
                        <?= $title ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </nav>
</header>
