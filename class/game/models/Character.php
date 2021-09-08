<?php
class Character
{
    public int $id;
    public string $image;
    public string $job;
    public string $name;
    public int $hp = 0;
    public int $mp = 0;
    public int $attack_power = 0;
    public int $defense_power = 0;
    public array $magic;
    public array $magic_types = [];
    public string $message;
    public bool $is_live = true;

    public function attack() : int
    {
        $this->message = "{$this->name}のこうげき！";
        $attack_point = $this->attack_power;
        return $attack_point;
    }

    public function magic($type) : int
    {
        if (empty($this->magic_types[$type])) return 0;

        $attack_point = 0;
        $this->magic = $this->magic_types[$type];
        $this->message = "{$this->name}は{$this->magic['name']}を唱えた！";
        $mp = $this->mp - $this->magic['mp'];
        if ($mp > 0) {
            $this->mp = $mp;
            $attack_point = $this->attack_power * $this->magic['rate'];
        } else {
            $this->message .= 'MPがたりない';
        } 
        return $attack_point;
    }

    public function damaged($damage) : void
    {
        $this->message = '';
        $damage -= $this->defense_power;

        if ($damage > 0) {
            $this->hp -= $damage;
            $this->message = "{$this->name} は {$damage} のダメージ！";
        }
        $this->is_live = ($this->hp > 0);
        if (!$this->is_live) $this->message .= "{$this->name} は {$damage} たおれた";
    }
}
