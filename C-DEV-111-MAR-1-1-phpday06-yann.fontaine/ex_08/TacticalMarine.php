<?php
    include_once("ASpaceMarine.php");
class TacticalMarine extends SpaceMarine{

    function __construct(){
        parent::__construct($nam, $h=100, $a=20);
        $nam=$this->name;
        echo "$this->name on duty.\n";
        $this->equip(PlasmaRifle);
    }

    function receiveDamage($hurt){
        if (gettype($hurt)=="integer"){
            $this->hp-=$hurt;
            if ($this->hp<=0){
                $this->dead=true;
                echo "$this->name the Tactical Marine has fallen !\n";
            }
        }
    }

    function recoverAP(){
        $this->dead();
        $this->ap+=12;
        if ($this->ap >=50){
            $this->ap=50;
        }
    }

}