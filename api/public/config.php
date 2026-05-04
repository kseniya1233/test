<?php
$host = '127.0.0.1';
$port = '5432';
$dbname = 'php_site';
$user = 'postgres';
$pass = 'password';

$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$pass");

if (!$conn) {
    die(json_encode(['error' => 'Database connection failed: ' . pg_last_error()]));
}
?>
