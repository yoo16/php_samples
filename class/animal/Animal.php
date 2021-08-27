<?php
class Animal
{
    public $name;   //動物の名称
    public $sound;  //動物の鳴き声

    //コンストラクタ
    function __construct($name)
    {
        $this->name = $name;
    }

    //鳴く
    public function makeSound()
    {
        echo $this->sound;
        echo PHP_EOL;
    }
}
