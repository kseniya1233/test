<?php
require_once 'config.php';
header('Content-Type: application/json');

$action = $_GET['action'] ?? '';

switch ($action) {
    case 'all':
        $result = pg_query($conn, "SELECT * FROM articles ORDER BY id");
        $data = pg_fetch_all($result);
        echo json_encode($data ?: []);
        break;
        
    case 'get':
        $id = (int)$_GET['id'];
        $result = pg_query_params($conn, "SELECT * FROM articles WHERE id = $1", [$id]);
        $data = pg_fetch_assoc($result);
        echo json_encode($data ?: ['error' => 'Запись не найдена']);
        break;
        
    case 'del':
        $id = (int)$_GET['id'];
        $result = pg_query_params($conn, "DELETE FROM articles WHERE id = $1", [$id]);
        echo json_encode(['success' => true, 'deleted_id' => $id]);
        break;
        
    case 'edit':
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            http_response_code(405);
            echo json_encode(['error' => 'Метод не разрешён. Используйте POST']);
            break;
        }
        $id = (int)$_GET['id'];
        $input = json_decode(file_get_contents('php://input'), true);
        $title = $input['title'];
        $content = $input['content'];
        $result = pg_query_params($conn, 
            "UPDATE articles SET title = $1, content = $2 WHERE id = $3",
            [$title, $content, $id]);
        echo json_encode(['success' => true, 'updated_id' => $id]);
        break;
        
    default:
        http_response_code(404);
        echo json_encode(['error' => 'Action not found']);
}
?>
