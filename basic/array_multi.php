<?php
[
    [1, 2, 3, 4, 5,],   //1行 : index = 0
    [6, 7, 8, 9, 10,],  //2行 : index = 1
];

$rows = [
    [90, 78, 82,],
    [62, 70, 68,],
    [68, 88, 72,],
];

$cols = $rows[0];
$data = $cols[1];

$users = [
    ['id' => 1, 'name' => 'User1', 'email' => 'user1@example.com', 'tel' => '03-1111-2222'],
    ['id' => 2, 'name' => 'User2', 'email' => 'user2@example.com', 'tel' => '090-3333-5555'],
    ['id' => 3, 'name' => 'User3', 'email' => 'user3@example.com', 'tel' => '050-1234-5678'],
];

$users = [
    ['id' => 1, 'name' => 'Alice'],
    ['id' => 2, 'name' => 'Bob'],
    ['id' => 3, 'name' => 'Chris'],
];

$scores = [
    [90, 78, 82,],
    [62, 70, 68,],
    [71, 88, 72,],
];
$new_score = 80;
$scores[1][2] = $new_score;

// id	name	price	is_sale
// 1	コーヒー	120	true
// 2	紅茶	150	false
// 3	ほうじ茶	100	true
$items = [
    [
        'id' => 1,
        'name' => 'コーヒー',
        'price' => 120,
        'is_sale' => true,
    ],
    [
        'id' => 2,
        'name' => '紅茶',
        'price' => 150,
        'is_sale' => false,
    ],
    [
        'id' => 3,
        'name' => 'ほうじ茶',
        'price' => 100,
        'is_sale' => true,
    ],
];

// id	name	price	is_sale
// 4	オレンジジュース	120	false
$items[] = [
    'id' => 4,
    'name' => 'オレンジジュース',
    'price' => 180,
    'is_sale' => false,
];

$sort_items = $items;
rsort($sort_items);
$max_item = current($sort_items);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>$rows データ</h2>
    <p><?php var_dump($rows); ?></p>

    <h2>$cols データ</h2>
    <p><?php var_dump($cols); ?></p>

    <h2>$data データ</h2>
    <p><?= $data  ?></p>

    <h2>68のデータ</h2>
    <p><?= $rows[1][2] ?></p>

    <h2>ユーザデータ</h2>
    <ul>
        <li><?= $users[0]['name'] ?></li>
        <li><?= $users[1]['name'] ?></li>
        <li><?= $users[2]['name'] ?></li>
    </ul>

    <h2>スコア更新</h2>
    <p><?= $scores[1][2] ?></p>

    <h2><?= $items[2]['name'] ?>の価格</h2>
    <p><?= $items[2]['price'] ?>円</p>

    <h2>一番高い商品</h2>
    <p><?= $max_item['name'] ?></p>
    <p><?= $max_item['price'] ?>円</p>
</body>

</html>