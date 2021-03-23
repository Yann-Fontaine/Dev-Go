<?php
require_once("Animal.php");
class Canary extends Animal{

    private $eggs=0;

    function __construct($nam=null, $leg=2, $typ="bird", $egg=0){
        parent::__construct($nam,$leg=2, $typ=Animal::BIRD);
        $this->name=$nam;
        $this->legs=2;
        $this->type="bird";
        $this->eggs=0;
        echo "Yellow and smart? Here I am!\n";
    }

    function layEgg(){
        $this->eggs++;
    }

    function getEggsCount(){
        return $this->eggs;
    }

}