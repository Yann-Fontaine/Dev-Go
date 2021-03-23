<?php
require_once("Shark.php");
require_once("Animal.php");
class GreatWhite extends Shark{

    function __construct($nam=null){
        parent::__construct($nam, $leg=0, $typ="fish");
    }

    function eat($prey){
        if (gettype($prey)=="object" && (get_class($prey)=="Animal::Shark" || get_parent_class($prey)=="Shark")){
            echo "$this->name: The best meal one could wish for.\n";
        }
        elseif (gettype($prey)=="object" && get_class($prey)!="Animal::Canary"){
            echo "$this->name ate a $prey->type named $prey->name.\n";
        }
        elseif (gettype($prey)=="object" && get_class($prey)=="Animal::Canary"){
            echo "$this->name: Next time you try to give me that to eat, I'll eat you instead.\n";
        }
        else{
            echo "$this->name: It's not worth my time.\n";
            $this->frenzy=false;
        }
    }

}