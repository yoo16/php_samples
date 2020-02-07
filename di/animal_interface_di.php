
<?php
require_once 'Animal.php';

class AnimalConsole {
    protected $animal;

    public function __construct(Animal $animal) {
        $this->animal = $animal;
    }

    public function bow() {
        $this->animal->bow();
    }
}

$animal_console1 = new AnimalConsole(new Dog());
$animal_console1->bow();

$animal_console2 = new AnimalConsole(new Cat());
$animal_console2->bow();