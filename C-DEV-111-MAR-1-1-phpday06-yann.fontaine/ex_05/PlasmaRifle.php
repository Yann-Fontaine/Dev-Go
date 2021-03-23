<?php
    include_once("AWeapon.php");
    class PlasmaRifle extends AWeapon{

        static protected $count=0;

    function __construct(){
        parent::__construct($nam="Plasma Rifle", $apcos=5, $damag=21);
        $this->melee=false;
        PlasmaRifle::$count++;
    }

    function attack(){
        echo "PIOU\n";
    }

    }