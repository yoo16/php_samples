<?php
class Animal
{
    public string $name;
    public string $type;
    public string $crying;

    public function walk(): void
    {
        $message = "{$this->name}が歩いた。";
        echo $message;
        echo PHP_EOL;
    }

    public  function cry(): void
    {
        echo $this->crying;
        echo PHP_EOL;
    }

    public function escape(): void
    {
        $message = "{$this->name}が逃げた。";
        echo $message;
        echo PHP_EOL;
    }
}
