<?php
class Character
{
    public string $name;
    public string $job;
    public int $hp;

    public function walk(string $direction): void
    {
        $message = "{$this->name} move {$direction}";
        echo $message, PHP_EOL;
    }

    public function talk(Character $character, string $message): void
    {
        $message = "{$character->name}！{$message}";
        echo $message, PHP_EOL;
    }

    public function attack(Character $character): void {
		$damage = 1;
		$character->hp -= $damage;
	}

}
