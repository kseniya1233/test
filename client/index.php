<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Тест API</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; background: #f5f5f5; }
        .api-card { background: white; padding: 15px; margin: 15px 0; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        button { background: #007bff; color: white; border: none; padding: 8px 15px; margin: 5px; border-radius: 5px; cursor: pointer; }
        button:hover { background: #0056b3; }
        input { padding: 8px; margin: 5px; border: 1px solid #ddd; border-radius: 5px; }
        pre { background: #2d2d2d; color: #f8f8f2; padding: 15px; border-radius: 8px; overflow-x: auto; }
        h1 { color: #333; }
    </style>
</head>
<body>
    <h1>Тестирование API</h1>
    
    <div class="api-card">
        <h3>Текущий день, месяц, год</h3>
        <button onclick="callAPI('/day.php')">День</button>
        <button onclick="callAPI('/month.php')">Месяц</button>
        <button onclick="callAPI('/year.php')">Год</button>
    </div>
    
    <div class="api-card">
        <h3>День недели по дате</h3>
        <input type="date" id="date1" value="<?= date('Y-m-d') ?>">
        <button onclick="callAPIWithParam('/weekday.php', 'date', document.getElementById('date1').value)">Узнать</button>
    </div>
    
    <div class="api-card">
        <h3>Разница между датами</h3>
        <input type="date" id="date2" value="<?= date('Y-m-d') ?>">
        <input type="date" id="date3" value="<?= date('Y-m-d', strtotime('+7 days')) ?>">
        <button onclick="callAPIWithTwoParams('/diff.php', 'date1', document.getElementById('date2').value, 'date2', document.getElementById('date3').value)">Посчитать</button>
    </div>
    
    <div class="api-card">
        <h3>Города по стране</h3>
        <input type="text" id="country" placeholder="Страна" value="Россия">
        <button onclick="callAPIWithParam('/cities.php', 'country', document.getElementById('country').value)">Найти города</button>
    </div>
    
    <div class="api-card">
        <h3>CRUD операции со статьями</h3>
        <button onclick="callAPI('/index.php?action=all')">Все статьи</button>
        <button onclick="callAPI('/index.php?action=get&id=1')">Статья №1</button>
    </div>
    
    <div class="api-card">
        <h3>Результат</h3>
        <pre id="result">Нажмите на кнопку...</pre>
    </div>
    
    <script>
        const API = 'http://api.semashko.ru:8084';
        const result = document.getElementById('result');
        
        async function callAPI(endpoint) {
            result.textContent = 'Загрузка...';
            try {
                const res = await fetch(`${API}${endpoint}`);
                const data = await res.json();
                result.textContent = JSON.stringify(data, null, 2);
            } catch (e) {
                result.textContent = `Ошибка: ${e.message}`;
            }
        }
        
        async function callAPIWithParam(endpoint, paramName, paramValue) {
            result.textContent = 'Загрузка...';
            try {
                const url = `${API}${endpoint}?${paramName}=${encodeURIComponent(paramValue)}`;
                const res = await fetch(url);
                const data = await res.json();
                result.textContent = JSON.stringify(data, null, 2);
            } catch (e) {
                result.textContent = `Ошибка: ${e.message}`;
            }
        }
        
        async function callAPIWithTwoParams(endpoint, param1, value1, param2, value2) {
            result.textContent = 'Загрузка...';
            try {
                const url = `${API}${endpoint}?${param1}=${encodeURIComponent(value1)}&${param2}=${encodeURIComponent(value2)}`;
                const res = await fetch(url);
                const data = await res.json();
                result.textContent = JSON.stringify(data, null, 2);
            } catch (e) {
                result.textContent = `Ошибка: ${e.message}`;
            }
        }
    </script>
</body>
</html>
