<?php
require_once 'Animal.php';
require_once __DIR__.'/../vendor/autoload.php';

use Pimple\Container;

class AnimalConsole {
    protected $dog;
    protected $cat;

    public function __construct(
        Dog $dog,
        Cat $cat
        ) {
        $this->dog = $dog;
        $this->cat = $cat;
    }

    public function bow() {
        $this->dog->bow();
        $this->cat->bow();
    }
}

$container = new Container();

$container['dog'] = function($c) {
    return new Dog();
};

$container['cat'] = function($c) {
    return new Cat();
};

$container['animal'] = function ($c) {
    return new AnimalConsole($c['dog'], $c['cat']);
};

$container['animal']->bow();