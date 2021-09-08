<?php
class Monster
{
    public int $id;
    public string $image;
    public string $name;
    public int $hp = 0;
    public int $mp = 0;
    public int $attack_power = 0;
    public int $defense_power = 0;
    public string $magic_name;
    public bool $is_live = true;
    public string $message;

    public function appear() : void
    {
        $this->message = "{$this->name}があらわれた！";
    }

    public function attack() : int
    {
        $this->message = "{$this->name}のこうげき！";
        $attack_point = $this->attack_power;
        return $attack_point;
    }

    public function damaged($damage) : void
    {
        $this->message = '';
        $damage -= $this->defense_power;
        if ($damage > 0) {
            $this->hp -= $damage;
            $this->message = "{$this->name}は{$damage}のダメージ！";
        }
        $this->is_live = ($this->hp > 0);
        if (!$this->is_live) {
            $this->message .=  "{$this->name}はたおれた";
        }
    }
}
