<?php
header('Content-Type: application/json');

if (!isset($_GET['date'])) {
    http_response_code(400);
    echo json_encode(['error' => 'Параметр date обязателен']);
    exit;
}

$date = $_GET['date'];
$timestamp = strtotime($date);

if (!$timestamp) {
    http_response_code(400);
    echo json_encode(['error' => 'Неверный формат даты. Используйте YYYY-MM-DD']);
    exit;
}

$weekDays = ['воскресенье', 'понедельник', 'вторник', 'среда', 'четверг', 'пятница', 'суббота'];
$dayOfWeek = $weekDays[date('w', $timestamp)];

echo json_encode([
    'date' => $date,
    'weekday' => $dayOfWeek
]);
?>
