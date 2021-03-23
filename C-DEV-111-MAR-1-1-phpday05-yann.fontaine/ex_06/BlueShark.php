<?php
require_once("Shark.php");
require_once("Animal.php");
class BlueShark extends Shark{
    
    function __construct($nam=null){
        parent::__construct($nam, $leg=0, $typ="fish");
    }

    function eat($prey){
        if (gettype($prey)=="object" && $prey->type=="fish"){
            echo "$this->name ate a fish named $prey->name.\n";
        }
        else{
            echo "$this->name: It's not worth my time.\n";
            $this->frenzy=false;
        }
    }

}