<?php

abstract class Animal {
   public $name;
   protected $age;

   public function __construct($n , $a){
        $this->name = $n;
        $this->age = $a;
    }
    public function birthday($amount){
        $this->age += 1;
    }
    
}

?>