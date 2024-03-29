<?php
class Animal
{
    public string $name;
    public string $crying;

    public function __construct($name = '')
    {
        // $this->name = $name;
    }

    public  function cry(): void
    {
        echo $this->crying;
        echo PHP_EOL;
    }

    public function speak($message): void
    {
        echo $message;
        echo PHP_EOL;
    }

    public function  run(): void
    {
        echo "「{$this->name}」が走った。";
        echo PHP_EOL;
    }
}
