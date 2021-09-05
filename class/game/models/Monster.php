<?php
class Monster
{
    public $name;
    public $hp;
    public $mp;
    public $attack_power;
    public $defense_power;
    public $magic_name;
    public $is_live = true;
    public $message;

    public function appear()
    {
        $this->message = "{$this->name}があらわれた！";
    }

    public function attack()
    {
        $this->message = "{$this->name}のこうげき！";
        $attack_point = $this->attack_power;
        return $attack_point;
    }

    public function damaged($damage)
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
