<?php
$name = $_POST['first_name'] ?? '';
$password = $_POST['password'] ?? '';

if ($name == 'Ксюша' && $password == '123') {
    header('Location: calculator.php');
    exit;
} else {
    ?>
    <!DOCTYPE html>
    <html lang="ru">
    <head>
        <meta charset="UTF-8">
        <title>Ошибка</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div id="box">
            <h1>Доступ запрещен</h1>
            <p>Здравствуйте, <?php echo htmlspecialchars($name); ?>.</p>
            <p>Ваше имя не зарегистрировано или пароль неверный.</p>
            <p><a href="index.php">Вернуться к форме</a></p>
        </div>
    </body>
    </html>
    <?php
}
?>
