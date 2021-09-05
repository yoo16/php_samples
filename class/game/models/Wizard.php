<?php
require_once 'Character.php';

class Wizard extends Character
{
    public $magic_types = [
        1 => [ 'name' => 'ブリザード', 'mp' => 2, 'rate' => 2 ],
        2 => [ 'name' => 'ファイヤー', 'mp' => 4, 'rate' => 6 ],
    ];
    public $job = '魔法つかい';
}