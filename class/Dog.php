<?php
require_once 'Animal.php';

class Dog extends Animal
{
    public $sound = 'わん！';

    function follow()
    {
        echo '従う';
        echo PHP_EOL;
    }

}
