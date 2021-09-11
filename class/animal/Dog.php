<?php
require_once 'Animal.php';

class Dog extends Animal
{
    public $sound = 'わん！';

    function follow()
    {
        echo "「{$this->name}」が寄ってきた！";
        echo PHP_EOL;
    }

}
