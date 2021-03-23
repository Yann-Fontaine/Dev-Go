<?php
    require_once("AWeapon.php");
    class PowerFist extends AWeapon{

    function __construct(){
        parent::__construct($nam="Power Fist", $apcos=8, $damag=50);
        $this->melee=true;
    }
    
    function attack(){
        echo "SBAM\n";
    }

    }