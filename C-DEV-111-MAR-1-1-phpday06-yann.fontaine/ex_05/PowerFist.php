<?php
    include_once("AWeapon");
    class PowerFist extends AWeapon{

        static protected $count=0;

    function __construct(){
        parent::__construct($nam="Power Fist", $apcos=8, $damag=50);
        $this->melee=true;
        PowerFist::$count++;
    }
    
    function attack(){
        echo "SBAM\n";
    }

    }