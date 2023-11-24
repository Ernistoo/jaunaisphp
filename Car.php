<?php

class Car{
    public $brand;
    private $mileage;

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
}

?>