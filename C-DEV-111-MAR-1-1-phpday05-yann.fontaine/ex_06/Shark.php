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

    function eat($prey){
        if (gettype($prey)=="object" && $prey->name!=$this->name){
            echo "$this->name ate a $prey->type named $prey->name.\n";
        }
        else{
            echo "$this->name: It's not worth my time.\n";
            $this->frenzy=false;
        }
    }

}