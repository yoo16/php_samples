<?php
$price = 120;
$price = $price + 180;
$price = $price - 50;
$price = $price * 0.8;
$price = $price / 2;

$price = 120;
$price += 180;
$price -= 50;
$price *= 0.8;
$price /= 2;

//単項演算
$amount = 1;
// $amount に 1 足した結果を $amount に代入
$amount++;
// $amount から 1 引いた結果を $amount に代入
$amount--;

$item_name = "コーヒー";
$message = $item_name . "の価格は" . $price . "円です。";
//文字リテラル
$message = "{$item_name}の価格は{$price}円です。";
//$message = '{$item_name}の価格は{$price}円です。';

$message .= "{$amount}個購入しますか？";

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
    <h2>購入</h2>
    <h3>商品名</h3>
    <p><?= $item_name ?></p>
    <h3>価格</h3>
    <p><?= $price ?>円</p>
    <h3>個数</h3>
    <p><?= $amount ?>個</p>
    <p><?= $message ?></p>
</body>

</html>