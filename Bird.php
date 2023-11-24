<?php

class Bird {
    public $color;
    private $age;

    public function __construct($c, $a){
        $this->color = $c;
        $this->age = $a;
    }

    public function __destruct(){
        echo $this->color . " bird is dead";
    }

    public function fly(){
        echo " Fly away " . $this->color . " bird";
    }
}

?>