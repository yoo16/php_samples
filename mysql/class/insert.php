<?php
require_once 'MySQLEntity.php';
require_once 'Item.php';

$mysql = new MySQLEntity();
$mysql->db_name = DB_NAME;
$mysql->host = DB_HOST;
$mysql->user = DB_USER;
$mysql->password = DB_PASS;

// $item['name'] = 'バナナ';
// $item['price'] = 130;
// $item['is_active'] = true;
// $item['created_at'] = date('Y-m-d H:i');
// $item['updated_at'] = $item['created_at'];

$table_name = "items";
$posts = $_POST['item'];
exit($posts);
$mysql->insert($table_name, $posts);

$mysql->close();