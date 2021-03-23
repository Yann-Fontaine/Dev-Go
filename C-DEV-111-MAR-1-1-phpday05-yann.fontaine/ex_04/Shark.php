<?php
require_once("Animal.php");
class Shark extends Animal{

    private $frenzy=false;

    function __construct($nam=null, $leg=0, $typ="fish", $frenz=false){
        parent::__construct($nam,$leg=0, $typ=Animal::FISH);
        $this->name=$nam;
        $this->legs=0;
        $this->typ="fish";
        $this->frenzy=$frenz;
        echo "A KILLER IS BORN!\n";
    }

    function smellBlood($blood){
        $this->frenzy=true;
    }

    function status(){
    if ($this->frenzy==true){
        echo "$this->name is smelling blood and wants to kill.\n";
    }
    else{
        echo "$this->name is swimming peacefully.\n";
    }
    }
}