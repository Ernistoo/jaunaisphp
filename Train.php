<?php

class Train{
    public function __construct(public $brand, public $trackGauge, private $mileage){
       
    }
    public function __destruct(){
        echo $this->brand . " is dead at mileage " . $this->mileage . "km";
    }
    public function increaseMileage($amount){
        $this->mileage += $amount;
    }
    static function makeNoise(){
        echo "Choo, choo!";
    }
}

?>