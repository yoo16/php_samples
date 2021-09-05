<?php
require_once 'Animal.php';
class Cat extends Animal
{
    public $sound = 'にゃー！';

    function escape()
    {
        echo '逃げる';
        echo PHP_EOL;
    }
}