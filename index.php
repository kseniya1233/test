<?php
echo "<!DOCTYPE html>
<html lang='ru'>
<head>
    <meta charset='UTF-8'>
    <title>Лабораторная работа №14</title>
    <style>
        .blog-cards { display: flex; gap: 20px; margin-top: 20px; flex-wrap: wrap; }
        .card { border: 1px solid #ccc; padding: 15px; border-radius: 5px; width: 250px; background: #f9f9f9; }
        .card h3 { margin: 10px 0 10px 0; }
        .card p { margin: 5px 0; }
        .date { color: #666; font-size: 12px; }
        .card img { width: 100%; height: 150px; object-fit: cover; border-radius: 5px; }
        .card a { text-decoration: none; color: inherit; display: block; }
        .back-link { margin-top: 20px; display: inline-block; }
        .detail-img { width: 100%; max-width: 500px; border-radius: 10px; margin-bottom: 20px; }
        nav { margin-bottom: 20px; }
        nav a { margin-right: 15px; }
    </style>
</head>
<body>";

echo "<nav>";
echo "<a href='?page=page'>Страница по умолчанию</a>";
echo "<a href='?page=blog'>Путешествия</a>";
echo "</nav>";

class Page
{
    private string $name = "page";
    private string $template = "<div><p>It is a default page</p></div>";
    
    public function render(): void
    {
        echo $this->template;
    }
}

class BlogPage extends Page
{
    private string $name = "blog";
    private string $template = "<div class='blog-cards'>
        <div class='card'>
            <a href='?page=italy'>
                <img src='https://avatars.mds.yandex.net/i?id=adb889b77e7b45284a449796aec979cb_l-10837594-images-thumbs&n=13' alt='Италия'>
                <h3>Путешествие в Италию</h3>
                <p>Рим и Флоренция</p>
                <p class='date'>Июль 2025</p>
            </a>
        </div>
        <div class='card'>
            <a href='?page=japan'>
                <img src='https://avatars.mds.yandex.net/i?id=08fda78567a2fe3d30a333c41459c981_l-5176581-images-thumbs&n=13' alt='Япония'>
                <h3>Путешествие в Японию</h3>
                <p>Токио и Киото</p>
                <p class='date'>Весна 2025</p>
            </a>
        </div>
    </div>";
    
    public function render(): void
    {
        echo $this->template;
    }
}

class ItalyPage extends Page
{
    private string $name = "italy";
    private string $template = "<div>
        <img class='detail-img' src='https://avatars.mds.yandex.net/i?id=5a6c9f5e2f03581c33859d314d07ed39_l-5221549-images-thumbs&n=13' alt='Италия'>
        <h2>Путешествие в Италию</h2>
        <p>Рим и Флоренция - незабываемые впечатления!</p>
        <p>Мы посетили Колизей, Пизанскую башню, галерею Уффици.</p>
        <p>Дата поездки: Июль 2025</p>
        <a href='?page=page' class='back-link'>← Вернуться на главную</a>
    </div>";
    
    public function render(): void
    {
        echo $this->template;
    }
}

class JapanPage extends Page
{
    private string $name = "japan";
    private string $template = "<div>
        <img class='detail-img' src='https://avatars.mds.yandex.net/i?id=08fda78567a2fe3d30a333c41459c981_l-5176581-images-thumbs&n=13' alt='Япония'>
        <h2>Путешествие в Японию</h2>
        <p>Токио и Киото - знакомство с японской культурой</p>
        <p>Мы посетили храм Сэнсодзи, императорский дворец, район гейш в Киото.</p>
        <p>Дата поездки: Весна 2025</p>
        <a href='?page=page' class='back-link'>← Вернуться на главную</a>
    </div>";
    
    public function render(): void
    {
        echo $this->template;
    }
}

$pageParam = $_GET['page'] ?? null;

if ($pageParam === 'italy') {
    $page = new ItalyPage();
    $page->render();
} elseif ($pageParam === 'japan') {
    $page = new JapanPage();
    $page->render();
} elseif ($pageParam === 'blog') {
    $page = new BlogPage();
    $page->render();
} else {
    $page = new Page();
    $page->render();
}

echo "</body></html>";
?>
