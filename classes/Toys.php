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
}


?>