<?php
require_once 'Item.php';

$item = new Item();
$item->name = 'コーヒー';
$item->price = 150;
$item->amount = 10;
$total_price = $item->calculate();
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
    <label for="">商品名</label>
    <p><?= $item->name ?></p>
    <label for="">価格</label>
    <p><?= $item->price ?>円</p>
    <label for="">個数</label>
    <p><?= $item->amount ?>個</p>
    <label for="">合計金額</label>
    <p><?= $item->total_price ?>円</p>
</body>

</html>