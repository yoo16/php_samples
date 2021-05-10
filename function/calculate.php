<?php
function calculate($x)
{
    $y = $x + 5;
    // return で値を返す
    return $y;
}

$answer = calculate(2);
echo $answer;
echo PHP_EOL;

function totalPrice($price, $amount) {
    $tax = 1.1;
	$total_price = $price * $amount * $tax;
    return $total_price;
}
$total_price = totalPrice(200, 5);
echo $total_price;
echo PHP_EOL;

function address(string $prefecture, string $city) {
    return "{$prefecture}{$city}";
}

$address = address('東京都', '港区');
echo $address;
echo PHP_EOL;

//デフォルト値
function calculateTotalPrice($price, $amount, $rate = 0.1) {
    return $price * $amount * $rate;
}

$total_price = calculateTotalPrice(200, 4);
echo $total_price.PHP_EOL;

$total_price = calculateTotalPrice(200, 4, 0.3);
echo $total_price.PHP_EOL;

//無名関数
$y = 2;
$calculate = function ($x) {
    return 2 * $x;
};
echo $calculate(3);
echo PHP_EOL;

$tax_rate = 0.1;
$calculate = function ($price) use ($tax_rate) {
    return $price * $tax_rate;
};
echo $calculate(150);
echo PHP_EOL;

//アロー関数
$tax_rate = 0.1;
$calculate = fn ($price) => $price * $tax_rate;

echo $calculate(150);
echo PHP_EOL;

$countryName = function ($country) {
    return function ($capital) use ($country) {
        return "{$country}の首都は{$capital}です";
    };
};

//アロー関数
$japan = $countryName('日本');
$usa = $countryName('アメリカ');

echo PHP_EOL;
echo $japan('東京');
echo PHP_EOL;
echo $usa('ワシントンDC');
echo PHP_EOL;


//
function calculateSpeed($distance, $hour) {
    $speed = $distance / $hour;
    return $speed;
}

$speed = calculateSpeed(250, 4);
echo "時速 {$speed}km/h";
echo PHP_EOL;