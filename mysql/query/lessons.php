<?php

require_once 'connect.php';

//1
echo '---- id = 20 のユーザ名 ----';
echo PHP_EOL;

$sql = 'SELECT * FROM users WHERE id = 20;';
$row = $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);

echo $row['name'];
echo PHP_EOL;

//2
echo '---- 11 - 20件のメールアドレス ----';
echo PHP_EOL;

$sql = 'SELECT * FROM users LIMIT 10 OFFSET 10;';
$rows = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

foreach ($rows as $row) {
    echo $row['email'].PHP_EOL;
}

//3
echo '---- price の大きい順 ----';
echo PHP_EOL;

$sql = 'SELECT * FROM items ORDER BY price DESC;';
$rows = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

foreach ($rows as $row) {
    echo $row['name'].PHP_EOL;
}

//4
echo '---- price が 100以上 150未満の商品 ----';
echo PHP_EOL;

$sql = 'SELECT * FROM items WHERE price >= 100 AND price < 150;';
$rows = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

foreach ($rows as $row) {
    echo $row['name'].PHP_EOL;
}

//5
echo '---- 最新データのユーザ名、商品名、購入個数----';
echo PHP_EOL;

$sql = 'SELECT * FROM user_items ORDER BY id DESC LIMIT 1;';
$user_item = $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);

// $sql = 'SELECT max(id) AS max FROM user_items;';
// $row = $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
// $sql = "SELECT * FROM user_items WHERE id = {$row['max']}";
// $user_item = $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);

$sql = "SELECT * FROM users WHERE id = {$user_item['user_id']};";
$user = $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);

$sql = "SELECT * FROM items WHERE id = {$user_item['item_id']};";
$item = $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);

$total_price = $item['price'] * $user_item['amount'];

echo "ユーザ名：{$user['name']}";
echo PHP_EOL;
echo "商品名：{$item['name']}";
echo PHP_EOL;
echo "購入個数：{$user_item['amount']}";
echo PHP_EOL;
echo "合計金額：{$total_price}";
echo PHP_EOL;


//6
echo '---- 最新データのユーザ名、商品名、購入個数----';
echo PHP_EOL;

$sql = 'SELECT id, price FROM items;';
$items = $pdo->query($sql)->fetchAll(PDO::FETCH_KEY_PAIR);

$sql = 'SELECT * FROM user_items;';
$user_items = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

//SELECT * FROM user_items
//JOIN items ON user_items.item_id = items.id
//ORDER BY user_items.id DESC LIMIT 1

if ($user_items) {
    $sql = "UPDATE user_items SET total_price = :total_price WHERE id = :id";
    $prepare = $pdo->prepare($sql);

    foreach ($user_items as $user_item) {
        $price = $items[$user_item['item_id']];
        $params[':total_price'] = $price * $user_item['amount'];
        $params[':id'] = $user_item['id'];
        $prepare->execute($params);
        // $sql = "UPDATE user_items SET total_price = '{$total_price}'";
        // $sql.= " WHERE id = '{$user_item['id']}'";
        // $pdo->query($sql);
    }
}

//UPDATE JOIN
// $sql = "UPDATE user_items SET total_price = 0";
// $pdo->query($sql);

// $sql = "UPDATE user_items 
//         LEFT JOIN items 
//         ON user_items.item_id = items.id 
//         SET user_items.total_price = user_items.amount * items.price,
//             user_items.updated_at = now()
//         ";
// $result = $pdo->query($sql);
