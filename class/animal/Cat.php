<?php
require_once 'Animal.php';
class Cat extends Animal
{
    public $sound = 'にゃー！';

    function escape()
    {
        echo "「{$this->name}」が逃げた！";
        echo PHP_EOL;
    }
}