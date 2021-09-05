<?php
class Character
{
    public $job;
    public $name;
    public $hp;
    public $mp;
    public $message;
    public $attack_power;
    public $defense_power;
    public $magic;
    public $magic_types;
    public $is_live = true;

    public function attack()
    {
        $this->message = "{$this->name}のこうげき！" . PHP_EOL;
        $attack_point = $this->attack_power;
        return $attack_point;
    }

    public function magic($type)
    {
        if (empty($this->magic_types[$type])) return;

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

    public function damaged($damage)
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
