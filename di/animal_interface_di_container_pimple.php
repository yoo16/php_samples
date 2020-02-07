<?php
require_once 'Animal.php';
require_once __DIR__.'/../vendor/autoload.php';

use Pimple\Container;

class AnimalConsole {
    protected $animal;

    public function __construct(
        Animal $animal
        ) {
        $this->animal = $animal;
    }

    public function bow() {
        $this->animal->bow();
    }
}

$container = new Container();

$container['dog'] = function($c) {
    return new Dog();
};

$container['cat'] = function($c) {
    return new Cat();
};

$container['animal'] = function($c) {
    return $c['dog'];
};

$container['animalConsole'] = function ($c) {
    return new AnimalConsole($c['animal']);
};

$container['animalConsole']->bow();