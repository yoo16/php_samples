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
$magic_name = 'ファイヤー';
switch ($magic_name) {
    case "ファイヤー":
    case "メガファイヤー":
    case "テラファイヤー":
        echo "火属性";
        break;
    case "アイス":
    case "メガアイス":
        echo "水属性";
        break;
    case "サンダー":
    case "メガサンダー":
        echo "雷属性";
        break;
    default:
        echo "物理属性";
        break;
}
echo PHP_EOL;