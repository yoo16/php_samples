<?php
require_once 'Cat.php';
require_once 'Dog.php';

$cat = new Cat('ミケ');
$cat->cry();
$cat->run();
$cat->escape();

$dog = new Dog('ぽち');
$dog->cry();
$dog->run();
$dog->follow();