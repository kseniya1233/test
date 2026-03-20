<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Калькулятор</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="box">
        <h1>Калькулятор</h1>
        <form method="post" action="">
            <div>
                <input type="number" name="num1" step="any" placeholder="Число 1" required>
                <input type="number" name="num2" step="any" placeholder="Число 2" required>
            </div>
            <div class="calc-buttons">
                <button type="submit" name="operation" value="+">+</button>
                <button type="submit" name="operation" value="-">-</button>
                <button type="submit" name="operation" value="*">*</button>
                <button type="submit" name="operation" value="/">/</button>
            </div>
        </form>
        
        <?php
        if (isset($_POST['operation'])) {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $op = $_POST['operation'];
            $result = '';
            
            if ($op == '+') $result = $num1 + $num2;
            elseif ($op == '-') $result = $num1 - $num2;
            elseif ($op == '*') $result = $num1 * $num2;
            elseif ($op == '/') {
                if ($num2 == 0) {
                    echo "<p style='color:red'>Ошибка: деление на ноль!</p>";
                } else {
                    $result = $num1 / $num2;
                }
            }
            
            if ($result !== '') {
                echo "<p><strong>Результат: $num1 $op $num2 = $result</strong></p>";
            }
        }
        ?>
        <p><a href="index.php">Вернуться к регистрации</a></p>
    </div>
</body>
</html>
