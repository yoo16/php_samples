<?php
require_once 'Cat.php';
require_once 'Dog.php';

$cat = new Cat('ミケ');
echo $cat->name;
$cat->cry();
//独自メソッド
$cat->escape();

$dog = new Dog('ぽち');
echo $dog->name;
$dog->cry();
//独自メソッド
$dog->follow();