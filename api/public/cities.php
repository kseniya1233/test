<?php
require_once 'config.php';
header('Content-Type: application/json');

if (!isset($_GET['country'])) {
    http_response_code(400);
    echo json_encode(['error' => 'Параметр country обязателен']);
    exit;
}

$country = $_GET['country'];
$result = pg_query_params($conn, 
    "SELECT cities.name FROM cities 
     JOIN countries ON cities.country_id = countries.id 
     WHERE countries.name = $1", 
    [$country]);

if (!$result) {
    echo json_encode(['error' => 'Ошибка запроса']);
    exit;
}

$cities = [];
while ($row = pg_fetch_assoc($result)) {
    $cities[] = $row['name'];
}

echo json_encode(['country' => $country, 'cities' => $cities]);
?>
