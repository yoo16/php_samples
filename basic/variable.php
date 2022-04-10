<?php
$item;
$Item;
$ITEM;
$item_name;
$itemName;

$drink = "コーヒー";
echo $drink;
echo PHP_EOL;

$price = 120;
echo $price;
echo PHP_EOL;

$message = $drink.'の値段は'.$price.'円です。';
echo $message;
print PHP_EOL;

var_dump($drink);
var_dump($price);

define('TAX_RATE', 0.1);
var_dump(TAX_RATE);