<?php
require_once 'Animal.php';

$animal = new Animal();
$animal->name = 'ポチ';
$animal->crying = 'わん！';

$animal->speak('こんにちは！');
$animal->run();
