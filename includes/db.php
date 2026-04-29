<?php
require_once __DIR__ . '/env.php';

$host = getenv('PGHOST') ?: '127.0.0.1';
$port = getenv('PGPORT') ?: '5432';
$dbname = getenv('PGDATABASE') ?: 'php_site';
$user = getenv('PGUSER') ?: 'postgres';
$pass = getenv('PGPASSWORD') ?: '';

$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$pass");

if (!$conn) {
    die("Ошибка подключения к PostgreSQL: " . pg_last_error());
}
?>
