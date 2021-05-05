<?php

/**
 * もしモンスターのHPが0より大きかったら戦う、そうでなけば戦闘終了
 */

$monster = new stdClass;
$monster->hp = 10;
$attack = 10;
$hp = $monster->hp - $attack;
if ($hp > 0) {
    $message = 'モンスターの攻撃';
} else {
    $message = 'モンスターを倒した';
}
echo $message.PHP_EOL;

/**
 * もし移動距離が1km未満だったら徒歩
 * 1km-5km未満だったら自転車
 * 5km以上だったら電車
 */

$distance = 3;
if ($distance < 1) {
    echo '徒歩';
} else if ($distance >= 1 && $distance < 5) {
    echo '自転車';
} else {
    echo '電車';
}
echo PHP_EOL;

/**
 * switch
 */
$weekday = '水';
switch ($weekday) {
    case "月":
        echo "燃えるゴミ";
        break;
    case "水":
        echo "燃えないゴミ";
        break;
    default:
        echo "回収なし";
        break;
}
echo PHP_EOL;

//break を利用しない場合
$weekday = '水';
switch ($weekday) {
    case "月":
        echo "燃えるゴミ";
    case "水":
        echo "燃えないゴミ";
    default:
        echo "回収なし";
}
echo PHP_EOL;

//複数の case を利用する場合
$item_name = 'こんぼう';
$type = '';
switch ($item_name) {
    case "銅のつるぎ":
    case "鉄のやり":
    case "こんぼう":
        $type = "武器";
        break;
    case "皮のたて":
    case "鉄のかぶと":
    case "銀のよろい":
        $type = "防具";
        break;
    case "やくそう":
    case "どくけしそう":
        $type = "道具";
        break;
    default:
        $type = "その他";
        break;
}
echo $type;
echo PHP_EOL;


//
$money = 10000;
$price = 348;
$amount = 32;

$total_price = $price * $amount;

if ($total_price > $money) {
    echo '所持金が足りません';
} else {
    echo "合計金額は {$total_price} 円です";
}
echo PHP_EOL;