
<?php
require_once 'Animal.php';

class AnimalConsole {
    protected $dog;
    protected $cat;

    public function __construct() {
        $this->dog = new Dog();
        $this->cat = new Cat();
    }

    public function bow() {
        $this->dog->bow();
        $this->cat->bow();
    }
}

$animal_console = new AnimalConsole();
$animal_console->bow();