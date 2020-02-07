
<?php
require_once 'Animal.php';

class AnimalConsole {
    protected $dog;
    protected $cat;

    public function __construct(Dog $dog, Cat $cat) {
        $this->dog = $dog;
        $this->cat = $cat;
    }

    public function bow() {
        $this->dog->bow();
        $this->cat->bow();
    }
}

$animal_console = new AnimalConsole(new Dog(), new Cat());
$animal_console->bow();