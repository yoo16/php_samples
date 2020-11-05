<?php
class Cat
{
    public $sound = 'にゃー！';

    function makeSound()
    {
        echo $this->sound;
    }
}

$cat = new Cat();
$cat->makeSound();