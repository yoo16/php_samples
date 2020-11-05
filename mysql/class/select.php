<?php
require_once 'MySQLEntity.php';
require_once 'Item.php';
require_once 'setting.php';

$mysql = new MySQLEntity();
$mysql->db_name = DB_NAME;
$mysql->host = DB_HOST;
$mysql->user = DB_USER;
$mysql->password = DB_PASS;

$table_name = 'items';
$items = $mysql->select($table_name);
if ($items) {
    foreach ($items as $item) {
        echo "{$item['id']}:{$item['name']}".PHP_EOL;
    }
}
$mysql->close();