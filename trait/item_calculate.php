<?php
trait Calculatable {
    protected $price;
    protected $tax = 0.1;

    abstract public function showPrice();

    function taxPrice() {
        return $this->price * $this->tax;
    }

    function totalPrice() {
        return $this->price + $this->taxPrice();
    }
}

trait Statable {
    protected $category;
    protected $name;

    abstract public function showStatus();

    public function getName() {
        return $this->name;
    }

    public function getCategory() {
        return $this->category;
    }
}

class Item {
    use Calculatable;
    use Statable;

    function showPrice() {
        echo $this->totalPrice().PHP_EOL;
        echo $this->taxPrice().PHP_EOL;
    }

    function showStatus() {
        echo $this->getName().PHP_EOL;
        echo $this->getCategory().PHP_EOL;
    }
}

class Cloth extends Item {
    protected $color;

    public function __construct($price, $name, $category, $color) {
        $this->price = $price;
        $this->name = $name;
        $this->category = $category;
        $this->color = $color;
    }

    private function getColor() {
        return $this->color;
    }

    public function showColor() {
        echo $this->getColor().PHP_EOL;
    }
}

class Book extends Item {
    public function __construct($price, $name, $category) {
        $this->price = $price;
        $this->name = $name;
        $this->category = $category;
    }
}

$cloth = new Cloth(150, 'Tシャツ', 'トップス', 'Blue');
$cloth->showStatus();
$cloth->showPrice();
$cloth->showColor();

$book = new Book(2400, 'パーフェクトPHP', 'プログラミング');
$book->showStatus();
$book->showPrice();