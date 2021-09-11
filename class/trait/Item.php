<?php
require_once 'Calculatable.php';

class Item
{
    use Calculatable;

    public $name;
    public $price;
    public $amount;
}