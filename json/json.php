<?php

$foods[] = ['name' => 'apple', 'price' => 180];
$foods[] = ['name' => 'banana', 'price' => 150];

$values['foods'] = $foods;

$json = json_encode($values);

echo $json;