<?php

/**
 * もし身長が160cm以上だったら乗車できる
 */
$height = 160;
if ($height >= 150) {
    echo '乗車できます';
} else {
    echo '乗車できません';
}
echo PHP_EOL;

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
$os = 'Ubuntu';
switch ($os) {
    case "CentOS":
    case "Debian":
    case "Ubuntu":
        echo "Linux";
        break;
    case "Catalina":
    case "Mojave":
        echo "MacOS";
        break;
    case "Windows7":
    case "Windows10":
        echo "Windows";
        break;
    default:
        echo "Not found";
        break;
}
echo PHP_EOL;