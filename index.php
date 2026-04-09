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
    </style>
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
}

$page = new BlogPage();
$page->render();

echo "</body></html>";
?>
