<?php
require_once 'connect.php';
  
$datetime = date('Y-m-d H:i:s');

$sql = "INSERT INTO items (code, name, price, amount, created_at) ";
$sql.= "VALUES('W00001', 'ミネラルウォーター', '80', '1000', '{$datetime}');";
$results = $pdo->query($sql);

echo $sql.PHP_EOL;
if ($results) {
    echo '成功';
} else {
    echo '失敗';
}