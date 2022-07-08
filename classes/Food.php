<?php
class Food {
    public $product;
    public $price;
    
    public function __construct(string $product, float $price)
    {
        $this->product = $product;
        $this->price = $price;
    }

    public function printFood() {
        return "<h2>{$this->product}</h2>
                <h3>{$this->price} &euro;</h3>";
    }
}

?>