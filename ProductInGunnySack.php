<?php

class ProductInGunnySack extends Product implements TotalInterface
{

    public function total()
    {
        return $this->price;
    }
}