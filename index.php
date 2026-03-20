<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="box">
        <h1>Регистрация</h1>
        <form action="action.php" method="POST">
            <div>
                <input type="text" name="first_name" placeholder="Имя" required>
            </div>
            <div>
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <div>
                <input type="password" name="password" placeholder="Пароль" required>
            </div>
            <div>
                <select name="gender">
                    <option value="">Выберите пол</option>
                    <option value="male">Мужской</option>
                    <option value="female">Женский</option>
                </select>
            </div>
            <div>
                <label>
                    <input type="checkbox" name="terms" required> Я согласен с условиями
                </label>
            </div>
            <button type="submit">Зарегистрироваться</button>
        </form>
    </div>
</body>
</html>
