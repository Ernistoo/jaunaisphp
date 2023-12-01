<?php
include_once "Vehicle.php";

class Car extends Vehicle{
    static $describe = "I like men";
    static function makeNoise(){
        echo "Beep, beep!";
    }
}


?>