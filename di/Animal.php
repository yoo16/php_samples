
<?php
interface Animal {
    public function bow();
}

class Dog implements Animal {
    public function bow() {
        echo 'wan! wan!'.PHP_EOL;
    }
}

class Cat implements Animal {
    public function bow() {
        echo 'nya-! nya-!'.PHP_EOL;
    }
}