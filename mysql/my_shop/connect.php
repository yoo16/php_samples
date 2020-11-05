<?php

$db_name = 'my_shop';
$host = 'mysql';
$user_name = 'root';
$password = '';
$dsn = "mysql:dbname={$db_name};host={$host}";

try {
    $pdo = new PDO($dsn, $user_name, $password);
    echo "接続成功" . PHP_EOL;
} catch (PDOException $e) {
    echo "接続失敗: " . $e->getMessage() . PHP_EOL;
    exit;
}