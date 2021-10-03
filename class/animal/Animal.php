<?php
class Animal
{
    public $name;
    public $sound;

    public function __construct($name = '')
    {
        $this->name = $name;
    }
    
    public function cry()
    {
        echo $this->sound;
        echo PHP_EOL;
    }

    public function speak($message)
    {
        echo $message;
        echo PHP_EOL;
    }

    public function  run()
    {
        echo "「{$this->name}」が走った。";
        echo PHP_EOL;
    }
}