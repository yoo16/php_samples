<?php
require_once 'connect.php';

function getRandomId($pdo, $table)
{
    $sql = "SELECT id FROM {$table};";
    $ids = $pdo->query($sql)->fetchAll(PDO::FETCH_COLUMN);
    $key = array_rand($ids);
    return $ids[$key];
}

$user_id = getRandomId($pdo, 'users');
$item_id = getRandomId($pdo, 'items');
$user_item = [
    ':user_id' => $user_id,
    ':item_id' => $item_id,
    ':amount' => rand(1, 5),
    ':total_price' => 0,
];

$sql = "INSERT INTO user_items
(user_id, item_id, amount, total_price, created_at)
VALUES (:user_id, :item_id, :amount, :total_price ,now())
";

$prepare = $pdo->prepare($sql);
if ($prepare->execute($user_item)) {
    echo '成功';
} else {
    echo '失敗';
}
