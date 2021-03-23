<?php
class Dolly{
    public $age;
    public $animal;
    public $doctor;

    function __construct($ag, $anima, $docto){
        $this->age=$ag;
        $this->animal=$anima;
        $this->doctor=$docto;
    }
    
    function __clone(){
        echo "I will survive !\n";
    }

}
    function clone_object($object){
        $cp_obj=clone $object;
        return $cp_obj;
    }