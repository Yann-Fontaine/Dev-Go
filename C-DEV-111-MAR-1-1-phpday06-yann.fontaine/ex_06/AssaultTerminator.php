<?php
include_once("ASpaceMarine.php");
class AssaultTerminator extends SpaceMarine{
    
    function __construct($nam){
        parent::__construct($nam, $h=150, $a=30);
        $nam=$this->name;
        echo "$this->name has teleported from space.\n";
        $this->equip(PowerFist);
    }

    function receiveDamage($hurt){
        if (gettype($hurt)=="integer"){
            if($hurt>=4){
            $this->hp-=($hurt-3);
        }
            if ($this->hp<=0){
                $this->dead=true;
                echo "BOUUUMMMM ! $this->name has exploded.\n";
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