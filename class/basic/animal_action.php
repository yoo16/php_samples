<?php
require_once 'models/Animal.php';

$dog = new Animal();
$dog->type = "dog";
$dog->name = 'ポチ';
$dog->crying = 'わん！';

$cat = new Animal();
$cat->type = "cat";
$cat->name = "ミケ";
$cat->crying = "にゃー！";

$dog->walk();
$dog->cry();
$cat->cry();
$cat->escape();