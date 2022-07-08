<?php
class Toys extends Food {
    private $specialEdition;
    
    public function getSpecialEdition()
    {
        return $this->specialEdition;
    }

    public function setSpecialEdition($specialEdition)
    {
        $this->specialEdition = $specialEdition;

        return $this;
    }

    public function printToys() {
        return "<h2>{$this->product}</h2>
                <h3>{$this->price} &euro;</h3>";
    }
}

?>