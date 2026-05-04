<?php
header('Content-Type: application/json');

if (!isset($_GET['date1']) || !isset($_GET['date2'])) {
    http_response_code(400);
    echo json_encode(['error' => 'Параметры date1 и date2 обязательны']);
    exit;
}

$date1 = strtotime($_GET['date1']);
$date2 = strtotime($_GET['date2']);

if (!$date1 || !$date2) {
    http_response_code(400);
    echo json_encode(['error' => 'Неверный формат даты. Используйте YYYY-MM-DD']);
    exit;
}

$diff = abs($date2 - $date1) / 86400;

echo json_encode([
    'date1' => $_GET['date1'],
    'date2' => $_GET['date2'],
    'days' => $diff
]);
?>
