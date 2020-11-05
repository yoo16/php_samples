<?php
require_once 'Cat.php';
require_once 'Dog.php';

$cat = new Cat('シャム');
$cat->makeSound();

$dog = new Dog('柴犬');
$dog->makeSound();

echo $cat->name;
echo PHP_EOL;

echo $dog->name;
echo PHP_EOL;

$cat->escape();

$dog->follow();

echo Cat::class;
echo PHP_EOL;

echo Dog::class;
echo PHP_EOL;