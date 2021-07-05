<?php
$price = 200;
$money = 100;
if ($money >= $price) {
    $message = "お買い上げありがとうございました";
} else {
    $message = "購入金額が足りません";
}

/**
 * もし移動距離が1km未満だったら徒歩
 * 1km-5km未満だったら自転車
 * 5km以上だったら電車
 */
$distance = 3;
if ($distance < 1) {
    $moving_method = '徒歩';
} else if ($distance >= 1 && $distance < 5) {
    $moving_method = '自転車';
} else {
    $moving_method = '電車';
}

$distance = 3;
$is_rain = true;
if ($is_rain) {
    $moving_message = '家にいます';
} else {
    if ($distance < 1) {
        $moving_method = '徒歩';
    } else if ($distance >= 1 && $distance < 5) {
        $moving_method = '自転車';
    } else {
        $moving_method = '電車';
    }
    $moving_message = "{$moving_method}で移動しています";
}

/**
 * switch
 */
$weekday = '月';
switch ($weekday) {
    case "月":
    case "金":
        $garbage = "燃えるゴミ";
        break;
    case "水":
        $garbage = "燃えないゴミ";
        break;
    default:
        $garbage = "回収なし";
        break;
}

//date()を使った場合
$week_number = date('w');
$week_strings = ['日', '月', '火', '水', '木', '金', '土'];
$weekday = $week_strings[$week_number];
switch ($week_number) {
    case 1:
    case 5:
        $garbage = "燃えるゴミ";
    case 3:
        $garbage = "燃えないゴミ";
    default:
        $garbage = "回収なし";
}

//所持金と合計金額の条件
$money = 1000;
$price = 320;
$amount = 3;

$total_price = $price * $amount;

if ($total_price > $money) {
    $message = '所持金が足りません';
} else {
    $message = "合計金額は {$total_price} 円です";
}
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
    <h2>購入メッセージ</h2>
    <h3>所持金</h3>
    <p><?= $money ?>円</p>
    <h3>価格</h3>
    <p><?= $price ?>円</p>
    <h3>個数</h3>
    <p><?= $amount ?>個</p>
    <p><?= $message ?></p>

    <h2>移動メッセージ</h2>
    <p><?= $moving_message ?></p>

    <h2>ゴミの日</h2>
    <p><?= $weekday ?>曜日</p>
    <p><?= $garbage ?></p>
</body>

</html>