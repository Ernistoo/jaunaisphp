<?php

class Tire{
    public function __construct(public $size, public $type, private $quality){
        $this->size = $size;
        $this->type = $type;
        $this->quality = $quality;
    }

    public function __destruct(){
        echo "Boom!<br>";
    }
}

?>