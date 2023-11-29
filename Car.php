<?php

class Car{
    public $brand;
    private $mileage;
    static $describe = "I like men";

    public function __construct($b , $m){
        $this->brand = $b;
        $this->mileage = $m;
    }
    public function __destruct(){
        echo $this->brand . " car is dead at mileage " . $this->mileage . " ";
    }
    public function increaseMileage($amount){
        $this->mileage += $amount;
    }
    static function makeNoise(){
        echo "Beep, Beep!";
    }
}

?>