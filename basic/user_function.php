<?php

function calculate($x)
{
    $y = $x + 5;
    return $y;
}

$answer = calculate(2);
echo $answer, PHP_EOL;

//totalPrice()
function totalPrice($price, $amount)
{
    $tax = 1.1;
    $total_price = $price * $amount * $tax;
    return $total_price;
}

$total_price = totalPrice(200, 5);
echo $total_price;
echo PHP_EOL;

//calcultePoint
function calculatePoint($price, $rate = 0.01)
{
    $point = $price * $rate;
    return $point;
}

$point = calculatePoint($total_price);
echo "{$point}pt", PHP_EOL;
$point = calculatePoint($total_price, 0.05);
echo "{$point}pt", PHP_EOL;

//buyMessage()
function buy(string $item_name, int $price, float $tax_rate = 0.1)
{
    $tax = $price * $tax_rate;
    $message = "{$item_name}の消費税は{$tax}円です。";
    return $message;
}
$message = buy('紅茶', 150);
echo $message . PHP_EOL;


//移動メッセージ
function move($character_name, $method)
{
    if (empty($character_name)) {
        echo "名前がわかりません";
    } else if (empty($method)) {
        echo "{$character_name}は家にいます";
    } else {
        echo "{$character_name}が{$method}で移動しています";
    }
    echo PHP_EOL;
}
move("", "徒歩");
move("イヌ", "徒歩");
move("ネコ", "");
move("キリン", "自転車");

//移動手段
function moveMethod($distance, $is_rain = false)
{
    if ($is_rain) return;
    $method = "";
    if ($distance < 1) {
        $method = '徒歩';
    } else if ($distance >= 1 && $distance < 5) {
        $method = '自転車';
    } else {
        $method = '電車';
    }
    return $method;
}

echo moveMethod(0.5);
echo PHP_EOL;
echo moveMethod(3);
echo PHP_EOL;
echo moveMethod(5);
echo PHP_EOL;

echo moveMethod(0.5);
echo PHP_EOL;
echo moveMethod(3, true);
echo PHP_EOL;
echo moveMethod(5, false);
echo PHP_EOL;

//関数組み合わせ
move("イヌ", moveMethod(0.5));
move("ネコ", moveMethod(3, true));
move("キリン", moveMethod(5, false));

//say()
function say($message) {
    return $message;
}
$result = say("こんにちわ");
echo $result, PHP_EOL;

//Pay
function pay($type) {
    echo "{$type}Pay", PHP_EOL;
}
pay('LINE');
pay('AU');
pay('Pay');

function showMessage($last_name, $first_name, $message='こんにちわ！') {
	$message = "{$last_name}　{$first_name}さん、{$message}";
	echo $message, PHP_EOL;
}

$last_name = '東京';
$first_name = '一郎';
showMessage($last_name, $first_name);
showMessage($last_name, $first_name, 'さようなら！');