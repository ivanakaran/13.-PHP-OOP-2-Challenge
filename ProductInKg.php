<?php

class ProductInKg extends Product implements TotalInterface
{
    private $totalKg = 1;

    public function setTotalKg($totalKg)
    {
        $this->totalKg = $totalKg;
    }
    public function getTotalKg()
    {
        return $this->totalKg;
    }

    public function total()
    {
        return $this->price * $this->getTotalKg();
    }
}