<?php
$db_name = 'my_shop';
$db_host = 'mysql';
$db_user = 'root';
$db_password = 'root';

$dsn = "mysql:dbname={$db_name};host={$db_host}";
$pdo = new PDO($dsn, $db_user, $db_password);

$sql = "SELECT * FROM items LIMIT 100;";
$items = $pdo->query($sql);
var_dump($items);
if ($items) {
    foreach ($items as $item) {
        echo $item['id'];
        echo $item['name'];
        echo $item['is_active'];
        echo $item['created_at'];
        echo $item['updated_at'];
        echo PHP_EOL;
    }
}
$pdo = null;