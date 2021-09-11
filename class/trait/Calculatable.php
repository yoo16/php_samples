<?php
trait Calculatable
{
    public $total_price;

    function calculate()
    {
        $this->total_price = $this->price * $this->amount;
    }
}