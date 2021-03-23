<?php
    require_once("AWeapon.php");
    class PlasmaRifle extends AWeapon{

    function __construct(){
        parent::__construct($nam="Plasma Rifle", $apcos=5, $damag=21);
        $this->melee=false;
    }

    function attack(){
        echo "PIOU\n";
    }

    }