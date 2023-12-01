<?php

abstract class Vehicle {
   public $brand;
   protected $mileage;

   public function __construct($b , $m){
        $this->brand = $b;
        $this->mileage = $m;
    }
    public function __destruct(){
        echo $this->brand . " is dead at mileage " . $this->mileage . "km";
    }
    
    public function increaseMileage($amount){
        $this->mileage += $amount;
    }
    abstract static function makeNoise();
}

?>