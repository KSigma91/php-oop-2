<?php

class Food {
    public $product;
    public $price;
    public $weight;
    
    public function __construct(string $product, float $price, int $weight)
    {
        $this->product = $product;
        $this->price = $price;
        $this->weigth = $weight;
    }
}


?>