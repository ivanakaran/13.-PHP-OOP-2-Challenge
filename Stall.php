<?php

class Stall
{
    private $code;
    private $products = [];

    public function __construct($code)
    {
        $this->code = $code;
    }

    public function addProduct($product)
    {
        $this->products[] = $product;
    }
}